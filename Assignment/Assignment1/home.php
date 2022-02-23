<?php
session_start();
'&nbsp'
;
echo "<h1> welcome &nbsp" .$_SESSION['name']."</h1>";

echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
	 



?>
	
<html>
<title></title>
</head>
<body>
<table border="2" cellspacing="5">

<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>password</th>
<th>mobilenumber</th>
<th colspan="2" align="center">action</th>
</tr>


<?php
include("include/connection.php");

$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="sampledb";

$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);
$query="SELECT * FROM customer";
$data=mysqli_query($con,$query);

	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['id']."</td>
		<td>".$result['name']."</td>
		<td>".$result['email']."</td>
		<td>".$result['password']."</td>
		<td>".$result['mobilenumber']."</td>
       <td><a href='customersalary.php?id=".$result['id']."'>id</a></td>
       
         
         </tr>
		";
	}




?>



