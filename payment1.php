<html>
<head>
</head>
<body>

<?php
$pay = $_POST['pay'];
$id = $_POST['ID'];

$mysqli = new mysqli("localhost", "shryu", "2018100899", "shryu"); 


if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} 
else {
		$checksql = "select count(*) from CUSTOMER where CUSTOMER.Email = '$id'";
		$check = mysqli_query($mysqli, $checksql);
		$checkmethod = mysqli_fetch_row($check);
		
		if($checkmethod['0'] == '1')
		{
		$query = mysqli_query($mysqli,"UPDATE CART SET PayCode = '$pay' WHERE CART.CUS_Email = '$id' ");
		echo "<center>payment finish!";
		}else{	
		
		echo "Wrong Email is Inserted!";
		}
};
echo "<br></br><br></br>";
echo "<table border = 3>";
echo "<tr><th>MenuID</th><th>Quantity</th><th>UnitPrice</th><th>Subtotal</th></tr>";
$tabledatasql = "select M.MenuName, B.Quantity, B.UnitPrice, B.Subtotal from BILL AS B left join CART AS C on B.CartID = C.CartID left join MENU AS M on B.MenuID = M.MenuID where C.Cus_Email = '$id'";
$tabledata = mysqli_query($mysqli, $tabledatasql);
   while ($row = mysqli_fetch_array($tabledata)){
   	   echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
   };
echo "</table>";

?>
<form action='delivery.php' method=POST>
<p><input type=submit value='complete'>
</form>

<?php

$deletesql = "DELETE FROM  BILL";
$delete = mysqli_query($mysqli, $deletesql);

?>



 </body>
 </html>
 