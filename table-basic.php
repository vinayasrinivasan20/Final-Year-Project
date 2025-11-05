           <!-- Container fluid  -->


           <head>
           <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

           </head>
           <?php  
  include("title.html");
 
 
 ?>
 <?php
include('dbconnection.php');
 session_start();
 $email= $_SESSION['email'];

$result = mysqli_query($con,"SELECT * FROM user where email='$email'");
?>


            <?php
            // $get_pro ="select targets.id,user.email,targets.email,targets.jour_pub_plan,targets.workshops,targets.guest_lec_webi_con,
            // targets.guest_lec_deli,targets.patents,targets.course_certi FROM user inner join targets On user.email=targets.email;"
            // // "select targets.id,user.email,targets.email,targets.jour_pub_plan,targets.workshops,targets.guest_lec_webi_con,
            // // targets.guest_lec_deli,targets.patents,targets.course_certi FROM user inner join targets On user.email=targets.email;"
            // $run_pro = mysqli_query($con,$get_pro);
            // $count_pro = mysqli_num_rows($run_pro);
            // if($count_pro==0){
            //     echo "<h2> No Product found in selected criteria </h2>";
            // }
            // else {
            //     $i = 0;
            //     while ($row_pro = mysqli_fetch_array($run_pro)) {
            //         $t1= $row_pro['id'];
            //         $t2 = $row_pro['email'];
            //         $t3 = $row_pro['jour_pub_plan'];
            //         $t4 = $row_pro['workshops'];
            //         $t5 = $row_pro['guest_lec_webi_con'];
            //         $t6 = $row_pro['guest_lec_deli'];
            //         $t7 = $row_pro['patents'];
            //         $t8 = $row_pro['book_chaps'];
            //         $t9 = $row_pro['course_certi'];

            //    include("nav_view.php");
              
 
 

$result = mysqli_query($con,"SELECT * FROM targets where email='$email'");


?>  
 <?php
        while($row_pro=mysqli_fetch_array($result)){
    $fid = $row_pro['id'];
    // $fname = $row_pro['name'];
    $facemail = $row_pro['email'];
    $fid1 = $row_pro['jour_pub_plan'];
    $fid2 = $row_pro['workshops'];
    $fid3 = $row_pro['guest_lec_webi_con'];
    $fid4 = $row_pro['guest_lec_deli'];
    $fid5 = $row_pro['patents'];
    $fid6 = $row_pro['book_chaps'];
    $fid7 = $row_pro['course_certi'];
//    echo $fid;
//   $frent11 = $row_pro['flat_rent'];
//   $felc11 = $row_pro['flat_elbill'];
//   $fmain11 = $row_pro['flat_maincharge'];
  
//   $funame = $row_pro['username'];
//   $fumail= $row_pro['useremail'];
//   $fcnum = $row_pro['user_ph'];
  
    
?>    
                   
            <!-- ============================================================== -->
            <!-- <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"> --> 
                            <div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
                                <h4 class="card-title"></h4>
                                <h6 class="card-subtitle"></h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                             <!-- <th scope="col">Name</th> -->
                                             <th scope="col">Email</th>
                                            <th scope="col">Journal PUBLICATIONS Planned</th>
                                            <th scope="col">FDP/Workshops</th>
                                            <th scope="col">Webinars/Guest Lectures/Conference Organized</th>
                                            <th scope="col">Guest Lectures Delivered</th>
                                            <th scope="col">Patents</th>
                                            <th scope="col">Book Chapters</th>
                                            <th scope="col"> Courses</th>
                                            <!-- <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th>
                                            <th scope="col">Heading</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?php echo $fid;?></th>
                                          <!-- <td> <?php echo $fname;?></td> -->
                                          <td> <?php echo$facemail;?></td> 
                                            <td><?php echo $fid1;?></td>
                                            <td><?php echo $fid2;?></td>
                                            <td><?php echo $fid3;?></td>
                                            <td><?php echo $fid4;?></td>
                                            <td><?php echo $fid5;?></td>
                                            <td><?php echo $fid6;?></td>
                                            <td><?php echo $fid7;?></td>
                                           
                                        </tr>
                                       
                                       
                                    </tbody>
                                </table>
                                <?php

}
?>
       
                            </div>
                            <b><center> <button onclick="window.print();">Print</button></center></b>

                           
                </div>
                   <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            
           <!-- ============================================================== -->
           <div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>

</html>