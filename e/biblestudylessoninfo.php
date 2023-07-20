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


<!DOCTYPE html><html lang="en">
<!-- Mirrored from www.bibleschools.com/en/courses/1/lessons/1/steps/9 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jul 2021 16:50:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head><meta charset="utf-8" /><meta content="width=device-width, initial-scale=1.0" name="viewport" /><meta content="#1b293c" name="theme-color" /><meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="ZoB4JX7lm+Yzi+fr9vLQoXKbyi4bfkqomPIHitB3Wv83I0SqBr55Cqo38MeMqn1k287PWO2ybBzthrBARN/qeA==" /><title>Bibleschools</title><script type="text/javascript"> (function(d) { var config = { kitId: 'yww8tpl', scriptTimeout: 3000, async: true }, h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s) })(document);</script><link rel="stylesheet" media="all" href="assets/application-599a2c98e4b61f83507de58f89b5210e936949d055b89c072242dc1ccd9c6fdf.css" data-turbolinks-track="reload" /><script>(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = 'assets/sidebarv2bc2c.js?apikey=rbdrz3j5rxrcuxkagyogyg';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');</script><!-- Google Tag Manager -->
<script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'assets/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-KD8Q6H2');
</script>
<!-- End Google Tag Manager -->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window,document,'script',
  'assets/fbevents.js');
  fbq('init', '790022308368441');
  fbq('track', 'PageView');

</script>
<!-- End Facebook Pixel Code -->
</head><body class="steps show locale-en">
<!-- End Google Tag Manager (noscript) -->
<div class="masthead"><div class="container-fluid"><img src="assets/logo-2.png" ><div class="site-nav"></div><a class="nav-trigger"><span class="nav-trigger__box"><span class="nav-trigger__inner"></span></span></a>You are welcome  <?php echo $Name; ?>  to Bible Study Series</div></div><div class="messages"></div><div class="lesson" data-locale="en" style="background-image: url(assets/image4.jpg)"><div class="lesson__masthead"><div class="container"><span class="lesson__course-title"><?php echo $biblestudiesname; ?></span></div></div><div class="container">





<div class="lesson__number"><div><?php echo $bstudyId; ?></div></div><h1 class="lesson__heading"><?php echo $LessonsTitle; ?> </h1>
<div class="lesson__panel">
  <div class="lesson__step-body">
    <p> <?php echo $LessonsContect; ?>—<em>Author: <?php echo $author; ?></em> </p>
  </div>
</div>
</div>
<?php
$bibleId = $_REQUEST['bibleId'];

$queryb = "SELECT * FROM biblelessons WHERE bibleId = '$bibleId'";
	 	 $resultb = mysqli_query($con, $queryb);
	
$rowb=mysqli_fetch_array($resultb);
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];

	$bibleId = $rowb['bibleId']; 
	$bstudyId = $rowb['bstudyId'];
$LessonsTitle = $rowb['LessonsTitle'];	
	
	
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];


 ?>
 <div class="d-flex align-items-center justify-content-center">
<?php
$bibleId = $_REQUEST['bibleId'];

$queryb = "SELECT * FROM biblelessons WHERE bibleId = '$bibleId'";
	 	 $resultb = mysqli_query($con, $queryb);
		 $cps = 0;
	
while ($rowb=mysqli_fetch_array($resultb)){
	


						//$rowb=mysqli_fetch_array($resultb);
	//$insurance_id = $row['insurance_id'];

	$bibleId = $rowb['bibleId']; 
	$bstudyId = $rowb['bstudyId'];
$LessonsTitle = $rowb['LessonsTitle'];	
	$cps = $cps +1;
	
	//$report_type_id = $rowb['report_type_id'];
	//$teacherid =  $rowb['teacherid1'];
	
	//$report_file = $rowb['report_file'];


 ?>	

<a  href="biblestudylessoninfo.php?bstudyId=<?php echo $bstudyId;?>&bibleId=<?php echo $bibleId;?>" class="lesson__button"><?php echo $cps ?></a>&nbsp;<?php } ?>&nbsp;<a href="student_dashboard.php" class="lesson__button">Finish</a>
  </div>
 </div></div><div class="footer"><div class="container">
   <div class="footer">
     <div class="container">
       <p><span dir="ltr" lang="en">You are welcome <?php echo $Name; ?> to Bible Study Series &nbsp;Copyright © Spring of Life Outreach Ministry<?php echo date("Y"); ?> &copy; All rights reserved.<a href="../aboutus.php">About Us</a>. <a href="../contactus.php">Contact Us</a></span></p>
       <span dir="ltr" lang="en"><img alt="Voice of Prophecy logo" class="footer__logo" src="assets/logo-2.png" /></span></div>
   </div>
 </div></div><script src="assets/application-7e38db31cc29bf034c0774af155757398fe4a5f0486d0fede5f7acd0a4a8f9fb.js" data-turbolinks-track="reload"></script><script src="packs/js/application-c8f9e060f8f549723184.js"></script></body>

</html>