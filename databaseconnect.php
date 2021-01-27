 	<?php
$servername = "localhost";
$username = "root";
$password = "";
date_default_timezone_set("australia/melbourne");   

try {
    $conn = new PDO("mysql:host=$servername;dbname=dbonlinefood", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
