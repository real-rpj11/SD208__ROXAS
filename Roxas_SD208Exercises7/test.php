<?php
session_start();
// initial variable
$firstname = "";
$lastname = "";
$email = "";
$address = "";
$password = "";
$id = 0;

$error = "";


// connect to database
$db = mysqli_connect('localhost', 'root', '', 'registration_data');


if (isset($_POST['submit'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];

// add data
    $query = "INSERT INTO data (firstname,lastname,email,address,password) VALUES ('$firstname','$lastname','$email','$address','$password')";
    mysqli_query($db, $query);
    $_SESSION['message'] = "Data Saved";
    header('location: data.php');
}
// update data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    mysqli_query($db, "UPDATE data SET firstname='$_POST[fname]',lastname='$_POST[lname]',email='$_POST[email]',address='$_POST[address]',password='$_POST[password]' where id=" . $id);
    $_SESSION['message'] = "Data Updated";
    header('location: data.php');
}
//  delelete data
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM data WHERE id=$id");
    $_SESSION['message'] = "Data Deleted";
    header('location: data.php');
}

// retrieve data
$result = mysqli_query($db, "SELECT * FROM data");
