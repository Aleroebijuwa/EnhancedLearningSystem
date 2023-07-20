<?php
if(!isset($_session))
session_start();

if (!isset($_SESSION['usernames']))
header('LOCATION: '.'../adminlogin.php');

$user = $_SESSION['usernames'];


//dbase connection=======================================
include('../connection.php');
//========================================================

		 
//////////////////////////////////////


$query= "SELECT * FROM bible_studies";
	 	 $resulta = mysqli_query($con, $query);
		 
		 
//////////////////////////////////////
$query= "SELECT Sn FROM biblelessons order by Sn DESC";
$result = mysqli_query($con, $query);
$row= mysqli_fetch_array($result);
$lastid = $row['Sn'];

if(empty($lastid)){
	
	$number = 'Item1';
}else{
	
	$idd = str_replace('Item','',$lastid);
	$id =($idd+1);
	$number = 'Item'.$id;
}

///////////////////////////////////////

if(isset($_POST['submit'])){
	
	

$bibleId = $_POST['bibleId'];
$bstudyId = $_POST['bstudyId'];
$LessonsTitle = $_POST['LessonsTitle'];
$LessonsContect = $_POST['LessonsContect'];
$date = date("dS F, Y.");

$ItemId = $number;

$Lessonsimage = $_FILES['Lessonsimage']['name'];
$size = $_FILES['Lessonsimage']['size'];
$temppathLessonsimage = $_FILES['Lessonsimage']['tmp_name'];


$filenameLessonsimage = 'photos2/'. $Lessonsimage;
//echo $filenameCourseimage;

move_uploaded_file($temppathLessonsimage, $filenameLessonsimage);


	//$courseform = "<src='$img_file' border='0'  align = 'center'>";

//$sqli = "INSERT INTO category SET  pro_id = '', prefield = '$prefield',postfield = '$postfield',category_name = '$category_name = '$bathroom', date = '$date'";

//$sql="INSERT INTO category (pro_id, category_name, prefield, postfield,date) VALUES ('','$category_name','$prefield','$postfield','$date')";
	//$query = @mysql_query($con, $sql);
	//if (!$query) die( "query Insert error ". mysql_error());
	//echo $sql;
	//header('Location: '.'thank.php');
$sql = "INSERT INTO biblelessons (Sn,ItemId ,bibleId,bstudyId,LessonsTitle,LessonsContect,Lessonsimage,date  )
VALUES ('','$ItemId','$bibleId','$bstudyId','$LessonsTitle','$LessonsContect','$Lessonsimage','$date')";

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
                <a href="compact-instructor-dashboard.html" class="navbar-toggler navbar-toggler-custom align-items-center justify-content-center d-none d-lg-flex" data-toggle="tooltip" data-title="Switch to Compact Layout" data-placement="bottom" data-boundary="window">
                    <span class="material-icons">swap_horiz</span>
                </a>


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

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">5 minutes ago</small>

                                            <span class="ml-auto unread-indicator bg-accent"></span>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <img src="assets/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-black-100">Michelle</strong>
                                                <span class="text-black-70">Clients loved the new design.</span>
                                            </span>
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">5 minutes ago</small>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <img src="assets/images/people/110/woman-5.jpg" alt="people" class="avatar-img rounded-circle">
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-black-100">Michelle</strong>
                                                <span class="text-black-70">🔥 Superb job..</span>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END Notifications dropdown -->


                    <!-- Notifications dropdown -->
                    <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full" data-toggle="tooltip" data-title="Notifications" data-placement="bottom" data-boundary="window">
                        <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-caret="false">
                            <i class="material-icons">notifications_none</i>
                            <span class="badge badge-notifications badge-accent">2</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div data-perfect-scrollbar class="position-relative">
                                <div class="dropdown-header"><strong>System notifications</strong></div>
                                <div class="list-group list-group-flush mb-0">

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">3 minutes ago</small>

                                            <span class="ml-auto unread-indicator bg-accent"></span>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                                </span>
                                            </span>
                                            <span class="flex d-flex flex-column">

                                                <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                            </span>
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">5 hours ago</small>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                </span>
                                            </span>
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-black-100">Adrian. D</strong>
                                                <span class="text-black-70">Wants to join your private group.</span>
                                            </span>
                                        </span>
                                    </a>

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">1 day ago</small>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <i class="material-icons font-size-16pt text-warning">storage</i>
                                                </span>
                                            </span>
                                            <span class="flex d-flex flex-column">

                                                <span class="text-black-70">Your deploy was successful.</span>
                                            </span>
                                        </span>
                                    </a>

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
                            <h2 class="mb-0">Courses</h2>

                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>

                                <li class="breadcrumb-item active">

                                    Add Courses

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
				<div class="col-lg-10">
                <form method="post" action="addlessions.php" enctype="multipart/form-data">
								
								<div class="form-group">
								<label class="form-label" for="name">Bible Study Book Name:</label>
								<label for="bibleId"></label>
                            <select name="bibleId" class="form-control"  id="bibleId">
							 <option value="-">-</option>
                <?php  while ($row=mysqli_fetch_array($resulta)){
 echo "<option value='". $row['bibleId'] ."'>" .$row['biblestudiesname'] ."</option>"; }
	?>
                            </select>
							</div>
							<div class="form-group">
								<label class="form-label" for="name">Lessons:</label>
								<label for="bstudyId"></label>
                            <select name="bstudyId" class="form-control"  id="bstudyId">
							 <option value="Lesson 1">Lesson 1</option>
							 <option value="Lesson 2">Lesson 2</option>
							 <option value="Lesson 3">Lesson 3</option>
							 <option value="Lesson 4">Lesson 4</option>
							 <option value="Lesson 5">Lesson 5</option>
							 <option value="Lesson 6">Lesson 6</option>
							 <option value="Lesson 7">Lesson 7</option>
							 <option value="Lesson 8">Lesson 8</option>
							 <option value="Lesson 9">Lesson 9</option>
							 <option value="Lesson 10">Lesson 10</option>
							 <option value="Lesson 11">Lesson 11</option>
							 <option value="Lesson 12">Lesson 12</option>
							 <option value="Lesson 13">Lesson 13</option>
							 <option value="Lesson 14">Lesson 14</option>
							 <option value="Lesson 15">Lesson 15</option>
							 <option value="Lesson 16">Lesson 16</option>
							 <option value="Lesson 17">Lesson 17</option>
							 <option value="Lesson 18">Lesson 18</option>
							 <option value="Lesson 19">Lesson 19</option>
							 <option value="Lesson 20">Lesson 20</option>
                            </select>
							</div>
							<div class="form-group">
                                    <label class="form-label" for="LessonsTitle">Lessons Title:</label>
                                    <input name="LessonsTitle" id="LessonsTitle" type="text" class="form-control" placeholder="Course Title ...">
                                </div>
					  <div class="form-group">
								<label class="form-label" for="LessonsContect">Lessons Introduction:</label>
                      <textarea name="LessonsContect" cols="60" rows="10" id="LessonsContect" class="form-control"></textarea>
					  </div>
					  
								<div class="form-group">
								  <label class="form-label" for="Lessonsimage">Main Lessons File:</label><br>
                                  <input type="file" name="Lessonsimage" id="Lessonsimage"></td>
                                </div>
								<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Add Courses">
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
                <div class="container-fluid page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon" src="../../img/resources/logo-2.png" alt="Luma"> 
                    </p>
                    
                    <p class="mb-8pt d-flex">
                         <a href="../../aboutus.php" class="text-70 text-underline mr-8pt small">About Us</a>
                        <a href="../../contactus.php" class="text-70 text-underline small">Contact Us</a>
                    </p>
                    <p class="text-50 small mt-n1 mb-0">Copyright © Spring of Life Outreach Ministry<?php echo date("Y"); ?> &copy; All rights reserved.</p>
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

                        <span>Admin Logo</span>
                    </a>


                    <div class="sidebar-heading">Applications</div>
                    <ul class="sidebar-menu">

<li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../../index.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Main Home</span>
                            </a>
                        </li>
						<li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../index.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">mission Institute Home</span>
                            </a>
                        </li>
						<li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="admindashboard1.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                                <span class="sidebar-menu-text">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse" data-toggle="collapse" href="#enterprise_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                                Bible Studies
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="enterprise_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addbiblestudies.php">
                                        <span class="sidebar-menu-text">Add </span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deletebiblestudies.php">
                                        <span class="sidebar-menu-text">Delete</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="displaybiblestudies.php">
                                        <span class="sidebar-menu-text">View </span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="updatebiblestudies.php">
                                        <span class="sidebar-menu-text">Update</span>
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
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_wale">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                                Exam
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="layouts_wale">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addexam.php">
                                        <span class="sidebar-menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deleteexam.php">
                                        <span class="sidebar-menu-text">Delete</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="displayexam.php">
                                        <span class="sidebar-menu-text">View</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="updateexam.php">
                                        <span class="sidebar-menu-text">Edit</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						<li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_timi">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                                Registered Student
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="layouts_timi">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="displayRstudent.php">
                                        <span class="sidebar-menu-text">View</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deletetRstudent.php">
                                        <span class="sidebar-menu-text">Delete</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						<li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                                Bible Studies Lessions
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="layouts_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addlessions.php">
                                        <span class="sidebar-menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deletelessions.php">
                                        <span class="sidebar-menu-text">Delete</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="viewlessions.php">
                                        <span class="sidebar-menu-text">View</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="updatelessions.php">
                                        <span class="sidebar-menu-text">Edit</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						
						<li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#layouts_yaw">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                                 Ask Bible Q&A
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent" id="layouts_yaw">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="addfaq.php">
                                        <span class="sidebar-menu-text">Add</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="deletefaq.php">
                                        <span class="sidebar-menu-text">Delete</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="updatefaq.php">
                                        <span class="sidebar-menu-text">Update</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="displayfaq.php">
                                        <span class="sidebar-menu-text">View</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
							
							
                        </li>


                </div>
            </div>
        </div>
        <!-- // END drawer -->



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
	<script src="ckeditor/ckeditor.js"></script>
	
<script>
CKEDITOR.replace('LessonsContect');

</script>
</body>


<!-- Mirrored from luma.humatheme.com/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:45:25 GMT -->
</html>