
<!-- Shopping cart section  -->
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete-cart-submit'])) {
        $deletedrecord = $Cart->deleteCart($_POST['id']);
    }

    // save for later
        if (isset($_POST['wishlist-submit'])){
            $Cart->saveForLater($_POST['id']);
        }
    }

?>

<!-- start #main-site -->
<main id="main-site">

    <section id="cart" class="py-3">
        <div class="container-fluid w-75">
            <h5 class="font-baloo font-size-20">Shopping Cart</h5>

            <!--  shopping cart items   -->
            <div class="row">
                <div class="col-sm-9">
                    <?php
                    foreach ($book->getData('cart') as $item):
                        $cart = $book->getProduct($item['id']);
                       $subTotal[]= array_map(function ($item){
                            ?>
                    <!-- cart item -->
                    <div class="row border-top py-3 mt-3">
                        <div class="col-sm-2">
                            <img src="<?php echo $item['img']?>" style="height: 150px;" alt="cart1" class="img-fluid">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="font-baloo font-size-20"><?php echo $item['name']?></h5>
                            <small><?php echo $item['author']?></small>

                            <!-- product qty -->
                            <div class="qty d-flex pt-3 ">
                                <form method="post">
                                    <input type="hidden" value="<?php echo $item['id'] ?? 0; ?>" name="id">
                                    <button type="submit" name="delete-cart-submit"  class=" btn btn-danger ">Delete</button>
                                </form>
                                <form method="post">
                                    <input type="hidden" value="<?php echo $item['id'] ?? 0; ?>" name="id">
                                    <button type="submit" name="wishlist-submit" class=" btn btn-light">Save for Later</button>
                                </form>
                            </div>
                            <!-- !product qty -->

                        </div>

                        <div class="  col-sm-2 text-right">
                            <div class="font-size-20 text-danger font-baloo">
                                $<span class="product_price"><?php echo $item['price']?></span>
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
                <!-- subtotal section-->
                <div class="col-sm-3">
                    <div class="sub-total border text-center mt-2">
                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                        <div class="border-top py-4">
                            <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                            <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                        </div>
                    </div>
                </div>
                <!-- !subtotal section-->
            </div>
            <!--  !shopping cart items   -->
        </div>
    </section>
    <!-- !Shopping cart section  -->
</main>
<!-- !start #main-site -->
