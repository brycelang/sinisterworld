<!DOCTYPE html>
<html lang="{snippet:language}">
<head>
<title>{snippet:title}</title>
<meta charset="{snippet:charset}" />
<meta name="description" content="{snippet:description}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

			<link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			<link href="css/style.css" rel="stylesheet">
			<link href="css/product.css" rel="stylesheet">
			<link href="css/main.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="{snippet:template_path}css/framework.min.css" />
<link rel="stylesheet" href="{snippet:template_path}css/app.min.css" />
<link rel="stylesheet" href="{snippet:template_path}css/checkout.min.css" />
{snippet:head_tags}
{snippet:style}

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
							text-decoration: none; color: white;
          }
          h5{
            font-family: 'Gotham Pro','Helvetica Neue',Helvetica,Arial,sans-serif;
    font-style: normal;     font-size: 14px;     font-weight: 700;
    text-transform: uppercase;     text-decoration: none;
    color: #11873b;"
          }
          </style>
</head>
<body style="background-image: url(&quot;img/background.jpg&quot;);" img="" background.jpg");"=""><div id="header-wrapper">
  <header id="header" class="twelve-eighty">

    <a class="logotype" href="<?php echo document::href_ilink(''); ?>">
      <img src="<?php echo WS_DIR_IMAGES; ?>logotype.png" style="max-width: 250px; max-height: 60px;" alt="<?php echo settings::get('store_name'); ?>" title="<?php echo settings::get('store_name'); ?>" />
    </a>

  
  </header>
</div>


<div id="page" class="shadow">
  <div id="main" style="  display: inline;">
	<center>
		{snippet:content}
		</center>
  </div>
</div>


{snippet:foot_tags}
<script src="{snippet:template_path}js/app.min.js"></script>
{snippet:javascript}
</body>
</html>