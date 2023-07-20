<?php
session_start();



include_once('incl/config.php');

$empname = $_SESSION['who'];



if (isset($_POST['submit'])) {
	
	$cname = trim($_POST['cname']);
	//$area = trim($_POST['area']);
	$course = trim($_POST['course']);
	$num = trim($_POST['number']);
	
	
	$date = time();
	
	//echo $username;
	//echo $password;
	  
$query = "SELECT * FROM request WHERE Name ='$cname' AND Course = '$course'";






$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);





if($numrows <= 0){

$querye = "INSERT INTO request VALUES (0,'$cname', '$course', '$num', 'New', '$date')";
$result = mysqli_query($dbc, $querye);


//$queryee = "INSERT INTO users VALUES (0,'$cname', '$username', '$password', 'Employer')";
//$resulte = mysqli_query($dbc, $queryee);


//$insertrecord = "UPDATE students SET Fullname='$fullname', Department ='$department', Hallname='$hall' WHERE SN=$sn";
  
//$result = mysql_query($querye);
//echo $querye;



echo 'Corpers Request Successful <a href="admin.php">Continue to home</a>';
//header("location: admin.php");


}
else{
echo 'Existing User  <a href="index.php">Continue to login</a>';
//header("location: index.php");

}

}
else{


?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AN NYSC SERVICE YEAR UTILITY SYSTEM</title>

    <link href="admin/demo/webpage/chain/css/style.default.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/morris.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/select2.css" rel="stylesheet" />
    <link href="admin/demo/webpage/chain/css/morris.css" rel="stylesheet">
    <link href="admin/demo/webpage/chain/css/tunjicss.css" rel="stylesheet">
</head>

<body>

<header>
    <div class="headerwrapper">
        <a href="index-2.html" class="logo">
                <img src="admin/demo/webpage/chain/images/babcock.png" alt="" />
            </a>

    </div><!-- headerwrapper -->
</header>

<section>
    <div class="mainwrapper">
        <div class="leftpanel">
            <div class="media profile-left">
                <a class="pull-left profile-thumb" href="profile.html">
                    <img class="img-circle" src="admin/images/noimage.jpg" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"> </h4>
                   
                </div>
            </div><!-- media -->

            <ul class="nav nav-pills nav-stacked">
               
            </ul>

        </div><!-- leftpanel -->

        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="media-body">
                        <ul class="breadcrumb">
                            <li><a href="#"><i class="fa fa-user "></i></a></li>
                            <li><a href="superadmin.html"> Membership</a></li>
                            <li></li>
                        </ul>
                        <h4>Membership Form</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->


            <div class="contentpanel">
                <div class="panel panel-babcock">
                    <div  class="panel-heading">Employers Membership Registration


                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="request.php" method="post">
								
								 <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Company/Institution Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="cname"  name="cname" value="<?php echo $empname;  ?>">
                                        </div>
                                    </div>
									
									 <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Course where Corper(s) are Needed</label>
                                        <div class="col-md-6">
										
										
										
										
										
										
										<select name="course">
										
										<option>Any Course</option>
										<option>Any Science</option>
										<option>Any Art</option>
										<option>Any Commercial</option>
										<option>Any Education</option>
										<option>Any Mathematical/Computing</option>
										<option>Any Medical</option>
										<option>Any Engineering</option>
										<option>Any Environmental</option>
										
										<option>BioChemistry</option>
										<option>MicroBiology</option>
										<option>Christian Religious Study</option>
										<option>English Language</option>
										<option>French Study</option>
										<option>Marketing</option>
										<option>Accounting</option>
										<option>Banking and Finance</option>
										
										<option>Economics</option>
										<option>Pure and Applied Mathematics</option>
										<option>Mathematics and Statistics</option>
										<option>Computer Science</option>
										<option>Software Engineering</option>
										<option>Information Technology</option>
										<option>Computer Engineering</option>
										<option>Electrical Engineering</option>
										
										<option>Mechanical Engineering</option>
										<option>Civil Engineering</option>
										<option>Quantity Survey</option>
										<option>Land Survey</option>
										<option>Architecture</option>
										<option>Nursing Science</option>
										<option>Medical Laboratory Science</option>
										<option>Medicine and Surgery</option>
										
										<option>Anatomy</option>
										<option>Physiology</option>
										<option>Pharmacy</option>
										
										</select>


										
										
                                           
                                        </div>
                                    </div>
									
									
									
									
									
									
									
									
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">No of Corpers Needed</label>
                                        <div class="col-md-6">
										
										
										<select name="number">
										
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										</select>
										
										
                                           
                                        </div>
                                    </div>
									
									 
									
								
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="form-group col-md-6">
                                            <button class="btn-sm btn btn-success" name="submit"><i class="fa fa-check"></i> Send</button>
                                            </div>
                                    </div>

                                </form>
                            </div>




                        </div><!-- row -->
                    </div>

                </div>


            </div><!-- contentpanel -->


        </div><!-- mainpanel -->
    </div><!-- mainwrapper -->
</section>


<script src="admin/demo/webpage/chain/js/jquery-1.11.1.min.js"></script>
<script src="admin/demo/webpage/chain/js/jquery-migrate-1.2.1.min.js"></script>
<script src="admin/demo/webpage/chain/js/bootstrap.min.js"></script>
<script src="admin/demo/webpage/chain/js/modernizr.min.js"></script>
<script src="admin/demo/webpage/chain/js/pace.min.js"></script>
<script src="admin/demo/webpage/chain/js/retina.min.js"></script>
<script src="admin/demo/webpage/chain/js/jquery.cookies.js"></script>

<script src="admin/demo/webpage/chain/js/flot/jquery.flot.min.js"></script>
<script src="admin/demo/webpage/chain/js/flot/jquery.flot.resize.min.js"></script>
<script src="admin/demo/webpage/chain/js/flot/jquery.flot.symbol.min.js"></script>
<script src="admin/demo/webpage/chain/js/flot/jquery.flot.crosshair.min.js"></script>
<script src="admin/demo/webpage/chain/js/flot/jquery.flot.categories.min.js"></script>
<script src="admin/demo/webpage/chain/js/flot/jquery.flot.pie.min.js"></script>
<script src="admin/demo/webpage/chain/js/morris.min.js"></script>
<script src="admin/demo/webpage/chain/js/raphael-2.1.0.min.js"></script>
<script src="admin/demo/webpage/chain/js/jquery.sparkline.min.js"></script>

<script src="admin/demo/webpage/chain/js/custom.js"></script>
<script src="admin/demo/webpage/chain/js/charts.js"></script>

</body>

</html>

<?php

}
?>


