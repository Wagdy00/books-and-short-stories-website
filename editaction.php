<?php
// including the database connection file
include_once("database/Crud.php");
$crud = new Crud();
if(isset($_POST['update']))
{
    $id = $crud->escape_string($_POST['id']);

    $name = $crud->escape_string($_POST['name']);
    $author = $crud->escape_string($_POST['author']);
    $price = $crud->escape_string($_POST['price']);
    $img = $crud->escape_string($_POST['img']);
    $genre = $crud->escape_string($_POST['genre']);
    $year = $crud->escape_string($_POST['year']);
    $language = $crud->escape_string($_POST['language']);
    $breif = $crud->escape_string($_POST['breif']);





    $result = $crud->execute("UPDATE book SET name='$name',author='$author',price='$price',img='$img',genre='$genre',year='$year',language='$language',breif='$breif' WHERE id=$id");

        //redirectig to the display page. In our case, it is index.php
        header("Location: test.php");
    }
?>