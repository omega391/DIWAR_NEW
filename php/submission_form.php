<?php

//database connection
$mysqli = require __DIR__ . "/database_conn.php";

//insert new record
$sql = "INSERT INTO record (name, email, date, time, output, details, verification)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql)) {
    die("SQL error: ". $mysqli->error);
}

$stmt->bind_param("sssssss", 
        $_POST["Name"], 
        $_POST["Email"], 
        $_POST["date"], 
        $_POST["time"], 
        $_POST["output"], 
        $_POST["details"], 
        $_POST["verify"]
    );


if ($stmt->execute()) {
    //redirect user to page after successfull regisration
    //header("Location: ../php/acc_home.php");
    die("Report Submitted Successfully");
    exit;

} else {
    die($mysqli->error . " " . $mysqli->errno);
}


