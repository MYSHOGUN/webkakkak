<?php
session_start();
$id = $_GET['id'];
$user = $_SESSION['id'];

$conn = new PDO("mysql:host=localhost;dbname=food;charset=utf8","root","");

$sql = "SELECT * FROM food_menu where id = '$id'";

$result = $conn->query($sql);
$data=$result->fetch(PDO::FETCH_ASSOC);

$menu_name = "kuy";
if(is_array($menu_name)){
    $menu_name = $data["name"];
}

$price = 0;
if(is_array($price)){
    $price = $sql['menu_price'];
}

$sql_ins = "INSERT INTO order_menu (id,user_id,menu_name,price) VALUES ('$id','$user','$menu_name','$price')";
header("location:index.php");
die();
$conn = null;
?>