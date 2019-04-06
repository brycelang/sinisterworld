

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

  <div id="box-order-history" class="box">

<h1 class="title"><?php echo language::translate('title_order_history', 'Order History'); ?></h1>

<table class="table data-table">
  <thead>
  <tr>
    <th class="main"><?php echo language::translate('title_order', 'Order'); ?></th>
    <th class="text-center"><?php echo language::translate('title_order_status', 'Order Status'); ?></th>
    <th class="text-right"><?php echo language::translate('title_amount', 'Amount'); ?></th>
    <th class="text-right"><?php echo language::translate('title_date', 'Date'); ?></th>
    <th></th>
  </tr>
  </thead>
  <tbody>
  <?php if ($orders) foreach ($orders as $order) { ?>
  <tr>
    <td><a href="<?php echo htmlspecialchars($order['link']); ?>" class="lightbox-iframe"><?php echo language::translate('title_order', 'Order'); ?> #<?php echo $order['id']; ?></a></td>
    <td class="text-center"><?php echo $order['order_status']; ?></td>
    <td class="text-right"><?php echo $order['payment_due']; ?></td>
    <td class="text-right"><?php echo $order['date_created']; ?></td>
    <td class="text-right"><a href="<?php echo htmlspecialchars($order['link']); ?>" target="_blank"><?php echo functions::draw_fonticon('fa-print'); ?></a></td>
  </tr>
  <?php } ?>
  </tbody>
</table>

<?php echo $pagination; ?>
<br><br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br><br>
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

</div>

<img class="widescroll-bottom" src="img/scroll/scroll457_bottom.gif" alt="" width="765" height="50">

    </div>
    
    </div>

  </div>
  </div>
  </div>

  {snippet:notices}

</main>
