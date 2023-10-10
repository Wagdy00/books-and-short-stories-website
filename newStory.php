<?php
include './database/admin.php';
$data = new admin;
if(isset($_POST["submit"])){
    $username = mysqli_real_escape_string($data->con, $_POST['username']);
    $storyname = mysqli_real_escape_string($data->con, $_POST['storyname']);
    $genre = mysqli_real_escape_string($data->con, $_POST['genre']);
    $storybreif = mysqli_real_escape_string($data->con, $_POST['storybreif']);
    $story = mysqli_real_escape_string($data->con, $_POST['story']);
    if($_FILES["image"]["error"] == 4){
        echo
        "<script> alert('Image Does Not Exist'); </script>"
        ;
    }
    else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if ( !in_array($imageExtension, $validImageExtension) ){
            echo
            "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
        }
        else if($fileSize > 1000000){
            echo
            "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'upload/' . $newImageName);
            $query = "INSERT INTO story (username, storyname, genre,storybreif,story,storyimg) VALUES('$username','$storyname','$genre','$storybreif','$story','$newImageName')";
            mysqli_query($data->con, $query);
            echo
            "
      <script>
        alert('Successfully Added');
        document.location.href = 'storyvol2.php';
      </script>
      ";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>creat your own story</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        h6{
            margin-left: 130px;
            padding-top: 8px;
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
                    <a class="nav-link " aria-current="page" href="book.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Book store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="storyvol2.php">stories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="search.php">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user.php">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="contact-section">
    <div class="container-form">
        <div class="form-box">
            <form action="newStory.php" method="post" enctype="multipart/form-data" name="form1">
                <input type="text" name="username" placeholder="User Name" required>
                <input type="text" name="storyname" placeholder="Story Name" required>
                <div class="genre">
                    <input type="text" name="genre" placeholder="genre" required>
                </div>
                <input type="file" class="form-control" name="image" id="image" required>

                <textarea name="storybreif" placeholder="story breif"></textarea>
        </div>
    </div>
    <div class="edit">
        <div class="col-10">
            <textarea name="story"  class="form-control" required name="story" placeholder="Story"></textarea>
        </div>
            <h6>Note: best dimensions for the image is 190W and 280H </h6>
    </div>

    <div class="contact-section">
        <div class="container-form">
            <div class="form-box">
                <input type="submit"  name="submit" value="Add Story" class="button-54">
            </form>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</body>
</html>
</html>



