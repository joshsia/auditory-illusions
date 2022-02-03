<?php

$host = "ec2-34-206-31-217.compute-1.amazonaws.com";
$dbname = "df5a4ufdvde1gc";
$user = "wyiapktblmawym";
$port = "5432";
$password = "5232a905295e88899a6c56049762b1708933d381f0abe4a2ae9c853d819f9026";

try{
    // Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";

    // Create PDO instance
    $pdo = new PDO($dsn,$user,$password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo "Error connecting to database<br><br>";
    echo "Connection failed: " . $e->getMessage();
}

?>