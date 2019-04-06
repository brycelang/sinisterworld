<?php

class pm_paypal {
 
  public $id = __CLASS__;
  public $name = 'PayPal Standard';
  public $description = '';
  public $author = 'Arshid';
  public $version = '1.1.2';
  public $support_link = 'http://ciphercoin.com/contact';
  public $website = 'http://ciphercoin.com';
  public $priority = 1;

  public function __construct() {
  }

  public function options($items, $subtotal, $tax, $currency_code, $customer) {

    if (empty($this->settings['status'])) return;

    return array(
      'title' => ' PayPal',
      'options' => array(
        array(
          'id' => 'paypal',
          'icon' => $this->settings['icon'],
          'name' => 'Checkout with PayPal',
          'description' => '',
          'fields' => '',
          'cost' => 0,
          'tax_class_id' => 0,
          'confirm' => 'Pay Now',
        ),
      )
    );
  }

    public function pre_check() {
    }

    public function transfer( $order ) {

      $order->save();

      $test_payment ='true';
      if (empty($this->settings['test_payment'])) 
                  $test_payment = 'false';

      
      $fields = array(
        'business'       => $this->settings['paypl_email'],
        'cancel_return'  => document::ilink('checkout'),
        'return'         => document::ilink('order_process'),
        'notify_url'     => document::link(WS_DIR_EXT . 'paypal/paypal.php', array('order_uid'     => $order->data['uid'], 'test_payment' => $test_payment )),
        'cmd'            => '_cart',
        'upload'         => '1',
        'rm'             => '2',
        'currency_code'  => $order->data['currency_code']
      );

      $item_no = 1;
      foreach ($order->data['items'] as $item) {
        $fields['item_name_'.$item_no] = $item['name'];
        $fields['item_number_'.$item_no] = $item['product_id'] . (!empty($item['option_id']) ? ':'.$item['product_id'] : '');
        $fields['quantity_'.$item_no] = $item['quantity'];
        $fields['amount_'.$item_no] = currency::format_raw($item['price'], $order->data['currency_code'], $order->data['currency_value']);
        $fields['tax_'.$item_no] = currency::format_raw($item['tax'], $order->data['currency_code'], $order->data['currency_value']);
        $item_no++;
      }
      
      foreach($order->data['order_total'] as $other){
          if ( $other['module_id'] != 'ot_shipping_fee') continue;
          
          $fields['shipping_1']  = currency::format_raw($other['value'], $order->data['currency_code'], $order->data['currency_value']);
          $fields['tax_1']       = $fields['tax_1'] + currency::format_raw($other['tax'], $order->data['currency_code'], $order->data['currency_value']);
      }

      $url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
      
      if (empty($this->settings['test_payment']))
        $url = 'https://www.paypal.com/cgi-bin/webscr';
   
      return array(
        'action' => $url,
        'method' => 'post',
        'fields' => $fields,
      );
    }


    /**
     * Verify order 
     **/
    public function verify( $order ) {
      
      return array(
        'errors' => ''
      );
    }

    public function after_process() {
    }

    function settings() {
      return array(
        array(
          'key' => 'status',
          'default_value' => '1',
          'title' => language::translate(__CLASS__.':title_status', 'Status'),
          'description' => language::translate(__CLASS__.':description_status', 'Enables or disables the module.'),
          'function' => 'toggle("e/d")',
        ),
         array(
          'key' => 'test_payment',
          'default_value' => '0',
          'title' => language::translate(__CLASS__.':title_test_payment','Test Payment'),
          'description' => language::translate(__CLASS__.':description_test_payment', 'Enables Test Payment'),
          'function' => 'toggle("e/d")',
        ),

        array(
          'key' => 'icon',
          'default_value' => '/ext/paypal/paypal.jpg',
          'title' => language::translate(__CLASS__.':title_icon', 'Icon'),
          'description' => language::translate(__CLASS__.':description_icon', 'Web path of the icon to be displayed.'),
          'function' => 'input()',
        ),  

         array(
          'key' => 'paypl_email',
          'default_value' => '',
          'title' => language::translate(__CLASS__.':title_paypl_email', 'Email'),
          'description' => language::translate(__CLASS__.':description_icon', 'ret'),
          'function' => 'input()',
        ),
        
      );
    }

    public function install() {}

    public function uninstall() {}
  }
