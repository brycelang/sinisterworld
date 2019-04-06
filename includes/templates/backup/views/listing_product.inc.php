
<style>
  html{background: none;}
      					button#red{
							border-color: rgb(87, 7, 0);
							background-color: rgb(87, 7, 0);
							background-image: url(../../img/title/shinystonered.jpg);
							BORDER-RIGHT: #570700 3pt outset;
							BORDER-TOP: #570700 3pt outset;
							BORDER-LEFT: #570700 3pt outset;
							BORDER-BOTTOM: #570700 3pt outset;
							FONT-SIZE: 17px;
              FONT-FAMILY: Arial,Helvetica,sans-serif;
              color:white
					}
					button#red:hover{
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
<?php if ($listing_type == 'column') { ?>
  <div class="col-xs-6 col-sm-4 col-md-3">
    <div class="product column hover-light" data-id="<?php echo $product_id; ?>" data-name="<?php echo htmlspecialchars($name); ?>" data-price="<?php echo currency::format_raw($campaign_price ? $campaign_price : $regular_price); ?>">
      <a class="link"<?php echo !empty(document::$settings['product_modal_window']) ? ' data-toggle="lightbox" data-require-window-width="768"' : ''; ?> href="<?php echo htmlspecialchars($link) ?>">
        <div class="image-wrapper">
          <img class="image img-responsive" src="<?php echo htmlspecialchars($image['thumbnail']); ?>" srcset="<?php echo htmlspecialchars($image['thumbnail']); ?> 1x, <?php echo htmlspecialchars($image['thumbnail_2x']); ?> 2x" alt="<?php echo htmlspecialchars($name); ?>" />
        </div><br>

        <div class="price-wrapper">
        <button id="red" style="width: 150px; height: 50px;" >
        <div class="name"><?php echo $name; ?>
      </div>
      <?php echo currency::format($regular_price); ?>
 
        </div></button><br>
      </a>
    </div>
  </div>
  
<?php } else if ($listing_type == 'row') { ?>
  <div class="col-xs-12">
    <div class="product hover-light" data-id="<?php echo $product_id; ?>" data-name="<?php echo htmlspecialchars($name); ?>" data-price="<?php echo currency::format_raw($campaign_price ? $campaign_price : $regular_price); ?>">
      <a class="link"<?php echo !empty(document::$settings['product_modal_window']) ? ' data-toggle="lightbox" data-require-window-width="768"' : ''; ?> href="<?php echo htmlspecialchars($link) ?>">
        <div class="image-wrapper">
          <img class="image" src="<?php echo htmlspecialchars($image['thumbnail']); ?>" srcset="<?php echo htmlspecialchars($image['thumbnail']); ?> 1x, <?php echo htmlspecialchars($image['thumbnail_2x']); ?> 2x" alt="<?php echo htmlspecialchars($name); ?>" />
        </div>
        <div class="info">
          <div class="name"><?php echo $name; ?></div>
          <p class="description"><?php echo $short_description; ?></p>
          <div class="manufacturer"><?php echo !empty($manufacturer) ? $manufacturer['name'] : '&nbsp;'; ?></div>
        </div>
        <div class="price-wrapper">
          <?php if ($campaign_price) { ?>
          <s class="regular-price"><?php echo currency::format($regular_price); ?></s> <strong class="campaign-price"><?php echo currency::format($campaign_price); ?></strong>
          <?php } else { ?>
          <span class="price"><?php echo currency::format($regular_price); ?></span>
          <?php } ?>
        </div>
      </a>
    </div>
  </div>
<?php } else trigger_error('Unknown product listing type definition ('. $listing_type .')', E_USER_WARNING); ?>