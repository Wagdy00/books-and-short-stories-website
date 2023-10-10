<?php
// including the database connection file
include_once("database/Crud.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM book WHERE id=$id");

foreach ($result as $res) {
    $name = $res['name'];
    $author = $res['author'];
    $price = $res['price'];
    $img = $res['img'];
    $genre = $res['genre'];
    $year = $res['year'];
    $language = $res['language'];
    $breif = $res['breif'];



}
?>
<html>
<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    *{
        margin-left: 7px;
    }
    textarea{
        height: 200px;
    }
</style>
</head>

<body>
<a href="test.php">Home</a>
<br/><br/>

<form name="form1" method="post" action="editaction.php">
    <table border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name;?>"></td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" name="author" value="<?php echo $author;?>"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" value="<?php echo $price;?>"></td>
        </tr>
        <tr>
            <td>img</td>
            <td><input type="text" name="img" value="<?php echo $img;?>"></td>
        </tr>
        <tr>
            <td>genre</td>
            <td><input type="text" name="genre" value="<?php echo $genre;?>"></td>
        </tr>
        <tr>
            <td>year</td>
            <td><input type="text" name="year" value="<?php echo $year;?>"></td>
        </tr>
        <tr>
            <td>language</td>
            <td><input type="text" name="language" value="<?php echo $language;?>"></td>
        </tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
        </tr>
    </table>
    <br>
    <h6>The Breif</h6>
    <textarea name="breif" class="form-control"><?php echo $breif;?></textarea>
    <br>
    <input type="submit"  class="btn btn-dark" name="update" value="update">
</form>
</body>
</html>