<?php
session_start();

if (!isset($_SESSION['usernames']) && !isset($_SESSION['passwords']))
header('LOCATION: '.'../adminlogin.php');

$user = $_SESSION['usernames'];
$pass = $_SESSION['passwords'];

//dbase connection=======================================
include('../connection.php');
//========================================================

//SELECT * FROM `cost` WHERE `username` LIKE 'idowu' AND `password` LIKE 'sunday' 

$query= "SELECT * FROM adminuser WHERE username = '$user' AND password = '$pass'";

//$query= "SELECT * FROM `cost` WHERE `username` LIKE '$user' AND `password` LIKE '$pass'";
	 	 $result = mysqli_query($con, $query);

$row=mysqli_fetch_array($result);

//$num = (int) "10";

// while ($row=mysqli_fetch_array($result)){
	$gender = $row['gender']; 
	$username = $row['username'];
	$email = $row['email'] ;
	$teacherprofile = $row['teacherprofile']; 
	$rank = $row['rank'];
	$asp = $row['asp'] ;
	$teacherid= $row['teacherid'];
	$teacherid1=(int)$teacherid;
	//$user_id = $row['user_id'];
	//$user_id2=(int)$user_id;
	//echo $insurance_id;
	
	//echo $phone;
	//echo $gender;
	
	
	$querya = "SELECT * FROM teacher WHERE teacherid = $teacherid1";
	 	 $resulta = mysqli_query($con, $querya);
	//echo $querya;
	
	$rowa=mysqli_fetch_array($resulta);
	//$insurance_id = $row['insurance_id'];
	$teachername = $rowa['teachername'];
	
	//echo 'Firstname '. $user_f_name;
	///////////////////////////////////////////////////////////
	
	//$queryb = "SELECT * FROM report WHERE regulatory_id = $regulatory_id1 AND reply = 'NO'";
	 	// $resultb = mysqli_query($con, $queryb);
	//echo $querya;
	//$row=mysqli_fetch_array($result);
	
	
	///////////////////////////////////////////////////////////
	
	
	
// }


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

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

                    <span class="d-none d-lg-block">Teachers Pannel</span>
                </a>



<h6>You are welcome <?php echo $teachername;?> to Teachers Pannel</h6>

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
							<a class="dropdown-item" href="#"><?php echo $teachername;?></a>
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="editprofile.php">Edit Profile</a>
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
                            <h2 class="mb-0">Dashboard</h2>

                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                <li class="breadcrumb-item active">

                                    Dashboard

                                </li>

                            </ol>

                        </div>
                    </div>


                    <div class="row" role="tablist">
                        <div class="col-auto">
                            <a href="instructor-earnings.html" class="btn btn-outline-secondary">Earnings</a>
                        </div>
                    </div>

                </div>
            </div>
















            <div class="page-section border-bottom-2">
                <div class="container page__container">

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card border-1 border-left-3 border-left-accent text-center mb-lg-0">
                                <div class="card-body">
                                    <h4 class="h2 mb-0">&dollar;1,569.00</h4>
                                    <div>Earnings this month</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center mb-lg-0">
                                <div class="card-body">
                                    <h4 class="h2 mb-0">&dollar;3,917.80</h4>
                                    <div>Account Balance</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card text-center mb-lg-0">
                                <div class="card-body">
                                    <h4 class="h2 mb-0">&dollar;10,211.50</h4>
                                    <div>Total Sales</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container page__container page-section">

                <div class="page-separator">
                    <div class="page-separator__text">Earnings</div>
                </div>
                <div class="card card-body mb-32pt">
                    <div id="legend" class="chart-legend mt-0 mb-24pt justify-content-start"></div>
                    <div class="chart" style="height: 320px;">
                        <canvas id="earningsChart" class="chart-canvas js-update-chart-bar" data-chart-legend="#legend" data-chart-line-background-color="gradient:primary,gray" data-chart-prefix="$" data-chart-suffix="k"></canvas>
                    </div>
                </div>

                <div class="row mb-8pt">
                    <div class="col-lg-6">

                        <div class="page-separator">
                            <div class="page-separator__text">Transactions</div>
                        </div>
                        <div class="card">
                            <div data-toggle="lists" data-lists-values='[
      "js-lists-values-course", 
      "js-lists-values-document",
      "js-lists-values-amount",
      "js-lists-values-date"
    ]' data-lists-sort-by="js-lists-values-date" data-lists-sort-desc="true" class="table-responsive">
                                <table class="table table-flush table-nowrap">
                                    <thead>
                                        <tr>
                                            <th colspan="2">
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-course">Course</a>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-document">Document</a>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-amount">Amount</a>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Date</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">




                                        <tr>
                                            <td>
                                                <div class="d-flex flex-nowrap align-items-center">
                                                    <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                        <img src="assets/images/paths/angular_routing_200x168.png" alt="course" class="avatar-img rounded">
                                                        <span class="overlay__content"></span>
                                                    </a>
                                                    <div class="flex">
                                                        <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Angular Routing In-Depth</a>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8734</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">12 Nov 2018</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex flex-nowrap align-items-center">
                                                    <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                        <img src="assets/images/paths/angular_testing_200x168.png" alt="course" class="avatar-img rounded">
                                                        <span class="overlay__content"></span>
                                                    </a>
                                                    <div class="flex">
                                                        <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Angular Unit Testing</a>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8735</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">13 Nov 2018</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex flex-nowrap align-items-center">
                                                    <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                        <img src="assets/images/paths/typescript_200x168.png" alt="course" class="avatar-img rounded">
                                                        <span class="overlay__content"></span>
                                                    </a>
                                                    <div class="flex">
                                                        <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Introduction to TypeScript</a>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8736</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">14 Nov 2018</small>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex flex-nowrap align-items-center">
                                                    <a href="instructor-edit-course.html" class="avatar avatar-4by3 overlay overlay--primary mr-12pt">
                                                        <img src="assets/images/paths/angular_200x168.png" alt="course" class="avatar-img rounded">
                                                        <span class="overlay__content"></span>
                                                    </a>
                                                    <div class="flex">
                                                        <a class="card-title js-lists-values-course" href="instructor-edit-course.html">Learn Angular Fundamentals</a>
                                                        <small class="text-muted mr-1">
                                                            Invoice
                                                            <a href="invoice.html" style="color: inherit;" class="js-lists-values-document">#8737</a> -
                                                            &dollar;<span class="js-lists-values-amount">89</span> USD
                                                        </small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <small class="text-muted text-uppercase js-lists-values-date">15 Nov 2018</small>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="page-separator">
                            <div class="page-separator__text">Comments</div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <a href="#" class="avatar avatar-sm">
                                            <!-- <img src="assets/images/people/110/guy-9.jpg" alt="Guy" class="avatar-img rounded-circle"> -->
                                            <span class="avatar-title rounded-circle">LB</span>
                                        </a>
                                    </div>
                                    <div class="media-body d-flex flex-column">
                                        <div class="d-flex align-items-center">
                                            <a href="profile.html" class="card-title">Laza Bogdan</a>
                                            <small class="ml-auto text-muted">27 min ago</small><br>
                                        </div>
                                        <span class="text-muted">on <a href="instructor-edit-course.html" class="text-50" style="text-decoration: underline;">Data Visualization With Chart.js</a></span>
                                        <p class="mt-1 mb-0 text-70">How can I load Charts on a page?</p>
                                    </div>
                                </div>
                                <div class="media ml-sm-32pt mt-3 border rounded p-3 bg-light d-inline-flex measure-paragraph-max">
                                    <div class="media-left mr-12pt">
                                        <a href="#" class="avatar avatar-sm">
                                            <!-- <img src="assets/images/people/110/guy-6.jpg" alt="Guy" class="avatar-img rounded-circle"> -->
                                            <span class="avatar-title rounded-circle">FM</span>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="d-flex align-items-center">
                                            <a href="profile.html" class="card-title">FrontendMatter</a>
                                            <small class="ml-auto text-muted">just now</small>
                                        </div>
                                        <p class="mt-1 mb-0 text-70">Hi Bogdan,<br> Thank you for purchasing our course! <br><br>Please have a look at the charts library documentation <a href="#" class="text-underline">here</a> and follow the instructions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <form action="#" id="message-reply">
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control form-control-appended" required="" placeholder="Quick Reply">
                                        <div class="input-group-append">
                                            <div class="input-group-text pr-2">
                                                <button class="btn btn-flush" type="button"><i class="material-icons">tag_faces</i></button>
                                            </div>
                                            <div class="input-group-text pl-0">
                                                <div class="custom-file custom-file-naked d-flex" style="width: 24px; overflow: hidden;">
                                                    <input type="file" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" style="color: inherit;" for="customFile">
                                                        <i class="material-icons">attach_file</i>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-group-text pl-0">
                                                <button class="btn btn-flush" type="button"><i class="material-icons">send</i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>




            <div class="js-fix-footer2 bg-white border-top-2">
                <div class="container page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon" src="assets/images/logo/black-70%402x.png" width="30" alt="Luma"> Luma
                    </p>
                    <p class="measure-lead-max text-50 small mr-8pt">Luma is a beautifully crafted user interface for modern Education Platforms, including Courses & Tutorials, Video Lessons, Student and Teacher Dashboard, Curriculum Management, Earnings and Reporting, ERP, HR, CMS, Tasks, Projects, eCommerce and more.</p>
                    <p class="mb-8pt d-flex">
                        <a href="#" class="text-70 text-underline mr-8pt small">Terms</a>
                        <a href="#" class="text-70 text-underline small">Privacy policy</a>
                    </p>
                    <p class="text-50 small mt-n1 mb-0">Copyright 2019 &copy; All rights reserved.</p>
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

                            <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/teacher/128/white.svg" class="img-fluid" alt="logo" /></span>

                        </span>

                        <span>Teachers Pannel</span>
                    </a>



                    <div class="sidebar-heading">Instructor</div>
                    <ul class="sidebar-menu">

 <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="teacherdashboard.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                <span class="sidebar-menu-text">Instructor Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#enterprise_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                                Manage Courses
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="enterprise_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addlessons.php">
                                        <span class="sidebar-menu-text">Add Lessons</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deletelessons.php">
                                        <span class="sidebar-menu-text">Delete Lessons</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="viewlessons.php">
                                        <span class="sidebar-menu-text">View Lessons</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="updatelessons.php">
                                        <span class="sidebar-menu-text">Edit Lessons</span>
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
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
                                Exam
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="productivity_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addquestion.php">
                                        <span class="sidebar-menu-text">Add Questions</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deletequestion.php">
                                        <span class="sidebar-menu-text">Delete Questions</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="viewquestion.php">
                                        <span class="sidebar-menu-text">View Questions</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button disabled" href="updatequestion.php">
                                        <span class="sidebar-menu-text">Edit Questions</span>
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
                        
                        
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#account_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                                Quiz
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="account_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addquiz.php">
                                        <span class="sidebar-menu-text">Add Quiz</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deletequiz.php">
                                        <span class="sidebar-menu-text">Delete Quiz</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="viewquiz.php">
                                        <span class="sidebar-menu-text">View Quiz</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="updatequiz.php">
                                        <span class="sidebar-menu-text">Edit Quiz</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
<li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#cms_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                                Messaging
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="cms_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="allmessage.php">
                                        <span class="sidebar-menu-text">Message to all</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="specificmassage.php">
                                        <span class="sidebar-menu-text">Specific Message</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
<li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="logout.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                                <span class="sidebar-menu-text">Logout</span>
                            </a>
                        </li>
                        
                    </ul>


                    
                                <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-typography.html">
    <span class="sidebar-menu-text">Typography</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-colors.html">
    <span class="sidebar-menu-text">Colors</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-breadcrumb.html">
    <span class="sidebar-menu-text">Breadcrumb</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-accordions.html">
    <span class="sidebar-menu-text">Accordions</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-modals.html">
    <span class="sidebar-menu-text">Modals</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="ui-chips.html">
    <span class="sidebar-menu-text">Chips</span>
  </a>
</li> -->


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