<?php  
  include("title.html");
 ?>
<?php
include('dbconnection.php');
 session_start();
 
  $email = $_SESSION['email'];
 //echo ($email);
 if(isset($_GET['email'])){
     $f_email = $_GET['email'];
     //echo($f_email);
 
     $get_pro = "SELECT * FROM targets WHERE email ='$f_email'";
     $run_pro = mysqli_query($con, $get_pro);

 }
 /* 
 if(isset($_GET['apart_name'])){
  $fname = $_GET['apart_name'];
  $get_pro = "select * from flats where apart_name='$fname'";
  
  
}
 */

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<h2> Set targets</h2> <a href="achieved_targets.php?email=<?php echo  $f_email;?>"> 
<h3 class="left"> Achieved targets</h3></a> 
<div class="card">
<?php
while($row_pro=mysqli_fetch_array($run_pro)){
   $check_email = $row_pro['email'];
    $jpp = $row_pro['jour_pub_plan'];
   $wrk = $row_pro['workshops'];
  $guest = $row_pro['guest_lec_webi_con'];
  $gdel = $row_pro['guest_lec_deli'];
  $pts = $row_pro['patents'];
  $book = $row_pro['book_chaps'];
  $cc = $row_pro['course_certi'];


    
?>
 
 <div class="container">
  <b><center> <h3> Total Journal Paper Planned:  <?php echo $jpp; ?> </h3></center></b>
 </div>
 </div>
</div>

 
 <br>
 <div class="card">
 <div class="container">
  <b><center> <h3> Total Workshops Organized:  <?php echo $wrk; ?> </h3></center></b>
 </div>
 </div>
 </div>
 <a href="features_page.php?email=<?php echo  $f_email;?>"> 
 <h3 class="left"> View Features</h3></a>
 <br>
 <div class="card">
 <div class="container">
  <b><center> <h3> Total Conference Organized:  <?php echo $guest; ?> </h3></center></b>
 </div>
 </div>
 </div>

 <br>
 <div class="card">
 <div class="container">
  <b><center> <h3> Total Guest Lectures Delivered:  <?php echo $gdel; ?> </h3></center></b>
 </div>
 </div>
 </div>


 <br>
 <div class="card">
 <div class="container">
  <b><center> <h3> Total Patents:  <?php echo $pts; ?> </h3></center></b>
 </div>
 </div>
 </div>

 <br>
 <div class="card">
 <div class="container">
  <b><center> <h3> Total Book Chapters:  <?php echo $book; ?> </h3></center></b>
 </div>
 </div>
 </div>


 <br>
 <div class="card">
 <div class="container">
  <b><center> <h3> Total certifications completed:  <?php echo  $cc; ?> </h3></center></b>
 </div>
 </div>
 </div>

 <?php
}
          ?>






<b><center> <button onclick="window.print();">Print</button></center></b>


</body>
</html> 
