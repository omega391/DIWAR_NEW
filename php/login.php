<?php
$isInvalid = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $mysqli = require __DIR__ . "./database_conn.php";

        $sql = sprintf("SELECT * FROM user WHERE email = '%s'",
                        $mysqli->real_escape_string($_POST["email"]));

        $_result = $mysqli->query($sql);

        $user= $_result->fetch_assoc();

        //check email password auth
        if ($user) {
            if (password_verify($_POST["password"], $user["password_hash"])) {
 
                session_start();
                $_SESSION["user_id"] = $user["id"];

                header("Location: ../views/userDashboard.php");
                exit;

            }
        }
        $isInvalid = true;
    }

?>