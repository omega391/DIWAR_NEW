<!--LOGIN PAGE PHP CODE-->
<?php
$isInvalid = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $mysqli = require __DIR__ . "./php/database_conn.php";

        $sql = sprintf("SELECT * FROM user WHERE email = '%s'",
                        $mysqli->real_escape_string($_POST["email"]));

        $_result = $mysqli->query($sql);

        $user= $_result->fetch_assoc();

        //check email password auth
        if ($user) {
            if (password_verify($_POST["password"], $user["password_hash"])) {
                
                session_start();
                session_regenerate_id();

                $_SESSION["user_id"] = $user["id"];

                header("Location: ./php/acc_home.php");
                exit;

            }
        }
        $isInvalid = true;
    }

?>

<!--VON MAY CODE NG PHP SA LOOB NG FORM-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Document 2</title>
</head>
<body>
    <h1>LOGIN!!!</h1>
    <form method="post">

        <!-- MAY PHP CODE SA LOOB TONG EMAIL AT PASSWORD INPUT SA VALUE TAG -->
        <input type="email" name="email" required placeholder="Email Address" 
    
            value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" ><br>

        <input type="password" name="password" required placeholder="Password" 
            
            value="<?= htmlspecialchars($_POST["password"] ?? "") ?>" ><br>

        <!-- PHP CODE VON -->
        <?php if ($isInvalid): ?>  
            <em>email or password is invalid</em>
        <?php endif; ?><br>

        <button type="submit">LOGIN</button>
    </form>
    <a href="./views/signup.html">SIGNUP</a>
</body>
</html>
