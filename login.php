<?php
$mysqli = new mysqli("localhost", "shryu", "2018100899", "shryu"); 

$Email = $_POST["Email"];
$PW = $_POST["PW"];

$query = "select * from CUSTOMER where Email='$Email' and Password='$PW'";
if ($Email != "" && $PW != "") {
$result = mysqli_query($mysqli, $query); 
$row = mysqli_fetch_array($result);
if($Email==$row['Email'] && $PW==$row['Password']){
   echo "<script>location.href='pizzahomepage.html';</script>";
}else{
   echo "Log In Failed!";
   
}
} else {
   echo "Please Enter Your ID & PW!";
   
}

?>
<html>
<br></br>

	<button onclick="goBack()">Go Back</button>
<script>
function goBack() {
    window.history.back();
}
</script>
</html>
