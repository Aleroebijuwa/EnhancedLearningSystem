<?php
session_start();


//include_once('numbers/validate05.inc');
include_once('incl/config.php');
$name = $_SESSION['who'];
$role = $_SESSION['role'];
	//$_SESSION['role'] = $role;
	


?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.com/demo/webpage/chain/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2016 09:51:12 GMT -->
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
       <span class="span-header">AN NYSC SERVICE YEAR UTILITY SYSTEM</span>
        
    </div><!-- headerwrapper -->
 <a  class="logo">
                <img src="admin/demo/webpage/chain/images/babcock.png" alt="" />
            </a>
</header>

<section>
    <div class="mainwrapper">
        <div class="leftpanel">
            <div class="media profile-left">
                <a class="pull-left profile-thumb" href="">
                    <img class="img-circle" src="admin/images/noimage.jpg" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading">  <?php echo $name.' ('.$role.')';?> </h4>
                    <small class="text-muted"></small>
                </div>
            </div><!-- media -->

           
            <ul class="nav nav-pills nav-stacked">

               
			   <li class=""><a href="request.php"><i class="fa fa-wrench"></i> <span>Request For New Corper/s </span></a>
			   
				
				
				
				
                    <li class="" ><a href="../index.php" ><i class="fa fa-wrench"></i><span>Logout</span></a></li>


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
                            <li>Employer</li>
                        </ul>
                        <h4>Employer's Panel</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->


            <div class="contentpanel">
                <div class="panel panel-babcock">
                    <div  class="panel-heading">Presently Posted Corpers
                        <div class="pull-right">
                            <a title="Create User" href="createuser.php"><span class="fa fa-plus-circle fa-2x" style="color: #fff;"></span></a>
                        </div>

                    </div>
                    <div class="panel-body">
					
					
					
					
					
					
					
					
					
					
					 <table class="table table-default mb30 table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            
                                            <th>Name </th>
                                            <th>School</th>
											 <th>Qualification</th>
                                            <th>Course</th>
                                            <th>Phone</th>
                                        </tr>
                                        </thead>
                                        
					<tbody>
					
					<?php
										
					

$queryj = "SELECT Corper FROM posting WHERE Company='$name'";

$resultj = mysqli_query($dbc, $queryj);
	$rowj = mysqli_fetch_array($resultj);
	$corper = $rowj['Corper'];
					
$query = "SELECT * FROM corpers WHERE Name='$corper'";
//$result = mysql_query($query);
//$row = mysql_fetch_array($result);
//echo $query;

$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	
	$numrows = mysqli_num_rows($result);



                                        
					

$num =1;
									
									
									
									
									
									
									
									
									
									do{	
										?>
										
										
									
										
                                       
                                        <tr>
                                            <td><?php echo $row['Name'];  ?></td>
                                            <td><?php $person = $row['School'];  echo $person;  ?></a></td>
                                            <td><?php echo $row['Cclass'];  ?></td>
                                            
                                            <td><?php echo $row['Course'];  ?></td>
                                            
                                            
											
                                            
                                             <td>
                                             <?php
											 echo $row['Phone'];
											 
											 
											 ?>
                                             </td>

                                        </tr>
										
									<?php

} while ($row = mysqli_fetch_array($result));


?>									
						
					
	</tbody>				
					
		</table>			
	
						
						
						
						
						
						
						
						
						
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

<!-- Mirrored from themepixels.com/demo/webpage/chain/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2016 09:52:42 GMT -->
</html>