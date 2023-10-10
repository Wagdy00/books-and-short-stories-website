<?php
//test_class.php
include './database/admin.php';
$data = new admin;
$success_message = '';
if(isset($_POST["submit"]))
{
    $insert_data = array(
        'name'     =>     mysqli_real_escape_string($data->con, $_POST['name']),
        'author'          =>     mysqli_real_escape_string($data->con, $_POST['author']),
        'price'          =>     mysqli_real_escape_string($data->con, $_POST['price']),
        'img'          =>     mysqli_real_escape_string($data->con, $_POST['img']),
        'genre'          =>     mysqli_real_escape_string($data->con, $_POST['genre']),
        'year'          =>     mysqli_real_escape_string($data->con, $_POST['year']),
        'language'          =>     mysqli_real_escape_string($data->con, $_POST['language']),
        'breif'          =>     mysqli_real_escape_string($data->con, $_POST['breif'])
    );
    if($data->insert('book', $insert_data))
    {
        $success_message = 'book Inserted';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>admin page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        a{
            font-size: 20px;
            margin-left: 18px;
        }
    </style>
</head>
<body>
<a href="test.php">back</a>
<br />

<section class="contact-section">
    <div class="container-form">
        <div class="form-box">
            <form action="admin2.php" method="post" name="form1" >
                <input type="text" name="name" placeholder="Book name" required>
                <input type="text" name="author" placeholder="Author" required>
                <input type="text" name="genre" placeholder="genre" required>
                <input type="text" name="language" placeholder="language" required>
                <div class="genre">
                    <input type="text" name="img" placeholder="image" required>
                </div>
                <input type="money" name="price" placeholder="price" required>
                <input type="number" name="year" placeholder="year" required>

        </div>
    </div>
    <div class="edit">
        <div class="col-10">
            <textarea name="breif" class="form-control"  placeholder="Book Breif" required></textarea>
        </div>
    </div>

    <section class="contact-section">
        <div class="container-form">
            <div class="form-box">
                <input type="submit"  name="submit" value="Add Book" class="button-54">
                <br>
                <span class="text-success">
                <?php
                if(isset($success_message))
                {
                    echo $success_message;
                }
                ?>
                </span>
                </form>
            </div>
        </div>
    </section>
</section>
</body>
</html>