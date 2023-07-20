<?php
session_start();


//include_once('numbers/validate05.inc');
include_once('incl/config.php');
/*
include_once('../numbers/validate05.inc');

include_once('../'. decryptpass('qr3|xq2lhq********************'));
*/




if (isset($_POST['submit'])) {
	
	$tag = trim($_POST['tag']);
	//$password = trim($_POST['password']);
	
	
	  
$query = "SELECT * FROM property WHERE Serial = '$tag'";
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

	//$name = $row['Name'];
	//$role = $row['Role'];
	

	
	
	//$name = 'akins';
	//$role = 'inter';
	
	
	
	
	
	
	
	//$_SESSION['who'] = $name;
	//$_SESSION['role'] = $role;
	
	
	//if($role =='Admission'){
		
		
		
		
		echo '<h1>IDENTITY OF THE OWNER OF ITEM WITH SERIAL NUMBER '.$tag.'</h1></br>';
		echo '<h3>Name : <i>'.$row['Name'].'</i> ITEM : <i>'.$row['Property'].'</i> </h3></br>';
		echo '<h3>Description : <i>'.$row['Description'].'</i></h3></br>';
		echo '<h3>Type : <i>'.$row['Type'].'</i> Color : <i>'.$row['Color'].'</i> </h3></br>';
		echo '<h3>Generated Tag : <i>'.$row['Generatedtag'].'</i> Phone : <i>'.$row['Phone'].'</i>  Email : <i>'.$row['Email'].'</i></h3></br></br>';
		
		echo ' <A href="search.php">Search Another Item by Tag</a></br>';
	echo ' <A href="admin.php">Back to Admin page</a>';
	
	//header("location: admin.php");
	
	/*}
	elseif($role =='Admin'){
		
	
	
	header("location: admin.php");
	
	} 
	
	else{
		
		header("location: user.php");
	}
	
	*/
	
	
	
	}
	else {
		
	echo 'There is no item registered with this tag <A href="admin.php">Try Again</a>';
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

        <title>Property Identification System</title>

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
                    <h4 class="text-center mb5">Hall Management System</h4>
                    <h4 class="text-center mb5">Property Search</h4>
                    <p class="text-center">Sign in to your account</p>
                    
                    <div class="mb30"></div>
                    
                    <form action="searchserial.php" method="post">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="Serial No" name="tag">
                        </div><!-- input-group -->
                        
                        
                        <div class="clearfix">
                           
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success" name="submit" >Search <i class="fa fa-angle-right ml5"></i></button>
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







