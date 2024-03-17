<html>
<head>
<style>
body {
background-color: BLACK;
}
</style>
</head>

<body>
<font color = WHITE size = 3>
<CENTER>
<?php 
$mysqli = new mysqli("localhost", "shryu", "2018100899", "shryu"); 

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "SELECT * FROM STORE"; 
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) { 
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
			$Name = $newArray['Name']; 
 			$Phone = $newArray['Phone']; 
			$Address = $newArray['Address']; 
 			echo "Store: ".$Name." ";
 			echo " , Number: ".$Phone." ";
 			echo " , Address: ".$Address." <br>\n";
 		}
 	} else { 
 		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
 	} 
 	mysqli_free_result($res); 
 	mysqli_close($mysqli); 
} 
?> 
</CENTER>
 </font>
</html>


