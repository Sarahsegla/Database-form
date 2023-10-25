<?php

//using post method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //grab user data
    
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

//if theres error catch it
    try {
        // grab connection to link to file 
        require_once "dbh.inc.php";

        // (?) are placeholders to later on link after using qeury instead of (?) now have names
        $query = "INSERT INTO users (username, pwd, email) 
        VALUES (?, ?, ? );";
        //(:username, :pwd, :email );";

       // submitting qeury to database
        $stmt = $pdo->prepare($query);

        // to bind user data. 2 peak info. name parameter bind to variable
        // $stmt->bindParam(":username", $username);
        // $stmt->bindParam(":pwd", $pwd);
        // $stmt->bindParam(":email", $email);

        // always match order
        // no longer needed as binded above line 24
        $stmt->execute([$username, $pwd, $email]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
// kill off the script
        die();



    } catch (PDOException $e) {
        // if it catches, terminate script and stop running.
        // display this msg
        die("Sorry failed ". $e->getMessage());
    }

} else {
    // if didnt use post. send me to this place
    header("Location: ../index.php");
}