<?php



include_once('incl/config.php');
//$userid = $_SESSION['thisuserid'];









?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Tasks</title>




<style>


#map-canvas1 { width: 1100px; height: 700px; } 


</style>


 <script src="https://maps.googleapis.com/maps/api/js"></script>




    <script>
	
	alert("wORKING");
        function initialize() {


var mapCanvas1 = document.getElementById('map-canvas1');
var mapOptions = { center: new google.maps.LatLng(7.155229, 3.345251), zoom: 8, mapTypeId: google.maps.MapTypeId.ROADMAP };
var map = new google.maps.Map(mapCanvas1, mapOptions);

//var marker = new google.maps.Marker({ position: '7.438, 4.31', map: map, title: 'Abeokuta' })
<?php

/*

$query = "SELECT * FROM location";
    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($result);
    $rownum1 = mysqli_num_rows($result);



                        $n = 1;


                        do
                        {




$lat = $row['lat'];
$long1 = $row['longi'];
$latlong = $lat. ', ' . $longi;
$latlong =  '7.155229, 3.345251';
?>
//alert("<?php //echo $latlong; ?>");
<?php
$title = $row['Name'];
//. ' (' . $row['Location']. ')';

?>
alert("<?php echo $title; ?>");

<?php

//
echo "var marker = new google.maps.Marker({position: $latlong, map: map, title: $title});";



//echo "var marker = new google.maps.Marker({ position: '$latlong', map: map, title: '$title' }); \n";




//echo "marker.setMap(map);";

   // var marker = new google.maps.Marker({position: myLatLng, map: map, title: 'Hello World!'});


//var marker = new google.maps.Marker({
  //  position: myLatLng,
  //  map: map,
  //  title: 'Hello World!'
 // });

                           // $n;

} while ($row = mysqli_fetch_array($result));

*/

?>


}


google.maps.event.addDomListener(window, 'load', initialize);

</script>


<!--
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initialize">
</script>

-->










<SCRIPT>
<!--
function countDown(){

 alert("wORKING");

         document.forms[0].submit();
 
    }
//-->
        </SCRIPT>


















</hEAD>
<body ONLOAD="window.setTimeout('countDown()',30000);" >


<h1> LOCATION Reports DASHBOARD</h1>


<div id="map-canvas1"></div>

















<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >




</form>
</body>
</html>




















