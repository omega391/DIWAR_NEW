<?php
    session_start(); 

    if (isset($_SESSION["user_id"])) {

        $mysqli = require "..\php\database_conn.php";

        $sql = "SELECT * FROM user
                WHERE id = {$_SESSION["user_id"]}" ;

        $result = $mysqli->query($sql);
        $user = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body> 
        
        <?php if (isset($user)): ?>
            <h1>HOME!!!!</h1>
            
            
            <!-- SUBMISSION FORM -->
            <form action="../php/submission_form.php" method="post">
                <h3>Daily Individual Work Accomplishment Report</h3>
                
                <p>WELCOME!</p>

                <input name="Name" value=<?= htmlspecialchars($user["name"]) ?> > <br>
                <input name="Email" value=<?= htmlspecialchars($user["email"]) ?> > <br>
 
                <label for="date">DATE:</label>
                <input type="date" name="date" required><br>
                <label for="time">TIME:</label>
                <input type="time" name="time" required><br>
                <label for="output">OUTPUT FOR THE DAY:</label>
                <input type="text" name="output" required><br>
                <label for="details">DETAILS OF THE OUTPUT:</label>
                <input type="text" name="details" required><br>
                <label for="verify">VERIFICATION:</label>
                <input type="text" name="verify" required><br><br>
                <button name="Submit">Submit Form</button><br>
            </form>
            

















            <!--Logout user from the session -->
            <p><a href="../php/logout.php">LOGOUT</a></p>
        <?php else: ?>
            <!--redirect to loginpage if no session -->
            <p><a href = "../index.php"></a></p>
            <?php header("Location: ../index.php"); ?>
        <?php endif; ?>
    </body>
</html>