<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="foodwastedb";

$conn = mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['Register']))
{
    $donorName = $_POST['donorName'];
    $donorEmail = $_POST['donorEmail'];
    $donorPassword = $_POST['donorPassword'];
}

$sql_query = "INSERT INTO donorregistration (Name,Email,Password) VALUES ('$donorName','$donorEmail','$donorPassword')";

if (mysqli_query($conn, $sql_query))
{
    echo "Donor Registration Successful";
}
else
{
    echo "Error: " . $sql . "" . mysql_error($conn);
}

mysqli_close($conn);