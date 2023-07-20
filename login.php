<?php
session_start();


//include_once('numbers/validate05.inc');
include_once('incl/config.php');
/*
include_once('../numbers/validate05.inc');

include_once('../'. decryptpass('qr3|xq2lhq********************'));
*/




if (isset($_POST['submit'])) {
	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	
	
	  
$query = "SELECT * FROM halladmin WHERE Username = '$username' AND Password = '$password'";
//$result = mysql_query($query);
//$row = mysql_fetch_array($result);
//$numrows = mysql_num_rows($result);

$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);
	
	
$name = $row['Name'];	






	
	//echo $query;
	//echo  'Name is : ' .$name;
	
	
	if ($numrows > 0 ) {

	$name = $row['Name'];
	//$role = $row['Role'];
	

	
	
	//$name = 'akins';
	//$role = 'inter';
	
	
	
	
	
	
	
	$_SESSION['who'] = $name;
	//$_SESSION['role'] = $role;
	
	
	//if($role =='Admin'){
		
	
	header("location: admin1.php");
	//header("location: user.php");
	
	//}
	
	
	//else{
		
		//header("location: user.php");
	//}
	
	
	
	
	
	}
	else {
		
	echo 'Wrong Entry <A href="index.php">Try Again</a>';
	exit;
		
		
		
	}
	
	
	
}
else {

?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themepixels.com/demo/webpage/chain/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2016 09:58:32 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Hall management System</title>

        <link href="admin/demo/webpage/chain/css/style.default.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="signin">
        
        
        <section>
            
            <div class="panel panel-signin">
                <div class="panel-body">
                    <div class="logo text-center">
                        <img src="admin/images/babcock.png" alt="Chain Logo" >
                    </div>
                    <br />
                    <h4 class="text-center mb5">Hall management System</h4>
                    <h4 class="text-center mb5">Hall Admin Login?</h4>
                    <p class="text-center">Sign in to your account</p>
                    
                    <div class="mb30"></div>
                    
                    <form action="login.php" method="post">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="Email" name="username">
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div><!-- input-group -->
                        
                        <div class="clearfix">
                            <div class="pull-left">
                                
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success" name="submit" >Sign In <i class="fa fa-angle-right ml5"></i></button>
                            </div>
                        </div>                      
                    </form>
                    
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <a href="signup.html" class="btn btn-timi btn-block">Copyright 2019 </a>
                </div><!-- panel-footer -->
            </div><!-- panel -->
            
        </section>


        <script src="admin/demo/webpage/chain/js/jquery-1.11.1.min.js"></script>
        <script src="admin/demo/webpage/chain/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="admin/demo/webpage/chain/js/bootstrap.min.js"></script>
        <script src="admin/demo/webpage/chain/js/modernizr.min.js"></script>
        <script src="admin/demo/webpage/chain/js/pace.min.js"></script>
        <script src="admin/demo/webpage/chain/js/retina.min.js"></script>
        <script src="admin/demo/webpage/chain/js/jquery.cookies.js"></script>

        <script src="admin/demo/webpage/chain/js/custom.js"></script>

    </body>

<!-- Mirrored from themepixels.com/demo/webpage/chain/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2016 09:58:33 GMT -->
</html>

<?php

}

?>







