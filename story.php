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
    <title>stories page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        table td{
            width: 200px;
        }
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
<button type="button" class="btn btn-primary">
    <a href="newStory.php">Creat your own story</a>
</button>
<br>
<table class="table" width='80%' border=0>

    <tr bgcolor='#CCCCCC'>
        <td class="table-dark">Author</td>
        <td class="table-dark">name</td>
        <td class="table-dark">genre</td>
        <td class="table-dark">story breif</td>
        <td class="table-dark">see more</td>

    </tr>
    <?php
    foreach ($result as $key => $res) {
        //while($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$res['username']."</td>";
        echo "<td>".$res['storyname']."</td>";
        echo "<td>".$res['genre']."</td>";
        echo "<td>".$res['storybreif']."</td>";
        echo "<td> <a href='story2.php' class='btn btn-success'> View </a> </td>";
    }
    ?>
</table>
</body>
</html>