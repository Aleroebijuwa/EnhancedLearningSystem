<?php
session_start();



include_once('incl/config.php');





if (isset($_POST['submit'])) {
	
	
	$oname = trim($_POST['oname']);
	//$hall = trim($_POST['hall']);
	$username = trim($_POST['username']);
	
	
	$password = trim($_POST['password']);
	
	
	$date = time();
	$generatedtag = $date * 23;
	
	//$date = time();
	
	//echo $username;
	//echo $password;
	  
$query = "SELECT * FROM users WHERE Username ='$username' AND Password = '$password'";


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);

if($numrows <= 0){

$querye = "INSERT INTO users VALUES (0,'$oname', '$username', '$password', 'Admin')";
$result = mysqli_query($dbc, $querye);
//$result = mysql_query($querye);
//echo $querye;



echo 'Admin registration Successful below </br></br></br></br></br>';


//echo '<b><h1>'.$generatedtag.'</h1></b></br></br>';





echo 'Thanks <a href="registeradmin.php">Register another Admin</a></br>';

echo '<a href="admin.php">Return to Admin page</a></br>';




//header("location: admin.php");


}
else{
echo 'Existing Item  <a href="admin.php">Continue to Admin Panel</a>';
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
                <div class="media-body"></div>
            </div><!-- media -->

            <h5 class="leftpanel-title">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="superadmin.html"><i class="fa fa-user"></i> <span>Membership</span></a>

                <li class=""><a href="setting.html"><i class="fa fa-wrench"></i> <span>Settings</span></a>
                    <li class="" ><a href="../admission/" ><i class="fa fa-wrench"></i><span>Logout</span></a></li>

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
                            <li><a href="superadmin.html">Registration page</a></li>
                            <li></li>
                        </ul>
                        <h4>Registration Form</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->


            <div class="contentpanel">
                <div class="panel panel-babcock">
                    <div  class="panel-heading">Admin Registration


                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="registeradmin.php" method="post">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Admin Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="name" placeholder="Fullname" name="oname">
                                        </div>
                                    </div>
									
									
									
									
									 
									
									
									
									 <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Username</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                                        </div>
                                    </div>
									
									
								
                                 </div>
									 <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control" id="username" placeholder="password" name="password">
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


