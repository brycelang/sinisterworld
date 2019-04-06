
<div id="cart">
  <a href="<?php echo htmlspecialchars($link); ?>">
    <div class="details">
      <span class="quantity"> <span class="formatted_value"><?php echo $cart_total; ?></span>
    </div>
    <img class="image" src="{snippet:template_path}images/<?php echo !empty($num_items) ? 'cart_filled.svg' : 'cart.svg'; ?>" alt="" />
  </a>
</div>