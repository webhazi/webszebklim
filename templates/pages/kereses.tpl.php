<body>
<?php
$nev = $_POST["Szak"];
$hely = $_POST["Hely"];



try {
  // Kapcsolódás
  $pdo = new PDO('mysql:host=localhost;dbname=szebkli', 'szebkli', 'jelszo',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
  $pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
  $utasitas = "Select Szak, Név, Telefon, Helyseg From mester Where Szak = '$nev' and Helyseg = '$hely'";
  $eredm = $pdo->query($utasitas);
  foreach ($eredm as $sor) 
    print $sor['Szak'].  "<br>"  .$sor['Név'].  "<br>"  .$sor['Telefon'].  "<br>" .$sor['Helyseg']. "<br>";
}
catch (PDOException $e) {
  echo "Hiba: ".$e->getMessage();
}      
 $conn->close();
?>

</body>
 
 
