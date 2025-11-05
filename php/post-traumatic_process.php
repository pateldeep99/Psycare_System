<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php 
	//For first question, score will not be there.
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
 if($_GET){
	//We need total question in process file too
 	$query = "SELECT * FROM post_traumatic_question";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
	
	//We need to capture the question number from where form was submitted
 	$number = $_GET['n'];
	
	//Here we are storing the selected option by user
 	$selected_choice = $_GET['answer'];
	
	//What will be the next question number
 	$next = $number+1;
	
	//Increase the score 
	if ($number === 1) {
		$_SESSION['score'] = 0;
	}
 	 $_SESSION['score'] += $selected_choice;
		//Redirect to next question or final score page. 
 	 if($number == $total_questions)
 	 {
		$_SESSION['score'] = $_SESSION['score'] /20 * 100;
		$str="INSERT into history(name,type,score) VALUES('".$_SESSION['name']."','post-traumatic' ,'".$_SESSION['score']." %')";
		$connection->query($str);	
 	  	 	header("LOCATION: post-traumatic_score.php");
 	 }
 	 else{
 	 	header("LOCATION: post-traumatic_quiz.php?n=". $next);
 	 }
 }
?>