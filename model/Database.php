<?php

class Database {

    private $connection;
    private $host;
    private $username;
    private $password;
    private $database;

    public function __construct($host, $username, $password, $username) {
        $this->host;
        $this->username = $username;//username
        $this->password = $password;//password
        $this->password = $database;//database
    }

    public function openconnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database)
                
        if ($this->connection->connect_error) {//tells what to do if there is an error connecting to dataabse
            die("<p>Error: " . $this->connection->connect_error . "</p>");
        }
    }

    public function closeconnection() {
        if(isset($this->connection)) {//checks weather or not theres info present in the variable
            $this->connection->close();//closes connection/close function
            
        }
        
      
    }

    public function query($string) {//query means to insert post or titles into the database
       $this->openconnection();
       
       $query = $this->connection->query($string);
       
       $this->closeconnection();
       
       return $query;
    }

}
