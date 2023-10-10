<!-- Shopping cart section  -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteWish($_POST['id']);
    }

    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['id'], 'cart', 'wishlist');
    }
}
?>

<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Wishlist</h5>

        <!--  shopping cart items   -->
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($book->getData('wishlist') as $item) :
                    $cart = $book->getProduct($item['id']);
                    $subTotal[] = array_map(function ($item){
                        ?>
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['img'] ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['name'] ?? "Unknown"; ?></h5>
                                <small>by <?php echo $item['author'] ?? "000"; ?></small>
                                <!-- book qty -->
                                <div class="qty d-flex pt-2">

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['id'] ?? 0; ?>" name="id">
                                        <button type="submit" name="delete-cart-submit" class=" btn btn-danger">Delete</button>
                                    </form>

                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['id'] ?? 0; ?>" name="id">
                                        <button type="submit" name="cart-submit" class=" btn btn-light">Add to Cart</button>
                                    </form>


                                </div>
                                <!-- !book qty -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    $<span class="book_price" data-id="<?php echo $item['id'] ?? '0'; ?>"><?php echo $item['price'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- !cart item -->
                        <?php
                        return $item['price'];
                    }, $cart); // closing array_map function
                endforeach;
                ?>
            </div>
        </div>
        <!--  !shopping cart items   -->
    </div>
</section>
<!-- !Shopping cart section  -->