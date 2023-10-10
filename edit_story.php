<?php
// including the database connection file
include_once("database/Crud.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM story WHERE id=$id");

foreach ($result as $res) {
    $username = $res['username'];
    $storyname = $res['storyname'];
    $genre = $res['genre'];
    $storyimg = $res['storyimg'];
    $storybreif = $res['storybreif'];
    $story = $res['story'];




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
        .story-l textarea{
            height: 150px;
        }
    </style>
</head>

<body>
<a href="teststory.php">Back</a>
<br/><br/>

<form name="form1" method="post" action="edit_action_story.php">
    <table border="0">
        <tr>
            <td>User name</td>
            <td><input type="text" name="username" value="<?php echo $username;?>"></td>
        </tr>
        <tr>
            <td>Story name</td>
            <td><input type="text" name="storyname" value="<?php echo $storyname;?>"></td>
        </tr>
        <tr>
            <td>Genre</td>
            <td><input type="text" name="genre" value="<?php echo $genre;?>"></td>
        </tr>
        <tr>
            <td>Story img</td>
            <td><input type="text" name="storyimg" value="<?php echo $storyimg;?>"></td>
        </tr>
    </table>
    <br>
    <div class="col-9">

        <h6>Story breif</h6>
        <textarea name="storybreif" class="form-control"><?php echo $storybreif;?></textarea>
        <br>
        <div class="story-l">
    <h6> The Story</h6>
    <textarea name="story" class="form-control"><?php echo $story;?></textarea>
    <br>
        </div>
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
    <br>
    </div>
    <input type="submit"  class="btn btn-primary" name="update" value="update">
</form>
</body>
</html>