
     
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
<aside id="sidebar">
  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_TEMPLATE . 'views/column_left.inc.php'); ?>
</aside>


<main id="content">
  {snippet:notices}
  {snippet:breadcrumbs}
<div id="box-category" class="box">

<?php if ($products) { ?>
<div class="btn-group pull-right hidden-xs">
<?php
foreach ($sort_alternatives as $key => $value) {
if ($_GET['sort'] == $key) {
  echo '<span class="btn btn-default active">'. $value .'</span>';
} else {
  echo '<a class="btn btn-default" href="'. document::href_ilink(null, array('sort' => $key), true) .'">'. $value .'</a>';
}
}
?>
</div>
<?php } ?>

<h1 class="title"><?php echo $h1_title; ?></h1>

<?php if ($_GET['page'] == 1 && trim(strip_tags($description))) { ?>
<p class="description"><?php echo $description; ?></p>
<?php } ?>

<?php if ($_GET['page'] == 1 && $subcategories) { ?>
<div class="categories row half-gutter">
  <?php foreach ($subcategories as $subcategory) echo functions::draw_listing_category($subcategory); ?>
</div>
<?php } ?>

<?php if ($products) { ?>
<div class="products row half-gutter">
  <?php foreach ($products as $product) echo functions::draw_listing_product($product, $product['listing_type'], array('category_id')); ?>
</div>
<?php } ?>

<?php echo $pagination; ?>
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