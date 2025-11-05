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

  $get_pro = "SELECT * FROM achieved_targets WHERE email ='$f_email'";
  $run_pro = mysqli_query($con, $get_pro);

}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

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
/* body  {
  background-image: url("images.jfif");
  /* background-color: pink; */
 
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
  <?php
  for($i=0;$i<1;$i++){

  }
  ?>

  <h2 class="vleft"> Achieved targets</h2>
<!-- <div class="card"> -->
<?php
while($row_pro=mysqli_fetch_array($run_pro)){
   $idd = $row_pro['id'];
    $jpp = $row_pro['email'];
   $wrk = $row_pro['jour_pub_plan'];
  $guest = $row_pro['workshops'];
  $gdel = $row_pro['guest_lec_webi_con'];
  $pts = $row_pro['guest_lec_deli'];
  $book = $row_pro['patents'];
  $cc = $row_pro['book_chaps'];
  $cc1 = $row_pro['course_certi'];


    
?>
 <div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
                                <h4 class="card-title">View Achieved Target</h4>
                              
                            </div>
                            <div class="table-responsive">
                           
  
                                <table class="table table-bordered">
                                    <thead>
                                        <tr><th scope="col">Faculty ID</th>
                                        <th scope="col">Faculty Email</th>
                                            <th scope="col">JOURNAL PUBLICATIONS PLANNED</th>
                                            <th scope="col">WORKSHOPS/FDP TO BE ORGANIZED</th>
                                            <th scope="col">CONFERENCES TO BE ORGANIZED</th>
                                            <th scope="col">GUEST LECTURES TO BE DELIVERED</th>
                                            <th scope="col">PATENTS</th>
                                            <th scope="col">BOOK CHAPTERS PLANNED</th>
                                            <th scope="col">COURSES / COURSERA CERTIFICATIONS</th>
                                           
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $idd; ?></th>
                                            <td><?php echo $jpp; ?></td>
                                            <td><?php echo $wrk; ?></td>
                                            <td><?php echo $guest; ?></td>
                                            <td><?php echo $gdel; ?></td>
                                            <td><?php echo $pts; ?></td>
                                            <td><?php echo $book;  ?></td>
                                            <td><?php echo $cc; ?></td>
                                            <td><?php echo $cc1; ?></td>
                                               <?php
 
}

 
?>
                                 
                                    </tbody>
                                     
                                </table>
                                <b><center> <button onclick="window.print();">Print</button></center></b>
                               
                            </div>
                        </div>
                        





                    </div>
                    </div>
                    </div>
            
            