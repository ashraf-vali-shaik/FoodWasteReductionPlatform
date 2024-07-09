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

if(isset($_POST['submit']))
{
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $howOldFoodis = $_POST['howOldFoodis'];
    $address = $_POST['address'];
    $note = $_POST['note'];
}

$sql_query = "INSERT INTO donorhomepage (FullName,Email,Phone,HowOld,Address,Note) VALUES ('$fullName','$email','$phone','$howOldFoodis','$address','$note')";

if (mysqli_query($conn, $sql_query))
{
    echo "Donation Successful Posted";
}
else
{
    echo "Error: " . $sql . "" . mysql_error($conn);
}

mysqli_close($conn);