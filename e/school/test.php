
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
$subject = $_POST['subject'];
$topic = $_POST['topic'];


$typeofmedia ='';


if(($que1 == 'VIDEO') && ($que2 == 'VIDEO')){

$typeofmedia ='video';

}

elseif(($que1 == 'AUDIO') && ($que2 == 'AUDIO')){

$typeofmedia ='audio';

}


elseif(($que1 == 'PICTURES') && ($que2 == 'PICTURES')){

$typeofmedia ='pictures';

}


elseif(($que1 == 'TEXT/BOOK') && ($que2 == 'TEXT/BOOK')){

$typeofmedia ='book';

}
else{

$typeofmedia ='all';


}
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

<h2>Learning Mode Query</h2>

            <div class="page-section container page__container">
                <div class="col-lg-10 p-0 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-24pt mb-md-0">
                           
							<p><h3>Following are links to resources suitable for your learning based on your mode of learning</h3></p>
							<?php
							$constructedlink;
							
							
							echo $typeofmedia .'<br>';
							if($typeofmedia=='video'){
							$constructedlink= 'https://www.youtube.com/watch?v='.$topic.'LIKE'.$subject;
							}
							elseif($typeofmedia=='audio'){
							$constructedlink= 'https://www.spotify.com/ng/'.$topic.'LIKE'.$subject;
							}
							elseif($typeofmedia=='pictures'){
							$constructedlink= 'https://www.google.com/images?i='.$topic.'LIKE'.$subject.'&sclient=gws-wiz';
							}
							elseif($typeofmedia=='book'){
							$constructedlink= 'https://www.google.com/search?q='.$topic.'LIKE'.$subject;
							}
							else{
							$constructedlink= 'https://www.google.com/allmedia?i='.$topic.'LIKE'.$subject;
							}
							
							
							?>
							<p><a href="<?php echo $constructedlink;   ?>">Materials on <?php echo $topic . ' in ' . $subject; ?></a></p>
							
                           <p></p >
						   <p></p>
							
							
							
							</div>
							
							
                            
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

<h2>LEARNING SKILL TEST</h2>

            <div class="page-section container page__container">
                <div class="col-lg-10 p-0 mx-auto">
				 <form method="post" action="test.php">
                    <div class="row">
                        <div class="col-md-6 mb-24pt mb-md-0">
                           
							<p><h3>You are highly motivated in Learning when it is presented in which form?</h3></p>
							
							
							<input type="radio" id="video" name="que1" value="VIDEO"/>
  <label >VIDEO</label></br>
  <input type="radio" id="audio" name="que1" value="AUDIO" />
  <label for="audio">AUDIO</label></br>
  <input type="radio" id="pictures" name="que1" value="PICTURES" />
  <label for="pictures">PICTURES</label></br>
<input type="radio" id="text" name="que1" value="TEXT/BOOK" />
  <label for="drawing">TEXT/BOOKS</label></br>

							
							
							
							</div>
							
							 <div class="col-md-6 mb-24pt mb-md-0">
                            
							<p><h3>Apart from motivation, which form of learning will you always recommend for a learner like you for Tutorial </h3></p>
							
							
							<input type="radio" id="video" name="que2" value="VIDEO"/>
  <label >VIDEO</label></br>
  <input type="radio" id="audio" name="que2" value="AUDIO" />
  <label for="audio">AUDIO</label></br>
  <input type="radio" id="pictures" name="que2" value="PICTURES" />
  <label for="pictures">PICTURES</label></br>
<input type="radio" id="text" name="que2" value="TEXT/BOOK" />
  <label for="drawing">TEXT/BOOKS</label></br>

							
							
							
							</div>
							
						 </div>
						 
						 <div class="row">
                        <div class="col-md-6 mb-24pt mb-md-0">
                           
							<p><h3>Subject?</h3></p>
							
							<select name="subject">
							<option>Mathematics</option>
                           <option>Chemistry</option>
						   <option>Biology</option>
							<option>Physics</option>
							<option>Computer</option>
							
							</select>
							
							
							
							</div>
							
							 <div class="col-md-6 mb-24pt mb-md-0">
                            
							<p><h3>Topic </h3></p>
							
							<label for="topic">Topic</label>
							<input type="text" id="topic" name="topic" /></br>
  
							
							
							
							</div>
							
						 </div>
							
						 
						 
						 
						 
							
								<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit">
								
                            
                      
                      </form>


					  
                    </div>
                </div>
            </div>
            <div class="page-separator justify-content-center m-0">
              
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
			<img class="brand-icon" src="../../img/resources/logo-2.png" alt="Luma"> 
                    </p>
                    
                    <p class="text-50 small mt-n1 mb-0">Copyright &copy; Ebijuwa stephanie and Anjola Nicholas <?php echo date("Y"); ?>  All rights reserved.</p>
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

                        <span class="avatar-title rounded bg-primary"></span>

                    </span>

                    
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


</html>
<?php
}

?>

