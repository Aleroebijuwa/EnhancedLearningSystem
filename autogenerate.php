<?php
//echo 'testing';

//if (!isset($_POST['submit'])){


//$sn = $_GET['sn'];

$databaseconnect = mysqli_connect('localhost', 'root', '', 'nysc')
or die('Server connection cannot be established.');




$retrieverecord = "SELECT * FROM request ORDER BY Sn ASC";

$result = mysqli_query($databaseconnect, $retrieverecord);

$row = mysqli_fetch_array($result);


while($row = mysqli_fetch_array($result)){

//$areaa = $row['Area'];
$coursee = $row['Course'];
$no = $row['Numbers'];
$ccompany = $row['Name'];

$reqsn = $row['Sn'];

if(($coursee !='Any Course') &&($coursee !='Any Science') && ($coursee !='Any Art') && ($coursee !='Any Commercial') && ($coursee !='Any Mathematical/Computing') && ($coursee !='Any Medical')){
$retrievecorper = "SELECT * FROM corpers WHERE Course='$coursee' ORDER BY Sn LIMIT $no";
$resultc = mysqli_query($databaseconnect, $retrievecorper);


//echo $retrievecorper;

while($rowc = mysqli_fetch_array($resultc)){


$corps =$rowc['Name'];
$school =$rowc['School'];
$sn = $rowc['Sn'];

$insertposting ="INSERT INTO posting VALUES(0, '$ccompany', '$coursee', '$coursee', '$corps', '$school')";

$resultp = mysqli_query($databaseconnect, $insertposting);

//echo $insertposting;


$newno = $no -1;

$updatec = "UPDATE corpers SET Status='Posted' WHERE Sn=$sn";
$resultcc = mysqli_query($databaseconnect, $updatec);


$updatereq = "UPDATE request SET Numbers='$newno' WHERE Sn=$reqsn";
$resultcc = mysqli_query($databaseconnect, $updatec);


}

}







elseif ($coursee =='Any Course'){
$retrievecorper = "SELECT * FROM corpers WHERE Course='$coursee' ORDER BY Sn LIMIT $no";
$resultc = mysqli_query($databaseconnect, $retrievecorper);

while($rowc = mysqli_fetch_array($resultc)){


$corps =$rowc['Name'];
$school =$rowc['School'];
$sn = $rowc['Sn'];

$insertposting ="INSERT INTO posting VALUES(0, '$ccompany', 'Any Course', '$coursee', '$corps', '$school')";

$resultp = mysqli_query($databaseconnect, $insertposting);

$newno = $no -1;

$updatec = "UPDATE corpers SET Status='Posted' WHERE Sn=$sn";
$resultcc = mysqli_query($databaseconnect, $updatec);


$updatereq = "UPDATE request SET Numbers='$newno' WHERE Sn=$reqsn";
$resultcc = mysqli_query($databaseconnect, $updatec);


}

}

elseif ($coursee =='Any Science'){
$retrievecorper = "SELECT * FROM corpers WHERE Course='BioChemistry' OR Course='MicroBiology' OR Course='Chemistry' OR Course='Biology' ORDER BY Sn LIMIT $no";
$resultc = mysqli_query($databaseconnect, $retrievecorper);

while($rowc = mysqli_fetch_array($resultc)){


$corps =$rowc['Name'];
$school =$rowc['School'];
$sn = $rowc['Sn'];

$insertposting ="INSERT INTO posting VALUES(0, '$ccompany', 'Any Science', '$coursee', '$corps', '$school')";

$resultp = mysqli_query($databaseconnect, $insertposting);

$newno = $no -1;

$updatec = "UPDATE corpers SET Status='Posted' WHERE Sn=$sn";
$resultcc = mysqli_query($databaseconnect, $updatec);


$updatereq = "UPDATE request SET Numbers='$newno' WHERE Sn=$reqsn";
$resultcc = mysqli_query($databaseconnect, $updatec);


}

}



elseif ($coursee =='Any Art'){
$retrievecorper = "SELECT * FROM corpers WHERE Course='Christian Religious Study' OR Course='English Language' OR Course='French Study' ORDER BY Sn LIMIT $no";
$resultc = mysqli_query($databaseconnect, $retrievecorper);

while($rowc = mysqli_fetch_array($resultc)){


$corps =$rowc['Name'];
$school =$rowc['School'];
$sn = $rowc['Sn'];

$insertposting ="INSERT INTO posting VALUES(0,'$ccompany', 'Any Art', '$coursee', '$corps', '$school')";

$resultp = mysqli_query($databaseconnect, $insertposting);

$newno = $no -1;

$updatec = "UPDATE corpers SET Status='Posted' WHERE Sn=$sn";
$resultcc = mysqli_query($databaseconnect, $updatec);


$updatereq = "UPDATE request SET Numbers='$newno' WHERE Sn=$reqsn";
$resultcc = mysqli_query($databaseconnect, $updatec);


}

}





elseif ($coursee =='Any Commercial'){
$retrievecorper = "SELECT * FROM corpers WHERE Course='Marketing' OR Course='Accounting' OR Course='Banking and Finance' OR Course='Economics' ORDER BY Sn LIMIT $no";
$resultc = mysqli_query($databaseconnect, $retrievecorper);

while($rowc = mysqli_fetch_array($resultc)){


$corps =$rowc['Name'];
$school =$rowc['School'];
$sn = $rowc['Sn'];

$insertposting ="INSERT INTO posting VALUES(0, '$ccompany', 'Any Commercial', '$coursee', '$corps', '$school')";

$resultp = mysqli_query($databaseconnect, $insertposting);

$newno = $no -1;

$updatec = "UPDATE corpers SET Status='Posted' WHERE Sn=$sn";
$resultcc = mysqli_query($databaseconnect, $updatec);


$updatereq = "UPDATE request SET Numbers='$newno' WHERE Sn=$reqsn";
$resultcc = mysqli_query($databaseconnect, $updatec);


}

}







elseif ($coursee =='Any Mathematical/Computing'){
$retrievecorper = "SELECT * FROM corpers WHERE Course='Pure and Applied Mathematics' OR Course='Mathematics and Statistics' OR Course='Computer Science' OR Course='Software Engineering' OR Course='Information Technology' ORDER BY Sn LIMIT $no";
$resultc = mysqli_query($databaseconnect, $retrievecorper);

while($rowc = mysqli_fetch_array($resultc)){


$corps =$rowc['Name'];
$school =$rowc['School'];
$sn = $rowc['Sn'];

$insertposting ="INSERT INTO posting VALUES(0, '$ccompany', 'Any Mathematical/Computing', '$coursee', '$corps', '$school')";

$resultp = mysqli_query($databaseconnect, $insertposting);

$newno = $no -1;

$updatec = "UPDATE corpers SET Status='Posted' WHERE Sn=$sn";
$resultcc = mysqli_query($databaseconnect, $updatec);


$updatereq = "UPDATE request SET Numbers='$newno' WHERE Sn=$reqsn";
$resultcc = mysqli_query($databaseconnect, $updatec);


}

}



elseif ($coursee =='Any Medical'){
$retrievecorper = "SELECT * FROM corpers WHERE Course='Nursing Science' OR Course='Medical Laboratory Science' OR Course='Medicine and Surgery' OR Course='Pharmacy' OR Course='Anatomy' ORDER BY Sn LIMIT $no";
$resultc = mysqli_query($databaseconnect, $retrievecorper);

while($rowc = mysqli_fetch_array($resultc)){


$corps =$rowc['Name'];
$school =$rowc['School'];
$sn = $rowc['Sn'];

$insertposting ="INSERT INTO posting VALUES(0, '$ccompany', 'Any Medical', '$coursee', '$corps', '$school')";

$resultp = mysqli_query($databaseconnect, $insertposting);

$newno = $no -1;

$updatec = "UPDATE corpers SET Status='Posted' WHERE Sn=$sn";
$resultcc = mysqli_query($databaseconnect, $updatec);


$updatereq = "UPDATE request SET Numbers='$newno' WHERE Sn=$reqsn";
$resultcc = mysqli_query($databaseconnect, $updatec);


}

}

else {

echo 'No posting';
echo '<a href="admin.php">Back to Admin Panel</a></br>';
}























}






echo 'Automatic Posting Done </br>';

echo '<a href="admin.php">Back to Admin Panel</a></br>';
//echo '<a href="home.php">Return to Home page</a></br>';

//echo 'Your name is '.$fullname.' Department '.$department.' Matric No '.$matric;







//}
?>
