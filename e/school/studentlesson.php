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
$CourseId = $_REQUEST['CourseId'];
$ItemId = $_REQUEST['ItemId'];

$queryd = "SELECT * FROM studies WHERE ItemId = '$ItemId' AND CourseId = '$CourseId'  ";
	 	 $resultd = mysqli_query($con, $queryd);
	
$rowd=mysqli_fetch_array($resultd);
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];

	 
	$StudyId = $rowd['StudyId']; 
	$CourseId = $rowd['CourseId'];
	$ItemId = $rowd['ItemId'];
	$moduleid = $rowd['moduleid'];
	$ItemTitle= $rowd['ItemTitle'];
	$ItemIntro = $rowd['ItemIntro'];
	$ContentType = $rowd['ContentType'];
	//$bstudyId= $rowd['bstudyId'];
	//$bstudyId1= $bstudyId;
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];
	
	$ItemContent = $rowd['ItemContent'] ;

	$file = "admin/photos2/".$ItemContent;

	//$bibst = "<application/pdf src='$src_file' border='0' >";
	$bibst="<src='$file' type='application' width='1050px' height='1000px'>";
	
	//$bibst2 = "<img src='$img_file' border='0' width='40px' height='40px'>";
	

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


















            <div class="navbar navbar-light border-0 navbar-expand-sm" style="white-space: nowrap;">
                <div class="container page__container flex-column flex-sm-row">
                    <nav class="nav navbar-nav">
                        <div class="nav-item py-16pt py-sm-0">
                            <div class="media flex-nowrap">
                                <div class="media-left mr-16pt">
                                    <a href="student-take-course.html"><?php echo $dimg2; ?></a>
                                </div>
                                <div class="media-body d-flex flex-column">
                                    <a href="student-take-course.html" class="card-title"><?php echo $CourseTitle; ?></a>
                                    <div class="d-flex">
                                        <span class="text-50 small font-weight-bold mr-8pt"><?php echo $teacherid; ?></span>
                                        <span class="text-50 small"><?php echo $ItemTitle; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <ul class="nav navbar-nav ml-sm-auto align-items-center align-items-sm-end d-none d-lg-flex">
                        
                        <li class="nav-item">
                            <a href="#" class="nav-link">Downloads</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="bg-primary pb-lg-64pt py-32pt">
                <div class="container page__container">
                   
                    <div class="js-player bg-primary embed-responsive embed-responsive-16by9 mb-32pt">
                        <div class="player embed-responsive-item">
                            <div class="player__content">
                                <div class="player__image" style="--player-image: url(assets/images/illustration/player.svg)"></div>
                                <a href="#" class="player__play bg-primary">
                                    <span class="material-icons">play_arrow</span>
                                </a>
                            </div>
                            <div class="player__embed d-none">
                                <iframe class="embed-responsive-item" src="<?php echo $bibst; ?>" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </div>
            <div class="navbar navbar-expand-sm navbar-light bg-white border-bottom-2 navbar-list p-0 m-0 align-items-center">
                <div class="container page__container">
                    <ul class="nav navbar-nav flex align-items-sm-center">
                        <li class="nav-item navbar-list__item">
                            <div class="media align-items-center">
                                <span class="media-left mr-16pt">
                                    <?php echo $dimg2;?>
                                </span>
                                <div class="media-body">
                                    <a class="card-title m-0" href="teacherprofile.php"><?php echo $teacherid;?></a>
                                    <p class="text-50 lh-1 mb-0"><?php echo $ItemTitle;?></p>
                                </div>
                            </div>
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

            <div class="page-section">
                <div class="container page__container">



                    <div class="d-flex align-items-center mb-heading">
                        <h4 class="m-0"><?php echo $StudyId; ?></h4>
                        
                    </div>

                    <div class="border-top">

                        <div class="list-group list-group-flush">

                            <div class="list-group-item p-3">
                                <div class="d-flex flex-wrap align-items-end mb-16pt">
                        <h1 class="m-0"><?php echo $ItemTitle; ?></h1>
                    </div>

                    <p class="card-title"><?php echo $ItemIntro; ?></p>
                            </div>

                            <div class="list-group-item p-3">
                                <div class="row align-items-start">
                                   
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="d-flex flex-column media-body media-middle">
                                               <h5> For more clarification on this topic kindly ask your question in the box below</h5>
                                            </div>
											<?php 
											if(isset($_POST['submit'])){
	


$StudyId = $_POST['StudyId'];
$UserId = $_POST['UserId'];
$CourseId = $_POST['CourseId'];
$ItemId = $_POST['ItemId'];
$ItemTitle = $_POST['ItemTitle'];
$level = $_POST['level'];
$teacherid = $_POST['teacherid'];
$Question = $_POST['Question'];
$date = date("dS F, Y.");




//$sqli = "INSERT INTO category SET  pro_id = '', prefield = '$prefield',postfield = '$postfield',category_name = '$category_name = '$bathroom', date = '$date'";

//$sql="INSERT INTO category (pro_id, category_name, prefield, postfield,date) VALUES ('','$category_name','$prefield','$postfield','$date')";
	//$query = @mysql_query($con, $sql);
	//if (!$query) die( "query Insert error ". mysql_error());
	//echo $sql;
	//header('Location: '.'thank.php');
$sql = "INSERT INTO schoolquestions (questionId, StudyId,UserId,CourseId,ItemId,ItemTitle,level,teacherid,Question,date )
VALUES ('','$StudyId','$UserId','$CourseId','$ItemId','$ItemTitle','$level','$teacherid','$Question','$date')";

mysqli_query($con, $sql);


											}
										
											
											?>
                                        <form method="post" action="" enctype="multipart/form-data">
								
                                    <input name="StudyId" id="StudyId" type="hidden" class="form-control" value="<?php echo $StudyId; ?>">
									
									<input name="UserId" id="UserId" type="hidden" class="form-control" value="<?php echo $UserId; ?>">
                                
                                    <input name="CourseId" id="CourseId" type="hidden" class="form-control" value="<?php echo $CourseId; ?>">
                                
								<input name="ItemId" id="ItemId" type="hidden" class="form-control" value="<?php echo $ItemId; ?>">
                                
                                    <input name="ItemTitle" id="ItemTitle" type="hidden" class="form-control" value="<?php echo $ItemTitle; ?>">
									
									<input name="level" id="level" type="hidden" class="form-control" value="<?php echo $level; ?>">
									
                                    <input name="teacherid" id="teacherid" type="hidden" class="form-control" value="<?php echo $teacherid; ?>">
									
					         <div class="form-group">
					  <br>
								<label class="form-label" for="Question">Question:</label>
                      <textarea name="Question" cols="60" rows="10" id="Question" class="form-control"></textarea>
					  </div>
					  
								
								<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit Question">
								
                            </form>

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
	
	<script src="assets/js/list.js"></script>
	<script src="../ckeditor/ckeditor.js"></script>
	
<script>
CKEDITOR.replace('Question');

</script>




</body>


<!-- Mirrored from luma.humatheme.com/student-take-lesson.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:45:11 GMT -->
</html>