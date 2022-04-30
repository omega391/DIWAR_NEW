<?php

$host = "localhost";
$dbname = "diwar_db";
$username = "root";
$password = "";
                    //sunod sunod dapat tong apat na ito
$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno){
    die("Connection error: ". $mysqli->connect_error);
}
return @$mysqli;