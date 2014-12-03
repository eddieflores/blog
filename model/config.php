<?php

require_once(__DIR__ . "/database.php");
session_start();


$path = "/Blog/";

$host = "localhost"; //host for the localhost
$username = "root"; //username for the root
$password = "root"; //password for the blog_db
$database = "blog_db"; //database for the blog_db


    if(!isset ($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database); //connection which host username password and database
        $_SESSION["connection"] = $connection;
    }