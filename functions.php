<?php

//require MySQL Connection
require ('database/DBController.php');

//require Product Class
require ('database/book.php');

//require cart class
require ('database/cart.php');

//require admin page(add new book)
require ('database/admin.php');

//require admin page(CRUD)
require('database/CRUD.php');
require('database/Validation.php');

// DBController object
$db = new DBController();

// Product object
$book = new book($db);
$book_shuffle =$book->getData();

//require Product Class
require ('database/story.php');

//story object
$story = new story($db);
$story_shuffle =$story->getData();


//cart object
$Cart = new Cart($db);
