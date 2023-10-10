<!-- New-books -->
<?php
shuffle($book_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['new_books_submit'])) {
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['id']);
    }
}
?>
<section id="new-books">
    <div class="contain">
        <h4 class="font-rubik font-size-20">New Books</h4>
        <hr>

        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach ($book_shuffle as $item){?>
                <div class="item py-2">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?id=%s', 'product.php',  $item['id']); ?>"><img src="<?php echo $item['img']?>" alt="product1" class="img-fluid"></a>
                        <br>
                        <div class="text-center">
                            <h5><?php echo $item['name']?></h5>
                            <div class="price py-2">
                                <span>$<?php echo $item['price']?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['id'], $Cart->getCartId($book->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="new_books_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } //closing function ?>
        </div>
        <!-- !owl carousel -->


    </div>
</section>
<!-- New-books -->
