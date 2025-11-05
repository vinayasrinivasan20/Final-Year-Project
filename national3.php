
<?php  
  include("title.html");
 ?>
<?php
include('dbconnection.php');
 session_start();
 
 $id = $_SESSION['id'];
 echo ($id);
//  $result = mysqli_query($con,"SELECT COUNT(*) FROM journal_paper_published WHERE id ='$id'");
 
//  $row = mysql_fetch_assoc($result);
 
//  SELECT COUNT(*)
//  FROM journal_paper_published
//  WHERE id = '1'

 $sql="SELECT COUNT(*) as total
 FROM  webinars_guest_lectures_conference_org
 WHERE (id = '$id' )
 AND type_of_the_conference LIKE 'national%'";

$result=mysqli_query($con,$sql);
// echo ($result);
$data=mysqli_fetch_assoc($result);
 echo "$data";
 echo $data['total'];
?>









<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>




<center>

<div class="card">
 
 <div class="container">
 <!-- <a href="international3.php">  <h4><b><h2>International:<?php echo $data['total']; ?> </h2></b></h4> </a> -->
   <p></p> 
 </div>
</div></center>

<center>

<div class="card">
 
 <div class="container">
 <a href="national3.php">  <h4><b><h2>National: <?php echo $data['total']; ?></h2></b></h4> </a>
   
   <p></p> 
 </div>
</div>
</center>


</body>
</html> 


