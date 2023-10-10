<!-- Special Price -->
<?php
shuffle($book_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['special_price_submit'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['id']);
    }
}
?>
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group font-baloo font-size-16">
            <button  data-filter="*" class="button-55">All genres</button>
            <button  data-filter=".Drama" class="button-55">Drama</button>
            <button  data-filter=".Horror" class="button-55">Horror</button>
            <button  data-filter=".Fantasy" class="button-55">Fantasy</button>
            <button  data-filter=".Romance" class="button-55">Romance</button>
            <button  data-filter=".Science-fiction" class="button-55">Science Fiction</button>


        </div>

        <div class="grid">
            <?php array_map(function ($item) use ($in_cart){?>
            <div class="grid-item <?php echo $item['genre']??"genre";?>">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?id=%s', 'product.php',  $item['id']); ?>"><img src="<?php echo $item['img']?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h5><?php echo $item['name']?></h5>
                            <div class="price py-2">
                                <span>$<?php echo $item['price']?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['id'], $in_cart ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="special_price_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php },$book_shuffle)?>
        </div>
    </div>
</section>
<!-- !Special Price -->