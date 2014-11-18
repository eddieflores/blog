<?php

    require_once(__DIR__ . "/../model/database.php"); //it tells the computer where the file directory is at 

    $connection = new mysqli($host, $username, $password); //tells where the database is and connects it
    
    if ($connection->connect_error) {//tells what to do if there is an error connecting to dataabse
        die("<p>Error: " . $connection->connect_error . "</p>");
    }
    $exists = $connection->select_db($database);//tries to acces a database
    
    if (!$exists) {
        $query = $connection->query("CREATE DATABASE $database");//gets a database 

        if ($query) {
            echo "<p>successfully created database: " . $database . "/p>";//prints out text 
        }
        else {
            echo $connection->error;
        }
    } else {
        echo "database already exists.";//echo if the database already exists or doesent if it doesent
    }
    
    $query = $connection->query("CREATE TABLE posts("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
            ."PRIMARY KEY (id))");
    
    if($query) {
        echo "<p>succesfully create table: post</p>";
    }
    
    else {
        echo "<p>$connection->error</p>";
    }
    
    

    $connection->close();//closes this connection 
    
