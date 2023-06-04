<?php
if(isset($_GET['Hely']) && isset($_GET['Szak'])){
        try {
            $dbh = new PDO('mysql:host=mysql.omega:3306;dbname=szebkli', 'szebkli', 'Jelszo',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        }
        catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
        }
    }  
    ?>    