<?php
  if (!function_exists('custom_draw_site_menu_item')) {
    function custom_draw_site_menu_item($item, $indent=0) {

      if (!empty($item['subitems'])) {
        $output = '<li class="dropdown" data-type="'. $item['type'] .'" data-id="'. $item['id'] .'">'
                . '  <a href="'. htmlspecialchars($item['link']) .'" class="dropdown-toggle" data-toggle="dropdown">'. $item['title'] .' <b class="caret"></b></a>'
                . '  <ul class="dropdown-menu">' . PHP_EOL;

        foreach ($item['subitems'] as $subitem) {
          $output .= custom_draw_site_menu_item($subitem, $indent+1);
        }

        $output .= '  </ul>' . PHP_EOL
                 . '</li>' . PHP_EOL;

      } else {
        $output = '<li data-type="'. $item['type'] .'" data-id="'. $item['id'] .'">'
                . '  <a href="'. htmlspecialchars($item['link']) .'">'. $item['title'] .'</a>'
                . '</li>' . PHP_EOL;
      }

      return $output;
    }
  }
?>
<div id="site-menu">
  <nav class="navbar">

  </nav>
</div>

<script>
  $('#site-menu .dropdown-menu [data-toggle="dropdown"]').on('click', function(e){
    $(this).closest('ul').find('.dropdown-menu:visible').hide();
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
</script>