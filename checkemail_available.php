<?php

include_once('userf.php');

$emailcheck = new DB_con();

// Getting post value
$email = $_POST['email'];

$sql = $emailcheck->emailavailable($email);

$num = mysqli_num_rows($sql);

if ($num > 0) {
    echo "<span style='color: red;'>email already associated with another account.</span>";
    echo "<script>$('#submit').prop('disabled', true);</script>";
} else {
    echo "<span style='color: green;'>email available for registration.</span>";
    echo "<script>$('#submit').prop('disabled', false);</script>";

}

?>
