<?php
 

// connect to our data
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";



// if an error happens catch it
try {
    //code... create new pdo of what we can use
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    // grabs the error and THROW AN EXPECTION
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // give this message if erorr
    echo "connection fail: ". $e->getMessage();
    
}