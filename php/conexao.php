<?php
try {
    $pdo = new PDO('mysql:host=localhost;port=3307;dbname=shopmanager;charset=utf8', 'root', 'usbw');
} catch (PDOException $e) {
    echo $e->getMessage() . "</p>";
    die("Não foi possível estabelecer a conexão com o banco de dados.");

}
?>