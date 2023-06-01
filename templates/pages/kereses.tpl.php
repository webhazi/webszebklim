<body>
<?php
$nev = $_POST["Szak"];
$hely = $_POST["Hely"];



 $servername = "localhost";
 $username = "root";
 $password = "";
 $adat = "szakik";

 $conn = new mysqli($servername, $username, $password,$adat);



 
 
 


 $sql = "SELECT Szak, Név, Telefon, Helyseg FROM mester WHERE Szak = '$nev' AND Helyseg = '$hely'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0){
   while($row = $result->fetch_assoc()){
      echo "Szak: " . $row["Szak"]. " ,  Név:" . $row["Név"]. ", Telefon:". $row["Telefon"]. ", Helyseg: ".$row["Helyseg"]. "<br";
   }
 }else {
   echo " A lekérdezésnek nincs eredménye.";
 }
 $conn->close();
?>

</body>
 
 
