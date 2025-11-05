<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php 
	//For first question, score will not be there.
	if(!isset($_SESSION['depressionscore']) && !isset($_SESSION['bipolarscore']))
	{
		$_SESSION['depressionscore'] = 0;
		$_SESSION['bipolarscore'] = 0;
		$_SESSION['anxietyscore'] = 0;
		$_SESSION['personalityscore'] = 0;
		$_SESSION['eatingscore'] = 0;
		$_SESSION['psychoticscore'] = 0;
		$_SESSION['posttraumaticscore'] = 0;
	}

 if($_GET)
 {
	//We need total question in process file too
 	$query = "SELECT * FROM commontest_question";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
	
	//We need to capture the question number from where form was submitted
 	$number = $_GET['n'];
	
	//Here we are storing the selected option by user
 	$selected_choice = $_GET['answer'];
	
	//What will be the next question number
 	$next = $number+1;
	
	//Increase the score 
	if ($number >= 1 && $number <= 3)
	{
		$_SESSION['depressionscore'] += $selected_choice;
	}

	if ($number >= 4 && $number <= 6)
	{
		$_SESSION['bipolarscore'] += $selected_choice;
	}

	if ($number >= 7 && $number <= 9)
	{
		$_SESSION['anxietyscore'] += $selected_choice;
	}

	if ($number >= 10 && $number <= 12)
	{
		$_SESSION['personalityscore'] += $selected_choice;
	}

	if ($number >= 13 && $number <= 15)
	{
		$_SESSION['eatingscore'] += $selected_choice;
	}
	if ($number >= 16 && $number <= 18)
	{
		$_SESSION['psychoticscore'] += $selected_choice;
	}
	if ($number >= 19 && $number <= 20)
	{
		$_SESSION['posttraumaticscore'] += $selected_choice;
	}
		//Redirect to next question or final score page. 
 	 if($number == $total_questions)
 	 {
		// var_dump($number);
		$_SESSION['depressionscore'] = round($_SESSION['depressionscore'] /6 * 100);
		$_SESSION['bipolarscore'] = round($_SESSION['bipolarscore'] /6 * 100);
		$_SESSION['anxietyscore'] = round($_SESSION['anxietyscore'] / 6 * 100);
		$_SESSION['personalityscore'] = round($_SESSION['personalityscore'] / 6 * 100);
		$_SESSION['eatingscore'] = round($_SESSION['eatingscore'] / 6 * 100);
		$_SESSION['psychoticscore'] = round($_SESSION['psychoticscore']  / 6 * 100);
		$_SESSION['posttraumaticscore'] = round($_SESSION['posttraumaticscore'] / 4 * 100);
		$total = round(($_SESSION['depressionscore'] + $_SESSION['bipolarscore'] + $_SESSION['anxietyscore'] + $_SESSION['eatingscore'] +$_SESSION['psychoticscore'] + 	$_SESSION['posttraumaticscore'])/7);


		$str="INSERT into history(name,type,score) VALUES('".$_SESSION['name']."','common' ,'".$total." %')";
		$connection->query($str);		
		// $temp= $connection->query($str);
		

 	  	 	header("LOCATION: commontestquestion_score.php");
 	 }
 	 else{
		//   var_dump($number);
 	 	header("LOCATION: commontestquestion_quiz.php?n=". $next);
 	 }
 }
?>