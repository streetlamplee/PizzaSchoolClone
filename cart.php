<html>
<head></head>
<body>

<?php
$CheesePizza=$_POST['CheesePizza'];
$PeperoniPizza = $_POST["PeperoniPizza"];
$CombinationPizza = $_POST["CombinationPizza"];
$PotatoPizza = $_POST["PotatoPizza"];
$KoreanBBQPizza = $_POST["KoreanBBQPizza"];

$ShrimpringWedgepotato=$_POST['ShrimpringWedgePotato'];
$CheeseOvenSpaghetti = $_POST["CheeseOvenSpaghetti"];
$HotSauce = $_POST["HotSauce"];
$Pickle = $_POST["Pickle"];
$GarlicDippingSauce = $_POST["GarlicDippingSauce"];

$sweetpotatomousse=$_POST['SweetPotatoMousse'];
$cheesecrust = $_POST["CheeseCrust"];
$cheesetopping = $_POST["CheeseTopping"];
$pineappletopping = $_POST["PineappleTopping"];

$Email = $_POST["Email"];
$Destination = $_POST["Destination"];
$PhoneNumber = $_POST["PhoneNumber"];
$store = $_POST["store"];

$mysqli = mysqli_connect("localhost", "shryu", "2018100899", "shryu"); 

if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
} else {
    $TotalCheese = 6000 * $CheesePizza;
    $TotalPeperoni = 7000 * $PeperoniPizza;
    $TotalCombination = 8000 * $CombinationPizza;
    $TotalPotato = 8000 * $PotatoPizza;
    $TotalKoreanBBQ = 8000 * $KoreanBBQPizza;
   $TotalShrimpringWedgepotato = 3500 * $ShrimpringWedgepotato;
       $TotalCheeseOvenSpaghetti = 4000 * $CheeseOvenSpaghetti;
      $TotalHotSauce = 100 * $HotSauce;
       $TotalPickle = 300 * $Pickle;
       $TotalGarlicDippingSauce = 500 * $GarlicDippingSauce;
   $Totalsweetpotatomousse = 2000 * $sweetpotatomousse;
      $Totalcheesecrust = 2000 * $cheesecrust;
      $Totalcheesetopping = 2000 * $cheesetopping;
      $Totalpineappletopping = 2000 * $pineappletopping;
    $Date = date("Y-m-d H:i");
    
     $Total=
$TotalCheese+ $TotalPeperoni + $TotalCombination + $TotalPotato + $TotalKoreanBBQ
+ $TotalShrimpringWedgepotato+ $TotalCheeseOvenSpaghetti+ $TotalHotSauce + $TotalPickle + $TotalGarlicDippingSauce 
   +$Totalsweetpotatomousse+ $Totalcheesecrust+ $Totalcheesetopping + $Totalpineappletopping;
    
if($Email != ""){    
if($CheesePizza!=0){
    $sql1 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$CheesePizza','$TotalCheese', '$Date', '1', '101')";
    $cartsql1 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid1 = mysqli_query($mysqli, $cartsql1);
    $sql51 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid1' ,'101', '$CheesePizza', '6000','$TotalCheese')";
      $res1 = mysqli_query($mysqli, $sql1);   
      $res2 = mysqli_query($mysqli, $sql51);
      $sql101 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '101'and Date= '$Date'";
      $cartid101 = mysqli_query($mysqli, $sql101);
      $cartid151 = mysqli_fetch_assoc($cartid101);
      $sql1101 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid151[CartID]')";
      $sql151 = mysqli_query($mysqli,$sql1101);
   if ($res1 === TRUE) {
      
   } else {
      echo "We Fail CheesePizza into Cart!";
   }
   if ($res2 === TRUE) {
      
   } else {
      echo "We Fail CheesePizza into BILL!";
   }
  };


if($PeperoniPizza!=0){
    $sql2 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$PeperoniPizza','$TotalPeperoni', '$Date', '1', '102')";
    $cartsql2 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid2 = mysqli_query($mysqli, $cartsql2);
    $sql52 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid2' ,'102', '$PeperoniPizza', '7000','$TotalPeperoni')";
      $res3 = mysqli_query($mysqli, $sql2);   
      $res4 = mysqli_query($mysqli, $sql52);   
      $sql102 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '102'and Date= '$Date'";
      $cartid102 = mysqli_query($mysqli, $sql102);
      $cartid152 = mysqli_fetch_assoc($cartid102);
      $sql1102 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid152[CartID]')";
      $sql152 = mysqli_query($mysqli,$sql1102);
   if ($res3 === TRUE) {
      
   } else {
      echo "We Fail PeperoniPizza into Cart!";
   }
   if ($res4 === TRUE) {
      
   } else {
      echo "We Fail PeperoniPizza into BILL!";
   }
  };



if($CombinationPizza!=0){
    $sql3 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$CombinationPizza','$TotalCombination', '$Date', '1', '103')";
    $cartsql3 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid3 = mysqli_query($mysqli, $cartsql3);
    $sql53 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid3' ,'103', '$CombinationPizza', '8000','$TotalCombination')";
      $res5 = mysqli_query($mysqli, $sql3);   
      $res6= mysqli_query($mysqli, $sql53);   
      $sql103 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '103'and Date= '$Date'";
      $cartid103 = mysqli_query($mysqli, $sql103);
      $cartid153 = mysqli_fetch_assoc($cartid103);
      $sql1103 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid153[CartID]')";
      $sql153 = mysqli_query($mysqli,$sql1103);
   if ($res5 === TRUE) {
      
   } else {
      echo "We Fail CombinationPizza into Cart!";
   }
   if ($res6 === TRUE) {
      
   } else {
      echo "We Fail CombinationPizza into BILL!";
   }
  };



if($PotatoPizza!=0){
    $sql4 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$PotatoPizza','$TotalPotato', '$Date', '1', '104')";
    $cartsql4 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid4 = mysqli_query($mysqli, $cartsql4);
    $sql54 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid4' ,'104', '$PotatoPizza', '8000','$TotalPotato')";
      $res7 = mysqli_query($mysqli, $sql4);   
      $res8 = mysqli_query($mysqli, $sql54);  
      $sql104 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '104'and Date= '$Date'";
      $cartid104 = mysqli_query($mysqli, $sql104);
      $cartid154= mysqli_fetch_assoc($cartid104);
      $sql1104 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid154[CartID]')";
      $sql154 = mysqli_query($mysqli,$sql1104);
   if ($res7 === TRUE) {
      
   } else {
      echo "We Fail PotatoPizza into Cart!";
   }
   if ($res8 === TRUE) {
      
   } else {
      echo "We Fail PotatoPizza into BILL!";
   }
  };


if($KoreanBBQPizza!=0){
    $sql5 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$KoreanBBQPizza','$TotalKoreanBBQ', '$Date', '1', '105')";
    $cartsql5 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid5 = mysqli_query($mysqli, $cartsql5);
    $sql55 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid5' ,'105', '$KoreanBBQPizza', '8000','$TotalKoreanBBQ')";
      $res9= mysqli_query($mysqli, $sql5);   
      $res10 = mysqli_query($mysqli, $sql55);   
      $sql105 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '105'and Date= '$Date'";
      $cartid105 = mysqli_query($mysqli, $sql105);
      $cartid155 = mysqli_fetch_assoc($cartid105);
      $sql1105 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid155[CartID]')";
      $sql155 = mysqli_query($mysqli,$sql1105);
   if ($res9 === TRUE) {
      
   } else {
      echo "We Fail KoreanBBQPizza into Cart!";
   }
   if ($res10 === TRUE) {
      
   } else {
      echo "We Fail KoreanBBQPizza into BILL!";
   }
  };
 

if($ShrimpringWedgepotato!=0){
    $sql6 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$ShrimpringWedgepotato','$TotalShrimpringWedgepotato', '$Date', '1', '201')";
    $cartsql6 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid6 = mysqli_query($mysqli, $cartsql6);
    $sql56 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid6' ,'201', '$ShrimpringWedgepotato', '3500','$TotalShrimpringWedgepotato')";
      $res11 = mysqli_query($mysqli, $sql6);   
      $res12 = mysqli_query($mysqli, $sql56);
      $sql106 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '201'and Date= '$Date'";
      $cartid106 = mysqli_query($mysqli, $sql106);
      $cartid156 = mysqli_fetch_assoc($cartid106);
      $sql1106 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid156[CartID]')";
      $sql156 = mysqli_query($mysqli,$sql1106);
   if ($res11 === TRUE) {
      
   } else {
      echo "We Fail ShrimpringWedgepotato into Cart!";
   }
   if ($res12 === TRUE) {
      
   } else {
      echo "We Fail ShrimpringWedgepotato into BILL!";
   }
  };


if($CheeseOvenSpaghetti!=0){
    $sql7 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$CheeseOvenSpaghetti','$TotalCheeseOvenSpaghetti', '$Date', '1', '202')";
    $cartsql7 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid7 = mysqli_query($mysqli, $cartsql7);
    $sql57 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid7' ,'202', '$CheeseOvenSpaghetti', '4000','$TotalCheeseOvenSpaghetti')";
      $res13 = mysqli_query($mysqli, $sql7);   
      $res14 = mysqli_query($mysqli, $sql57);   
      $sql107 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '202'and Date= '$Date'";
      $cartid107 = mysqli_query($mysqli, $sql107);
      $cartid157 = mysqli_fetch_assoc($cartid107);
      $sql1107 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid157[CartID]')";
      $sql157 = mysqli_query($mysqli,$sql1107);
   if ($res13 === TRUE) {
      
   } else {
      echo "We Fail CheeseOvenSpaghetti into Cart!";
   }
   if ($res14 === TRUE) {
      
   } else {
      echo "We Fail CheeseOvenSpaghetti into BILL!";
   }
  };


if($HotSauce!=0){
    $sql8 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$HotSauce','$TotalHotSauce', '$Date', '1', '203')";
    $cartsql8 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid8 = mysqli_query($mysqli, $cartsql8);
    $sql58 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid8' ,'203', '$HotSauce', '100','$TotalHotSauce')";
      $res15 = mysqli_query($mysqli, $sql8);   
      $res16 = mysqli_query($mysqli, $sql58); 
      $sql108 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '203'and Date= '$Date'";
      $cartid108 = mysqli_query($mysqli, $sql108);
      $cartid158 = mysqli_fetch_assoc($cartid108);
      $sql1108 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid158[CartID]')";
      $sql158 = mysqli_query($mysqli,$sql1108);
   if ($res15 === TRUE) {
      
   } else {
      echo "We Fail HotSauce into Cart!";
   }
   if ($res16 === TRUE) {
      
   } else {
      echo "We Fail HotSauce into BILL!";
   }
  };


if($Pickle!=0){
    $sql9 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$Pickle','$TotalPickle', '$Date', '1', '204')";
    $cartsql9 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid9 = mysqli_query($mysqli, $cartsql9);
    $sql59 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid9' ,'204', '$Pickle', '300','$TotalPickle')";
      $res17 = mysqli_query($mysqli, $sql9);   
      $res18 = mysqli_query($mysqli, $sql59);
      $sql109 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '204'and Date= '$Date'";
      $cartid109 = mysqli_query($mysqli, $sql109);
      $cartid159 = mysqli_fetch_assoc($cartid109);
      $sql1109 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid159[CartID]')";
      $sql159 = mysqli_query($mysqli,$sql1109);
   if ($res17 === TRUE) {
      
   } else {
      echo "We Fail Pickle into Cart!";
   }
   if ($res18 === TRUE) {
      
   } else {
      echo "We Fail Pickle into BILL!";
   }
  };


if($GarlicDippingSauce!=0){
    $sql10 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$GarlicDippingSauce','$TotalGarlicDippingSauce', '$Date', '1', '205')";
    $cartsql10 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid10 = mysqli_query($mysqli, $cartsql10);
    $sql60 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid10' ,'205', '$GarlicDippingSauce', '500','$TotalGarlicDippingSauce')";
      $res19 = mysqli_query($mysqli, $sql10);   
      $res20 = mysqli_query($mysqli, $sql60);   
      $sql110 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '205'and Date= '$Date'";
      $cartid110 = mysqli_query($mysqli, $sql110);
      $cartid160 = mysqli_fetch_assoc($cartid110);
      $sql1110 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid160[CartID]')";
      $sql160 = mysqli_query($mysqli,$sql1110);
   if ($res19 === TRUE) {
      
   } else {
      echo "We Fail GarlicDippingSauce into Cart!";
   }
   if ($res20 === TRUE) {
      
   } else {
      echo "We Fail GarlicDippingSauce into BILL!";
   }
  };
 

if($sweetpotatomousse!=0){
    $sql11 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$sweetpotatomousse','$Totalsweetpotatomousse', '$Date', '1', '301')";
    $cartsql11 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid11 = mysqli_query($mysqli, $cartsql11);
    $sql61 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid11' ,'301', '$sweetpotatomousse', '2000','$Totalsweetpotatomousse')";
      $res21 = mysqli_query($mysqli, $sql11);   
      $res22 = mysqli_query($mysqli, $sql61);
      $sql111 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '301'and Date= '$Date'";
      $cartid111 = mysqli_query($mysqli, $sql111);
      $cartid161 = mysqli_fetch_assoc($cartid111);
      $sql1111 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid161[CartID]')";
      $sql161 = mysqli_query($mysqli,$sql1111);
   if ($res21 === TRUE) {
      
   } else {
      echo "We Fail sweetpotatomousse into Cart!";
   }
   if ($res22 === TRUE) {
      
   } else {
      echo "We Fail sweetpotatomousse into BILL!";
   }
  };


if($cheesecrust!=0){
    $sql12 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$cheesecrust','$Totalcheesecrust', '$Date', '1', '302')";
    $cartsql12 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid12 = mysqli_query($mysqli, $cartsql12);
    $sql62 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid12' ,'302', '$cheesecrust', '2000','$Totalcheesecrust')";
      $res23 = mysqli_query($mysqli, $sql12);   
      $res24 = mysqli_query($mysqli, $sql62);  
      $sql112 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '302'and Date= '$Date'";
      $cartid112 = mysqli_query($mysqli, $sql112);
      $cartid162 = mysqli_fetch_assoc($cartid112);
      $sql1112 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid162[CartID]')";
      $sql162 = mysqli_query($mysqli,$sql1112);
   if ($res23 === TRUE) {
      
   } else {
      echo "We Fail cheesecrust into Cart!";
   }
   if ($res24 === TRUE) {
      
   } else {
      echo "We Fail cheesecrust into BILL!";
   }
  };


if($cheesetopping!=0){
    $sql13 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$cheesetopping','$Totalcheesetopping', '$Date', '1', '303')";
    $cartsql13 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid13 = mysqli_query($mysqli, $cartsql13);
    $sql63 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid13' ,'303', '$cheesetopping', '2000','$Totalcheesetopping')";
      $res25 = mysqli_query($mysqli, $sql13);   
      $res26 = mysqli_query($mysqli, $sql63);  
      $sql113 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '303'and Date= '$Date'";
      $cartid113 = mysqli_query($mysqli, $sql113);
      $cartid163 = mysqli_fetch_assoc($cartid113);
      $sql1113 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid163[CartID]')";
      $sql163 = mysqli_query($mysqli,$sql1113);
   if ($res25 === TRUE) {
      
   } else {
      echo "We Fail cheesetopping into Cart!";
   }
   if ($res26 === TRUE) {
      
   } else {
      echo "We Fail cheesetopping into BILL!";
   }
  };


if($pineappletopping!=0){
    $sql14 = "INSERT INTO CART (StoreID, Cus_Email, Amount, Total, Date, PayCode, MenuID)
         VALUES ('$store', '$Email', '$pineappletopping','$Totalpineappletopping', '$Date', '1', '304')";
    $cartsql14 = 'SELECT CartID FROM WHERE CART Cus_Email = '.$Email.'';
    $cartid14 = mysqli_query($mysqli, $cartsql14);
    $sql64 = "INSERT INTO BILL (CartID ,MenuID, Quantity, UnitPrice, SubTotal)
         VALUES ('$cartid14' ,'304', '$pineappletopping', '2000','$Totalpineappletopping')";
      $res27 = mysqli_query($mysqli, $sql14);   
      $res28 = mysqli_query($mysqli, $sql64);
      $sql114 = "SELECT CartID FROM CART WHERE StoreID = '$store' and Cus_Email = '$Email' and MenuID = '304'and Date= '$Date'";
      $cartid114 = mysqli_query($mysqli, $sql114);
      $cartid164 = mysqli_fetch_assoc($cartid114);
      $sql1114 = "INSERT INTO DELIVERY (Destination, Email, Phone, CartID)
      VALUES ('$Destination','$Email','$PhoneNumber','$cartid164[CartID]')";
      $sql164 = mysqli_query($mysqli,$sql1114);
   if ($res27 === TRUE) {
      
   } else {
      echo "We Fail pineappletopping into Cart!";
   }
   if ($res28 === TRUE) {
      
   } else {
      echo "We Fail pineappletopping into BILL!";
   }
  };

echo "<br></br>";



}else{
echo "Please Enter Your Email";
};
};
?>

<html>
<head></head>
<body>
<button onclick = "location.href = 'payment.php'">go to pay</button>
</body>
</html>