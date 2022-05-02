<?php
$isInvalid = false;
       
    if (($_SERVER["REQUEST_METHOD"] === "POST")) {

        $mysqli = require "..\php\database_conn.php";

        $sql = sprintf("SELECT * FROM user WHERE email = '%s'",
                        $mysqli->real_escape_string($_POST["email"]));

        $_result = $mysqli->query($sql);

        $user= $_result->fetch_assoc();
     
        // check email password auth
        if ($user) {
            if (password_verify($_POST["password"], $user["password_hash"])) {       

                session_start();
                $_SESSION["user_id"] = $user["id"]; 
                header("Location: ./userDashboard.php"); 
                exit;
            }
        }
             $isInvalid = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/main.css" />
    <script src="../js/bootstrap-show-password.js"></script>
    <script src="https://kit.fontawesome.com/434f997720.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS & JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>login</title>
  </head>
  <body>
    <!-- Navbar start -->
    <div id="navbar">
      <div class="logo">
        <a href="../index.html"
          ><img src="../resources/image/DIWARlogo.png" alt=""
        /></a>
      </div>
      <a href="../index.html"><button class="close"></button></a>
    </div>
    <!-- Navbar end -->
    <div class="signuplogincontents">
      <!-- sign up section -->
      <form action="../php/signup.php" method="post" novalidate>
      <div id="signuppage">
        <div class="content">
          <p class="heading">Sign up</p>
             <div class="email">
              <div class="text">
                <p>Email</p>
                <p>
                  Already have an account? <a type="link" id="gotologin">log in</a>
                </p>
              </div>
              <input type="email" name="email" id="email" placeholder="Email Address" />
            </div>
            <div class="email">
              <div class="text">
                <p>Name</p>
                <br>  
                </div>
              <input type="text"  id="email" name="name" required placeholder="Name"/>           
            </div>
          <div class="password">
            <div class="text">
              <p>Password</p>
              <button type="button" class="signupshowhide">
                <!-- <i class="fa-solid fa-eye"></i>Show -->
                Show
              </button>
            </div>
            <input type="password" name="password" id="signuppassword" placeholder="Enter Password" />
          </div>
          <div class="password2">
          <div class="text">
              <p>Confirm Password</p>
              <button type="button" class="signupshowhide2">
                <!-- <i class="fa-solid fa-eye"></i>Show -->
                Show
              </button>
            </div>
            <div class="pasword2">
            <input type="password" name="confirm_password" id="signuppassword2" placeholder="Confirm Password"/>
            </div>
          </div>
          <input type="submit" name="signup" id="signup" value="Sign up" />
          <p class="termsandconditions">
            By clicking the "Sign up" button, you are creating an account, and
            agree to DIWAR <span>Terms of Service</span> and
            <span>Privacy Policy.</span>
          </p>
        </div>
      </div>
    </form>
     <!-- JS Transition of Login/Signup -->
    <script src="../js/login.js"></script>
  </body>
</html>
