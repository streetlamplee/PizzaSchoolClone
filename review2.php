<?php
$Email = $_POST["Email"];
$Date = date("Y-m-d H:i:s");
$Grade = $_POST["grade"];
$StoreID = $_POST["store"];
$Info = $_POST["info"];

$mysqli = mysqli_connect("localhost", "shryu", "2018100899", "shryu"); 
mysqli_query ($mysqli, 'SET NAMES utf8');  

if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
 		$sql = "INSERT INTO REVIEW (Email, Date, Grade, StoreID, Info)
			VALUES ('".$Email."', '".$Date."', '".$Grade."', '".$StoreID."', '".$Info."');";	
		$res = mysqli_query($mysqli, $sql);//���ӱ���+review ���̺� �Է�		
	if ($res === TRUE) {
		$sql2='SELECT AVG(Grade) FROM REVIEW, STORE WHERE REVIEW.StoreID ='.$StoreID.'';
		$avg = mysqli_query($mysqli, $sql2);//���ӱ���+review ���̺��� ������� ���̺�ȭ
		$average = mysqli_fetch_assoc($avg);
		$review = "UPDATE STORE SET StoreGrade = '".$average['AVG(Grade)']."' WHERE STORE.StoreID = '".$StoreID."'";
		$review2 = mysqli_query($mysqli, $review);//���ӱ���+STORE ���̺��� ���� ������Ʈ
		echo "<p>Your review insert in our database! Thank you!";
	} else {
		printf("error has been occured during process : %s\n", mysqli_error($mysqli));
	}

	mysqli_close($mysqli);
}
?>
<html>
<head>
</head>
<body>
 <p><button onclick="window.open('http://ibiz.khu.ac.kr/shryu/pizza/pizzahomepage.html')">Go Home</button></p>
 </body>
</html>
