<?php
 

// connect to our data
$dsn = "mysql:host=sql309.infinityfree.com;dbname=if0_35293563_myfirstdatabase";
$dbusername = "if0_35293563";
$dbpassword = "ROh2C8ZV65k";



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