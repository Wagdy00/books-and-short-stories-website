<?php

define('DB_SERVER', 'localhost'); // Your hostname
define('DB_USER', 'root'); // Database Username
define('DB_PASS', ''); // Database Password
define('DB_NAME', 'project'); // Database Name

class DB_con {
    function __construct() {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $this->dbcon = $conn;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    public function usernameavailable($name) {
        $checkuser = mysqli_query($this->dbcon, "SELECT name FROM user WHERE name = '$name'");
        return $checkuser;
    }
    public function emailavailable($email) {
        $checkemail = mysqli_query($this->dbcon, "SELECT email FROM user WHERE email = '$email'");
        return $checkemail;
    }

    public function registration($name, $email, $password) {
        $reg = mysqli_query($this->dbcon, "INSERT INTO user(name, email, password) VALUES('$name', '$email', '$password')");
        return $reg;
    }

    public function signin($name, $password) {
        $query = "SELECT * FROM user WHERE name='$name' AND password='$password'";
        $results = mysqli_query($this->dbcon , $query);
        return $results;
    }
}

?>