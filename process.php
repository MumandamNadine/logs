<?php
include 'database.php';

if(isset($_POST['submit']))
{
	$username = $_POST['Uname']; // Changed to lowercase 'u'
	$Password = $_POST['pwd']; // Changed to lowercase 'p'

	// Check if username already exists
	$sql_u = "SELECT * FROM signup WHERE Uname='$username'";
    $result_u = mysqli_query($conn, $sql_u);

    if(mysqli_num_rows($result_u) > 0)
	{
		echo "<script>alert('Sorry... username already taken')</script>";
	}
	else
	{
		$password_encrypted = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO signup (Uname, pwd) VALUES ('$username', '$password_encrypted')";

		if(mysqli_query($conn, $sql))
		{
			echo "<script>alert('Thank you for signing up')</script>";
            // Redirect to login page
            header("Location: login.php");
            exit();
		}
		else
		{
			echo "Error: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
}
else
{
	echo "Error: Form submission failed";
}
?>
