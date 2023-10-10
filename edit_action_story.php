<?php
// including the database connection file
include_once("database/Crud.php");
$crud = new Crud();
if(isset($_POST['update']))
{
    $id = $crud->escape_string($_POST['id']);

    $username = $crud->escape_string($_POST['username']);
    $storyname = $crud->escape_string($_POST['storyname']);
    $genre = $crud->escape_string($_POST['genre']);
    $storyimg = $crud->escape_string($_POST['storyimg']);
    $storybreif = $crud->escape_string($_POST['storybreif']);
    $story = $crud->escape_string($_POST['story']);

    $result = $crud->execute("UPDATE story SET username='$username',storyname='$storyname',genre='$genre',storyimg='$storyimg',storybreif='$storybreif',story='$story' WHERE id=$id");

    //redirectig to the display page. In our case, it is index.php
    header("Location: teststory.php");
}
?>