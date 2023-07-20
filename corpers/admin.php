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
                    <h4 class="media-heading"> <?php echo $name.' ('.$role.')';?>  </h4>
                    <small class="text-muted"></small>
                </div>
            </div><!-- media -->

            <h5 class="leftpanel-title">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">

               


 <li class=""><a href="complain.php"><i class="fa fa-wrench"></i> <span>Complain</span></a>			  <li class=""><a href="pend.php"><i class="fa fa-wrench"></i> <span>Show Map</span></a>
			   
				
				
				
				
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
                            <li></li>
                        </ul>
                        <h4>Corper's Portal</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->


            <div class="contentpanel">
                <div class="panel panel-babcock">
                    <div  class="panel-heading">Tasks for Corpers
                        <div class="pull-right">
                            <a title="Create User" href="createuser.php"><span class="fa fa-plus-circle fa-2x" style="color: #fff;"></span></a>
                        </div>

                    </div>
                    <div class="panel-body">
					
					
					
					<h1>Deployment</h1>
					<table class="table table-default mb30 table-striped table-bordered">
					 <thead>
					<tr><th>Company</th><th>Address</th><th>Phone no</th><th>Status</th></tr>
					
					 </thead>
					
					
					
					<tbody>
					
					<?php
										
											  
$query = "SELECT * FROM posting WHERE Corper='$name' ";
//$result = mysql_query($query);
//$row = mysql_fetch_array($result);


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	
	$numrows = mysqli_num_rows($result);


if($numrows > 0){
                                        
					

$num =1;
									do{	
										?>
										
										
									
										
                                       
                                        <tr>
                                            <td><?php $cname = $row['Company'];  echo $row['Company'];  ?></td>
                                            <td><?php 
											
											$querym = "SELECT * FROM employers WHERE Companyname='$cname'";
//$result = mysql_query($query);
//$row = mysql_fetch_array($result);


$resultm = mysqli_query($dbc, $querym);
	$rowm = mysqli_fetch_array($resultm);
											
						$address = $rowm['Address'];
                       $phone = $rowm['Phone'];						
											
											
											echo $address; ?></td>
                                           
                                            
											<td><?php 
											
											//$date = $row['Complaintime'];
											echo $phone; ?></td>
                                            
                                            
                                             <td>
                                             <?php
											 echo 'Posted';
											 //echo $id;
											 
											 ?>
                                             </td>

                                        </tr>
										
									<?php

} while ($row = mysqli_fetch_array($result));
}
else{


?>

<tr><th></th><th></th><th></th><th>Not Posted Yet</th></tr>



<?php

}

?>									
						
					
	</tbody>				
											  
								
					
					
					
					
					
					
					
					
					
					
					
					
					</table>
					
					
					
					
					</br>
					</br>
					</br>
					<h1>Complains</h1>
					
					 <table class="table table-default mb30 table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            
                                            <th>Complain Title </th>
                                            <th>Detail</th>
											 <th>When It was Registered</th>
                                            <th>Status</th>
                                           
                                        </tr>
                                        </thead>
                                        
					<tbody>
					
					<?php
										
											  
$query = "SELECT * FROM complain WHERE Corper='$name'";
//$result = mysql_query($query);
//$row = mysql_fetch_array($result);


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	
	$numrows = mysqli_num_rows($result);



                                        
					

$num =1;
									do{	
										?>
										
										
									
										
                                       
                                        <tr>
                                            <td><?php echo $row['Concern'];  ?></td>
                                            <td><a target="new" href="discussion.php?title=<?php echo $row['Description']; ?>"><?php $person = $row['Concern'];  echo $person;  ?></a></td>
                                           
                                            
											<td><?php 
											
											$date = $row['Complaintime'];
											echo date('m/d/Y', $date); ?></td>
                                            
                                            
                                             <td>
                                             <?php
											 $id = $row['Response'];
											 echo $id;
											 
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
