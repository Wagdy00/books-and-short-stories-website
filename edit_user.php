<?php
// including the database connection file
include_once("database/Crud.php");

$crud = new Crud();

//getting id from url
$user_id = $crud->escape_string($_GET['user_id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM user WHERE user_id=$user_id");

foreach ($result as $res) {
    $name = $res['name'];
    $email = $res['email'];
    $password = $res['password'];

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
    </style>
</head>

<body>
<a href="testuser.php">Back</a>
<br/><br/>

<form name="form1" method="post" action="edit_action_user.php">
    <table border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name;?>"></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="email" name="email" value="<?php echo $email;?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" value="<?php echo $password;?>"></td>
        </tr>

        <td><input type="hidden" name="user_id" value=<?php echo $_GET['user_id'];?>></td>
        </tr>
    </table>
    <br>
    <input type="submit"  class="btn btn-primary" name="update" value="update">
</form>
</body>
</html>