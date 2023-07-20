<?php
//echo 'testing';

if (!isset($_POST['submit'])){


$sn = $_GET['sn'];

$databaseconnect = mysqli_connect('localhost', 'root', '', 'studentreg')
or die('Server connection cannot be established.');




$retrieverecord = "SELECT * FROM students WHERE SN=$sn";

$result = mysqli_query($databaseconnect, $retrieverecord);

$row = mysqli_fetch_array($result);



?>

<html>
<head>
<title>Registration</title>
</head>
<body>
<center>
<h1>Student Registration</h1>
<form action="edit.php" method="post">
<p><label for="fullname">FullName</label><input type="text" name="fullname" value="<?php  echo $row['Fullname']; ?>" /></p>
<p><label for="department">Department</label><input type="text" name="department" value="<?php  echo $row['Department']; ?>"/></p>
<p><label for="hall">HallName</label><input type="text" name="hall" value="<?php  echo $row['Hallname']; ?>"/></p>
<p>   <input type="hidden" name="sn" value="<?php  echo $sn; ?>"/></p>


<p><input type="submit" name="submit"  value="Send"/></p>
</form>
</center>
</body>
</html>
<?php



}
else{
$sn = $_POST['sn'];
$fullname = $_POST['fullname'];
$department = $_POST['department'];
$hall = $_POST['hall'];
//$matric = $_POST['matric'];


$databaseconnect = mysqli_connect('localhost', 'root', '', 'studentreg')
or die('Server connection cannot be established.');

$insertrecord = "UPDATE students SET Fullname='$fullname', Department ='$department', Hallname='$hall' WHERE SN=$sn";
                //"INSERT INTO students(Sn,Fullname, Department, Hallname, Matric) VALUES(0, '$fullname',

$result = mysqli_query($databaseconnect, $insertrecord);


echo 'Done </br>';

echo '<a href="register.php">Register Another Student</a></br>';
echo '<a href="home.php">Return to Home page</a></br>';

//echo 'Your name is '.$fullname.' Department '.$department.' Matric No '.$matric;







}
?>
