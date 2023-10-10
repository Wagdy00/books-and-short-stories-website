<?php
//including the database connection file
include_once("database/Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM book ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>

    <link rel="stylesheet" href="ad.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <img src="assets/123.png">
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-user"></i>user</a></li>
            <li><a href="#"><i class="fas fa-book"></i>About</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>portfolio</a></li>
        </ul>
    </div>
    <div class="main_content">
        <table class="table" width="100%">

            <tr bgcolor='#CCCCCC'>
                <td class="">Name</td>
                <td class="">Author</td>
                <td class="">Price</td>
                <td class="">image</td>
                <td class="">genre</td>
                <td class="">year</td>
                <td class="">language</td>
                <td class="">update</td>

            </tr>
            <?php
            foreach ($result as $key => $res) {
                //while($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['author']."</td>";
                echo "<td>".$res['price']."</td>";
                echo "<td>".$res['img']."</td>";
                echo "<td>".$res['genre']."</td>";
                echo "<td>".$res['year']."</td>";
                echo "<td>".$res['language']."</td>";
                echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
            }
            ?>
        </table>
</div>

</body>
</DOCTYPEhtml>