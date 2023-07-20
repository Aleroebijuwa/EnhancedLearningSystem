
<?php
//if(!isset($_session));
//session_start();

//if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
//header('LOCATION: '.'login.php');
//exit;
//}
include('connection.php');


		 
		 
//////////////////////////////////////


//$query= "SELECT * FROM insurance_company";
	 	// $resulta = mysqli_query($con, $query);

		 
		 
//////////////////////////////////////

if(isset($_POST['submit'])){
	
	




$student_f_name = $_POST['student_f_name'];
$student_l_name = $_POST['student_l_name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$date = date("dS F, Y.");

//$sqli = "INSERT INTO category SET  pro_id = '', prefield = '$prefield',postfield = '$postfield',category_name = '$category_name = '$bathroom', date = '$date'";

//$sql="INSERT INTO category (pro_id, category_name, prefield, postfield,date) VALUES ('','$category_name','$prefield','$postfield','$date')";
	//$query = @mysql_query($con, $sql);
	//if (!$query) die( "query Insert error ". mysql_error());
	//echo $sql;
	//header('Location: '.'thank.php');
$sql = "INSERT INTO student (student_id , student_f_name, student_l_name, gender, phone, email, password ,c_password, date )
VALUES ('','$student_f_name','$student_l_name', '$gender','$phone','$email','$password', '$c_password','$date')";

if (mysqli_query($con, $sql)) {
  header('Location: '.'payment.php');

}
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>E-Learning</title>

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


<body class="layout-sticky-subnav layout-default ">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" class="mdk-header mdk-header--bg-dark bg-dark js-mdk-header mb-0" data-effects="parallax-background waterfall" data-fixed data-condenses>
            <div class="mdk-header__bg">
                <div class="mdk-header__bg-front" style="background-image: url(assets/images/256.jpg);"></div>
            </div>
            <div class="mdk-header__content justify-content-center">



                <div class="navbar navbar-expand navbar-dark-dodger-blue bg-transparent will-fade-background" id="default-navbar" data-primary>

                    
                    <a href="fixed-index.html" class="navbar-brand mr-16pt">
                        <!-- <img class="navbar-brand-icon" src="assets/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                            <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" alt="logo" class="img-fluid" /></span>

                        </span>

                        <span class="d-none d-lg-block">CRS Conpanys Logo</span>
                    </a>

                    <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                        <li class="nav-item active">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
						<li class="nav-item ">
                            <a href="aboutus.php" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">Courses</a>
                            <div class="dropdown-menu">
                                <a href="courses.php" class="dropdown-item">Browse Courses</a>
                                <a href="course.php" class="dropdown-item">Preview Course</a>
                                <a href="lesson.php" class="dropdown-item">Preview Lesson</a>
                                <a href="enroll.php" class="dropdown-item">Enroll</a>
                                <a href="help-center.php" class="dropdown-item">Help Center</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">Study Paths</a>
                            <div class="dropdown-menu">
                                <a href="paths.php" class="dropdown-item">Browse Paths</a>
                                <a href="study_path2.html" class="dropdown-item">Path Details</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown" data-toggle="tooltip" data-title="Community" data-placement="bottom" data-boundary="window">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                <i class="material-icons">people_outline</i>
                            </a>
                            <div class="dropdown-menu">
                                <a href="teachers.php" class="dropdown-item">Browse Teachers</a>
                                <a href="blog.php" class="dropdown-item">Blog</a>
                                <a href="blog-post.php" class="dropdown-item">Blog Post</a>
                                <a href="faq.php" class="dropdown-item">FAQ</a>
                                <a href="help_center.php" class="dropdown-item">Help Center</a>
                                <a href="discussions.php" class="dropdown-item">Discussions</a>
                                <a href="discussion.php" class="dropdown-item">Discussion Details</a>
                                <a href="ask.php" class="dropdown-item">Ask Question</a>
                            </div>
                        </li>
                    </ul>








                    <ul class="nav navbar-nav ml-auto mr-0">
                        <li class="nav-item">
                            <a href="fixed-login.html" class="nav-link" data-toggle="tooltip" data-title="Login" data-placement="bottom" data-boundary="window"><i class="material-icons">lock_open</i></a>
                       
                            <a href="login.php" class="btn btn-outline-white">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="signup.php" class="btn btn-outline-white">Sign Up</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content page-content ">










            <div class="py-32pt navbar-submenu">
                <div class="container page__container">
                    <div class="progression-bar progression-bar--active-accent">
                        <a href="signup.php" class="progression-bar__item progression-bar__item--complete progression-bar__item--active">
                            <span class="progression-bar__item-content">
                                <i class="material-icons progression-bar__item-icon"></i>
                                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Account details</span>
                            </span>
                        </a>
                        <a href="payment.php" class="progression-bar__item">
                            <span class="progression-bar__item-content">
                                <i class="material-icons progression-bar__item-icon"></i>
                                <span class="progression-bar__item-text h5 mb-0 text-uppercase">Payment details</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>




            <div class="page-section container page__container">
                <div class="col-lg-10 p-0 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-24pt mb-md-0">
                            <form method="post" action="signup.php">
                                <div class="form-group">
                                    <label class="form-label" for="name">Your first:</label>
                                    <input name="student_f_name" id="student_f_name" type="text" class="form-control" placeholder="Your first name ...">
                                </div>
								<div class="form-group">
                                    <label class="form-label" for="name">Last name:</label>
                                    <input name="student_l_name" id="student_l_name" type="text" class="form-control" placeholder="Your last name ...">
                                </div>
								<div class="form-group">
								<label class="form-label" for="name">Gender:</label>
								<label for="gender"></label>
                            <select name="gender" class="form-control"  id="gender">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
							</div>
							<div class="form-group">
                                    <label class="form-label" for="name">Phone Number:</label>
                                    <input name="phone" id="phone" type="text" class="form-control" placeholder="Your Phone Number ...">
                                </div>
                                <div class="dropdown">
                                    <label class="form-label" for="email">Your email:</label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email address ...">
                                </div>
                                <div class="form-group mb-24pt">
                                    <label class="form-label" for="password">Password:</label>
                                    <input name="password" id="password" type="password" class="form-control" placeholder="Your password ...">
                                </div>
								<div class="form-group mb-24pt">
                                    <label class="form-label" for="password">Repeat Password:</label>
                                    <input name="c_password" id="c_password" type="password" class="form-control" placeholder="Repeat Your password ...">
                                </div>
								<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Create account">
								<input class="btn btn-primary" type="reset" name="Reset" id="submit" value="Reset">
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="d-flex mb-8pt">
                                        <img src="assets/images/student.png" width="500" height="500">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-separator justify-content-center m-0">
                <div class="page-separator__text">or sign-in with</div>
            </div>
            <div class="page-section text-center">
                <div class="container page__container">
                    <a href="fixed-signup-payment.html" class="btn btn-secondary btn-block-xs">Facebook</a>
                    <a href="fixed-signup-payment.html" class="btn btn-secondary btn-block-xs">Twitter</a>
                    <a href="fixed-signup-payment.html" class="btn btn-secondary btn-block-xs">Google+</a>
                </div>
            </div>





        </div>
        <!-- // END Header Layout Content -->


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
    <!-- // END Header Layout -->




    <!-- drawer -->
    <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-dark-dodger-blue sidebar-left" data-perfect-scrollbar>


                <div class="d-flex align-items-center navbar-height">
                    <form action="http://luma.humatheme.com/fixed-index.html" class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                        <input type="text" class="form-control pl-0" placeholder="Search">
                        <button class="btn" type="submit"><i class="material-icons">search</i></button>
                    </form>
                </div>



                <a href="fixed-index.html" class="sidebar-brand ">
                    <!-- <img class="sidebar-brand-icon" src="assets/images/illustration/student/128/white.svg" alt="Luma"> -->

                    <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                        <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" class="img-fluid" alt="logo" /></span>

                    </span>

                    <span>Luma</span>
                </a>






                <div class="sidebar-heading">Applications</div>
                <ul class="sidebar-menu">

                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#student_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                            Student
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="student_menu">


                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-index.html">

                                    <span class="sidebar-menu-text">Home</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-courses.html">

                                    <span class="sidebar-menu-text">Browse Courses</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-paths.html">

                                    <span class="sidebar-menu-text">Browse Paths</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-dashboard.html">

                                    <span class="sidebar-menu-text">Student Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-my-courses.html">

                                    <span class="sidebar-menu-text">My Courses</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-paths.html">

                                    <span class="sidebar-menu-text">My Paths</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-path.html">

                                    <span class="sidebar-menu-text">Path Details</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-course.html">

                                    <span class="sidebar-menu-text">Course Preview</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-lesson.html">

                                    <span class="sidebar-menu-text">Lesson Preview</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-take-course.html">

                                    <span class="sidebar-menu-text">Take Course</span>
                                    <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-take-lesson.html">

                                    <span class="sidebar-menu-text">Take Lesson</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-take-quiz.html">

                                    <span class="sidebar-menu-text">Take Quiz</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-quiz-results.html">

                                    <span class="sidebar-menu-text">My Quizzes</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-quiz-result-details.html">

                                    <span class="sidebar-menu-text">Quiz Result</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-path-assessment.html">

                                    <span class="sidebar-menu-text">Skill Assessment</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-path-assessment-result.html">

                                    <span class="sidebar-menu-text">Skill Result</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#instructor_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                            Instructor
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="instructor_menu">


                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-instructor-dashboard.html">

                                    <span class="sidebar-menu-text">Instructor Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-instructor-courses.html">

                                    <span class="sidebar-menu-text">Manage Courses</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-instructor-quizzes.html">

                                    <span class="sidebar-menu-text">Manage Quizzes</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-instructor-earnings.html">

                                    <span class="sidebar-menu-text">Earnings</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-instructor-statement.html">

                                    <span class="sidebar-menu-text">Statement</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-instructor-edit-course.html">

                                    <span class="sidebar-menu-text">Edit Course</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-instructor-edit-quiz.html">

                                    <span class="sidebar-menu-text">Edit Quiz</span>
                                </a>
                            </li>

                        </ul>
                    </li>



                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#enterprise_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">donut_large</span>
                            Enterprise
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="enterprise_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-erp-dashboard.html">
                                    <span class="sidebar-menu-text">ERP Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-crm-dashboard.html">
                                    <span class="sidebar-menu-text">CRM Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-hr-dashboard.html">
                                    <span class="sidebar-menu-text">HR Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-employees.html">
                                    <span class="sidebar-menu-text">Employees</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-staff.html">
                                    <span class="sidebar-menu-text">Staff</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-leaves.html">
                                    <span class="sidebar-menu-text">Leaves</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="fixed-departments.html">
                                    <span class="sidebar-menu-text">Departments</span>
                                </a>
                            </li>
                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-documents.html">
    <span class="sidebar-menu-text">Documents</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-attendance.html">
    <span class="sidebar-menu-text">Attendance</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-recruitment.html">
    <span class="sidebar-menu-text">Recruitment</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-payroll.html">
    <span class="sidebar-menu-text">Payroll</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-training.html">
    <span class="sidebar-menu-text">Training</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-employee-profile.html">
    <span class="sidebar-menu-text">Employee Profile</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-accounting.html">
    <span class="sidebar-menu-text">Accounting</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-inventory.html">
    <span class="sidebar-menu-text">Inventory</span>
  </a>
</li> -->
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#productivity_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">access_time</span>
                            Productivity
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="productivity_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-projects.html">
                                    <span class="sidebar-menu-text">Projects</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-tasks-board.html">
                                    <span class="sidebar-menu-text">Tasks Board</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-tasks-list.html">
                                    <span class="sidebar-menu-text">Tasks List</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="fixed-kanban.html">
                                    <span class="sidebar-menu-text">Kanban</span>
                                </a>
                            </li>
                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-task-details.html">
    <span class="sidebar-menu-text">Task Details</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-team-members.html">
    <span class="sidebar-menu-text">Team Members</span>
  </a>
</li> -->
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#ecommerce_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">shopping_cart</span>
                            eCommerce
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="ecommerce_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ecommerce.html">
                                    <span class="sidebar-menu-text">Shop Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="fixed-edit-product.html">
                                    <span class="sidebar-menu-text">Edit Product</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#messaging_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">message</span>
                            Messaging
                            <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">2</span>
                            <span class="sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="messaging_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-messages.html">
                                    <span class="sidebar-menu-text">Messages</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-email.html">
                                    <span class="sidebar-menu-text">Email</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#cms_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">content_copy</span>
                            CMS
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="cms_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-cms-dashboard.html">
                                    <span class="sidebar-menu-text">CMS Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-posts.html">
                                    <span class="sidebar-menu-text">Posts</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item active open">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#account_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                            Account
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse show sm-indent" id="account_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-pricing.html">
                                    <span class="sidebar-menu-text">Pricing</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-login.html">
                                    <span class="sidebar-menu-text">Login</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="fixed-signup.html">
                                    <span class="sidebar-menu-text">Signup</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-signup-payment.html">
                                    <span class="sidebar-menu-text">Payment</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-reset-password.html">
                                    <span class="sidebar-menu-text">Reset Password</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-change-password.html">
                                    <span class="sidebar-menu-text">Change Password</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-edit-account.html">
                                    <span class="sidebar-menu-text">Edit Account</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-edit-account-profile.html">
                                    <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-edit-account-notifications.html">
                                    <span class="sidebar-menu-text">Email Notifications</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-edit-account-password.html">
                                    <span class="sidebar-menu-text">Account Password</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-billing.html">
                                    <span class="sidebar-menu-text">Subscription</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-billing-upgrade.html">
                                    <span class="sidebar-menu-text">Upgrade Account</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-billing-payment.html">
                                    <span class="sidebar-menu-text">Payment Information</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-billing-history.html">
                                    <span class="sidebar-menu-text">Payment History</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-billing-invoice.html">
                                    <span class="sidebar-menu-text">Invoice</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#community_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">people_outline</span>
                            Community
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="community_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-teachers.html">

                                    <span class="sidebar-menu-text">Browse Teachers</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-student-profile.html">

                                    <span class="sidebar-menu-text">Student Profile</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-teacher-profile.html">

                                    <span class="sidebar-menu-text">Teacher Profile</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-blog.html">

                                    <span class="sidebar-menu-text">Blog</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-blog-post.html">

                                    <span class="sidebar-menu-text">Blog Post</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-faq.html">
                                    <span class="sidebar-menu-text">FAQ</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-help-center.html">
                                    <!--  -->
                                    <span class="sidebar-menu-text">Help Center</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-discussions.html">
                                    <span class="sidebar-menu-text">Discussions</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-discussion.html">
                                    <span class="sidebar-menu-text">Discussion Details</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-discussions-ask.html">
                                    <span class="sidebar-menu-text">Ask Question</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>


                <div class="sidebar-heading">UI</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#components_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">tune</span>
                            Components
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="components_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-buttons.html">
                                    <span class="sidebar-menu-text">Buttons</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-avatars.html">
                                    <span class="sidebar-menu-text">Avatars</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-forms.html">
                                    <span class="sidebar-menu-text">Forms</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-loaders.html">
                                    <span class="sidebar-menu-text">Loaders</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-tables.html">
                                    <span class="sidebar-menu-text">Tables</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-cards.html">
                                    <span class="sidebar-menu-text">Cards</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-icons.html">
                                    <span class="sidebar-menu-text">Icons</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-tabs.html">
                                    <span class="sidebar-menu-text">Tabs</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-alerts.html">
                                    <span class="sidebar-menu-text">Alerts</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-badges.html">
                                    <span class="sidebar-menu-text">Badges</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-progress.html">
                                    <span class="sidebar-menu-text">Progress</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-pagination.html">
                                    <span class="sidebar-menu-text">Pagination</span>
                                </a>
                            </li>
                            <!-- <li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-typography.html">
    <span class="sidebar-menu-text">Typography</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-colors.html">
    <span class="sidebar-menu-text">Colors</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-breadcrumb.html">
    <span class="sidebar-menu-text">Breadcrumb</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-accordions.html">
    <span class="sidebar-menu-text">Accordions</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-modals.html">
    <span class="sidebar-menu-text">Modals</span>
  </a>
</li>
<li class="sidebar-menu-item">
  <a class="sidebar-menu-button disabled" href="fixed-ui-chips.html">
    <span class="sidebar-menu-text">Chips</span>
  </a>
</li> -->
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="#">
                                    <span class="sidebar-menu-text">Disabled</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#plugins_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">folder</span>
                            Plugins
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="plugins_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-charts.html">
                                    <span class="sidebar-menu-text">Charts</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-flatpickr.html">
                                    <span class="sidebar-menu-text">Flatpickr</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-daterangepicker.html">
                                    <span class="sidebar-menu-text">Date Range Picker</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-dragula.html">
                                    <span class="sidebar-menu-text">Dragula</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-dropzone.html">
                                    <span class="sidebar-menu-text">Dropzone</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-range-sliders.html">
                                    <span class="sidebar-menu-text">Range Sliders</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-quill.html">
                                    <span class="sidebar-menu-text">Quill</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-select2.html">
                                    <span class="sidebar-menu-text">Select2</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-nestable.html">
                                    <span class="sidebar-menu-text">Nestable</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-fancytree.html">
                                    <span class="sidebar-menu-text">Fancy Tree</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-maps-vector.html">
                                    <span class="sidebar-menu-text">Vector Maps</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-sweet-alert.html">
                                    <span class="sidebar-menu-text">Sweet Alert</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="fixed-ui-plugin-toastr.html">
                                    <span class="sidebar-menu-text">Toastr</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button disabled" href="#">
                                    <span class="sidebar-menu-text">Disabled</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                            Layouts
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse sm-indent" id="layouts_menu">
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="compact-signup.html">
                                    <span class="sidebar-menu-text">Compact</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="mini-signup.html">
                                    <span class="sidebar-menu-text">Mini</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="mini-secondary-signup.html">
                                    <span class="sidebar-menu-text">Mini + Secondary</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="signup.html">
                                    <span class="sidebar-menu-text">App</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="boxed-signup.html">
                                    <span class="sidebar-menu-text">Boxed</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="sticky-signup.html">
                                    <span class="sidebar-menu-text">Sticky</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item active">
                                <a class="sidebar-menu-button" href="fixed-signup.html">
                                    <span class="sidebar-menu-text">Fixed</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>


            </div>
        </div>
    </div>
    <!-- // END drawer -->


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




</body>


</html>