<?php
session_start();



include_once('incl/config.php');





if (isset($_POST['submit'])) {
	
	
	
	$hallad = $_SESSION['who'];
	
	$oname = trim($_POST['oname']);
	$matric = trim($_POST['idno']);
	$room = trim($_POST['room']);
	$hall = trim($_POST['hall']);
	$demerit = trim($_POST['demerit']);
	
	
	
	
	$date = time();
	$generatedtag = $date * 23;
	
	//$date = time();
	
	//echo $username;
	//echo $password;
	  
$query = "SELECT * FROM demeritrecord WHERE Studname ='$oname' AND Matric = '$matric' AND Hall = '$hall' AND Room = '$room' AND Demerit = '$demerit'";


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);

if($numrows <= 0){

$queryd = "SELECT * FROM demerit WHERE Name ='$demerit' ";

$resultd = mysqli_query($dbc, $queryd);
	$rowd = mysqli_fetch_array($resultd);


$point = $rowd['Points'];

$querye = "INSERT INTO demeritrecord VALUES (0,'$oname', '$matric', '$hall', '$room', '$demerit', '$point', '$hallad', '$date')";
$result = mysqli_query($dbc, $querye);
//$result = mysql_query($querye);
//echo $querye;



echo 'Item registration Successful below is the registration tag of the item please print and place on the item. also remember the tag for later reference</br></br></br></br></br>';


echo '<b><h1>'.$generatedtag.'</h1></b></br></br>';





echo 'Thanks <a href="register.php">Register another Item</a></br>';

echo '<a href="admin.php">Return to Admin page</a></br>';




//header("location: admin.php");


}
else{
echo 'Existing Item  <a href="admin1.php">Continue to Admin Panel</a>';
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

    <title>Consumer Connection System</title>

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
                        <h4>Demerit Assignment</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->


            <div class="contentpanel">
                <div class="panel panel-babcock">
                    <div  class="panel-heading">Student's Details</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="assigndemerit.php" method="post">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Student Name</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="name" placeholder="Fullname" name="oname">
                                        </div>
                                    </div>
									
									 <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Matric No</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="name" placeholder="Matric No" name="idno">
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <label for="room" class="col-sm-2 control-label">Room no</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="room placeholder="Room no" name="room">
                                        </div>
                                    </div>
									
									 
                                     
									 <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Hall</label>
                                        <div class="col-md-6">
                                        
                                        <select name="hall" class="form-control">
                                        
                                        <?php
										
											  
$query = "SELECT * FROM hall";
//$result = mysql_query($query);
//$row = mysql_fetch_array($result);


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	
	$numrows = mysqli_num_rows($result);



                                        
					

$num =1;
									do{	
										?>
                                        
                                        
                                       <option value="<?php echo $row['HallId'];  ?>"> <?php  $name =$row['Name'] . ' ('. $row['Gender']. ") Hall";
									   echo $name;  ?></option>
                                            
									<?php

} while ($row = mysqli_fetch_array($result));


?>									
                                        
                                        <option></option>
                                        
                                        </select>
                                        
                                          
                                        </div>
                                    </div>
									
									
                                    
                                    
                                    
                                    
                                    
                                    
                                    
									 <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Demerit</label>
                                        <div class="col-md-6">
                                        
                                        <select name="demerit" class="form-control">
                                        
                                        <?php
										
											  
$query = "SELECT * FROM demerit";
//$result = mysql_query($query);
//$row = mysql_fetch_array($result);


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	
	$numrows = mysqli_num_rows($result);



                                        
					

$num =1;
									do{	
										?>
                                        
                                        
                                       <option value="<?php echo $row['Name'];  ?>"> <?php  $name =$row['Name'] . ' ('. $row['Description']. ")";
									   echo $name;  ?></option>
                                            
									<?php

} while ($row = mysqli_fetch_array($result));


?>									
                                        
                                        <option></option>
                                        
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


