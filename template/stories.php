<style>
    h3{
        justify-content: center;
        display: flex;
        text-align: justify;
        line-height: 30px;

    }
    h5{
        color: #347F81;
    }
</style>
<?php
$id = $_GET['id'] ?? 1;
foreach ($story->getData() as $item) :
    if ($item['id'] == $id) :

        ?>

        <section id="product" class="py-5">
            <div class="container">
                <div class="row">
                    <h3><?php echo $item['storyname']?></h3>
                    <br><br>
                    <h3 class="font-baloo font-size-20"><?php echo $item['story']?></h3>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                    <h5> by <?php echo $item['username']?></h5>
                </div>
            </div>
        </section>

    <?php
    endif;
endforeach;
?>