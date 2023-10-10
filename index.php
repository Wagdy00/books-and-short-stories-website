<?php
ob_start();
// include header
include ('header.php');
?>

<?php
// include banner-area
include ("template/banner-area.php");
// include top-sale
include ("template/top-sale.php");
// include special-price
include ("template/special-price.php");
// include banner-ads
include ("template/banner-ads.php");
// include new-books
include ("template/new-books.php");
?>

<?php
// include footer
include ("footer.php")
?>