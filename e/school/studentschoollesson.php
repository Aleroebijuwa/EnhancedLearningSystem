<?php
session_start();

if (!isset($_SESSION['Emails']) && !isset($_SESSION['Passwords']))
header('LOCATION: '.'login.php');

$user = $_SESSION['Emails'];
$pass = $_SESSION['Passwords'];

//dbase connection=======================================
include('../connection.php');
//========================================================



//SELECT * FROM `cost` WHERE `username` LIKE 'idowu' AND `password` LIKE 'sunday' 

$query= "SELECT * FROM users WHERE Email = '$user' AND Password = '$pass'";

//$query= "SELECT * FROM `cost` WHERE `username` LIKE '$user' AND `password` LIKE '$pass'";
	 	 $result = mysqli_query($con, $query);

$row=mysqli_fetch_array($result);

//$num = (int) "10";

// while ($row=mysqli_fetch_array($result)){
	$Name = $row['Name']; 
	$Gender = $row['Gender'];
	$Phone = $row['Phone'] ;
	$Email = $row['Email']; 
	$StreetAddress = $row['StreetAddress'];
	$City = $row['City'] ;
	$Password = $row['Password'] ;
	$Country  = $row['Country'] ;
	$UserId= $row['UserId'];
	$UserId1= $UserId;
	//$user_id = $row['user_id'];
	//$user_id2=(int)$user_id;
	//echo $insurance_id;
	
	//echo $phone;
	//echo $gender;
	
	
	$querya = "SELECT * FROM userbible WHERE UserId = '$UserId1'";
	 $resulta = mysqli_query($con, $querya);
	//echo $querya;
	
	$rowa=mysqli_fetch_array($resulta);
	//$insurance_id = $row['insurance_id'];
	$bibleId= $rowa['bibleId'];
	$bibleId1= $bibleId;
	
	//echo 'Firstname '. $user_f_name;
	///////////////////////////////////////////////////////////
	$CourseId = $_REQUEST['CourseId'];
	
	$queryc = "SELECT* FROM courselist WHERE CourseId = '$CourseId'"; 
//"SELECT * FROM bible_studies  WHERE bibleId = '$bibleId'";
	 	 $resultc = mysqli_query($con, $queryc);
		 
	$rowc=mysqli_fetch_array($resultc);
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];
	
	$Courseimage = $rowc['Courseimage'] ;

	$img_file = "../admin/photos/".$Courseimage;

	$dimg = "<img src='$img_file' border='0'width='220px' height='180px'>";
	
	$dimg2 = "<img src='$img_file' border='0' width='40px' height='40px'>";
	
	$CourseId = $rowc['CourseId']; 
	$CourseTitle = $rowc['CourseTitle']; 
	$teacherid = $rowc['teacherid'];
	$CourseDis = $rowc['CourseDis']; 
	$level = $rowc['level'];
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];
	

// }
///////////////////////////////////////////////////////


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spring of Life Outreach Ministry: Mission Institute</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link href="assets/fonts/css8f03.css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">

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

                    <span class="d-none d-lg-block">Bible Study</span>
                </a>





                <span class="d-none d-md-flex align-items-center mr-16pt">

                    

                    <small class="flex d-flex flex-column">
                        <strong class="navbar-text-100"><h5>You are welcome  <?php echo $Name; ?>  to Bible Study Series</h5></strong>
                    </small>
                </span>





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

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">-</small>

                                            <span class="ml-auto unread-indicator bg-accent"></span>

                                        </span>
                                        <span class="d-flex">
                                            
                                            <span class="flex d-flex flex-column">
                                                <strong class="text-black-100">-</strong>
                                                <span class="text-black-70">-</span>
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
                            <span class="badge badge-notifications badge-accent">-</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div data-perfect-scrollbar class="position-relative">
                                <div class="dropdown-header"><strong>System notifications</strong></div>
                                <div class="list-group list-group-flush mb-0">

                                    <a href="javascript:void(0);" class="list-group-item list-group-item-action unread">
                                        <span class="d-flex align-items-center mb-1">
                                            <small class="text-black-50">-</small>

                                            <span class="ml-auto unread-indicator bg-accent"></span>

                                        </span>
                                        <span class="d-flex">
                                            <span class="avatar avatar-xs mr-2">
                                                <span class="avatar-title rounded-circle bg-light">
                                                    <i class="material-icons font-size-16pt text-accent">-</i>
                                                </span>
                                            </span>
                                            <span class="flex d-flex flex-column">

                                                <span class="text-black-70">-</span>
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
                            <div class="dropdown-header"><strong>Account</strong></div>
							<a class="dropdown-item" ><strong><?php echo $Name;?></strong></a>
                            <a class="dropdown-item" href="edit-account.html">Edit Account</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- // END Header -->


















            <div class="mdk-box bg-primary mdk-box--bg-gradient-primary2 js-mdk-box mb-0" data-effects="blend-background">
                <div class="mdk-box__content">
                    <div class="hero py-64pt text-center text-sm-left">
                        <div class="container page__container">
                            <h1 class="text-white"><?php echo $CourseTitle; ?></h1>
                            <p class="lead text-white-50 measure-hero-lead mb-24pt"><?php echo $CourseDis; ?></p>
                           
                        </div>
                    </div>
                    <div class="navbar navbar-expand-sm navbar-light bg-white border-bottom-2 navbar-list p-0 m-0 align-items-center">
                        <div class="container page__container">
                            <ul class="nav navbar-nav flex align-items-sm-center">
                                <li class="nav-item navbar-list__item">
                                    <div class="media align-items-center">
                                        <span class="media-left mr-16pt">
                                            <?php echo $dimg2; ?>
                                        </span>
                                        <div class="media-body">
                                            <a class="card-title m-0" href="teacher-profile.html"><?php echo $teacherid; ?></a>
                                            <p class="text-50 lh-1 mb-0">Author</p>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="nav-item navbar-list__item">
                                    <i class="material-icons text-muted icon--left">assessment</i>
                                    Beginner
                                </li>
                                <li class="nav-item ml-sm-auto text-sm-center flex-column navbar-list__item">
                                    <div class="rating rating-24">
                                        <div class="rating__item"><i class="material-icons">star</i></div>
                                        <div class="rating__item"><i class="material-icons">star</i></div>
                                        <div class="rating__item"><i class="material-icons">star</i></div>
                                        <div class="rating__item"><i class="material-icons">star</i></div>
                                        <div class="rating__item"><i class="material-icons">star_border</i></div>
                                    </div>
                                    <p class="lh-1 mb-0"><small class="text-muted">20 ratings</small></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container page__container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="border-left-2 page-section pl-32pt">

                            <div class="d-flex align-items-center page-num-container">
                                <div class="page-num">1</div>
                                <h4>Getting Started With <?php echo $CourseTitle; ?></h4>
                            </div>


                            <div class="card mb-32pt mb-lg-64pt">
							
                                <ul class="accordion accordion--boxed js-accordion mb-0" id="toc-1">
                                    <li class="accordion__item open">
									
                                        <a class="accordion__toggle" data-toggle="collapse" data-parent="#toc-1" href="#toc-content-1">
                                            <span class="flex">Table of contents <h6>click on any of the lesson to Resume </h6></span>
                                            <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                        </a>
										
									<?php
$CourseId = $_REQUEST['CourseId'];

$queryb = "SELECT * FROM studies WHERE CourseId = '$CourseId'";
	 	 $resultb = mysqli_query($con, $queryb);
	
while ($rowb=mysqli_fetch_array($resultb)){
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];

	$CourseId = $rowb['CourseId']; 
	$ItemId = $rowb['ItemId'];
$ItemTitle = $rowb['ItemTitle'];	
	
	
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];


 ?>	
                                        <div class="accordion__menu">
                                            <ul class="list-unstyled collapse show" id="toc-content-1">
                                                <li class="accordion__menu-link">
                                                    <span class="material-icons icon-16pt icon--left text-body">play_circle_outline</span>
                                                    <a class="flex" href="studentlesson.php?ItemId=<?php echo $ItemId;?>&CourseId=<?php echo $CourseId;?>"><?php echo $ItemTitle; ?></a>
                                                    
                                                </li>
                                                
                                               
                                            </ul>
                                        </div>
										
									<?php } ?>
                                    </li>
                                </ul>
								
                            </div>

                           
                        </div>
                    </div>
                    <div class="col-lg-5 page-nav">
                        <div class="page-section">
                            <div class="page-nav__content">
                                <div class="page-separator">
                                    <div class="page-separator__text">About this course</div>
                                </div>
                                <!-- <h4 class="mb-16pt">Table of contents</h4> -->
                            </div>
                            <nav class="nav page-nav__menu">
                                <a class="nav-link active" href="#"><?php echo  $CourseDis; ?></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            

           




           <div class="js-fix-footer2 bg-white border-top-2">
                <div class="container-fluid page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon" src="../../img/resources/logo-2.png" alt="Luma"> 
                    </p>
                    
                    <p class="mb-8pt d-flex">
                         <a href="../aboutus.php" class="text-70 text-underline mr-8pt small">About Us</a>
                        <a href="../contactus.php" class="text-70 text-underline small">Contact Us</a>
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
                        <form action="biblestudylesson.php" class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                            <input type="text" class="form-control pl-0" placeholder="Search">
                            <button class="btn" type="submit"><i class="material-icons">search</i></button>
                        </form>
                    </div>



                    <a href="index.php" class="sidebar-brand ">
                        <!-- <img class="sidebar-brand-icon" src="assets/images/illustration/student/128/white.svg" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" class="img-fluid" alt="logo" /></span>

                        </span>

                        <span>Mission School</span>
                    </a>



                    <div class="sidebar-heading"><?php echo $Name?></div>
                    <ul class="sidebar-menu">


                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="index.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Home</span>
                            </a>
                        </li>
						  <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="student_dashboard.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                <span class="sidebar-menu-text">Personnal Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="courses.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                <span class="sidebar-menu-text">School Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="class.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">Classes</span>
                            </a>
                        </li>
						<?php
$CourseId = $_REQUEST['CourseId'];

$queryb = "SELECT * FROM studies WHERE CourseId = '$CourseId'";
	 	 $resultb = mysqli_query($con, $queryb);
	
while ($rowb=mysqli_fetch_array($resultb)){
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];

	$CourseId = $rowb['CourseId']; 
	$ItemId = $rowb['ItemId']; 
	
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];


 ?>	
 <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="studentlesson.php?ItemId=<?php echo $ItemId;?>&CourseId=<?php echo $CourseId;?>">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                                <span class="sidebar-menu-text"><?php echo $ItemId; ?></span>
                            </a>
                        </li>
 
<?php } ?>
                      
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="achievement.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                <span class="sidebar-menu-text">Achievement</span>
                            </a>
                        </li>

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"  href="logout.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">view_compact</span>
                                <span class="sidebar-menu-text">Logouts</span>
                            </a>
                        </li>
                    </ul>



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




</body>


<!-- Mirrored from luma.humatheme.com/student-take-course.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:45:11 GMT -->
</html>