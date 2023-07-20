<?php
if(!isset($_session))
session_start();

if (!isset($_SESSION['usernames']))
header('LOCATION: '.'../adminlogin.php');

$user = $_SESSION['usernames'];



include('../connection.php');

///////////////////////////////////////////////////

$query= "SELECT * FROM category";
	 	 $result = mysqli_query($con, $query);
		 
		 
//////////////////////////////////////


$query= "SELECT * FROM teacher";
	 	 $resulta = mysqli_query($con, $query);
		 
		 
//////////////////////////////////////
$query= "SELECT Sn FROM adminuser order by Sn DESC";
$resultc = mysqli_query($con, $query);
$row= mysqli_fetch_array($resultc);
$lastid = $row['Sn'];

if(empty($lastid)){
	
	$number = 'admin1';
}else{
	
	$idd = str_replace('admin','',$lastid);
	$id =($idd+1);
	$number = 'admin'.$id;
}

///////////////////////////////////////

if(isset($_POST['submit'])){
	
	



$categoryid = $_POST['categoryid'];
$teacherid = $_POST['teacherid'];
$username = $_POST['username'];
$password = $_POST['password'];
$date = date("dS F, Y.");


$adminuserid = $number;
//$sqli = "INSERT INTO category SET  pro_id = '', prefield = '$prefield',postfield = '$postfield',category_name = '$category_name = '$bathroom', date = '$date'";

//$sql="INSERT INTO category (pro_id, category_name, prefield, postfield,date) VALUES ('','$category_name','$prefield','$postfield','$date')";
	//$query = @mysql_query($con, $sql);
	//if (!$query) die( "query Insert error ". mysql_error());
	//echo $sql;
	//header('Location: '.'thank.php');
$sql = "INSERT INTO adminuser (Sn,adminuserid,categoryid,teacherid,username, password,date )
VALUES ('','$adminuserid','$categoryid','$teacherid','$username','$password','$date')";

if (mysqli_query($con, $sql)) {
  header('Location: '.'thankadmin.php');

}
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link href="assets/font/css8f03.css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Fix Footer CSS -->
    <link type="text/css" href="assets/vendor/fix-footer.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">


    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">


    <!-- Preloader -->
    <link type="text/css" href="assets/css/preloader.css" rel="stylesheet">


    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">






</head>



































<body class="layout-app ">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page-content">

            <!-- Header -->






            <div class="navbar navbar-expand pr-0 navbar-light border-bottom-2" id="default-navbar" data-primary>
                <!-- Navbar toggler -->
                <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
                    <span class="material-icons">short_text</span>
                </button>

                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand mr-16pt d-lg-none">

                    <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                        <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" alt="logo" class="img-fluid" /></span>

                    </span>

                    <span class="d-none d-lg-block">CRS Elearning logo</span>
                </a>


<h6>You are welcome <?php echo($_SESSION['usernames']);?> to Admin</h6>




                <div class="flex"></div>


                <!-- Toggler -->


                <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">


                    <!-- Notifications dropdown -->
                    <div class="nav-item dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Messages" data-placement="bottom" data-boundary="window">
                        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
                            <i class="material-icons icon-24pt">mail_outline</i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div data-perfect-scrollbar class="position-relative">
                                <div class="dropdown-header"><strong>Messages</strong></div>
                                <div class="list-group list-group-flush mb-0">

                                    

                                    

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END Notifications dropdown -->


                    <!-- Notifications dropdown -->
                    <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Notifications" data-placement="bottom" data-boundary="window">
                        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
                            <i class="material-icons">notifications_none</i>
                            <span class="badge badge-notifications badge-accent">0</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div data-perfect-scrollbar class="position-relative">
                                <div class="dropdown-header"><strong>System notifications</strong></div>
                                <div class="list-group list-group-flush mb-0">

                                    

                                        </span>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END Notifications dropdown -->


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown" data-caret="false">

                            <span class="avatar avatar-sm mr-8pt2">

                                <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>

                            </span>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><?php echo($_SESSION['usernames']);?></a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>




            <!-- // END Header -->



            <div class="pt-32pt">
                <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0">Admin User</h2>

                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>

                                <li class="breadcrumb-item active">

                                    Add Admin User

                                </li>

                            </ol>

                        </div>
                    </div>


                    <div class="row" role="tablist">
                        <div class="col-auto">
                        </div>
                    </div>

                </div>
            </div>

            <div class="container page__container page-section">

                <div class="page-separator">
                </div>
				<div class="col-lg-8">
                <form method="post" action="addadmin.php">
								<div class="form-group">
								<label class="form-label" for="name">Select Category:</label>
								<label for="categoryid"></label>
                            <select name="categoryid" class="form-control"  id="categoryid">
                            <?php  while ($row=mysqli_fetch_array($result)){
 echo "<option value='". $row['categoryid'] ."'>" .$row['categoryname'] ."</option>"; }
	?>
                            </select>
							</div>
								<div class="form-group">
								<label class="form-label" for="name">Select Teacher:</label>
								<label for="teacherid"></label>
                            <select name="teacherid" class="form-control"  id="teacherid">
							 <option value="-">-</option>
                <?php  while ($row=mysqli_fetch_array($resulta)){
 echo "<option value='". $row['teacherid'] ."'>" .$row['teachername'] ."</option>"; }
	?>
                            </select>
							</div>
							<div class="form-group">
                                    <label class="form-label" for="username">User Name:</label>
                                    <input name="username" id="username" type="text" class="form-control" placeholder="User Name ...">
                                </div>
                                <div class="form-group mb-24pt">
                                    <label class="form-label" for="password">Password:</label>
                                    <input name="password" id="password" type="password" class="form-control" placeholder="Your password ...">
                                </div>
								<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Create account">
								<input class="btn btn-primary" type="reset" name="Reset" id="submit" value="Reset">
                            </form>
</div>
                <div class="row mb-8pt">
                    <div class="col-lg-6">

                        
                    </div>
                    <div class="col-lg-6">

                       
                    </div>
                </div>

            </div>




            <div class="js-fix-footer2 bg-white border-top-2">
                <div class="container page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon" src="assets/images/logo/black-70%402x.png" width="30" alt="Luma"> CRS Elearning
                    </p>
                    <p class="measure-lead-max text-50 small mr-8pt">CRS E-Learning is a beautifully </p>
                    <p class="mb-8pt d-flex">
                       <a href="aboutus.php" class="text-70 text-underline mr-8pt small">About Us</a>
                        <a href="contactus.php" class="text-70 text-underline small">Contact Us</a>
                    </p>
                    <p class="text-50 small mt-n1 mb-0">Copyright <?php echo date("Y"); ?> &copy; All rights reserved.</p>
                </div>
            </div>


        </div>
        <!-- // END drawer-layout__content -->




        <!-- drawer -->
        <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark-dodger-blue sidebar-left" data-perfect-scrollbar>


                    <div class="d-flex align-items-center navbar-height">
                        <form action="http://luma.humatheme.com/index.html" class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                            <input type="text" class="form-control pl-0" placeholder="Search">
                            <button class="btn" type="submit"><i class="material-icons">search</i></button>
                        </form>
                    </div>



                    <a href="index.html" class="sidebar-brand ">
                        <!-- <img class="sidebar-brand-icon" src="assets/images/illustration/teacher/128/white.svg" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title rounded bg-primary"><img src="icons/007-cogwheel.png" class="img-fluid" alt="logo" /></span>

                        </span>

                        <span>Admin Logo</span>
                    </a>


                    <div class="sidebar-heading">Applications</div>
                    <ul class="sidebar-menu">

<li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../index.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
<li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="admindashboard.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                                <span class="sidebar-menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#enterprise_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                Admin User
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="enterprise_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addadmin.php">
                                        <span class="sidebar-menu-text">Add Admin User</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deleteadmin.php">
                                        <span class="sidebar-menu-text">Delete Admin user</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="displayuser.php">
                                        <span class="sidebar-menu-text">View Admin User</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="updateadmin.php">
                                        <span class="sidebar-menu-text">Update Admin user</span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="documents.html">
    <span class="sidebar-menu-text">Documents</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="attendance.html">
    <span class="sidebar-menu-text">Attendance</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="recruitment.html">
    <span class="sidebar-menu-text">Recruitment</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="payroll.html">
    <span class="sidebar-menu-text">Payroll</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="training.html">
    <span class="sidebar-menu-text">Training</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="employee-profile.html">
    <span class="sidebar-menu-text">Employee Profile</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="accounting.html">
    <span class="sidebar-menu-text">Accounting</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="inventory.html">
    <span class="sidebar-menu-text">Inventory</span>
  </a>
</li> -->
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#productivity_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                Category
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="productivity_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addcategory.php">
                                        <span class="sidebar-menu-text">Add Category</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deletecategory.php">
                                        <span class="sidebar-menu-text">Delete Category</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="displaycategory.php">
                                        <span class="sidebar-menu-text">View Category</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled" href="updatecategory.php">
                                        <span class="sidebar-menu-text">Update Category</span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="task-details.html">
    <span class="sidebar-menu-text">Task Details</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="team-members.html">
    <span class="sidebar-menu-text">Team Members</span>
  </a>
</li> -->
                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#ecommerce_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                                Teachers
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="ecommerce_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addteacher.php">
                                        <span class="sidebar-menu-text">Add Teacher</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled" href="deleteteacher.php">
                                        <span class="sidebar-menu-text">Delete Teacher</span>
                                    </a>
                                </li>
								<li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled" href="updateteacher.php">
                                        <span class="sidebar-menu-text">View Teacher</span>
                                    </a>
                                </li>
								<li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled" href="displayteacher.php">
                                        <span class="sidebar-menu-text">Update Teacher</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                       
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#cms_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                                Courses
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="cms_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addcourses.php">
                                        <span class="sidebar-menu-text">Add Courses</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deletecourses.php">
                                        <span class="sidebar-menu-text">Delete Courses</span>
                                    </a>
                                </li>
								<li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="displaycourses.php">
                                        <span class="sidebar-menu-text">View Courses</span>
                                    </a>
                                </li>
								<li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="updatecourses.php">
                                        <span class="sidebar-menu-text">Update Courses</span>
                                    </a>
                                </li>
                            </ul>
                        </li>



                </div>
            </div>
        </div>
        <!-- // END drawer -->


    </div>
    <!-- // END drawer-layout -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Fix Footer -->
    <script src="assets/vendor/fix-footer.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>


    <!-- Global Settings -->
    <script src="assets/js/settings.js"></script>

    <!-- Moment.js -->
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/moment-range.min.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- UI Charts Page JS -->
    <script src="assets/js/chartjs-rounded-bar.js"></script>
    <script src="assets/js/chartjs.js"></script>

    <!-- Chart.js Samples -->
    <script src="assets/js/page.instructor-dashboard.js"></script>

    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>

</body>


<!-- Mirrored from luma.humatheme.com/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:45:25 GMT -->
</html>