<?php include 'admin/database.php'; ?>
<?php session_start(); ?>
<?php 

      //Check to see if score is set_error_handler
	  
	 $bstudyId = '';  
	  $bibleId = '';
	  $question_number = '';
	if (!isset($_SESSION['score'])){
	   $_SESSION['score'] = 0;
	   $bstudyId = $_SESSION['bstudyId'];
	   $bibleId = $_SESSION['bibleId'];
	   $question_number= $_SESSION['sn'];
	}

//Check if form was submitted


if($_POST){
	$number = $_POST['number'];
	$selected_choice = $_POST['choice'];
	$next=$number+1;
	$total=4;
$newtotal = $_SESSION['total'];




	//Get total number of questions
	$query="SELECT * FROM `questions`WHERE question_number = $number AND bstudyId = '$bstudyId' AND bibleId = '$bibleId'";
	//echo $query;
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	//echo $query;
	
	
	//Get correct choice
	$q = "select * from `choices` where question_number = $number and is_correct=1";
	$result = $mysqli->query($q) or die($mysqli->error.__LINE__);
	$row = $result->fetch_assoc();
	$correct_choice=$row['id'];



	//compare answer with result
	if($correct_choice == $selected_choice){
		$_SESSION['score']++;
	}

	if($number == $newtotal){
		header("Location: final.php");
		exit();
	} else {
	        header("Location: question.php?n=".$next."&score=".$_SESSION['score']);
	}
}
?>