<?php
//including the database connection file
include_once("database/Crud.php");

$crud = new Crud();

//getting id of the data from url
$id = $crud->escape_string($_GET['id']);

//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->execute("DELETE FROM story WHERE id=$id");

if ($result) {
    //redirecting to the display page (testuser.php in our case)
    header("Location:teststory.php");
}
?>