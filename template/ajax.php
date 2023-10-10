<?php


// require MySQL Connection
require('../database/DBController.php');

// require Product Class
require('../database/book.php');

// DBController object
$db = new DBController();

// Product object
$book = new book($db);

if (isset($_POST['id'])) {
    $result = $book->getProduct($_POST['id']);
    echo json_encode($result);
}
