<?php
	
include("database.php");

if(isset($_POST[''])) {
	$sql = mysqli_query($conn,"SELECT * FROM signup WHERE  uname='". $_POST["name"] . "' and password='" . $_POST["password"] . "' ");
	$num = mysqli_num_rows($sql);

	if($num > 0) {
		$row = mysqli_fetch_array($sql);
		header("signup.php");
		exit();
	}
	else {
         echo "(wrong credentials)";

	}
}
