<?php

$hospital=$_POST['hos']; 
$department=$_POST["dep"]; 
$doctor=$_POST["doc"]; 
$dat=$_POST["date"]; 
$tm=$_POST["time"]; 
$name=$_POST["name"]; 
$phone=$_POST["phone"]; 
$message=$_POST["message"];


$conn = mysqli_connect("localhost", "root","","newdb")
or die("Can't connect to the database! Error: mysqli_error($conn) <br>");
// $query = "use newdb";
// if(mysqli_query($conn, $query))
// echo "Connected to the database successfully! <br>";
// else
// die("Can't select the database! Error: mysqli_error($conn) <br>");
// $query = "create table if not exists appointments(
//  hospital varchar(20),
//  department varchar(10),
//  doctor varchar(20),
//  dat date,
//  tm time,
//  name varchar(20),
//  phone number,
//  message varchar(50)";
// if(mysqli_query($conn, $query))
// echo "Created the database successfully! <br>";
// else
// die("Couldn't create a new database! Error: mysqli_error($conn) <br>");
$query = "insert into appointments values('$hospital','$department','$doctor','$dat','$tm','$name','$phone','$message')";
if(mysqli_query($conn,$query))
echo "Inserted into the database successfully! <br>";
else
die("Couldn't insert a new row! Error: mysqli_error($conn) <br>");
mysqli_close($conn);
?>