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

if(isset($_POST['Login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$sql_query = "INSERT INTO volunteerlogin (username,password) VALUES ('$username','$password)";

if (mysqli_query($conn, $sql_query))
{
    echo "Volunteer Login Successful";
}
else
{
    echo "Error: " . $sql . "" . mysql_error($conn);
}

mysqli_close($conn);