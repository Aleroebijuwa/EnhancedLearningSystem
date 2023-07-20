<?php
//ob_start();
//if(!isset($_session));
session_start();

include('incl/config.php');


//////////////////////////////////

if(isset($_POST['submit'])){

$user = $_POST['Email'];
$pass = $_POST['Password'];


$query= "SELECT * FROM users  WHERE StreetAddress = '$user' AND Password ='$pass'";
	 	
$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);
	//echo $query;
	
//$name = $row['Name'];	


	if ($numrows > 0 ) {

	//$name = $row['Name'];
	//$num = $row['Sn'];
	

	
	
	
	
	
	//$_SESSION['who'] = $name;
	//$_SESSION['num'] = $num;
	
	
	
	
	
	header("location: test.php");
	
	
	
	
	
	}
	else {
	 echo 'Wrong Email address or password </br>';
     echo '<a href="login.php">Try Again</a> </br>';
  }
	exit;
		
		
		
	//}	 
		 
		 
		 
		 
		 
		 

//echo $query;

}  
else {
     
    
?>





<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <link href="../fonts.googleapis.com/css8f03.css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet">

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

        <div id="header" class="mdk-header js-mdk-header mb-0" data-fixed data-effects="">
            <div class="mdk-header__content">



                <div class="navbar navbar-expand navbar-dark-dodger-blue navbar-shadow" id="default-navbar" data-primary>

                    <!-- Navbar toggler -->
                    

                    <!-- Navbar Brand -->
                    <a href="fixed-index.html" class="navbar-brand mr-16pt">
                        <!-- <img class="navbar-brand-icon" src="assets/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">


                        </span>

                        <span class="d-none d-lg-block"></span>
                    </a>

                    <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                       
						
                    </ul>








                     <ul class="nav navbar-nav ml-auto mr-0">
                        <li class="nav-item">
                            <a href="index.php" class="btn btn-outline-white">Back To Home Page</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content page-content ">













            <div class="pt-32pt pt-sm-64pt pb-32pt">
                <div class="container page__container">
                    <form method="post" action="login.php" class="col-md-5 p-0 mx-auto">
                        <div class="form-group">
                            <label class="form-label" for="Email">Email:</label>
                            <input name="Email" id="Email" type="text" class="form-control" placeholder="Your email address ...">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="Password">Password:</label>
                            <input name="Password" id="Password" type="Password" class="form-control" placeholder="Your first and last name ...">
                            <p class="text-right"><a href="reset_password.php" class="small">Forgot your password?</a></p>
                        </div>
                        <div class="text-center">
							<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Login">
                        </div>
						<p>
						<div class="text-center">
						<a href="signup.php" class="btn btn-primary">Register as a Student</a>
						</div>
                    </form>
                </div>
            </div>
            
           




        </div>
         <!-- // END Header Layout Content -->


        <div class="js-fix-footer2 bg-white border-top-2">
            <div class="container page__container page-section d-flex flex-column">
                <p class="text-70 brand mb-24pt">
			
                    <p class="text-50 small mt-n1 mb-0">Copyright &copy; Ebijuwa stephanie and Nicholas anjola<?php echo date("Y"); ?>  All rights reserved.</p>
				</div>
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

                    <span>Companys logo</span>
                </a>






               


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


<!-- Mirrored from luma.humatheme.com/fixed-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:32:35 GMT -->
</html>
<?php
}
?>