
   
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
<main id="content">
  {snippet:notices}

  <div id="box-regional-settings">
    <h1 class="title"><?php echo language::translate('title_regional_settings', 'Regional Settings'); ?></h1>

    <?php echo functions::form_draw_form_begin('region_form', 'post', document::ilink(), false, 'style="max-width: 480px;"'); ?>

      <div class="row half-gutter">
        <?php if (count(language::$languages) > 1) { ?>
        <div class="form-group col-md-6">
          <label><?php echo language::translate('title_language', 'Language'); ?></label>
          <?php echo functions::form_draw_languages_list('language_code', language::$selected['code']); ?>
        </div>
        <?php } ?>

        <?php if (count(currency::$currencies) > 1) { ?>
        <div class="form-group col-md-6">
          <label><?php echo language::translate('title_currency', 'Currency'); ?></label>
          <?php echo functions::form_draw_currencies_list('currency_code', currency::$selected['code']); ?>
        </div>
        <?php } ?>

        <div class="form-group col-md-6">
          <label><?php echo language::translate('title_country', 'Country'); ?></label>
          <?php echo functions::form_draw_countries_list('country_code', customer::$data['country_code']); ?>
        </div>

        <div class="form-group col-md-6">
          <label><?php echo language::translate('title_zone_state_province', 'Zone/State/Province'); ?></label>
          <?php echo functions::form_draw_zones_list(customer::$data['country_code'], 'zone_code', customer::$data['zone_code']); ?>
        </div>

        <div class="form-group col-md-6">
          <label><?php echo language::translate('title_display_prices', 'Display Prices'); ?></label>
          <div class="radio">
            <label><?php echo functions::form_draw_radio_button('display_prices_including_tax', 0, isset(customer::$data['display_prices_including_tax']) ? (int)customer::$data['display_prices_including_tax'] : (int)settings::get('default_display_prices_including_tax')); ?> <?php echo language::translate('title_excl_tax', 'Excl. Tax'); ?></label>
            <label style="margin-left: 1em;"><?php echo functions::form_draw_radio_button('display_prices_including_tax', 1, isset(customer::$data['display_prices_including_tax']) ? (int)customer::$data['display_prices_including_tax'] : (int)settings::get('default_display_prices_including_tax')); ?> <?php echo language::translate('title_incl_tax', 'Incl. Tax'); ?></label>
          </div>
        </div>
      </div>

      <p class="btn-group btn-block">
        <?php echo functions::form_draw_button('save', language::translate('title_save', 'Save')); ?>
      </p>

    <?php echo functions::form_draw_form_end(); ?>
  </div>
</main>

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


<script>
  if ($('#regional-settings .title').parents('.modal')) {
    $('#regional-settings .title').closest('.modal').find('.modal-title').text($('#regional-settings .title').text());
    $('#regional-settings .title').remove();
  }

  $('select[name="country_code"]').change(function(){
    $('body').css('cursor', 'wait');
    $.ajax({
      url: '<?php echo document::ilink('ajax/zones.json'); ?>?country_code=' + $(this).val(),
      type: 'get',
      cache: true,
      async: true,
      dataType: 'json',
      error: function(jqXHR, textStatus, errorThrown) {
        if (console) console.warn(errorThrown.message);
      },
      success: function(data) {
        $('select[name="zone_code"]').html('');
        if ($('select[name="zone_code"]').attr('disabled')) $('select[name="zone_code"]').removeAttr('disabled');
        if (data) {
          $.each(data, function(i, zone) {
            $('select[name="zone_code"]').append('<option value="'+ zone.code +'">'+ zone.name +'</option>');
          });
        } else {
          $('select[name="zone_code"]').attr('disabled', 'disabled');
        }
      },
      complete: function() {
        $('body').css('cursor', 'auto');
      }
    });
  });
</script>