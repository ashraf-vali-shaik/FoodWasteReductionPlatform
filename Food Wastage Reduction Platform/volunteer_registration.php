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
    $volunteerName = $_POST['volunteerName'];
    $volunteerEmail = $_POST['volunteerEmail'];
    $volunteerPassword = $_POST['volunteerPassword'];
}

$sql_query = "INSERT INTO volunteerregistration (Name,Email,Password) VALUES ('$volunteerName','$volunteerEmail','$volunteerPassword')";

if (mysqli_query($conn, $sql_query))
{
    echo "Volunteer Registration Successful";
}
else
{
    echo "Error: " . $sql . "" . mysql_error($conn);
}

mysqli_close($conn);