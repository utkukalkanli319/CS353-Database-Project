<?php

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$accounttype = $_POST['accounttype'];
// $account_type = $_POST['account_type'];


$sql = "INSERT INTO UserType (UserEmail, UserPassword, UserType) VALUES('$email', '$pass', '$accounttype')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


?>
