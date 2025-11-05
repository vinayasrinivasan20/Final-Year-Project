<?php
include('dbconnection.php');
include('title.html');
 session_start();
 $email = $_SESSION['email'];
echo ($email);

 
 
 
 
 
  $result = mysqli_query($con,"SELECT * FROM awards_honours_received where email='$email'");


?>





<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- Custom CSS -->
    <!-- <link href="dist/css/style.min.css" rel="stylesheet"> -->
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
     body{
        background-color: white;
    }
    th{
        color: white;
    }
</style>
</head>


                <!-- <div class="container-fluid">
                 <div class="row">

                 <div class="col-12">
                 <div class="card">
                <div class="card-body"> -->
                <div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
                                <h4 class="card-title">Honours Received</h4>
                              
                            </div>
                            <div class="table-responsive">
                           
  
                                <table class="table table-bordered">
                                    <thead>
                                        <tr><th scope="col">Faculty ID</th>
                                        <th scope="col">Faculty Email</th>
                                            <th scope="col">Name of the Faculty:</th>
                                            <th scope="col">Title of the Award:</th>
                                            <th scope="col">Name of the awarding Body :</th>
                                            <th scope="col">Date:</th>
                                            <th scope="col">Any other Details :</th>
                                           
                                           
                                            
                                          
                                           
                                        </tr>
                                    </thead>
                                    <?php

while($row = mysqli_fetch_array($result)) {


?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $row["id"]; ?></th>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["name_of_faculty"];?></td>
                                            <td><?php echo $row["title_of_the_award"]; ?></td>
                                            <!-- <td><?php echo $row["name_of_the_awarding_body"]; ?></td> -->
                                            <td><?php echo $row["date"]; ?></td>
                                            <td><?php echo $row["orther_det"]; ?></td>
                                            
                                           
                                            
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
            
            