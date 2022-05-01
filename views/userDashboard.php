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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DIWAR dashboard</title>
    <link rel="stylesheet" href="../styles/main.css" />
    <!-- swiper js -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <!-- fontawesone -->
    <script
      src="https://kit.fontawesome.com/434f997720.js"
      crossorigin="anonymous"
    ></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>
  <body>
  <?php if (isset($user)): ?>
    <div class="userPanel">
      <!-- sidebar menu start -->
      <div class="leftsidePanel">
        <div class="logo">
          <img src="../resources/image/DIWARlogo.png" alt="" />
        </div>
        <div class="verticalMenu">
          <ul>
            <li data-list="tab_1">
              <i class="fa-solid fa-house"></i> <a href="#home"> Home</a>
            </li>
            <li data-list="tab_2">
              <i class="fa-solid fa-user"></i><a href="#home"> Profile</a>
            </li>

            <li data-list="tab_3">
              <i class="fa-solid fa-file-circle-plus"></i
              ><a href="#home"> Submit a form</a>
            </li>

            <li data-list="tab_4">
              <i class="fa-solid fa-circle-question"></i
              ><a href="#home"> About</a>
            </li>
            <li data-list="tab_5">
              <i class="fa-solid fa-info"></i> <a href="#home">Help</a>
            </li>
            <li data-list="tab_6">
              <i class="fa-solid fa-info"></i> <a href="../php/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- sidebar menu end -->

      <div class="dashboard-pages">
        <!-- home panel -->
        <div class="mainPanel page tab_1">
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="../resources/image/bggreen.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="../resources/image/bggreen.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="../resources/image/bggreen.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="../resources/image/bggreen.jpg" alt="" />
              </div>
              <div class="swiper-slide">
                <img src="../resources/image/bggreen.jpg" alt="" />
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

          <div class="articles-container">
            <div class="annoucement-featured">
              <div class="annoucement">
                <h1>annoucement</h1>
                <div class="article">
                  <div class="photo">
                    <img src="../resources/image/step 1.png" alt="" />
                  </div>
                  <div class="article-content">
                    <h2>NOTICE OF SEARCH: PRIVATE SECTOR REPRESENTATIVES</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Culpa fuga laborum exercitationem illo repellendus.
                      Reiciendis atque iste fugiat provident, quod qui eveniet
                      nobis ducimus illo recusandae corrupti quas soluta?
                      Officia!
                    </p>
                  </div>
                </div>
                <div class="article">
                  <div class="photo">
                    <img src="../resources/image/step 1.png" alt="" />
                  </div>
                  <div class="article-content">
                    <h2>NOTICE OF SEARCH: PRIVATE SECTOR REPRESENTATIVES</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Culpa fuga laborum exercitationem illo repellendus.
                      Reiciendis atque iste fugiat provident, quod qui eveniet
                      nobis ducimus illo recusandae corrupti quas soluta?
                      Officia!
                    </p>
                  </div>
                </div>
                <div class="article">
                  <div class="photo">
                    <img src="../resources/image/step 1.png" alt="" />
                  </div>
                  <div class="article-content">
                    <h2>NOTICE OF SEARCH: PRIVATE SECTOR REPRESENTATIVES</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Culpa fuga laborum exercitationem illo repellendus.
                      Reiciendis atque iste fugiat provident, quod qui eveniet
                      nobis ducimus illo recusandae corrupti quas soluta?
                      Officia!
                    </p>
                  </div>
                </div>
              </div>

              <div class="featured-post">
                <h1>Featured posts</h1>
              </div>
            </div>

            <div class="news-updates">
              <div class="news">
                <h1>News and updates</h1>
                <div class="news-content">
                  <div class="photo">
                    <img src="../resources/image/step 1.png" alt="" />
                  </div>
                  <div class="news-details">
                    <h2>NOTICE OF SEARCH: PRIVATE SECTOR REPRESENTATIVES</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Culpa fuga laborum exercitationem illo repellendus.
                      Reiciendis atque iste fugiat provident, quod qui eveniet
                      nobis ducimus illo recusandae corrupti quas soluta?
                      Officia!
                    </p>
                  </div>
                </div>
                <div class="news-content">
                  <div class="photo">
                    <img src="../resources/image/step 1.png" alt="" />
                  </div>
                  <div class="news-details">
                    <h2>NOTICE OF SEARCH: PRIVATE SECTOR REPRESENTATIVES</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Culpa fuga laborum exercitationem illo repellendus.
                      Reiciendis atque iste fugiat provident, quod qui eveniet
                      nobis ducimus illo recusandae corrupti quas soluta?
                      Officia!
                    </p>
                  </div>
                </div>
                <div class="news-content">
                  <div class="photo">
                    <img src="../resources/image/step 1.png" alt="" />
                  </div>
                  <div class="news-details">
                    <h2>NOTICE OF SEARCH: PRIVATE SECTOR REPRESENTATIVES</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Culpa fuga laborum exercitationem illo repellendus.
                      Reiciendis atque iste fugiat provident, quod qui eveniet
                      nobis ducimus illo recusandae corrupti quas soluta?
                      Officia!
                    </p>
                  </div>
                </div>
                <div class="news-content">
                  <div class="photo">
                    <img src="../resources/image/step 1.png" alt="" />
                  </div>
                  <div class="news-details">
                    <h2>NOTICE OF SEARCH: PRIVATE SECTOR REPRESENTATIVES</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Culpa fuga laborum exercitationem illo repellendus.
                      Reiciendis atque iste fugiat provident, quod qui eveniet
                      nobis ducimus illo recusandae corrupti quas soluta?
                      Officia!
                    </p>
                  </div>
                </div>
                <div class="news-content">
                  <div class="photo">
                    <img src="../resources/image/step 1.png" alt="" />
                  </div>
                  <div class="news-details">
                    <h2>NOTICE OF SEARCH: PRIVATE SECTOR REPRESENTATIVES</h2>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Culpa fuga laborum exercitationem illo repellendus.
                      Reiciendis atque iste fugiat provident, quod qui eveniet
                      nobis ducimus illo recusandae corrupti quas soluta?
                      Officia!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- diwar form -->

        <div class="diwarform page tab_3">
          <h1>
            Daily individual work accomplishment report for work from home
            scheme
          </h1>
          <div class="form">
            <form action="../php/submission_form.php"method="post" nonvalidated>
            
            <input name="Name" value=<?= htmlspecialchars($user["name"]) ?> > <br>
                <input name="Email" value=<?= htmlspecialchars($user["email"]) ?> > <br>
                <input name="user_id" value=<?= htmlspecialchars($user["id"]) ?> > <br>
  
            <span>
                <label for="date">Date :</label><br />
                <input type="date" id="date" name="date" />
              </span>
              <span>
                <label for="time">Time :</label><br />
                <input type="time" id="time" name="time_from" /> <span>to </span>
                <input type="time" id="time" name="time_to" />
              </span>
              <span>
                <label for="targetoutput">Target output for the Day :</label
                ><br />
                <textarea name="details" id="" cols="30" rows="10"></textarea>
              </span>
              <span>
                <label for="outputcompleted">Output details completed :</label
                ><br />
                <textarea name="output" id="" cols="30" rows="10"></textarea>
              </span>
              <span>
                <label for="meansofverification">Means of verification :</label
                ><br />
                <textarea name="verify" id="" cols="30" rows="10"></textarea>
              </span>
              <br />
              <input
                type="submit"
                name="submit"
                id="btnsubmitdiwar"
                value="submit"
              />
            </form>
          </div>
        </div>
      </div>
    </div>
    <a href="../php/logout.php">LOGOUT</a>
        <?php else: ?>
            <!--redirect to loginpage if no session -->
            <p><a href = "../index.php"></a></p>
            <?php header("Location: ../index.html"); ?>
        <?php endif; ?>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
