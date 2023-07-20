<?php

//dbase connection=======================================
include('connection.php');
//========================================================

				$query = "SELECT * FROM faq  ORDER BY Sn";
	 	 $result = mysqli_query($con, $query);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from luma.humatheme.com/boxed-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:44:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spring of Life Outreach Ministry: Mission Institute</title>

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

































<body class="layout-boxed ">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page-content">

            <!-- Header -->






            <div class="navbar navbar-expand navbar-dark navbar-dark-dodger-blue navbar-shadow" id="default-navbar" data-primary>

                <!-- Navbar toggler -->
                <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
                    <span class="material-icons">short_text</span>
                </button>

                <!-- Navbar Brand -->
                <a href="boxed-index.html" class="navbar-brand mr-16pt d-lg-none">
                    <!-- <img class="navbar-brand-icon" src="assets/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                    <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                    </span>

                    <span class="d-none d-lg-block"></span>
                </a>

                <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">You are Welcome to Spring of Life Outreach Ministry: Bible Study Series</a>
                    </li>
                  
                </ul>


                <form class="search-form navbar-search d-none d-lg-flex mr-16pt" action="" style="max-width: 230px">
                    <button class="btn" type="submit"><i class="material-icons">search</i></button>
                    <input type="text" class="form-control" placeholder="Search ...">
                </form>







                <ul class="nav navbar-nav ml-auto mr-0">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link" data-toggle="tooltip" data-title="Login" data-placement="bottom" data-boundary="window"><i class="material-icons">lock_open</i></a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="btn btn-outline-white">login</a>
                    </li>
                </ul>
            </div>




            <!-- // END Header -->


















           

            
            <div class="page-section border-bottom-2">
                <div class="container-fluid page__container">
                    <div class="page-separator">
                        <div class="page-separator__text">Commonly Ask Questions</div>
                    </div>


 
                    <div class="row card-group-row">
					<?php while ($row=mysqli_fetch_array($result)){
	


	$Sn = $row['Sn'];
	$question = $row['question']; 
	
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];
						?>
                        <div class="row">
				<div class="col-lg-12">
                       <ul>

                        <li class="wow fadeIn" data-wow-duration=".5s" data-wow-delay="0s">
							<h5><?php echo $question; ?><a href="answercaqa.php?Sn=<?php echo $Sn; ?>" >Answer</a></h5>
							<p></p>
						</li>
                              

                         </ul>
				</div>

                </div>

                        </div>
						
<?php } ?>

                    </div>
                </div>
            </div>






            <div class="js-fix-footer2 bg-white border-top-2">
                <div class="container-fluid page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon" src="../img/resources/logo-2.png" alt="Luma"> 
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
                <div class="sidebar sidebar-light sidebar-light-dodger-blue sidebar-left" data-perfect-scrollbar>




                    <a href="boxed-index.html" class="sidebar-brand sidebar-brand-dark bg-primary-pickled-bluewood">
                        <!-- <img class="sidebar-brand-icon" src="assets/images/illustration/student/128/white.svg" alt="Luma"> -->

                       

                        <span><img src="../img/resources/logo-2.png" width="250px" height="40px" ></span>
                    </a>


                    <ul class="sidebar-menu">


                        <li class="sidebar-menu-item ">
                            <a class="sidebar-menu-button" href="index.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Back to Home Page</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button" href="bibleindex.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                <span class="sidebar-menu-text">Bible Studies</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="caqa.php">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">Commonly Ask Questions</span>
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


<!-- Mirrored from luma.humatheme.com/boxed-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:44:41 GMT -->
</html>