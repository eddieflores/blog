<?php

    require_once(__DIR__ . "/../model/config.php"); //it tells the computer where the file directory is at 
   
    
    $query = $_SESSION["connection"]->query("CREATE TABLE posts("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
            ."PRIMARY KEY (id))");
    
    if($query) {
        echo "<p>succesfully create table: post</p>";
    }
    
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    
    $query = $_SESSION["connection"]->query("CREATE TABLE users ("
            . "id int (11) NOT NULL AUTO_INCREMENT,"
            . "username varchar (30)NOT NULL,"
            . "email varchar (50)NOT NULL,"
            . "password char(128)NOT NULL, "
            . "salt chart (128)NOT NULL,"
            . "PRIMARY KEY (id))");
    if($query) {
        echo "<P>succesfully created table: usrs</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    
    