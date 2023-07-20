 <?php include "admin/database.php"; ?>
<?php
session_start();

if (!isset($_SESSION['Emails']) && !isset($_SESSION['Passwords']))
header('LOCATION: '.'login.php');

$user = $_SESSION['Emails'];
$pass = $_SESSION['Passwords'];

//dbase connection=======================================
include('connection.php');
//========================================================

	//Create Select Query
	//$query="select * from shouts order by time desc limit 100";
	//$shouts = mysqli_query($con,$query);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spring of Life Outreach Ministry: Mission Institute </title>

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

                           

                        </span>

                        <span class="d-none d-lg-block"><img src="../img/resources/logo-2.png" /></span>
                    </a>








                    <ul class="nav navbar-nav ml-auto mr-0">
                        <li class="nav-item">
                            <a href="fixed-login.html" class="nav-link" data-toggle="tooltip" data-title="Login" data-placement="bottom" data-boundary="window"><i class="material-icons">lock_open</i></a>
                       
                            <a href="index.php" class="btn btn-outline-white">Back To Home Page</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content page-content ">










          




            <div class="page-section">
                <div class="container page__container">
                        
                            <div class="list-group-item">
                                       <label class="col-sm-12" align="center"><h2>You are Done!</h2>
		<p><h3>Congrats! You have completed the test</h3></p>
	     <p><h4>Final socre: <?php echo $_SESSION['score']; ?></h4></p>
		 <p><h4>percent socre: <?php echo $_SESSION['score']/5*100; 
		 
		 $total = $_SESSION['total'];
		 
		  $bstudyId = $_SESSION['bstudyId'];
	   $bibleId = $_SESSION['bibleId'];
		 $fscore = $_SESSION['score'];
		//$pscore =  ($fscore/5)*100;
		$pscore =  ($fscore/$total)*100;
		
		  $userid = $_SESSION['userID'];
		  
		  
		  $dbc = mysqli_connect('localhost', 'rcqqiiok_root', 'KAYanimax.1', 'rcqqiiok_crselearning')
	or die('Error connecting to MySQL server.');
	
		 $querye = "INSERT INTO testresult VALUES (0,'$userid', '$bibleId', '$bstudyId', '$fscore', '$pscore')";
$result = mysqli_query($dbc, $querye); 
		  
		  
		  
		 
		 
		 ?></h4><img src="img/eee.png" width="250px" /></p> <a href="logout.php" class="btn btn-primary">Take Lession Again</a>
	     <?php session_destroy(); ?></label>
						
                </div>
            </div>





        </div>
       <!-- // END Header Layout Content -->


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

    </div>
    <!-- // END Header Layout -->




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


<!-- Mirrored from luma.humatheme.com/fixed-signup-payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:36:01 GMT -->
</html>