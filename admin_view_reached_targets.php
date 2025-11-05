































































<?php  
  include("title.html");
 ?>
<?php
include('dbconnection.php');
 session_start();
 $email = $_SESSION['email'];
echo ($email);

 
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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="dist/css/style.min.css" rel="stylesheet">
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
.container1{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 27%;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    padding: 3px 16px;
    float: right; */
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
 
<h2 class="left"> Achieved targets</h2>
<div class="card">
<?php


    
?>
  <form class="mt-4" action="" method="POST">
  
 
 <div class="container">
  <b><center> <h3> Total Journal Paper Published:  <?php echo $data['total']; ?> </h3></center></b>
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
  <b><center> <h3> Total Workshops Organized:  <?php echo $data1['total']; ?> </h3></center></b>
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
  <b><center> <h3> Total Conference Organized:  <?php echo $data2['total']; ?> </h3></center></b>
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
  <b><center> <h3> Total Guest Lectures Delivered:  <?php echo $data3['total']; ?> </h3></center></b>
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
  <b><center> <h3> Total Patents:  <?php echo $data4['total']; ?> </h3></center></b>
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
  <b><center> <h3> Total Book Chapters:  <?php echo $data5['total']; ?> </h3></center></b>
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
  <b><center> <h3> Total certifications completed:  <?php $data6['total']; ?> </h3></center></b>
 </div>
 </div>
 </div>

 <div class="card">
 <div class="container">
     <center><input  name="register"  type="submit" style="color:black; width="15px;"></center>
 
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
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
            
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                   
                        <div class="card1" >
                       
                            <div class="card-body">
                                <form class="mt-4" action="" method="POST">
                                
                                    <div class="form-group"  >
                                    <label for="">ID:</label>
                                        <input type="text" class="form-control" name="1"  value="<?php echo $id; ?>"readonly>
                                        <hr >
                                         <label for="">Email:</label>
                                        <input type="text" class="form-control" name="2"  value="<?php echo $email; ?>"readonly>
                                        <hr >
                                        <label for="">Total Journal Paper Published:</label>
                                        <input type="text" class="form-control" name="3"value="<?php echo $data['total']; ?>"readonly>
                                        <hr >
                                        <label for="">Total Workshops Organized:</label>
                                        <input type="text" class="form-control" name="4"value="<?php echo $data1['total']; ?>"readonly>
                                        <hr>
                                        <label for="">Total Conference Organized:</label>
                                        <input type="text" class="form-control" name="5" value="<?php echo $data2['total']; ?>"readonly>
                                        <hr>
                                        <label for="">Total Guest Lectures Delivered:</label>
                                        <input type="text" class="form-control" name="6" value="<?php echo $data3['total']; ?>"readonly>
                                        <hr>
                                        <label for="">Total Patents:</label>
                                        <input type="text" class="form-control" name="7" value="<?php echo $data4['total']; ?>"readonly>
                                        <hr>
                                        <label for="">Total Book Chapters:</label>
                                        <input type="text" class="form-control" name="8" value="<?php echo $data5['total']; ?>"readonly>
                                        <hr>
                                        <label for="">Total certifications completed:</label>
                                        <input type="text" class="form-control" name="9" value="<?php echo $data6['total']; ?>"readonly>
                                        <hr>
                                        <input  name="register" class="form-control" type="submit" style="color:black;">

                                    </div>
                                    
                                </form>
                            </div>
                         
                        </div>
                           
                    </div>
                   
                    </div>
                    </div>


 




</body>
</html> 


























