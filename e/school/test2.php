
<?php
//if(!isset($_session));
session_start();

//if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
//header('LOCATION: '.'login.php');
//exit;
//}
include('incl/config.php');


		 
		 
//////////////////////////////////////

/*
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
		 
//////////////////////////////////////
//$bibleId = $_REQUEST['bibleId'];


if(isset($_POST['submit'])){
	
	




$que1 = $_POST['que1'];
$que2 = $_POST['que2'];



if(($que1 = '') && ($que1 = '')){






}




////////////////////////////

$UserId= $number;



$_SESSION['Name'] = $_POST['Name'];
$_SESSION['Email'] = $_POST['Email'];

//$sqli = "INSERT INTO category SET  pro_id = '', prefield = '$prefield',postfield = '$postfield',category_name = '$category_name = '$bathroom', date = '$date'";

//$sql="INSERT INTO category (pro_id, category_name, prefield, postfield,date) VALUES ('','$category_name','$prefield','$postfield','$date')";
	//$query = @mysql_query($con, $sql);
	//if (!$query) die( "query Insert error ". mysql_error());
	//echo $sql;
	//header('Location: '.'thank.php');
$sql = "INSERT INTO users VALUES (0,'$UserId','$Name','$Gender', '$Phone','$Email','$StreetAddress','$City','$Password','$Country','stage1','$date')";

if (mysqli_query($dbc2, $sql)) {
	

	
	
  //header('Location: thanks.php');

}
$sql2 = "INSERT INTO userbible (Sn, UserId , bibleId, date)
VALUES ('','$UserId','$bibleId','$date')";
if (mysqli_query($dbc2,$sql2)) {
	
	
	
//header('Location: '.'thanks.php');
  
  
}
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

                        <span class="d-none d-lg-block"><img src="../../img/resources/logo-2.png" /></span>
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

<h2>Learning Mode Query</h2>

            <div class="page-section container page__container">
                <div class="col-lg-10 p-0 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-24pt mb-md-0">
                            <form method="post" action="test.php">
							<p><h3>You are highly motivated in Learning when it is presented in which form?</h3></p>
							
							
							<input type="radio" id="video" name="que1" value="VIDEO"/>
� <label >VIDEO</label></br>
� <input type="radio" id="audio" name="que1" value="AUDIO" />
� <label for="audio">AUDIO</label></br>
� <input type="radio" id="drawing" name="que1" value="DRAWING" />
� <label for="drawing">DRAWING</label></br>
<input type="radio" id="text" name="que1" value="TEXT/BOOK" />
� <label for="drawing">TEXT/BOOKS</label></br>

							
							
							
							</div>
							
							 <div class="col-md-6 mb-24pt mb-md-0">
                            <form method="post" action="test.php">
							<p><h3>Apart from motivation, which form of learning will you always recommend for a learner like you for Tutorial </h3></p>
							
							
							<input type="radio" id="video" name="que2" value="VIDEO"/>
 <label >VIDEO</label></br>
� <input type="radio" id="audio" name="que2" value="AUDIO" />
� <label for="audio">AUDIO</label></br>
� <input type="radio" id="drawing" name="que2" value="DRAWING" />
� <label for="drawing">DRAWING</label></br>
<input type="radio" id="text" name="que2" value="TEXT/BOOK" />
� <label for="drawing">TEXT/BOOKS</label></br>

							
							
							
							</div>
							
							
								<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Create account">
								<input class="btn btn-primary" type="reset" name="Reset" id="submit" value="Reset">
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            

    </div>
   
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

