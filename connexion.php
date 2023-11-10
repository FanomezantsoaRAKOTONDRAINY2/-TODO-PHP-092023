<?php
//base de la connexion 

$dbusername = "root";
$dbpassword = "";

try {
    $conn = new PDO("mysql:host=localhost;dbname=todo", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
