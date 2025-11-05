<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
$ret=mysqli_query($con,"SELECT * FROM admin WHERE email='$email' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Admin Login Succesfully')
    window.location.href='a_dashboard.php';
    </SCRIPT>");

$_SESSION['email']=$_POST['email'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Admin Login Failed')
    window.location.href='home.html';
    </SCRIPT>");

exit();
}
}

?>






<?php

include("title.html");
include("nav1.html");
?> <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <style>
        .box {
        position: absolute;
        top: 400px;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 25rem;
        padding: 2.5rem;
        box-sizing: border-box;
        margin-left: 50%;  
        /* background: rgba(128,0,0); */
        box-shadow: -3px -3px 9px #aaa9a9a2,
              3px 3px 7px rgba(147, 149, 151, 0.671);
        border-radius: 0.625rem;
      }
      
      .box h2 {
  margin: 0 0 1.875rem;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box .inputBox {
  position: relative;
}

.box .inputBox input {
  width: 100%;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: black;
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid #fff;
  outline: none;
  background: transparent;
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}
.label1 {
 
  
  padding: 0.625rem 0;
  font-size: 1rem;
  color: black;
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 0;
  color: #03a9f4;
  font-size: 0.75rem;
}

.box input[type="submit"] {
  border: none;
  outline: none;
  color: #fff;
  background-color: black;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;
}

.box input[type="submit"]:hover {
    background-color: purple;
}
body  {
  background-image: url("360_F_191783282_0TVrx5VrvrkpDHSKdjjI87HkbXJy5TMw.jpg");
  /* background-color: pink; */
}

    </style>
    
</head>
<body class >
  
  <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                  <div class="box" >
                    <h2>Admin Login</h2>
                    <form action="" method="POST">
                      <div class="inputBox">
                        <input type="email" name="email" required  value="">
                        <label>Email</label>
                      </div>
                      <div class="inputBox">
                        
                        <input type="password" name="password" required value=""
                               id="myInput">
                        <label>Password</label>
                      </div>
                      <!-- <b style="color: white"><input type="checkbox" onclick="myFunction()" value="Show Password"> -->
                    
                      <br>

                      <input  name="login" class="btn btn-theme btn-block" type="submit">
                    </form>
                  </div>    
                </div>

</body>
</html>