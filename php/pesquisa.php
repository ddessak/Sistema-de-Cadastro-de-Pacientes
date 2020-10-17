<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=paciente','root', null);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>