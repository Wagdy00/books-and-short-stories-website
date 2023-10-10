<?php
include_once('userf.php');

$userdata = new DB_con();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];

    $sql = $userdata->registration($name,  $email, $password);

    if ($sql) {
        echo "<script>alert('Registor Successful!');</script>";
        echo "<script>window.location.href='user.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again.');</script>";
        echo "<script>window.location.href='user.php'</script>";
    }
}

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $result = $userdata->signin($name, $password);
    $num = mysqli_fetch_array($result);

    if ($num > 0) {
        $_SESSION['name'] = $num['name'];
        echo "<script>alert('Login Successful!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again.');</script>";
        echo "<script>window.location.href='user.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<a href="index.php">Back</a>

<div class="login-page">
    <div class="form">
        <img src="./assets/123.png">
        <form class="register" id="form1" action="user.php" method="post">
            <h3> New Registeration</h3>
            <input type="text" class="form-control" id="username" name="name" onblur="checkusername(this.value)"  placeholder="UserName" required>
            <span id="usernameavailable"></span>
            <input type="email" class="form-control" id="email" name="email" onblur="checkemail(this.value)" placeholder="E-Mail" required >
            <span id="emailavailable"></span>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <button type="submit"  name="submit" id="bt_1"> Register </button>
            <p class="message"> Already Registered? <a href="#"> Log in</a> </p>

        </form>

        <form method="post">
            <h3> Login </h3>
            <input type="text" class="form-control" id="username" name="name" placeholder="User name">
            <span id="usernameavailable"></span>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <button type="submit" name="login" id="bt_2"> Login </button>
            <p class="message"> Not Registered? <a href="#"> Register</a> </p>

        </form>


    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js">
</script>
<script>
    function checkusername(val) {
        $.ajax({
            type: 'POST',
            url: 'checkuser_available.php',
            data: 'name='+val,
            success: function(data) {
                $('#usernameavailable').html(data);
            }
        });
    }
    function checkemail(val) {
        $.ajax({
            type: 'POST',
            url: 'checkemail_available.php',
            data: 'email='+val,
            success: function(data) {
                $('#emailavailable').html(data);
            }
        });
    }
    $('.message').click (function () {
        $('form').animate ({height: "toggle" , opacity:"toggle"} , "slow");

    });

</script>
</body>
</html>