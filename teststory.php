<?php
//including the database connection file
include_once("database/Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM story ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>

<html>
<head>
    <title>User admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        button{
            margin-top: 8px;
            margin-left: 10px;
            margin-bottom: 7px;

        }
        button a{
            text-decoration: none;
            color: white;
        }
        button a:hover{
            color: black;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
<div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="./assets/123.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-rubik">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="test.php">Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="testuser.php">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="teststory.php">Stories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Main page</a>
            </li>
        </ul>
    </div>
</div>
</nav>

<table class="table" width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td class="table-success">User name</td>
        <td class="table-success">Story name</td>
        <td class="table-success">Genre</td>
        <td class="table-success">Story img</td>
        <td class="table-success">update</td>

    </tr>
    <?php
    foreach ($result as $key => $res) {
        //while($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$res['username']."</td>";
        echo "<td>".$res['storyname']."</td>";
        echo "<td>".$res['genre']."</td>";
        echo "<td>".$res['storyimg']."</td>";
        echo "<td><a href=\"edit_story.php?id=$res[id]\">Edit</a> | <a href=\"delete_story.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    }
    ?>
</table>
</body>
</html>