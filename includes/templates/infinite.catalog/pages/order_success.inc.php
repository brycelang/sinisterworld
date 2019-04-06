<main id="content">
<div class="containerb">
      <div class="row">
        
    <div class="col-lg-3">
      <br>
    <aside style="">

<fieldset class="menu" style=""><legend>  <img src="/img/gamehelp.gif"/>Knowledge 
Base</legend> 
<ul style="text-align: left;">
  <li class="i-answer"><a href="kbase/index.html">Knowledge Base Home</a></li>
<li class="i-started"><a href="kbase/viewarticle14da.html?ref=main&amp;article_id=2058">Getting started</a></li>


<li class="i-rules"><a href="kbase/viewcategory8e26.html?ref=main&amp;cat_id=823">Rules</a></li>
<li class="i-manual"><a href="kbase/viewcategory44ca.html?ref=main&amp;cat_id=775">Manual</a></li>
<li class="i-quest"><a href="loginapplet/loginapplete0ec.html?mod=questhelp&amp;dest=index.ws">QuestHelp</a></li>
<li class="i-parents"><a href="kbase/viewcategoryb995.html?ref=main&amp;cat_id=884">Parents' Guide</a></li>
<li class="i-safety"><a href="kbase/viewcategoryabc1.html?ref=main&amp;cat_id=827">Safety &amp; Security</a></li>
<li class="i-support"><a href="kbase/viewcategorydf1c.html?ref=main&amp;cat_id=9">Customer Support</a></li>
<li class="i-comment"><a href="kbase/viewarticle79b3.html?ref=main&amp;article_id=2509">Comment on our service</a></li>

<li class="i-bug"><a href="kbase/viewcategoryb6d8.html?ref=main&amp;cat_id=139">Report a bug/fault</a></li> </ul>
<!-- <a class="twitter-timeline" data-chrome="nofooter noscrollbar noheader noborders" data-lang="en" data-width="300" data-height="400" data-dnt="true" data-theme="dark" data-link-color="rgb(153,50,204);" href="https://twitter.com/brycelng?ref_src=twsrc%5Etfw">News</a><br> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  -->

</fieldset>
</aside>


</div>
      <div class="col-lg-9">
    <img class="widescroll-top" src="img/scroll/backdrop_765_top.gif" alt="" width="765" height="50">
		<div class="widescroll">
<div class="widescroll-bgimg">
<div class="widescroll-content">


  {snippet:notices}

<div id="box-order-success" class="box text-center">

  <h1 class="title"><?php echo strtr(language::translate('title_order_completed', 'Your order #%order_id is successfully completed!'), array('%order_id' => $order['id'])); ?></h1>

  <p><?php echo language::translate('description_order_completed', 'Thank you for your purchase. An order confirmation email has been sent. We will process your order shortly.'); ?></p>

  <ul class="items list-unstyled">
    <?php foreach ($order['items'] as $item) { ?>
    <li class="item" data-id="<?php echo $item['product_id']; ?>" data-sku="<?php echo $item['sku']; ?>" data-name="<?php echo htmlspecialchars($item['name']); ?>" data-price="<?php echo currency::format_raw($item['price'], $order['currency_code'], $order['currency_value']); ?>" data-quantity="<?php echo currency::format_raw($item['quantity']); ?>">
      <?php echo $item['quantity']; ?> x <?php echo $item['name']; ?>
    </li>
    <?php } ?>
  </ul>

  <p><strong><?php echo language::translate('title_order_total', 'Order Total'); ?></strong>: <?php echo currency::format($order['payment_due'], false, $order['currency_code'], $order['currency_value']); ?>

  <p><a href="<?php echo htmlspecialchars($printable_link); ?>" target="_blank"><?php echo language::translate('description_click_printable_copy', 'Click here for a printable copy'); ?></a></p>

  <?php if ($payment_receipt) echo $payment_receipt; ?>

  <?php if ($order_success_modules_output) echo $order_success_modules_output; ?>
</div>
</div>
</div>
</div>
<img class="widescroll-bottom" src="img/scroll/scroll457_bottom.gif" alt="" width="765" height="50">

    </div>
    
    </div>

  </div>
  </div>
  </div>

</main>
