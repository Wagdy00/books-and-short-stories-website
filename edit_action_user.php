<?php
// including the database connection file
include_once("database/Crud.php");
$crud = new Crud();
if(isset($_POST['update']))
{
    $user_id = $crud->escape_string($_POST['user_id']);

    $name = $crud->escape_string($_POST['name']);
    $email = $crud->escape_string($_POST['email']);
    $password = $crud->escape_string($_POST['password']);
    $result = $crud->execute("UPDATE user SET name='$name',email='$email',password='$password' WHERE user_id=$user_id");

    //redirectig to the display page. In our case, it is index.php
    header("Location: testuser.php");
}
?>