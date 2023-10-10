<?php
//including the database connection file
include_once("database/Crud.php");

$crud = new Crud();

//getting id of the data from url
$user_id = $crud->escape_string($_GET['user_id']);

//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->execute("DELETE FROM user WHERE user_id=$user_id");

if ($result) {
    //redirecting to the display page (testuser.php in our case)
    header("Location:testuser.php");
}
?>