<?php
$servername="localhost";
$username="root";
$password="";
$database="Oasisform";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
die("Error detected".mysqli_error($conn));
}
else
{
echo("Connection established");
}
?>