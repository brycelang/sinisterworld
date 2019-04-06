

<main id="content">
<r>

  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_manufacturer_logotypes.inc.php'); ?>

  <ul class="nav nav-justified nav-tabs">
    <!-- <?php if ($display_campaign_products = (settings::get('box_campaign_products_num_items') && database::num_rows(functions::catalog_products_query(array('campaign' => true, 'limit' => 1)))) ? true : false) { ?><li><a href="#campaign-products" data-toggle="tab"><?php echo language::translate('title_campaign_products', 'Campaign Products'); ?></a></li><?php } ?>
    <li><a href="#popular-products" data-toggle="tab"><?php echo language::translate('title_popular_products', 'Popular Products'); ?></a></li>
    <li><a href="#latest-products" data-toggle="tab"><?php echo language::translate('title_latest_products', 'Latest Products'); ?></a></li> -->
  </ul>

	
   
    <div class="containerb">
      <div class="row">
        
    <div class="col-lg-3">
      <br>
    <aside style="">

<fieldset class="menu" style=""><legend>  <img src="/img/gamehelp.gif"/>Knowledge 
Base</legend> 
<ul style="text-align: left;">
  <li class="i-answer"><a href="/shop/">Log In ... Create an Account</a></li>
<li class="i-started"><a href="edit_account">My Account</a></li>


<li class="i-rules"><a href="kbase/viewcategory8e26.html?ref=main&amp;cat_id=823">Order History</a></li>
<li class="i-manual"><a href="kbase/viewcategory44ca.html?ref=main&amp;cat_id=775">Regional Settings</a></li>
<li class="i-quest"><a href="loginapplet/loginapplete0ec.html?mod=questhelp&amp;dest=index.ws">Contact Us</a></li>
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
<img class="widescroll-bottom" src="img/scroll/scroll457_bottom.gif" alt="" width="765" height="50">

    </div>
    
    </div>

  </div>
  </div>
  </div>

</main>
