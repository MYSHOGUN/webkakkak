<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
    $conn = new PDO("mysql:host=localhost;dbname=food;charset=utf8","root","");
    
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user where email = '$email' and password = sha1('$password')";
    $result = $conn->query($sql);
    if($result -> rowCount()==1){
        $data=$result->fetch(PDO::FETCH_ASSOC);
            $_SESSION['name'] = $data["name"];
            $_SESSION['role'] = $data["role"];
            $_SESSION['id'] = $data["id"];
            header("location:index.php");
            die();
    }else{
        $_SESSION['error'] = 'error';
        header("location:login.php");
        die();
    }
    $conn = null;
?>