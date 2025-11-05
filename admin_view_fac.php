<?php


include("title.html");
include('dbconnection.php');
 session_start();
 $email= $_SESSION['email'];
 $result = mysqli_query($con,"SELECT * FROM user ");



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <link rel="stylesheet" href="style.css">
  <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
 <style>
      .card{
        /* width: 150%;
        display: flex;
  justify-content: center;
  flex-direction: row;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center; */
 
 
  /* width: 150%; */
        margin-left: 80%;      
    /* margin-right: 100%; */
    width: 150%;

    }


    .nav-item a{
        font-size: 18px;
        color: black;
       
    }
    * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
}

.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}



.container1{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 150%;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    padding: 3px 16px;
    float: right; 
    /* margin-right: 100%; */
    /* /* margin: 0 auto; */
} 
 </style> 
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
 
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <span class=".icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class=".input-group-text" id="search">
                  <i class=".icon-search"></i>
                </span>
              </div>
              
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="download.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
              <a class="dropdown-item" href="adminlogout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
        </ul>
        
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 20px;">
              
              <span class="menu-title"> <h4 style="font-size: 17px;">Dashboard</h4></span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" style="font-size: 15px;" data-toggle="collapse" href="admin_view_fac.php" aria-expanded="false" aria-controls="ui-basic">
              
              <span class="menu-title"><h4 style="font-size: 17px;">View Faculty</h4></span>
              
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
               <!-- <li class="nav-item"> <a class="nav-link" href="add_temp.php">Add Templates</a></li>
                 <li class="nav-item"> <a class="nav-link" href="viewauthor.php">View Templates</a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="view_sub.php" aria-expanded="false" aria-controls="form-elements">
              
              <span class="menu-title"><h4 style="font-size: 17px;">View Submitted Targets</h4></span>
              
            </a>
           
           
          </li>
          <li class="nav-item">
           
            <a class="nav-link" data-toggle="collapse" href="ad_view_achie.php" aria-expanded="false" aria-controls="form-elements">
              
              <span class="menu-title"><h4 style="font-size: 17px;">View Achieved Targets</h4></span>
              
            </a>
           
          </li>
         

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="index.php" aria-expanded="false" aria-controls="charts">
              
              <span class="menu-title"><h4 style="font-size: 17px;">Log Out</h4></span>
              
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add_price.php">Add Price</a></li>
                <li class="nav-item"> <a class="nav-link" href="approverequest.php">View Price List</a></li>
              </ul>

            </div>
          </li>
          
         
          
          
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <center><h3 class="font-weight-bold">Welcome Admin....!</h3></center>
                  
                </div>
                
              </div>
            </div>
          </div>
         
         
                <!-- *************************************************************** -->
                                <!-- ***************************************************************
                  <div class="row">

                             
                    <div class="column">
                        
                       <div class="card1">
                         <div class="container1">
                         <b><center> <h3> Total Workshops Organized:   </h3></b>
                         </div>
                        </div>

                        
                   
                    </div> 
                    <div class="column">
                        
                       <div class="card1">
                         <div class="container1">
                         <b><center> <h3> Total Workshops Organized:   </h3></b>
                         </div>
                        </div>

                        
                   
                    </div>
                    <div class="column">
                        
                       <div class="card1">
                         <div class="container1">
                         <b><center> <h3> Total Workshops Organized:   </h3></b>
                         </div>
                        </div>

                        
                   
                    </div>

                    <div class="column">
                        
                       <div class="card1">
                         <div class="container1">
                         <b><center> <h3> Total Workshops Organized:   </h3></b>
                         </div>
                        </div>

                        
                   
                    </div>
                         
                         
                    
                  </div> -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- fac pro pics -->
                <!-- *************************************************************** -->
                <div class="row">

                             <?php
                               while($rows=mysqli_fetch_array($result)){
    
    
                                   $fa_email = $rows['email'];
                                     $faculty = $rows['pro_image'];
                                  $faculty_name = $rows['name'];
    
                                  ?>
                    <div class="column">
                        
                    <img src="profile/<?php echo $faculty;?>" alt="Snow" style="width:100%">
                   <center><a href="fac_profile.php?email=<?php echo  $fa_email;?>"><h5 style="color: black;">Name:<?php echo $faculty_name;?> </h5></a></center> 
                   
                    </div>
                   
  
   
  
                    
                    <?php

}
?>
   
                  </div>
                </div>
                
                

                </div>
                <!-- *************************************************************** -->
                <!-- End Sales Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
               <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                
                <!-- *************************************************************** -->
            </div>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

