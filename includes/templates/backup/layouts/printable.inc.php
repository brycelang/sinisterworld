<!DOCTYPE html>
<html lang="{snippet:language}">
<head>
<title>{snippet:title}</title>
<meta charset="{snippet:charset}" />
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
<link rel="stylesheet" href="{snippet:template_path}css/framework.min.css" />
<link rel="stylesheet" href="{snippet:template_path}css/printable.min.css" />

{snippet:style}
</head>
<body>

<?php if (isset($_GET['media']) && $_GET['media'] == 'print') { ?>
<button name="print"><?php echo functions::draw_fonticon('fa-print'); ?> <?php echo language::translate('title_print', 'Print'); ?></button>
<?php } ?>

{snippet:content}

{snippet:foot_tags}
{snippet:javascript}
<?php if (isset($_GET['media']) && $_GET['media'] == 'print') { ?>
<script>
  $('button[name="print"]').click(function(){
    window.print();
  });
</script>
<?php } ?>
</body>
</html>