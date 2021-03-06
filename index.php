
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <script
      src="https://kit.fontawesome.com/434f997720.js"
      crossorigin="anonymous"
    ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>DIWAR</title>
  </head>
  <body>
    <!-- START: Navbar -->
    <div id="navbar">
      <div class="nav-container">
        <div class="logo">
          <a href="index.html">
            <img src="./resources/image/DIWARlogo.png" alt=""
          /></a>
        </div>
        <div class="navbarButton">
          <a href="#homepage" id="home">home</a>
          <a href="#howitworks" id="how">how it works?</a>
          <a href="#contactus" id="contact">contact us</a>
          <a href="./html/login.php" id="login">login</a>
        </div>
      </div>
    </div>
    <!-- END: Navbar -->

    <!-- START: Homepage -->
    <div id="homepage">
      <div class="homepageContent">
        <p>University of Rizal System</p>
        <p>daily individual work accomplishment report</p>
        <p>
          We aim to achieve a seemless way of giving our users the comfort of submiting their Daily Acomplishment Reports
          thru their mobile or desktop devices.
        </p>
        <button id="getstarted" onclick="window.location.href='./html/login.html';">
          get started
          <span><i class="fa-solid fa-caret-right"></i></span>
        </button>
        <i id="noaccount">dont have an account <span>register now</span></i>
      </div>
      <div class="homepageImage">
        <img src="./resources/image/mainpageImage.png" alt="" />
      </div>
      <div class="scrolldown">
        <a href="">
          <div class="mouse">
            <span></span>
          </div>
          <div class="arrow">
            <span></span>
          </div>
          <div class="arrow1">
            <span></span>
          </div>
        </a>
      </div>
      <div class="footer"></div>
    </div>
    <!-- END: Homepage -->

    <!-- START: How it works section -->
    <div id="howitworks">
      <div class="header">
        <p>how it works?</p>
      </div>

      <div class="content">
        <div class="step">
          <p class="stepnum">step <span>1</span></p>
          <p>registration</p>
          <div class="card">
            <img src="./resources/image/step 1.png" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="learnmore">
              <p>learn more</p>
              <i class="fa-solid fa-right-long"></i>
            </div>
            <!-- <img src="" alt="" /> -->
          </div>
        </div>
        <div class="step">
          <p class="stepnum">step <span>2</span></p>
          <p>log in</p>
          <div class="card">
            <img src="./resources/image/step 2.png" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="learnmore">
              <p>learn more</p>
              <i class="fa-solid fa-right-long"></i>
            </div>
          </div>
        </div>

        <div class="step">
          <p class="stepnum">step <span>3</span></p>
          <p>fill out the form</p>
          <div class="card">
            <img src="./resources/image/step 3.png" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="learnmore">
              <p>learn more</p>
              <i class="fa-solid fa-right-long"></i>
            </div>
          </div>
        </div>
        <div class="step">
          <p class="stepnum">step <span>4</span></p>
          <p>send or save your form</p>
          <div class="card">
            <img src="./resources/image/step 4.png" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="learnmore">
              <p>learn more</p>
              <i class="fa-solid fa-right-long"></i>
            </div>
          </div>
        </div>
      </div>  
      <div class="btnstartsteps">
        <button onclick="window.location.href='./html/login.html';">
          start your step 1
          <i class="fa-solid fa-arrow-right-to-bracket"></i>
        </button>
      </div>
    </div>
    <!-- END: How it works section -->

    <!-- START: Contact us -->
    <div id="contactus">
      <div class="headertop"></div>
      <div class="headercontactpage">
        <p>contact us</p>
      </div>
      <div class="contactuscontent">
        <div class="content">
          <div class="contactdetails">
            <div class="text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit
                distinctio quibusdam minima at earum quasi! Animi.
              </p>
              <p><i class="fa-solid fa-envelope"></i> ursm.edu@gmail.com</p>
              <p>
                <i class="fa-solid fa-mobile-screen-button"></i> +(63)9563566025
              </p>
              <p><i class="fa-solid fa-map-location-dot"></i> Philippines</p>
            </div>
            <div class="illustration">
              <img src="./resources/image/contactus.png" alt="" />
            </div>
          </div>
          <div class="contactform">
            <p>reach us</p>
            <p>Lorem ipsum, dolor sit amet conse adipisicing elit.</p>
            <form action="">
              <input type="text" name="name" placeholder="name" />
              <input type="text" name="email " placeholder="email" />
              <textarea
                name="message"
                id=""
                cols="40"
                rows="10"
                placeholder="message"
              ></textarea>
              <input type="button" value="send message" />
            </form>
          </div>
        </div>

        <div class="links">
          <div class="logoanddescription">
            <img src="./resources/image/DIWARlogo white.png" alt="" />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
              reiciendis nesciunt accusantium laboriosam dignissimos, cumque ab
              aspernatur animi repellat nihil!
            </p>
          </div>
          <div class="navlinks">
            <ul>
              <li>ursdiwar</li>
              <li><a href="#homepage">home</a></li>
              <li><a href="#howitworks">how it works?</a></li>
              <li><a href="#contactus">contact us</a></li>
              <li><a href="login.html">login</a></li>
            </ul>
          </div>
          <div class="contactlinks">
            <ul>
              <li>contact</li>
              <li>urs.edu@gmail.com</li>
              <li>+(63)9563566025</li>
              <li>Philippines</li>
            </ul>
          </div>
        </div>
        <div class="footer">
          <div></div>
          <p>copyright 2022 algohero all rights reserved.</p>
        </div>
      </div>
    </div>
    <!-- END: Contact us -->
    <script src="./js/landingpage.js"></script>
  </body>
</html>
