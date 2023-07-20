<?php
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
	
	$_SESSION['userID'] = $UserId;
	
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
	
	$queryc = "SELECT* FROM userbible INNER JOIN bible_studies ON userbible.bibleId = bible_studies.bibleId AND userbible.UserId='$UserId' "; 
//"SELECT * FROM bible_studies  WHERE bibleId = '$bibleId'";
	 	 $resultc = mysqli_query($con, $queryc);
		 
	$rowc=mysqli_fetch_array($resultc);
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];
	
	$Courseimage = $rowc['Courseimage'] ;

	$img_file = "admin/photos/".$Courseimage;

	$dimg = "<img src='$img_file' border='0'width='300px' height='200px'>";
	
	$dimg2 = "<img src='$img_file' border='0' width='40px' height='40px'>";
	
	$bibleId = $rowc['bibleId']; 
	$author = $rowc['author']; 
	$info = $rowc['info']; 
	$biblestudiesname = $rowc['biblestudiesname'];
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];
	

// }
///////////////////////////////////////////////////////

$bstudyId = $_REQUEST['bstudyId'];
$bibleId = $_REQUEST['bibleId'];

$queryd = "SELECT * FROM biblelessons WHERE bstudyId = '$bstudyId' AND bibleId = '$bibleId' ";
	 	 $resultd = mysqli_query($con, $queryd);
	
$rowd=mysqli_fetch_array($resultd);
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];

	 
	$bstudyId = $rowd['bstudyId']; 
	$teacherid = $rowd['teacherid'];
	$LessonsTitle = $rowd['LessonsTitle'];
	$LessonsContect = $rowd['LessonsContect'];
	$bibleId= $rowd['bibleId'];
	$bibleId1= $bibleId;
	$bstudyId= $rowd['bstudyId'];
	$bstudyId1= $bstudyId;
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];
	
	$Lessonsimage = $rowd['Lessonsimage'] ;

	$file = "admin/photos2/".$Lessonsimage;

	//$bibst = "<application/pdf src='$src_file' border='0' >";
	$bibst="<src='$file' type='application/pdf'>";
	
	//$bibst2 = "<img src='$img_file' border='0' width='40px' height='40px'>";
	
	
//header('Content-type: application/pdf');
  
//header('Content-Disposition: inline; Lessonsimage="' . $Lessonsimage . '"');
  
//header('Content-Transfer-Encoding: binary');
  
//header('Accept-Ranges: bytes');
  
// Read the file
//@readfile($file);
	
	
	
	
	$querye = "SELECT* FROM bible_studies WHERE bibleId = '$bibleId1'"; 
//"SELECT * FROM bible_studies  WHERE bibleId = '$bibleId'";
	 	 $resulte = mysqli_query($con, $querye);
		 
	$rowe =mysqli_fetch_array($resulte);
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];
	
	$Courseimage = $rowe['Courseimage'] ;

	$img_file = "admin/photos/".$Courseimage;

	$dimg = "<img src='$img_file' border='0'width='220px' height='180px'>";
	
	$dimg2 = "<img src='$img_file' border='0' width='40px' height='40px'>";
	
	$bibleId = $rowe['bibleId']; 
	$author = $rowe['author']; 
	$info = $rowe['info']; 
	$biblestudiesname = $rowe['biblestudiesname'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from luma.humatheme.com/compact-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:44:26 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spring of Life Outreach Ministry: Bible Study</title>

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

<link type="text/css" href="assets/css/yaw.css" rel="stylesheet">





</head>

































<body class="layout-compact layout-compact">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page-content">
            <div class="mdk-box  bg-dark js-mdk-box mb-0" data-effects="parallax-background blend-background">
                <div >
                    <div class="mdk-box__bg-front" style="background-image: url(assets/images/image4.jpg); background image repeat"></div>
                </div>
				
                <div class="mdk-box__content justify-content-center">
                    <div class=" page__container text-center py-112pt">
					<p class="timi"><?php echo $dimg; ?></p>
                        <p class="hmensah"><?php echo $LessonsTitle; ?> </p>
<ul class="nav navbar-nav ml-auto mr-0" >
                    <li class="nav-item"float="right-side" >
                        <p class="mensah"><?php echo $bstudyId; ?></p>
                    </li>
                </ul>
				<p class="kay">Spring of Life Mission outreach Ministries </p>
                    </div>
                </div>
            </div>




            <div class="page-section border-bottom-2">
                <div class=" page__container">
<div class="page-separator">
<div class="page-separator__text"><h5>Bible Study Lesson</h5></div>
                    </div>
                   <div class="d-flex align-items-center mb-heading">
                   
                    </div>
<?php echo $LessonsContect; ?>
<h6>download the lesson <?php echo $Lessonsimage;?></h6>
                        <div class="list-group list-group-flush">
<div class="list-group-item p-3">
<?php include "admin/database.php"; ?>

<?php
	//Get the total questions
	$query="select * from questions WHERE bstudyId ='$bstudyId' AND bibleId ='$bibleId'";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;
	
	$results = mysqli_query($con, $query);
		 
	$rows =mysqli_fetch_array($results);
	
	$question_number = $rows['question_number'];
	$n=(int)$question_number;
	

 ?>



                <!-- Toggler -->
               
                </div>
            </div>

            <div class="page-section border-bottom-2">
                <div class=" page__container">
                    <div class="page-separator">
                        <div class="page-separator__text"><h5>Bible Study Lesson Quiz</h5></div>
                    </div>

<div class="row align-items-start">
                                    
                                        
                                            
											  <div class="page__container">
        <h3> We will like to test your knowledge on what you have lent in this Lesson</h3>
	<p>This is a multiple choice quize to test your knowledge about bible study lesson</p>
	<ul>
		<li><strong>Number of Questions: </strong><?php echo $total; ?></ul>
		<li><strong>Type: </strong>Multiple Choice</ul>
		<li><strong>Estimatd Time: </strong><?php echo $total*0.5; $_SESSION['sn'] = 0; $_SESSION['count'] = 0; ?> minutes</ul>
	</ul>
	<a href="question.php?n=<?php echo $question_number;?>&bstudyId=<?php echo $bstudyId;?>&bibleId=<?php echo $bibleId;?>" class="btn btn-primary">Start Quiz</a>
      </div>
                                   
                                </div>
                            </div>
                </div>
            </div>

            <div class="page-section border-bottom-2">
                <div class=" page__container">
                    <div class="page-separator">
                        <div class="page-separator__text"><h5>Ask A Question</h5></div>
                    </div>

<div class="list-group-item p-3">
                                <div class="container page__container">
                                    
                                        
                                            <div class="media-left mr-12pt">
                                                <a href="#" class="avatar avatar-sm">
                                                    <!-- <img src="AC" alt="avatar" class="avatar-img rounded-circle"> -->
                                                    <span class="avatar-title rounded-circle"><?php echo $dimg2; ?></span>
                                                </a>
                                            </div>
                                            <div class="d-flex flex-column media-body media-middle">
                                               <h5> For more clarification on this topic kindly ask your question in the box below</h5>
                                            </div>
											<?php 
											if(isset($_POST['submit'])){
	
	




$bstudyId = $_POST['bstudyId'];
$bibleId = $_POST['bibleId'];
$teacherid = $_POST['teacherid'];
$Question = $_POST['Question'];
$date = date("dS F, Y.");




//$sqli = "INSERT INTO category SET  pro_id = '', prefield = '$prefield',postfield = '$postfield',category_name = '$category_name = '$bathroom', date = '$date'";

//$sql="INSERT INTO category (pro_id, category_name, prefield, postfield,date) VALUES ('','$category_name','$prefield','$postfield','$date')";
	//$query = @mysql_query($con, $sql);
	//if (!$query) die( "query Insert error ". mysql_error());
	//echo $sql;
	//header('Location: '.'thank.php');
$sql = "INSERT INTO biblequestions (questionId, bstudyId , bibleId, teacherid, Question,date )
VALUES ('','$bstudyId','$bibleId','$teacherid', '$Question','$date')";

mysqli_query($con, $sql);



}										
											
											?>
                                        <form method="post" action="" enctype="multipart/form-data">
								
                                    <input name="bstudyId" id="bstudyId" type="hidden" class="form-control" value="<?php echo $bstudyId; ?>">
                                
                                    <input name="bibleId" id="bibleId" type="hidden" class="form-control" value="<?php echo $bibleId; ?>">
                                
								
                                    <input name="teacherid" id="teacherid" type="hidden" class="form-control" value="<?php echo $teacherid; ?>">
									
					         <div class="form-group">
					  <br>
								<label class="form-label" for="Question">Question:</label>
                      <textarea name="Question" cols="60" rows="10" id="Question" class="form-control"></textarea>
					  </div>
					  
								
								<input class="btn btn-primary" type="submit" name="submit" id="submit" value="Add Question">
								
                            </form>
							
                                   
                                </div>
                            </div>


                        </div>
						

                    </div>

                    

                </div>
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
<script src="ckeditor/ckeditor.js"></script>
	
<script>
CKEDITOR.replace('Question');

</script>



    <!-- Sidebar Mini JS -->
    <script src="assets/js/sidebar-mini.js"></script>
    <script>
        (function() {
            'use strict';

            // ENABLE sidebar menu tabs
            $('.js-sidebar-mini-tabs [data-toggle="tab"]').on('click', function(e) {
                e.preventDefault()
                $(this).tab('show')
            })

            $('.js-sidebar-mini-tabs').on('show.bs.tab', function(e) {
                $('.js-sidebar-mini-tabs > .active').removeClass('active')
                $(e.target).parent().addClass('active')
            })
        })()
    </script>

</body>


<!-- Mirrored from luma.humatheme.com/compact-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Aug 2020 13:44:31 GMT -->
</html>