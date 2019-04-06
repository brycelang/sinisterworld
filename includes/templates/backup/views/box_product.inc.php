<style>
      					button#red{
							border-color: rgb(87, 7, 0);
							background-color: rgb(87, 7, 0);
							background-image: url(../../img/title/shinystonered.jpg);
							BORDER-RIGHT: #570700 3pt outset;
							BORDER-TOP: #570700 3pt outset;
							BORDER-LEFT: #570700 3pt outset;
							BORDER-BOTTOM: #570700 3pt outset;
							FONT-SIZE: 13px;
							FONT-FAMILY: Arial,Helvetica,sans-serif;
					}
					button#red:hover{
							border-color: rgb(167, 7, 0);
							background-color: rgb(167, 7, 0);
          }
         .checkbox{
							border-color: rgb(87, 7, 0);
							background-color: rgb(87, 7, 0);
							background-image: url(../../img/title/shinystonered.jpg);
							BORDER-RIGHT: #570700 3pt outset;
							BORDER-TOP: #570700 3pt outset;
							BORDER-LEFT: #570700 3pt outset;
							BORDER-BOTTOM: #570700 3pt outset;
              FONT-SIZE: 13px;
              width:50px;
							FONT-FAMILY: Arial,Helvetica,sans-serif;
					}
					.checkbox:hover{
							border-color: rgb(167, 7, 0);
							background-color: rgb(167, 7, 0);
					}
					button#grey{
						BORDER-RIGHT: #373737 3pt outset;
						BORDER-TOP: #373737 3pt outset;
						BORDER-LEFT: #373737 3pt outset;
						BORDER-BOTTOM: #373737 3pt outset;
						background-image: url(../../img/stoneback.gif);
						background-color: rgb(71, 71, 71);
						FONT-SIZE: 13px;
						FONT-FAMILY: Arial,Helvetica,sans-serif;
					}
					button#grey:hover{
						border-color: rgb(71, 71, 71);
						background-color: rgb(71, 71, 71);
					}
					a#nav{
							text-decoration: none; color: black;
          }
          h5{
            font-family: 'Gotham Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
    font-style: normal;     font-size: 14px;     font-weight: 700;
    text-transform: uppercase;     text-decoration: none;
    color: #11873b;"
          }
          </style>

      <center>
    <div class="containerb">
    <div class="col-lg-3">

</div>

      <div class="col-lg-9">
    <img class="widescroll-top" src="img/scroll/backdrop_765_top.gif" alt="" width="765" height="50">
    
		<div class="widescroll">
      
<div class="widescroll-bgimg">
<div class="widescroll-content">
<div class="col-sm-6 col-md-4">
 <h1 class="title"> <?php echo $name; ?></h1>
 <div class="price-wrapper">
        <?php if ($campaign_price) { ?>
        <del class="regular-price"><?php echo currency::format($regular_price); ?></del> <strong class="campaign-price"><?php echo currency::format($campaign_price); ?></strong>
        <?php } else { ?>
        <span class="price"><?php echo currency::format($regular_price); ?></span>
        <?php } ?>
      </div>

      <?php if ($short_description) { ?>
      <p class="short-description">
        <?php echo $short_description; ?>
      </p>
      <?php } ?>

      <?php if (!empty($manufacturer)) { ?>
      <div class="manufacturer">
        <a href="<?php echo htmlspecialchars($manufacturer['link']); ?>">
          <?php if ($manufacturer['image']) { ?>
          <img src="<?php echo functions::image_thumbnail($manufacturer['image']['thumbnail'], 0, 48); ?>" srcset="<?php echo htmlspecialchars($manufacturer['image']['thumbnail']); ?> 1x, <?php echo htmlspecialchars($manufacturer['image']['thumbnail_2x']); ?> 2x" alt="<?php echo htmlspecialchars($manufacturer['name']); ?>" title="<?php echo htmlspecialchars($manufacturer['name']); ?>" />
          <?php } else { ?>
          <h3><?php echo $manufacturer['name']; ?></h3>
          <?php } ?>
        </a>
      </div>
      <?php } ?>
      
    </div>
<section class="product_price">
    <div class="col-sm-6 col-md-4">



     

      <?php if ($cheapest_shipping_fee !== null) { ?>
      <div class="cheapest-shipping" style="margin: 1em 0;">
        <?php echo functions::draw_fonticon('fa-truck'); ?> <?php echo strtr(language::translate('text_cheapest_shipping_from_price', 'Cheapest shipping from <strong class="value">%price</strong>'), array('%price' => currency::format($cheapest_shipping_fee))); ?>
      </div>
      <?php } ?>

      <?php if ($sku || $mpn || $gtin) { ?>
      <div class="codes" style="margin: 1em 0;">
        <?php if ($sku) { ?>
        <div class="sku">
          <?php echo language::translate('title_sku', 'SKU'); ?>:
          <span class="value"><?php echo $sku; ?></span>
        </div>
        <?php } ?>

        <?php if ($mpn) { ?>
        <div class="mpn">
          <?php echo language::translate('title_mpn', 'MPN'); ?>:
          <span class="value"><?php echo $mpn; ?></span>
        </div>
        <?php } ?>

        <?php if ($gtin) { ?>
        <div class="gtin">
          <?php echo language::translate('title_gtin', 'GTIN'); ?>:
          <span class="value"><?php echo $gtin; ?></span>
        </div>
        <?php } ?>
      </div>
      <?php } ?>

      <div class="stock-status" style="margin: 1em 0;">
       <?php if ($quantity > 0) { ?>
        <!-- <div class="stock-available">
          <?php echo language::translate('title_stock_status', 'Stock Status'); ?>:
          <span class="value"><?php echo $stock_status; ?></span>
        </div> -->
 
       <?php } else { ?>
        <?php if ($sold_out_status) { ?>
          <div class="<?php echo $orderable ? 'stock-partly-available' : 'stock-unavailable'; ?>">
            <?php echo language::translate('title_stock_status', 'Stock Status'); ?>:
            <span class="value"><?php echo $sold_out_status; ?></span>
          </div>
        <?php } else { ?>
          <div class="stock-unavailable">
            <?php echo language::translate('title_stock_status', 'Stock Status'); ?>:
            <span class="value"><?php echo language::translate('title_sold_out', 'Sold Out'); ?></span>
          </div>
        <?php } ?>
       <?php } ?>
      </div>

      <hr />


        <?php echo functions::form_draw_form_end(); ?>
      </div>
  </section>
<style>span.spoiler_top { color: black; }div.spoiler, div.spoiler_show { background: white; color: white; border: 1px dashed black; padding: 4px; }div.spoiler_show { color: black;}a.spoiler_link { display: none; }</style><script type="text/javascript">function install_spoilers() {if(!document.createElement) return;try {div_list = document.getElementsByTagName('div');for(i=0; div_list.length>i; i++) {if(div_list[i].className=='spoiler') {spoiler=div_list[i];if(spoiler) {spoiler_top=spoiler.firstChild;var spoiler_note, spoiler_link;if(spoiler_top) {for(j=0; j<spoiler_top.childNodes.length; j++) {if(spoiler_top.childNodes.item(j).className=='spoiler_note') spoiler_note=spoiler_top.childNodes.item(j);if(spoiler_top.childNodes.item(j).className=='spoiler_link') spoiler_link=spoiler_top.childNodes.item(j);}}if(spoiler_note && spoiler_note.style && spoiler_link && spoiler_link.style) {spoiler_note.style.display='none';spoiler_link.style.display='inline';install_click(spoiler_link, spoiler);}}}}} catch(er) {}}function install_click(link, spoiler) {link.onclick=function() {spoiler.className='spoiler_show';link.style.display='none';};}if(window.addEventListener) window.addEventListener('load', install_spoilers, true);else if(window.attachEvent) window.attachEvent('onload', install_spoilers);</script>
<br>
			<center><div id="box-product" class="box" style="max-width: 980px;" data-id="<?php echo $product_id; ?>" data-name="<?php echo htmlspecialchars($name); ?>" data-price="<?php echo currency::format_raw($campaign_price ? $campaign_price : $regular_price); ?>">
  <div class="row">
  <div class="col-sm-3"></div>
    <div class="col-sm-6">
      <div class="image-wrapper" id="red">
        <a href="<?php echo htmlspecialchars($image['original']); ?>" data-toggle="lightbox" data-gallery="product">
          <img class="img-responsive" src="<?php echo htmlspecialchars($image['thumbnail']); ?>" srcset="<?php echo htmlspecialchars($image['thumbnail']); ?> 1x, <?php echo htmlspecialchars($image['thumbnail_2x']); ?> 2x" alt="" title="<?php echo htmlspecialchars($name); ?>" />
        </a>
      </div>
      <div class="col-sm-3"></div>
      <br>      <?php if ($extra_images) { ?>
      <div class="extra-images row half-gutter">
        <?php foreach ($extra_images as $image) { ?>
        <div class="col-xs-4">
          <div class="extra-image">
            <a href="<?php echo htmlspecialchars($image['original']); ?>" data-toggle="lightbox" data-gallery="product">
              <img class="img-responsive" src="<?php echo htmlspecialchars($image['thumbnail']); ?>" srcset="<?php echo htmlspecialchars($image['thumbnail']); ?> 1x, <?php echo htmlspecialchars($image['thumbnail_2x']); ?> 2x" alt="" title="<?php echo htmlspecialchars($name); ?>" />
            </a>
          </div>
        </div>
        <?php } ?>
      </div>
      <?php } ?>
    </div></center>


<a id="nav" href="#"><button id="red" >BUY NOW</button></a>
<br>
<br>
<h2>Drawn, sewn and screen-printed in Orlando, FL by Kadian Meikle.</h2>
<br>

The lonely old guy down the street from me found out I was drawing and making T-shirt’s in my garage, now he’s doing everything in his power to stop me from making a living, this shit is pathetic but welcomes to America.<br><br>
<br>
<table>
<tbody><tr>

<td style="width: 30px;"></td>
<td style="vertical-align: top; width: 300px;"><span style="font-size: 14px; display: inline;"><b>Features</b></span>

<br>
<li>
Adjustable strings<br>
</li>
<li>
 SINISTER logo<br>
</li>
<li>
Adjustable strings<br>
</li>
<li>
Adjustable strings<br>
</li>
<td style="vertical-align: top; width: 300px;"><span style="font-size: 14px; display: inline;">
  <!-- <b>Size</b> </span><br> -->
<!-- <a id="nav" href="#"><button id="grey" >XS</button></a>
<a id="nav" href="#"><button id="grey" >SM</button></a>
<a id="nav" href="#"><button id="grey" >MD</button></a>
<a id="nav" href="#"><button id="red" >LG</button></a>
<a id="nav" href="#"><button id="grey" >XL</button></a> -->

<br><br>

<div class="buy_now" style="margin: 1em 0;">
        <?php echo functions::form_draw_form_begin('buy_now_form', 'post'); ?>
        <?php echo functions::form_draw_hidden_field('product_id', $product_id); ?>

        <?php if ($options) { ?>
          <?php foreach ($options as $option) { ?>
          <div class="form-group" style="">
            <label><?php echo $option['name']; ?></label>
            <?php echo $option['description'] ? '<div>' . $option['description'] . '</div>' : ''; ?>
            <?php echo $option['values']; ?>
          </div>
          <?php } ?>
        <?php } ?>

        <?php if (!$catalog_only_mode) { ?>
        <div class="form-group">
          <label><?php echo language::translate('title_quantity', 'Quantity'); ?></label>
          <div style="display: flex">
            <div class="input-group">
              <?php echo (!empty($quantity_unit['decimals'])) ? functions::form_draw_decimal_field('quantity', isset($_POST['quantity']) ? true : 1, $quantity_unit['decimals'], 1, null) : (functions::form_draw_number_field('quantity', isset($_POST['quantity']) ? true : 1, 1)); ?>
              <?php echo !empty($quantity_unit['name']) ? '<div class="input-group-addon">'. $quantity_unit['name'] .'</div>' : ''; ?>
            </div>
            <div style="padding-left: 0.5em; white-space: nowrap;">
              <?php echo '<button class="btn btn-success" id="red" name="add_cart_product" value="true" type="submit"'. (($quantity <= 0 && !$orderable) ? ' disabled="disabled"' : '') .'>'. language::translate('title_add_to_cart', 'Add To Cart') .'</button>'; ?>
            </div>
          </div>
        </div>
        <?php } ?>
<br><br>
</td>
</tr>
</tbody></table>

     
<p align="center">
<!-- <a id="nav" href="#"><button id="grey" >Add to Cart</button></a> -->
</p>
<br>


<p align="center">
<a href="#top_of_page">Back to the top</a>
</p>
<div class="spacer">
<img src="img/kbase/scroll_spacer.gif" alt="" style="display: block; text-align: center; margin: 1em auto;">
</div>


      <div class="social-bookmarks text-center">
        <a class="link" href="#"><?php echo functions::draw_fonticon('fa-link', 'style="color: #333;"'); ?></a>
        <a class="twitter" href="<?php echo document::href_link('http://twitter.com/home/', array('status' => $name .' - '. $link)); ?>" target="_blank" title="<?php echo sprintf(language::translate('text_share_on_s', 'Share on %s'), 'Twitter'); ?>"><?php echo functions::draw_fonticon('fa-twitter-square fa-lg', 'style="color: #55acee;"'); ?></a>
        <a class="facebook" href="<?php echo document::href_link('http://www.facebook.com/sharer.php', array('u' => $link)); ?>" target="_blank" title="<?php echo sprintf(language::translate('text_share_on_s', 'Share on %s'), 'Facebook'); ?>"><?php echo functions::draw_fonticon('fa-facebook-square fa-lg', 'style="color: #3b5998;"'); ?></a>
        <a class="googleplus" href="<?php echo document::href_link('https://plus.google.com/share', array('url' => $link)); ?>" target="_blank" title="<?php echo sprintf(language::translate('text_share_on_s', 'Share on %s'), 'Google+'); ?>"><?php echo functions::draw_fonticon('fa-google-plus-square fa-lg', 'style="color: #dd4b39;"'); ?></a>
        <a class="pinterest" href="<?php echo document::href_link('http://pinterest.com/pin/create/button/', array('url' => $link)); ?>" target="_blank" title="<?php echo sprintf(language::translate('text_share_on_s', 'Share on %s'), 'Pinterest'); ?>"><?php echo functions::draw_fonticon('fa-pinterest-square fa-lg', 'style="color: #bd081c;"'); ?></a>
      </div>

</div>

<div class="clear"></div>
</div>
</div>
<img class="widescroll-bottom" src="img/scroll/scroll457_bottom.gif" alt="" width="765" height="50">

</div>
    </div>
    </div></div>
    </center>


    

    


    </div>
  </div>

  <?php if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') { ?>


  <div class="tab-content">
    <div id="description" class="tab-pane">
      <?php echo $description; ?>
    </div>

    <div id="attributes" class="tab-pane">
      <div class="attributes">
        <table class="table table-striped table-hover">
<?php
  for ($i=0; $i<count($attributes); $i++) {
    if (strpos($attributes[$i], ':') !== false) {
      @list($key, $value) = explode(':', $attributes[$i]);
      echo '  <tr>' . PHP_EOL
         . '    <td>'. trim($key) .':</td>' . PHP_EOL
         . '    <td>'. trim($value) .'</td>' . PHP_EOL
         . '  </tr>' . PHP_EOL;
    } else if (trim($attributes[$i]) != '') {
      echo '  <thead>' . PHP_EOL
         . '    <tr>' . PHP_EOL
         . '      <th colspan="2">'. $attributes[$i] .'</th>' . PHP_EOL
         . '    </tr>' . PHP_EOL
         . '  </thead>' . PHP_EOL
         . '  <tbody>' . PHP_EOL;
    } else {
      echo ' </tbody>' . PHP_EOL
         . '</table>' . PHP_EOL
         . '<table class="table table-striped table-hover">' . PHP_EOL;
    }
  }
?>
        </table>
      </div>
    </div>
  </div>
  <?php } ?>

</div>

<script>
  Number.prototype.toMoney = function() {
    var number = this;
    var decimals = <?php echo currency::$selected['decimals']; ?>;
    var decimal_point = '<?php echo language::$selected['decimal_point']; ?>';
    var thousands_sep = '<?php echo language::$selected['thousands_sep']; ?>';
    var prefix = '<?php echo currency::$selected['prefix']; ?>';
    var suffix = '<?php echo currency::$selected['suffix']; ?>';
    var sign = (number < 0) ? '-' : '';

    var i = parseInt(number = Math.abs(number).toFixed(decimals)) + '';
    if (number - i == 0) decimals = 0;

    var l = ((l = i.length) > 3) ? l % 3 : 0;
    var f = sign + prefix + (l ? i.substr(0, l) + thousands_sep : '') + i.substr(l).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep) + (decimals ? decimal_point + Math.abs(number - i).toFixed(decimals).slice(decimals) : '') + suffix;

    return f;
  }

  $('#box-product form[name=buy_now_form]').bind('input propertyChange', function(e) {

    var regular_price = <?php echo currency::format_raw($regular_price); ?>;
    var sales_price = <?php echo currency::format_raw($campaign_price ? $campaign_price : $regular_price); ?>;
    var tax = <?php echo currency::format_raw($total_tax); ?>;

    $(this).find('input[type="radio"]:checked, input[type="checkbox"]:checked').each(function(){
      if ($(this).data('price-adjust')) regular_price += $(this).data('price-adjust');
      if ($(this).data('price-adjust')) sales_price += $(this).data('price-adjust');
      if ($(this).data('tax-adjust')) tax += $(this).data('tax-adjust');
    });

    $(this).find('select option:checked').each(function(){
      if ($(this).data('price-adjust')) regular_price += $(this).data('price-adjust');
      if ($(this).data('price-adjust')) sales_price += $(this).data('price-adjust');
      if ($(this).data('tax-adjust')) tax += $(this).data('tax-adjust');
    });

    $(this).find('input[type!="radio"][type!="checkbox"]').each(function(){
      if ($(this).val() != '') {
      if ($(this).data('price-adjust')) regular_price += $(this).data('price-adjust');
      if ($(this).data('price-adjust')) sales_price += $(this).data('price-adjust');
      if ($(this).data('tax-adjust')) tax += $(this).data('tax-adjust');
      }
    });

    $('#box-product .regular-price').text(regular_price.toMoney());
    $('#box-product .campaign-price').text(sales_price.toMoney());
    $('#box-product .price').text(sales_price.toMoney());
    $('#box-product .total-tax').text(tax.toMoney());
  });

  $('#box-product[data-id="<?php echo $product_id; ?>"] .social-bookmarks .link').off().click(function(e){
    e.preventDefault();
    prompt("<?php echo language::translate('text_link_to_this_product', 'Link to this product'); ?>", '<?php echo $link; ?>');
  });
</script>
