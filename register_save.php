<?php
session_start();
isset( $_POST['email'] ) ? $email = $_POST['email'] : $email = "";
$passwd = $_POST['password'];
$name = $_POST['name'];
$lastname = $_POST['surname'];
$phone = $_POST['phone_number'];
$gender = $_POST['gender'];

$conn = new PDO("mysql:host=localhost;dbname=food;charset=utf8","root","");
$passwd=sha1($passwd);

$sql = "SELECT * FROM user where email = '$email'";
$result = $conn->query($sql);
if($result->rowCount()==1){
    $_SESSION['add_login'] = 'error';
    header("location:register.php");
    die();
}else{
    $sql = "INSERT INTO user (email,password,name,lastname,phone,gender,role) VALUES ('$email','$passwd','$name','$lastname','$phone','$gender','m')";

    $conn->exec($sql);
    $conn = null;
    $_SESSION['add_login'] = 'success';
    header("location:index.php");
    die();
}
?>