<html>
    <div class="product-container">
        <div class="product-image-container">
        <img class="product-image"
            src="<?php echo $product['image']; ?>">
        </div> 
        <div class="product-name limit-text-to-2-lines">
        <?php echo $product['name']; ?>
        </div>
        <div class="product-rating-container">
        <img class="product-rating-stars"
            src="images/ratings/rating-<?php echo $product['rating']['stars'] * 10; ?>.png">
        <div class="product-rating-count link-primary">
            <?php echo $product['rating']['count']; ?>
        </div>
        </div>
        <div class="product-price">
        $<?php echo number_format($product['priceCents'] / 100, 2); ?>
        </div>
        <div class="product-spacer"></div>
        <div class="added-to-cart">
        <img src="images/icons/checkmark.png">
        Added
        </div>
        <button 
        class="add-to-cart-button button-primary js-add-to-cart-button"
        data-product-id="<?php echo $product['id']; ?>">
        Add to Cart
        </button>
    </div>
</html>