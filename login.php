<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
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
    margin-left: 38%;
    margin-top: 7%;
    font-size: 30px;
}
.table td {
    padding: 10px;
}
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}
</style>
</head>
    <body>
        <form action="login_check.php" method="post">
        <div class="header">
            <h1>ร้านก๋วยเตี๋ยวไก่ตุ๋น-เป็ดตุ๋น</h1>
        </div>
        <div class="navbar">
        </div>
        <table class="table">
            <tr>
                <td>
                    Email :
                </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
                <tr>
                    <td colspan="2">
                        <center><input type="submit" value="เข้าสู่ระบบ"></center>
                    </td>
                </tr>
            </tr>
        </table>
        </form>
    </body>
</html>