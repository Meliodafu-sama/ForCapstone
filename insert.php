<?php
	$con = mysqli_connect('127.0.0.1','root','');

	if(!$con){
		echo 'Server Not Connected';
	}

	if(!mysqli_select_db($con, 'stock3')){
		echo 'DB Not Selected';
	}

	$name = $_POST['name'];
	$email = $_POST['email'];
	$review = $_POST['review'];
	$rating = $_POST['star'];

	$sql = "INSERT INTO comment (name, email, review, rating) VALUES ('$name','$email','$review', '$rating')";

	if (!mysqli_query($con, $sql)) {
		echo 'Not Inserted';
	}
	else {
		echo 'Review Inserted';
	}

	header("refresh:1; url=comment.php");
?>