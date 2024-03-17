<?php
$Email = $_POST["Email"];
$PW = $_POST["PW"];
$Name = $_POST["Name"];
$Phone = $_POST["Phone"];
$Address = $_POST["Address"];

$mysqli = mysqli_connect("localhost", "shryu", "2018100899", "shryu"); 
mysqli_query ($mysqli, 'SET NAMES utf8');  

if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
 		$sql = "INSERT INTO CUSTOMER (Address, Phone, Email, Name, Password)
			VALUES ('$Address', '$Phone', '$Email', '$Name', '$PW');";
		$res = mysqli_query($mysqli, $sql);
	if ($res === TRUE) {
		echo "<p>Sign In has been success!";
	} else {
		printf("error has been occured during process : %s\n", mysqli_error($mysqli));
	}

	mysqli_close($mysqli);
}
?>
<html>
	<button onclick="goBack()">Go Home</button>
<script>
function goBack() {
    window.history.back();
    window.history.back();
}
</script>
</html>
