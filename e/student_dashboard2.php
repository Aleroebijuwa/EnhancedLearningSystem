<?php
ob_start();
session_start();

if (!isset($_SESSION['Emails']) && !isset($_SESSION['Passwords']))
header('LOCATION: '.'login.php');

$user = $_SESSION['Emails'];
$pass = $_SESSION['Passwords'];

//dbase connection=======================================
include('connection.php');
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
	

// }



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



            <div class="pt-32pt">
                <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                    <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                        <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                            <h2 class="mb-0">Bible Study Dashboard</h2>

                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                                <li class="breadcrumb-item active">

                                    <?php echo $Name;?>

                                </li>

                            </ol>

                        </div>
                    </div>


                    <div class="row" role="tablist">
                        <div class="col-auto">
                            <a href="paths.php" class="btn btn-outline-secondary">Your Bible Study Learning Paths</a>
                        </div>
                    </div>

                </div>
            </div>



















            <div class="container page__container">
                <div class="page-section">

                    <div class="page-separator">
                        <div class="page-separator__text">Overview</div>
                    </div>

                    <div class="row mb-lg-8pt">
                        <div class="col-lg-6">

                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <div class="h2 mb-0 mr-3">Personnal detail</div>
                                    <div class="flex">
                                    </div>
                                    
                                </div>
                                <div class="card-body p-24pt">
                                    <div class="chart" style="height: 344px;" font size-16pt="14px">
                                     <p class="card-title">Name: <font color ="red"><?php echo $Name?></font></p><br>
<p class="card-title">Email: <font color ="red"><?php echo $Email?></font></p>	<br>
<p class="card-title">Phone No: <font color ="red"><?php echo $Phone?></font></p><br>	
<p class="card-title">Gender: <font color ="red"><?php echo $Gender?></font></p><br>	
<p class="card-title">StreetAddress: <font color ="red"><?php echo $StreetAddress?></font></p><br>
<p class="card-title">City: <font color ="red"><?php echo $City?></font></p><br>
<p class="card-title">Country: <font color ="red"><?php echo $Country?></font></p>						 
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">

					
						
                            <div class="page-separator">
                                <div class="page-separator__text">Bible Study Courses</div>
                            </div>
<?php

$sql ="SELECT count(ItemId) AS total FROM biblelessons WHERE bibleId = '$bibleId'";
$resultm= mysqli_query($con, $sql);
$valuea= mysqli_fetch_assoc($resultm);
$num_rowsg= $valuea['total'];
//echo $num_rowsg;
?>


                            <div class="position-relative carousel-card">
                                <div class="js-mdk-carousel row d-block" id="carousel-courses1">

                                    <a class="carousel-control-next js-mdk-carousel-control mt-n24pt" href="#carousel-courses1" role="button" data-slide="next">
                                        <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                    <div class="mdk-carousel__content">
<?php


$queryb = "SELECT * FROM bible_studies  ORDER BY bibleId";
	 	 $resultb = mysqli_query($con, $queryb);
	
while ($rowb=mysqli_fetch_array($resultb)){
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];
	
	$Courseimage = $rowb['Courseimage'] ;

	$img_file = "admin/photos/".$Courseimage;

	$dimg = "<img src='$img_file' border='0'width='220px' height='180px'>";
	
	$dimg2 = "<img src='$img_file' border='0' width='40px' height='40px'>";
	
	$bibleId = $rowb['bibleId']; 
	$author = $rowb['author']; 
	$info = $rowb['info']; 
	$biblestudiesname = $rowb['biblestudiesname'];
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];


 ?>	
                                        <div class="col-12 col-sm-6">
										

                                            <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal " data-partial-height="44" data-toggle="popover" data-trigger="click">




                                                <a href="student-take-course.html" >
                                                    <?php echo $dimg ?>
                                                    <span class="overlay__content align-items-start justify-content-start">
                                                        <span class="overlay__action card-body d-flex align-items-center">
                                                        </span>
                                                    </span>
                                                </a>

                                                <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">NEW</span>

                                                <div class="mdk-reveal__content">
                                                    <div class="card-body">
                                                        <div class="d-flex">
                                                            <div class="flex">
                                                                <a class="card-title" href="student-take-course.html"><font size="2px"><?php echo $biblestudiesname; ?></font></a>
                                                                <small class="text-50 font-weight-bold mb-4pt"><?php echo $author; ?></small>
                                                            </div>
                                                            <a href="student-take-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="rating flex">
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star</span></span>
                                                                <span class="rating__item"><span class="material-icons">star_border</span></span>
                                                            </div>
                                                            <small class="text-50"><?php echo $num_rowsg;?> Lessons</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											
                                            <div class="popoverContainer d-none">
                                                <div class="media">
                                                    <div class="media-left mr-12pt">
                                                        <?php echo $dimg2 ?>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="card-title mb-0"><?php echo $biblestudiesname; ?></div>
                                                        <p class="lh-1 mb-0">
                                                            <span class="text-black-50 small">with</span>
                                                            <span class="text-black-50 small font-weight-bold"><?php echo $author; ?></span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <p class="my-16pt text-black-70"><?php echo$info; ?></p>




                                                <div class="my-32pt">
                                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                        
                                                        <div class="d-flex align-items-center">
                                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                                            <p class="flex text-black-50 lh-1 mb-0"><small><?php echo $num_rowsg;?> Lessons</small></p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                       <a href="signup2.php?bibleId=<?php echo $bibleId;?>" class="btn btn-primary">Enroll Now</a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <small class="text-black-50 mr-8pt">Your rating</small>
                                                    <div class="rating mr-8pt">
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                                    </div>
                                                    <small class="text-black-50">4/5</small>
												
                                                </div>

										
                                            </div>

                                        </div>
<?php } ?>
                                        

                                        

                                        <div class="col-12 col-sm-6">

                                           
                                            

                                        </div>

                                    </div>
									
                                </div>
								
                            </div>







                            <div id="carouselExampleFade" class="carousel carousel-card slide mb-24pt">
                                <div class="carousel-inner">

                                    <div class="carousel-item active">

                                        <a class="card border-0 mb-0" href="#">
                                            <img src="assets/images/achievements/flinto.png" alt="Flinto" class="card-img" style="max-height: 100%; width: initial;">
                                            <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                                            <span class="card-body d-flex flex-column align-items-center justify-content-center fullbleed">
                                                <span class="row flex-nowrap">
                                                    <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                                        <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">Achievement</span>
                                                        <span class="text-white-60 d-block mb-24pt"></span>
                                                    </span>
                                                    <span class="col d-flex flex-column">
                                                        <span class="text-right flex mb-16pt">
                                                            <img src="assets/images/paths/flinto_40x40%402x.png" width="64" alt="Flinto" class="rounded">
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="row flex-nowrap">
                                                    <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                                        <img src="assets/images/illustration/achievement/128/white.png" width="64" alt="achievement">
                                                    </span>
                                                    <span class="col d-flex flex-column">
                                                        <span>
                                                            <span class="card-title text-white mb-4pt d-block"></span>
                                                            <span class="text-white-60"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>

                                    <div class="carousel-item">

                                        <a class="card border-0 mb-0" href="#">
                                            <img src="assets/images/achievements/angular.png" alt="Angular fundamentals" class="card-img" style="max-height: 100%; width: initial;">
                                            <div class="fullbleed bg-primary" style="opacity: .5;"></div>
                                            <span class="card-body d-flex flex-column align-items-center justify-content-center fullbleed">
                                                <span class="row flex-nowrap">
                                                    <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                                        <span class="h5 text-white text-uppercase font-weight-normal m-0 d-block">Achievement</span>
                                                        <span class="text-white-60 d-block mb-24pt"></span>
                                                    </span>
                                                    <span class="col d-flex flex-column">
                                                        <span class="text-right flex mb-16pt">
                                                            <img src="assets/images/paths/angular_64x64.png" width="64" alt="Angular fundamentals" class="rounded">
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="row flex-nowrap">
                                                    <span class="col-auto text-center d-flex flex-column justify-content-center align-items-center">
                                                        <img src="assets/images/illustration/achievement/128/white.png" width="64" alt="achievement">
                                                    </span>
                                                    <span class="col d-flex flex-column">
                                                        <span>
                                                            <span class="card-title text-white mb-4pt d-block"></span>
                                                            <span class="text-white-60"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>

                                    </div>

                                </div>
                                <!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_left</span>
    <span class="sr-only">Previous</span>
  </a> -->
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                    <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>


                        </div>
                    </div>

                    <div class="row mb-lg-16pt">
					
						
                        <div class="col-lg-9 mb-12pt mb-sm-0">
                            <div class="page-separator">
                                <div class="page-separator__text">Your Bible Study Learning Paths</div>
                            </div>



					<?php

$queryc = "SELECT* FROM userbible INNER JOIN bible_studies ON userbible.bibleId = bible_studies.bibleId AND userbible.UserId='$UserId' "; 
//"SELECT * FROM bible_studies  WHERE bibleId = '$bibleId'";
	 	 $resultc = mysqli_query($con, $queryc);
		 
	while ($rowc=mysqli_fetch_array($resultc)){
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];
	
	$Courseimage = $rowc['Courseimage'] ;

	$img_file = "admin/photos/".$Courseimage;

	$dimg = "<img src='$img_file' border='0'width='220px' height='180px'>";
	
	$dimg2 = "<img src='$img_file' border='0' width='40px' height='40px'>";
	
	$bibleId = $rowc['bibleId']; 
	$author = $rowc['author']; 
	$info = $rowc['info']; 
	$biblestudiesname = $rowc['biblestudiesname'];
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];
	
	
	



 ?>
                            <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 mb-16pt" data-toggle="popover" data-trigger="click">

                                <div class="card-body d-flex flex-column">
                                    <div class="d-flex align-items-center">
                                        <div class="flex">
                                            <div class="d-flex align-items-center">
                                                <div class="rounded mr-12pt z-0 o-hidden">
												
							
                                                    <div class="overlay">
                                                        <?php echo $dimg2; ?>
                                                        <span class="overlay__content overlay__content-transparent">
                                                            <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                <small class="h6 small text-white mb-0" style="font-weight: 500;"></small>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="card-title"><?php echo $biblestudiesname; ?></div>
                                                    <p class="flex text-black-50 lh-1 mb-0"><small><?php echo $num_rowsg; ?>lessons</small></p>
                                                </div>
                                            </div>
                                        </div>

                                        

                                    </div>


                                </div>
                            </div>

                            <div class="popoverContainer d-none">
                                <div class="media">
                                    <div class="media-left mr-12pt">
                                        <?php echo $dimg2; ?>
                                    </div>
                                    <div class="media-body">
                                        <div class="card-title"><?php echo $biblestudiesname; ?></div>
                                        <p class="text-black-50 d-flex lh-1 mb-0 small"><?php echo $author; ?></p>
										<p class="text-black-50 d-flex lh-1 mb-0 small"><?php echo $num_rowsg; ?>lessons</p>
                                    </div>
                                </div>

                                <p class="mt-16pt text-black-70"> <?php echo $info; ?></p>

                                <div class="my-32pt">
                                    <div class="d-flex align-items-center mb-8pt justify-content-center">
                                       
                                        <div class="d-flex align-items-center">
                                            <span class="material-icons icon-16pt text-black-50 mr-4pt">play_circle_outline</span>
                                            <p class="flex text-black-50 lh-1 mb-0"><small><?php echo $num_rowsg; ?>lessons</small></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <small class="text-black-50 mr-8pt">Your rating</small>
                                    <div class="rating mr-8pt">
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                        <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                    </div>
                                    <small class="text-black-50">4/5</small>
                                </div>
                            </div>
<?php } ?>

<a href="paths.php" class="btn btn-primary mr-8pt">Resume</a>
                        </div>
                       
                    </div>






                    

                    <div class="mb-32pt">


                        <ul class="pagination justify-content-start pagination-xsm m-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true" class="material-icons">chevron_left</span>
                                    <span>Prev</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Page 1">
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Page 2">
                                    <span>2</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span>Next</span>
                                    <span aria-hidden="true" class="material-icons">chevron_right</span>
                                </a>
                            </li>
                        </ul>


                        <!-- <ul class="pagination justify-content-center pagination-sm">
  <li class="page-item disabled">
    <a class="page-link" href="#" aria-label="Previous">
      <span aria-hidden="true" class="material-icons">chevron_left</span>
      <span>Prev</span>
    </a>
  </li>
  <li class="page-item active">
    <a class="page-link" href="#" aria-label="1">
      <span>1</span>
    </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="1">
      <span>2</span>
    </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
      <span>Next</span>
      <span aria-hidden="true" class="material-icons">chevron_right</span>
    </a>
  </li>
</ul> -->
                    </div>

                </div>
            </div>




            <div class="js-fix-footer2 bg-white border-top-2">
                <div class="container page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">

                  <img class="brand-icon" src="../img/resources/logo-2.png" alt="Luma"> 
                    </p>
                    <p class="mb-8pt d-flex">
                        <a href="../aboutus.php" class="text-70 text-underline mr-8pt small">About Us</a>
                        <a href="../contactus.php" class="text-70 text-underline small">Contact Us</a>
                    </p>
                    <p class="text-50 small mt-n1 mb-0">Copyright &copy; Spring of Life Outreach Ministry<?php echo date("Y"); ?>  All rights reserved.</p>
				</div>
            </div>
        


        </div>
        <!-- // END drawer-layout__content -->




        <!-- drawer -->
        <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark-dodger-blue sidebar-left" data-perfect-scrollbar>


                    <div class="d-flex align-items-center navbar-height">
                        <form action="student_dashboard.php" class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                            <input type="text" class="form-control pl-0" placeholder="Search">
                            <button class="btn" type="submit"><i class="material-icons">search</i></button>
                        </form>
                    </div>



                    <a href="index.php" class="sidebar-brand ">
                        <!-- <img class="sidebar-brand-icon" src="assets/images/illustration/student/128/white.svg" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title rounded bg-primary"><img src="assets/images/illustration/student/128/white.svg" class="img-fluid" alt="logo" /></span>

                        </span>

                        <span>Bible Study </span>
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
                            <a class="sidebar-menu-button" href="paths.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                <span class="sidebar-menu-text">Learning Paths</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="courses.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">Bible Study Courses</span>
                            </a>
                        </li>
                      
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


    <!-- Global Settings -->
    <script src="assets/js/settings.js"></script>

    <!-- Flatpickr -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>

    <!-- Moment.js -->
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/moment-range.min.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>
    <script src="assets/js/chartjs.js"></script>

    <!-- Chart.js Samples -->
    <script src="assets/js/page.student-dashboard.js"></script>

    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>

    <!-- Tables -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>

</body>


<!-- Mirrored from luma.humatheme.com/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:45:12 GMT -->
</html>