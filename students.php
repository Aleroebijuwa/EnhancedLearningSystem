<?php
session_start();



include_once('incl/config.php');





if (isset($_POST['submit'])) {
	
	
	$title = trim($_POST['title']);
	$hall = trim($_POST['hall']);
	$complain = trim($_POST['complain']);
	
	
	//$password = trim($_POST['password']);
	
	
	$date = time();
	$generatedtag = $date * 23;
	
	//$date = time();
	
	//echo $username;
	//echo $password;
	  
$query = "SELECT * FROM complain WHERE Concern ='$title' AND HallId = '$hall' AND Description = '$complain'";


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	$numrows = mysqli_num_rows($result);

if($numrows <= 0){
//$querye = "INSERT INTO complain VALUES ('','$oname', '$hall', '$username', '$password', '$date', 'Admin')";
$querye = "INSERT INTO complain VALUES (0, '$title', '$hall', '$complain', '$date', 'Not Yet', 'Nil')";
$result = mysqli_query($dbc, $querye);
//$result = mysql_query($querye);
//echo $querye;



//echo 'Hall Admin registration Successful below </br></br></br></br></br>';


//echo '<b><h1>'.$generatedtag.'</h1></b></br></br>';





//echo 'Thanks <a href="registeradmin.php">Register another Item</a></br>';

//echo '<a href="admin.php">Return to Admin page</a></br>';




//header("location: admin.php");


}
else{
//echo 'Existing Item  <a href="admin.php">Continue to Admin Panel</a>';
//header("location: index.php");

}




}







?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.com/demo/webpage/chain/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2016 09:51:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hall management System</title>

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
                <a class="pull-left profile-thumb" href="adminlog.php">
                   
                </a>
                
				
				
				
				
            </div><!-- media -->

            <h5 class="leftpanel-title">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">

              
                <li class=""><a href="complaint.php"><i class="fa fa-wrench"></i> <span>Comment or complaint</span></a>
 <li class=""><a href="login.php"><i class="fa fa-wrench"></i> <span>Login</span></a>
            </ul>

        </div><!-- leftpanel -->

        <div class="mainpanel">
            <div class="pageheader">
                <div class="media">
                    <div class="pageicon pull-left">
                        <i class="fa fa-list"></i>
                    </div>
                    <div class="media-body">
                        
						
						
                        <h4>Hall management System</h4>
                    </div>
                </div><!-- media -->
            </div><!-- pageheader -->

			
			
			
			
			
			
			

            <div class="contentpanel">
                <div class="panel panel-babcock">
                    <div  class="panel-heading">Requests and Complaints


                    </div>
					
					
					
					 <table class="table table-default mb30 table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            
                                            <th>Hall </th>
                                            <th>Title of Complain</th>
											 <th>Detail</th>
                                            <th>Response From Admin</th>
                                            <th>Date/Time Posted</th>
                                        </tr>
                                        </thead>
                                        
					<tbody>
					
					<?php
										
											  
$query = "SELECT * FROM complain ORDER BY Complaintime DESC";
//$result = mysql_query($query);
//$row = mysql_fetch_array($result);


$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	
	$numrows = mysqli_num_rows($result);



                                        
					

$num =1;
									do{	
										?>
										
										
									
										
                                       
                                        <tr>
                                            <td><?php echo $row['HallId'];  ?></td>
                                            <td><a target="new" href="discussion.php?title=<?php echo $row['Concern']; ?>"><?php $person = $row['Concern'];  echo $person;  ?></a></td>
                                            <td><?php echo $row['Description'];  ?></td>
                                            
                                            <td><?php echo $row['Response'];  ?></td>
                                            
                                            
											<td><?php 
											
											$date = $row['Complaintime'];
											echo date('m/d/Y', $date); ?></td>

                                        </tr>
										
									<?php

} while ($row = mysqli_fetch_array($result));


?>									
						
					
	</tbody>				
					
					
		</table>			
					
					
					
					
				
			
<h2>Register New Complaint</h2>
	
		 <form action="students.php" method="post">
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="Complaint Title" name="title">
                        </div><!-- input-group -->
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <textarea name="complain" rows="4" cols="25" class="form-control" placeholder="Detail Complain"></textarea>
                           
                        </div><!-- input-group -->
                         <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="Hall of Residence" name="hall">
                        </div><!-- input-group -->
                        
                        <div class="clearfix">
                            <div class="pull-left">
                                
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-success" name="submit" >Send Complain <i class="fa fa-angle-right ml5"></i></button>
                            </div>
                        </div>                      
                    </form>		
					
					
					
                   
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
