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
}
.header {
  padding: 100px;
  text-align: center;
  background-image: url('บะหมี่เป็ดพะโล้-02.jpg');
  background-size: cover;
  color: rgb(255, 255, 255);
  font-family: 'Charm', cursive;
}
.header h1 {
  font-size: 40px;
}
.navbar {
  overflow: hidden;
  background-color: #333;
  padding: 14px 20px;
}
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}
.navbar a.right {
  float: right;
}
.center {
  text-align: center;
}
.navbar a:hover {
  background-color: #ddd;
  color: black;
}
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: nowrap;
}
.side {
  -ms-flex: 10%; /* IE10 */
  flex: 10%;
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}
.main {   
  -ms-flex: 90%; /* IE10 */
  flex: 90%;
  background-color: white;
  padding: 20px;
}
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}
.menu{
  width: 300px;
  height: 300px;
  padding: 10px;
}
.side button {
  background-color: #f3bb03;
  font-size: 20px;
  font-family: 'Charm', cursive;
  margin-bottom: 20px;
  padding-top: 10px;
}
.side button:hover{
  background-color: white;
}
.main button {
  width: 100px;
  height: 100px;
}
.login {
  background-color: #000;
  color: #ffffff;
  margin-top: 10px;
  font-size: 20px;
  flex-wrap: nowrap;

}
.login:hover{
  color: #000;
  background-color: #ffffff;
}
.register {
  background-color: #000;
  color: #ffffff;
  margin-top: 10px;
  font-size: 20px;
  flex-wrap: nowrap;
}
.register:hover{
  color: #000;
  background-color: #ffffff;
}
.table {
  position: absolute;
  left: 86%;
  top: 0%;
}
.name {
  margin-top: 10px;
  font-size: 20px;
  margin-right: 5px;
  flex-wrap: nowrap;
  color: #ffffff;
}
.font {
  font-size: 20px;
}
.alert {
    background-color: #00ff00;
    text-align: center;
}
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
  .table {   
    left: 80%;
  }
}
</style>
</head>
    <body>
        <div class="header">
          <?php
          session_start();
          if(isset($_SESSION['role'])){
            if($_SESSION['role'] == 'a'){
              header("location:order.php");
            }
          }
          if(!isset($_SESSION['id'])){         
          ?>
          <table class="table">
            <tr>
              <td>
                <button onclick="window.location.href='login.php';" class="login">เข้าสู่ระบบ</button>
              </td>
              <td>
                <button onclick="window.location.href='register.php';" class="register">สมัครสมาชิก</button>
              </td>
            </tr>
          </table>
          <?php
            }else{  
          ?>
          <table class="table">
            <tr>
              <td>
                <div class="name">
                <?php
                  echo $_SESSION['name']
                ?>
                </div>
              </td>
              <td>
                <button onclick="window.location.href='logout.php';" class="register">ออกจากระบบ</button>
              </td>
            </tr>
          </table>
          <?php
            }
          ?>
            <h1>ร้านก๋วยเตี๋ยวไก่ตุ๋น-เป็ดตุ๋น</h1>
        </div>
        <div class="navbar">
        </div>
        <?php
          
          if(isset($_SESSION['add_login'])){
              if($_SESSION['add_login'] == 'success'){
              echo "<div class = 'alert'>สมัครสมาชิกเรียบร้อย</div>";
            }
            unset($_SESSION['add_login']);
          }
?>
        <div class="row">
            <div class="side">
              <button onclick="myFunction()" class="button">ก๋วยเตี๋ยว</button><br>
              <button onclick="myFunction()" class="button">อื่นๆ</button>
            </div>
            <div class="main">
              <form action="order.php">
              <table>
                <tr>
              <?php
                $conn = new PDO("mysql:host=localhost;dbname=food;charset=utf8","root","");
                $sql = "SELECT * FROM menu";
                foreach($conn->query($sql) as $row){
                  if ($row["menu_pic"] != null){
                    echo "<td><img src = $row[menu_pic] class = menu><br>";
                  }else{
                    echo "<td><br>" ;
                  }
                  echo  "<input type= checkbox id= $row[id] name= $row[name] value= $row[menu_price]>" ;
                  echo "$row[name]<br></td>";
                  if($row["id"] %4 == 0){
                    echo "</tr><tr>";
                  }
                }
                $conn = null; ?>
                </tr>
                </table>
                <center><input type="submit" class = "button" value="Submit"></center>
              </form>
            </div>
        </div>
        <div class="footer">
            <h2>Footer</h2>
        </div>
    </body>
</html>