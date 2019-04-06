

<main id="content">


  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_manufacturer_logotypes.inc.php'); ?>

  <ul class="nav nav-justified nav-tabs">
    <!-- <?php if ($display_campaign_products = (settings::get('box_campaign_products_num_items') && database::num_rows(functions::catalog_products_query(array('campaign' => true, 'limit' => 1)))) ? true : false) { ?><li><a href="#campaign-products" data-toggle="tab"><?php echo language::translate('title_campaign_products', 'Campaign Products'); ?></a></li><?php } ?>
    <li><a href="#popular-products" data-toggle="tab"><?php echo language::translate('title_popular_products', 'Popular Products'); ?></a></li>
    <li><a href="#latest-products" data-toggle="tab"><?php echo language::translate('title_latest_products', 'Latest Products'); ?></a></li> -->
  </ul>


    <center>
    <div class="containerb">
    <div class="col-lg-3">

</div>

      <div class="col-lg-9">
    <img class="widescroll-top" src="img/scroll/backdrop_765_top.gif" alt="" width="765" height="50">
		<div class="widescroll">
<div class="widescroll-bgimg">
<div class="widescroll-content">

  <div class="tab-content">
    <?php if ($display_campaign_products) { ?>
    <div class="tab-pane fade in" id="campaign-products">
      <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_campaign_products.inc.php'); ?>
    </div>
    <?php } ?>

    <div class="tab-pane fade in" id="popular-products">
      <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_popular_products.inc.php'); ?>
    </div>

<br>
<br><br><br><br><br>
<br>
<br><br><br><br><br><br>
<br><br><br><br><br>
</div>
<div class="clear"></div>
</div>
</div>
</div>
    </div>
    </div>
    <img class="widescroll-bottom" src="img/scroll/scroll457_bottom.gif" alt="" width="765" height="50">

  </div>
    
    </center>
  </div>

</main>
