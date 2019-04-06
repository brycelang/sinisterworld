<!DOCTYPE html>
<html lang="{snippet:language}">
<head>
<title>{snippet:title}</title>
<meta charset="{snippet:charset}" />
<meta name="description" content="{snippet:description}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
{snippet:head_tags}
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
			<link href="css/main/detail-2.css" rel="stylesheet">
			

      <link rel="stylesheet" href="{snippet:template_path}css/framework.min.css" />
<link rel="stylesheet" href="{snippet:template_path}css/app.min.css" />
      
{snippet:style}
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


         <style>

          </style>
			
</head>
<body style="background-image: url(&quot;img/background.jpg&quot;);" img="" background.jpg");"="">
<div id="page" class="twelve-eighty">

  <header id="header" class="row nowrap center">

    <div class="col-xs-auto" style="      font-family: MyWebFont;">
      <a class="logotype" href="<?php echo document::href_ilink(''); ?>">
        <img src="<?php echo WS_DIR_IMAGES; ?>logotype.png" style="max-width: 250px; max-height: 60px;" alt="<?php echo settings::get('store_name'); ?>" title="<?php echo settings::get('store_name'); ?>" />
        
      </a>
    </div>
  

    <div class="col-xs-auto text-center hidden-xs">
       

    </div>

    <div class="col-xs-auto text-right">
      <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_cart.inc.php'); ?>
    </div>
  </header>

  <?php include vmod::check(FS_DIR_HTTP_ROOT . WS_DIR_BOXES . 'box_site_menu.inc.php'); ?>

  <div id="main">
   
    {snippet:content}

    
  </div>


</div>

<a id="scroll-up" href="#">
  <?php echo functions::draw_fonticon('fa-chevron-circle-up fa-3x', 'style="color: #000;"'); ?>
</a>

{snippet:foot_tags}
<script src="{snippet:template_path}js/app.min.js"></script>
<script src="{snippet:template_path}js/app.min.js"></script>

<script> $( "div#view-full-page" ).css( "display", "none" );


</script>


{snippet:javascript}
</body>
</html>