<?php  
  include("title.html");
  include('dbconnection.php');
  $result = mysqli_query($con,"SELECT * FROM achieved_targets");
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
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


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
                                    <?php
$jn=0;
$wn=0;
$gsnw=0;
$gsnd=0;
$ptn=0;
$bcn=0;
$ccn=0;
while($row = mysqli_fetch_array($result)) {


?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $row["id"]; ?></th>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["jour_pub_plan"];$jn+=$row["jour_pub_plan"] ?></td>
                                            <td><?php echo $row["workshops"]; $wn+=$row["workshops"]?></td>
                                            <td><?php echo $row["guest_lec_webi_con"]; $gsnw+=$row["guest_lec_webi_con"]?></td>
                                            <td><?php echo $row["guest_lec_deli"]; $gsnd+=$row["guest_lec_deli"] ?></td>
                                            <td><?php echo $row["patents"];  $ptn+=$row["patents"]?></td>
                                            <td><?php echo $row["book_chaps"];  $bcn+=$row["book_chaps"]?></td>
                                            <td><?php echo $row["course_certi"];  $ccn+=$row["course_certi"]?></td>
                                               <?php
 
}
?></tr><tr><td></td><td>Total</td><td><?php echo $jn ?></td><td><?php echo  $wn ?></td><td><?php echo  $gsnw ?></td>
<td><?php echo  $gsnd ?></td><td><?php echo  $ptn?></td><td><?php echo  $bcn ?></td><td><?php echo  $ccn ?></td></tr>
<?php
 
?>
                                 
                                    </tbody>
                                     
                                </table>
                                <b><center> <button onclick="window.print();">Print</button></center></b>
                               
                            </div>
                        </div>
                        





                    </div>
                    </div>
                    </div>
            
            