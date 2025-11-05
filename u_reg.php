<?php
session_start();
error_reporting(0);
include("dbconnection.php");
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $fmname = $_POST['fmname'];
    $deptment = $_POST['dept'];
    $cur_des = $_POST['cu'];
    $acc_qual = $_POST['aq'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $exp = $_POST['exp'];

//getting image from the field
$pro_image = $_FILES['addtemp']['name'];
$pro_image_tmp = $_FILES['addtemp']['tmp_name'];

move_uploaded_file($pro_image_tmp,"profile/$pro_image");

    $insert_c = "insert into user (name,f_m_name,dept,curr_desg,acc_quali,email,password,ph_num,address,exp,pro_image) values('$username','$fmname','$deptment','$cur_des','$acc_qual','$email','$password','$phonenumber','$address','$exp','$pro_image')";

    $run_c=mysqli_query($con,$insert_c);

      echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Reg Succesfully')
    window.location.href='u_login.php';
    </SCRIPT>");
        }
        else{
          //echo "Something went wrong!";
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
    <title>Document</title>
    <style>
        .box {
        position: absolute;
        top: 700px;
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
  color: white;
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
<body>
 <h3>hiiii</h3>
<div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                  <div class="box" >
                    <h2>Faculty New Account</h2>
                    <form method="post" enctype="multipart/form-data" name="inserttemp">
                    <div class="inputBox">
                        <input type="text" name="username" value="">
                        <label style="font-size:  1rem; color : white;">Enter Your Name</label>
                      </div>
                      <div class="inputBox">
                        <input type="text" name="fmname" value="">
                        <label style="font-size:  1rem; color : white;">Enter Father/Mother Name</label>
                      </div>
                      <div class="inputBox">
                        <input type="text" name="dept" value="">
                        <label style="font-size:  1rem; color : white;">Department</label>
                      </div> 

                      <div class="inputBox">
                        <input type="text" name="cu" value="">
                        <label style="font-size:  1rem; color : white;">Current Designation</label>
                      </div>

                      <div class="inputBox">
                        <input type="text" name="aq" value="">
                        <label style="font-size:  1rem; color : white;">academic qualification</label>
                      </div>
                      

                      <div class="inputBox">
                        <input type="email" name="email" required  value="">
                        <label>Email</label>
                      </div>
                      <div class="inputBox">
                        
                        <input type="password" name="password" required value=""
                              >
                        <label>Password</label>
                      </div>
                      <div class="inputBox">
                        <input type="text" name="phonenumber" value="">
                        <label style="font-size:  1rem; color : white;">Enter Contact No</label>
                      </div>
                      <!-- <b style="color: white"><input type="checkbox" onclick="myFunction()" value="Show Password"> -->
                    
                      <br>
                      <div class="inputBox">
                        <input type="text" name="address" value="">
                        <label style="font-size:  1rem; color : white;">Permanent Address</label>
                      </div>
                      <div class="inputBox">
                        <input type="text" name="exp" value="">
                        <label style="font-size:  1rem; color : white;">Total Teaching Exp</label>
                      </div>
                      <div class="inputBox">
                      
                        <input type="file" name="addtemp" required  placeholder="Profile Picture">
                        
                      </div>

                      <input  name="register" class="btn btn-theme btn-block" type="submit">
                    </form>
                  </div>    
                </div>
</body>
</html>