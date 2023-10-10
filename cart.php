<?php
ob_start();
// include header
include ('header.php');
?>
    <style>
        body{
            background-color: #ffffff;
            background-image: url(assets/m2.png);
            background-size: contain;
        }
        @media (max-width: 768px) {
            body{
                background-image: none;
            }
        }
    </style>
<?php
//include cart
include ("template/cart-part.php");
//include wishlist
include ("template/wishlist-part.php");
// include top-sale
include ("template/new-books.php");
?>

<?php
// include footer
include ("footer.php")
?>