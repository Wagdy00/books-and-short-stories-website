<!--   product  -->
<?php

$id = $_GET['id'] ?? 1;
foreach ($book->getData() as $item) :
if ($item['id'] == $id) :



    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['product_submit'])) {
            // call method addToCart
            $Cart->addToCart($_POST['user_id'], $_POST['id']);
        }
    }
    $in_cart = $Cart->getCartId($book->getData('cart'));
    ?>
<section id="product" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <img src="<?php echo $item['img']?>" width="350px" alt="book"  class="img-fluid">
                <br>
                <br>
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo $item['id'] ?? '1'; ?>">
                    <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                    <?php
                    if (in_array($item['id'], $in_cart ?? [])){
                        echo '<button type="submit" disabled class="btn btn-success col-4">In the Cart</button>';
                    }else{
                        echo '<button type="submit" name="product_submit" class="btn btn-warning col-4">Add to Cart</button>';
                    }
                    ?>
                    <button type="submit"class="btn btn-secondary col-4">See a sample</button>

                </form>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['name']?></h5>
                <small><?php echo $item['author']?></small>
                <hr class="m-0">

                <!---    book price       -->
                <table class="my-3"
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['price']?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                </table>
                <!---    !book price       -->


                <hr>


                <div class="row">
                    <div class="col-6">
                        <!-- year -->
                        <div class="color my-1 ">
                            <div class="d-flex justify-content-between">
                                <h6 >Year : <?php echo $item['year']?></h6>
                            </div>
                        </div>
                        <!-- !year -->
                    </div>
                    <div class="col-6">
                    </div>
                </div>

                <!-- language -->
                <div class="size my-3">
                    <h6>Language : <?php echo $item['language']?></h6>
                </div>

                <br>
                </div>
                <!-- !language -->
                <br>
                <br>

            </div>
            <div class="col-12 py-5">
                <h5 class="font-rubik">Book Breif</h5>
                <hr>
                <div class="book-center">
                <p class="font-rale font-size-16"><?php echo $item['breif']?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<?php
endif;
endforeach;
?>