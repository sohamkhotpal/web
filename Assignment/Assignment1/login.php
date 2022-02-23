<?php


session_start();
include("include/connection.php");

if(isset($_POST['btlogin'])){
$name=$_POST['name'];
$password=$_POST['password'];
$password=md5($password);


$con=mysqli_connect($host,$dbuser,$dbpass,$db);

$result=mysqli_query($con,'select * from login_user where name="'.$name.'" and password="'.$password.'"');

if(mysqli_num_rows($result)>0){

$row=mysqli_fetch_array($result);

$row['name'];

  $_SESSION['name']=$row['name'];

header('location:home.php');
}
else 
  echo "Account's invalid";


}

?>

<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<form action="" method="post">
       <div class="container">
       	<div class="row">
		<div class="col-sm-3">

       	<h2>login Form </h2>
		<p>Fill up the form with correct values</p>

		 <hr class="mb-3">

    <label for="name"><b>email</b></label>
    <input class="form-control" type="name" name="name" required>
     <br><br>

    <label for="password"><b>Password</b></label>
    <input class="form-control" type="password" name="password" required>

    <br><br>

   <input type="submit"  name="btlogin" value="login">    
    
    <br><br>
    <a href="registration.php">registration</a>
</body>
</html>


