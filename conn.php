<?php 
    // Microsoft Azure Database connection PHP script by childofcode.com
    $serverName = "tcp:servername.database.windows.net,1433";  
    $connectionOptions = array(
        "Database" => "YourDatabaseName",  
        "UID" => "YourDatabaseUserID",  
        "PWD" => "YourDatabasePassword"  
    );
    $conn = sqlsrv_connect($serverName, $connectionOptions);
?>
