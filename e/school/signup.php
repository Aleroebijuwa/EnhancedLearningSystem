
<?php
//if(!isset($_session));
session_start();

//if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
//header('LOCATION: '.'login.php');
//exit;
//}
include('incl/config.php');


		 
		 
//////////////////////////////////////


		 
//////////////////////////////////////
//$bibleId = $_REQUEST['bibleId'];







/*
$number;


$query= "SELECT Sn FROM users order by Sn DESC";
$result = mysqli_query($dbc2, $query);
$row= mysqli_fetch_array($result);
$lastid = $row['Sn'];

if(empty($lastid)){
	
	$number = 'User1';
}else{
	
	$idd = str_replace('user','',$lastid);
	$id =($idd+1);
	$number = 'User'.$id;
}



*/







if(isset($_POST['submit'])){
	
	




$bibleId = $_POST['bibleId'];
$Name = $_POST['Name'];
$Gender = $_POST['Gender'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$StreetAddress = $_POST['StreetAddress'];
$City = $_POST['City'];
$Password = $_POST['Password'];
$Country = $_POST['Country'];
$date = date("dS F, Y.");




$number;


$query= "SELECT Sn FROM users order by Sn DESC";
$result = mysqli_query($dbc2, $query);
$row= mysqli_fetch_array($result);
$lastid = $row['Sn'];

if(empty($lastid)){
	
	$number = 'User1';
}else{
	
	$idd = str_replace('user','',$lastid);
	$id =($idd+1);
	$number = 'User'.$id;
}







//echo $Name .',   '. $Phone . ', ' .$City;
////////////////////////////

$UserId= $number;



$_SESSION['Name'] = $_POST['Name'];
$_SESSION['Email'] = $_POST['Email'];

//$sqli = "INSERT INTO category SET  pro_id = '', prefield = '$prefield',postfield = '$postfield',category_name = '$category_name = '$bathroom', date = '$date'";

//$sql="INSERT INTO category (pro_id, category_name, prefield, postfield,date) VALUES ('','$category_name','$prefield','$postfield','$date')";
	//$query = @mysql_query($con, $sql);
	//if (!$query) die( "query Insert error ". mysql_error()); '$Phone',
	//echo $sql;
	//header('Location: '.'thank.php');
$sql = "INSERT INTO users VALUES (0,'$UserId','$Name','$Gender', '$Email','$StreetAddress','$City','$Country','$Password','$date', 'stage1','$Phone')";



//INSERT INTO users VALUES (0,'$UserId','$Name','$Gender', '$Email','$StreetAddress','$City','$Country','$Password','$date', 'stage1','$Phone')";



$result = mysqli_query($dbc, $query);

//echo $sql;

header('Location: login.php');
/*
if (mysqli_query($dbc2, $sql)) {
	

	
	
  //header('Location: login.php');

}
*/


//$sql2 = "INSERT INTO userbible (Sn, UserId , bibleId, date)
//VALUES ('','$UserId','$bibleId','$date')";
//if (mysqli_query($dbc2,$sql2)) {
	
	
	
//header('Location: '.'thanks.php');
  
  
//}
}
else {


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enhanced Learning System </title>

   
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

                        <span class="d-none d-lg-block"></span>
                    </a>


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



            <div class="page-section container page__container">
                <div class="col-lg-10 p-0 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-24pt mb-md-0">
                            <form method="post" action="signup.php">
							
							<input name="bibleId" id="bibleId" type="hidden"  class="form-control" value="<?php echo $bibleId; ?>">
								<div class="form-group">
                                    <label class="form-label" for="name">Your name:</label>
                                    <input name="Name" id="Name" type="text" class="form-control" placeholder="Your full name ...">
                                </div>
								<div class="form-group">
								<label class="form-label" for="name">Gender:</label>
								<label for="Gender"></label>
                            <select name="Gender" class="form-control"  id="gender">
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
							</div>
							<div class="form-group">
                                    <label class="form-label" for="name">Phone Number:</label>
                                    <input name="Phone" id="Phone" type="text" class="form-control" placeholder="Your Phone Number ...">
                                </div>
                                <div class="dropdown">
                                    <label class="form-label" for="email">Your email:</label>
                                    <input name="Email" id="Email" type="Email" class="form-control" placeholder="Your email address ...">
                                </div>
								<div class="form-group">
                                    <label class="form-label" for="name">Address:</label>
                                    <input name="StreetAddress" id="StreetAddress" type="text" class="form-control" placeholder="Address ...">
                                </div>
								<div class="form-group">
                                    <label class="form-label" for="name">City:</label>
                                    <input name="City" id="City" type="text" class="form-control" placeholder="City ...">
                                </div>
								<div class="form-group"> 
                                    <label class="form-label" for="name">Country:</label> 
									<label for="Country"></label>
                            <select name="Country" class="form-control"  id="country">
                              <option value="Afghanistan ">Afghanistan </option>
                              <option value="Albania ">Albania </option> 
							  <option value="Algeria  ">Algeria  </option> 
							  <option value="Bangladesh  ">Bangladesh  </option> 
							  <option value="Barbados  ">Barbados  </option>  
							  <option value="Canada  ">Canada   </option>  
							  <option value="Costa Rica   ">Costa Rica    </option> 
							  <option value="Nigeria   ">Nigeria   </option>
							  
                            </select>
							
							<!---
                                    <input name="Country" id="Country" type="text" class="form-control" placeholder="Country ...">
									
								-->	
									
                                </div>
                                <div class="form-group mb-24pt">
                                    <label class="form-label" for="password">Password:</label>
                                    <input name="Password" id="Password" type="Password" class="form-control" placeholder="Your password ...">
                                </div>
								<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Create account">
								
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="d-flex mb-8pt">
                                        <img src="img/babcock.jpg" width="500" height="380">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-separator justify-content-center m-0">
                <div class="page-separator__text"></div>
            </div>
            <div class="page-section text-center">
                <div class="container page__container">
                   
                </div>
            </div>





        </div>
         <!-- // END Header Layout Content -->


        <div class="js-fix-footer2 bg-white border-top-2">
            <div class="container page__container page-section d-flex flex-column">
                <p class="text-70 brand mb-24pt">
			
                    <p class="text-50 small mt-n1 mb-0">Enhanced Learning System<?php echo date("Y"); ?>  All rights reserved.</p>
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

                    <span>Luma</span>
                </a>




				
				
				
				
				
				
				
				
				
				
				
				
				
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
<?php
}

?>

