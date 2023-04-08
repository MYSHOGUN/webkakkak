<!DOCTYPE html>
<html lang="en">
<head>
<title>html css code for online shopping website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Charm:wght@700&display=swap" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background: #979797;
}
.header {
  padding: 100px;
  text-align: center;
  background-image: url('บะหมี่เป็ดพะโล้-02.jpg');
  background-size: cover;
  color: rgb(255, 255, 255);
  font-family: 'Charm', cursive;
}
.navbar {
    overflow: hidden;
    background-color: #333;
    padding: 14px 20px;
}
.table {
    margin-left: 35%;
    margin-top: 7%;
    font-size: 30px;
}
.table td {
    padding: 10px;
}
.alert {
    background-color: #ff000f;
    text-align: center;
}
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}
</style>
</head>
    <body>
        <?php
         session_start();
        ?>
        <form action="register_save.php" method="post">
        <div class="header">
            <h1>ร้านก๋วยเตี๋ยวไก่ตุ๋น-เป็ดตุ๋น</h1>
        </div>
        <div class="navbar">
        </div>
        <?php
         if(isset($_SESSION['add_login'])){
            if($_SESSION['add_login'] == 'error'){
                echo "<div class = 'alert'>ชื่อบัญชีนี้ถูกใช้ไปแล้ว</div>";
            }
            unset($_SESSION['add_login']);
        }
        ?>
        <table class="table">
            <tr>
                <td>
                    Email :
                </td>
                <td>
                    <input type="email" name="email" required>
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td>
                    Name :
                </td>
                <td>
                    <input type="text" name="name" required>
                </td>
            </tr>
            <tr>
                <td>
                    Surname :
                </td>
                <td>
                    <input type="text" name="surname" required>
                </td>
            </tr>
            <tr>
                <td>
                    Phone Number :
                </td>
                <td>
                    <input type="text" name="phone_number" required>
                </td>
            </tr>
            <tr>
                <td>
                    Gender :
                </td>
                <td>
                    <input type="radio" name="gender" value="m" >Male
                    <input type="radio" name="gender" value="f" >Female
                    <input type="radio" name="gender" value="o" >Other
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" value="สมัคร"></center>
                </td>
            </tr>
        </table>
    </form>
    </body>
</html>