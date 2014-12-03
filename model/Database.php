<?php

class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;
    public $error;

    public function __construct($host, $username, $password, $database) {
        $this->host;
        $this->username = $username; //username
        $this->password = $password; //password
        $this->password = $database; //database
        
        $this->connection = new mysqli($host, $username, $password);

        if ($this->$connection->connect_error) {//tells what to do if there is an error connecting to dataabse
            die("Error: " . $this->$connection->connect_error);
        }
        $exists = $this->$connection->select_db($database); //tries to acces a database

        if (!$exists) {
            $query = $this->connection->query("CREATE DATABASE $database"); //gets a database 

            if ($query) {
                echo "<p>successfully created database: " . $database . "/p>"; //prints out text 
            } else {
                echo $connection->error;
            }
        } else {
            echo "database already exists."; //echo if the database already exists or doesent if it doesent
        }
    }

    public function openconnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database)
;
        if ($this->connection->connect_error) {//tells what to do if there is an error connecting to dataabse
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

    public function closeconnection() {
        if (isset($this->connection)) {//checks weather or not theres info present in the variable
            $this->connection->close(); //closes connection/close function
        }
    }

    public function query($string) {//query means to insert post or titles into the database
        $this->openconnection();

        $query = $this->connection->query($string);
        
        if(!$query) {
            $this->error = $this->connection->error;
            
        }

        $this->closeconnection();

        return $query; //returns the query
    }

}
