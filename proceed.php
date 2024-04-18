<?php
include 'database.php';

if(isset($_POST['submit']))
{
    $username = $_POST['uname'];
    $password = $_POST['pwd'];
    $username = strtolower($username);

    $sql = "SELECT * FROM signup WHERE uname='$username'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['pwd'];

        if(password_verify($password, $hashed_password))
        {
  
            echo "<script>alert('Login successful')</script>";
            header("Location: sucess.php");
            exit();
           
        }
        else
        {
            
            echo "<script>alert('Incorrect password')</script>";
        }
    }
    else
    {
        echo "<script>alert('Username not found')</script>";
    }
}
else
{
    echo "<script>alert('Form submission failed')</script>";
}
?>