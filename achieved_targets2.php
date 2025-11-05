<?php  
  include("title.html");
 ?>
<?php
include('dbconnection.php');
 session_start();
 $email = $_SESSION['email'];
//echo ($email);

 
 $id = $_SESSION['id'];
 //echo ($id);
//  if(isset($_GET['email'])){
//      $fa_email = $_GET['email'];
//      //echo($fa_email);
 
//      $sql = "SELECT COUNT(*) AS total
//      FROM journal_paper_published
//      WHERE Mishra@gmail.com = '$fa_email' ";
//      $result=mysqli_query($con,$sql);
//      // echo ($result);
//      //$data=mysqli_fetch_assoc($result);
//      // echo "$data";
//     //  echo $data['total'];
//  }
 /* 
 if(isset($_GET['apart_name'])){
  $fname = $_GET['apart_name'];
  $get_pro = "select * from flats where apart_name='$fname'";
  
  
}
 */
$sql="SELECT COUNT(*) as total FROM journal_paper_published WHERE id = '$id' ";

$result=mysqli_query($con,$sql);
// echo ($result);
$data=mysqli_fetch_assoc($result);
 //echo "$data";
 //echo $data['total'];




?>
<?php
if(isset($_POST['register']))
{
    // $t1 = $_POST['1'];
    $t2 = $_POST['2'];
    $t3 = $_POST['3'];
    $t4 = $_POST['4'];
    $t5 = $_POST['5'];
    $t6 = $_POST['6'];
    $t7 = $_POST['7'];
    $t8 =$_POST['8'];
    $t9 =$_POST['9'];
    
    // $insert_c = "insert into achieved_targets (email,jour_pub_plan,workshops,guest_lec_webi_con,guest_lec_deli,patents	,book_chaps,course_certi) values('$t2','$t3','$t4','$t5','$t6','$t7','$t8'.'$t9') WHERE id = '$id'";
    $insert_c = "UPDATE  achieved_targets SET email = '$t2',jour_pub_plan= '$t3',workshops = '$t4',guest_lec_webi_con= '$t5',guest_lec_deli = '$t6',patents= '$t7',book_chaps = '$t8',course_certi= '$t9' WHERE id = '$id'";
    $run_c=mysqli_query($con,$insert_c);

      echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert(' Succesfully Submitted')
    window.location.href='f_dash.php';
    </SCRIPT>");
        }
        else{
          //echo "Something went wrong!";
        }
   
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link href="dist/css/style.min.css" rel="stylesheet"> -->
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.left{
    top : 70px;
    float: right;
    padding: 2px 16px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
}
.left1{
    top : 70px;
    margin-left: 50%;
    padding: 1px 10px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
}
.container1{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 27%;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    padding: 3px 16px;
    float: right; 
    /* margin-right: 100%; */
    /* /* margin: 0 auto; */
} 
</style>
</head>
<body>

<?php
//while($rows=mysqli_fetch_array($result)){
    // (flat_id,flat_rent,flat_elbill,flat_maincharge,username,useremail,user_ph,user_addr)
    
 //   $total = $rows['jour_pub_plan'];
 //   echo ($result);
   
    

    
?>

<?php

//echo ($id);
?>
 

  <br>
  

  <h2 class="vleft"> Achieved targets</h2>
<div class="card">
<?php


    
?>
  <form class="mt-4" action="" method="POST">
 
 <div class="container">
  <b><center> <h3> id: <input type="text" class="form-control" name="1"  value="<?php echo $id; ?>"readonly>  </h3></center></b>

 </div>
 </div>
 </div>
 <div class="card">
 <div class="container">
 <b><center> <h3> email: <input type="text" class="form-control" name="2"  value="<?php echo $email; ?>"readonly>  </h3></center></b>

 </div>
 </div>
 <h2 class="left"> click on submit to update new Achieved target</h2>
 <div class="card">
 <div class="container">
 <b><center> <h3> Total Journal Paper Published: <input type="text" class="form-control" name="3"  value="<?php echo $data['total']; ?>"readonly>  </h3></center></b>

 </div>
 </div>
 <?php
 $sql1="SELECT COUNT(*) as total FROM workshops_organized WHERE id = '$id' ";

 $result1=mysqli_query($con,$sql1);
 // echo ($result);
 $data1=mysqli_fetch_assoc($result1);
  
  //echo $data1['total'];
 ?>

 <br>
 <div class="card">
 <div class="container">
 <b><center> <h3> Total Workshops Organized: <input type="text" class="form-control" name="4"  value="<?php echo $data1['total']; ?>"readonly>  </h3></center></b>

 </div>
 </div>
 </div>
 <?php
 $sql2="SELECT COUNT(*) as total FROM webinars_guest_lectures_conference_org WHERE id = '$id' ";

 $result2=mysqli_query($con,$sql2);
 // echo ($result);
 $data2=mysqli_fetch_assoc($result2);
  
  //echo $data2['total'];
 ?>
 <br>
 <div class="card">
 <div class="container">
 <b><center> <h3> Total Conference Organized: <input type="text" class="form-control" name="5"  value="<?php echo $data2['total']; ?>"readonly>  </h3></center></b>

 </div>
 </div>
 </div>
 <?php
 $sql3="SELECT COUNT(*) as total FROM guest_lectures_delivered WHERE id = '$id' ";

 $result3=mysqli_query($con,$sql3);
 // echo ($result);
 $data3=mysqli_fetch_assoc($result3);
  
  //echo $data2['total'];
 ?>
 <br>
 <div class="card">
 <div class="container">
 <b><center> <h3> Total Guest Lectures Delivered: <input type="text" class="form-control" name="6"  value="<?php echo $data3['total']; ?>"readonly>  </h3></center></b>

 </div>
 </div>
 </div>
 <?php
 $sql4="SELECT COUNT(*) as total FROM patents WHERE id = '$id' ";

 $result4=mysqli_query($con,$sql4);
 // echo ($result);
 $data4=mysqli_fetch_assoc($result4);
  
  //echo $data2['total'];
 ?>

 <br>
 <div class="card">
 <div class="container">
 <b><center> <h3> Total Patents: <input type="text" class="form-control" name="7"  value="<?php echo $data4['total']; ?>"readonly>  </h3></center></b>

 </div>
 </div>
 </div>
 <?php
 $sql5="SELECT COUNT(*) as total FROM book_chapter WHERE id = '$id' ";

 $result5=mysqli_query($con,$sql5);
 // echo ($result);
 $data5=mysqli_fetch_assoc($result5);
  
  //echo $data2['total'];
 ?>
 <br>
 <div class="card">
 <div class="container">
 <b><center> <h3> Total Book Chapters: <input type="text" class="form-control" name="8"  value="<?php echo $data5['total']; ?>"readonly>  </h3></center></b>

 </div>
 </div>
 </div>
 <?php
 $sql6="SELECT COUNT(*) as total FROM other_certifications_completed WHERE id = '$id' ";

 $result6=mysqli_query($con,$sql6);
 // echo ($result);
 $data6=mysqli_fetch_assoc($result6);
  
  //echo $data2['total'];
 ?>

 <br>
 <div class="card">
 <div class="container">
 <b><center> <h3> Total certifications completed: <input type="text" class="form-control" name="9"  value="<?php echo $data6['total']; ?>"readonly>  </h3></center></b>

 </div>
 </div>
 </div>

 <div class="card">
 <div class="container">
 <b><center> <h3><input  name="register" class="form-control" type="submit" style="color:black;"> </h3></center></b>

 
 </div>
 </div>
 </div>

 </form>
 
 <?php //champa
//  $sqql= "UPDATE achieved_targets
// SET email = '$email', jour_pub_plan = '$data['total']', workshops= '$data1['total']',
// guest_lec_webi_con ='$data2['total']', guest_lec_deli='$data3['total']', patents='$data4['total']',book_chaps='$data5['total']',course_certi='$data6['total']'
// WHERE id = '$id' ";
// $result7=mysqli_query($con,$sqql);
          ?>


 
<b><center> <button onclick="window.print();">Print</button></center></b>




</body>
</html> 
