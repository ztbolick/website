<!DOCTYPE html>
<html>
  <head>
    <script rel="preload">
    // Set the date we're counting down to
    var countDownDate = new Date("June 1, 2018 12:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / (1000));

      // Display the result in the element with id="demo"
      document.getElementById("demo").innerHTML = days + " days " + hours + " hours "
      + minutes + " minutes " + seconds + " seconds";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "We're live!";
      }
    }, 1000);
    </script>
    <script>
      /* Set the width of the side navigation to 250px */
      function openNav() {
        if(window.innerWidth <= 800) {
          document.getElementById("register").style.width = "100vw";
          document.getElementById("container").style.overflow = "hidden";
        } else {
          document.getElementById("register").style.width = "48vw";
        }
        document.getElementById("contents").style.opacity = "1";
        document.getElementById("contents").style.transitionDelay = "0.1s";
        document.body.style.overflow = "hidden";
      }
      /* Set the width of the side navigation to 0 */
      function closeNav() {
        document.getElementById("register").style.width = "0";
        document.getElementById("contents").style.opacity = "0";
        document.getElementById("contents").style.transitionDelay = "0s";
        document.body.style.overflow = "visible";
      }
    </script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <?php
      if(isset($_POST['submit']))
      {
        require "config.php";

        try
        {
          $connection = new PDO($dsn, $username, $password, $options);
          $new_user = array(
            $firstname = $_POST['firstname'],
            $lastname  = $_POST['lastname'],
            $email     = $_POST['email'],
            $phone     = $_POST['phone']
          );

          $sql = "INSERT INTO users (firstname, lastname, email, phone)
          values ('$firstname', '$lastname', '$email', '$phone')";

          $statement = $connection->prepare($sql);
          $statement->execute($new_user);

        }

        catch(PDOException $error)
        {
          echo $sql . "<br>" . $error->getMessage();
        }
      }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/mesahacks/css/mesahacks.css">
    <link rel="stylesheet" href="/mesahacks/css/registration.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <title>MesaHacks</title>
  </head>
  <body>
    <div id="register" class="registration">
        <a href="javascript:void(0)" class="overlay_btn" onclick="closeNav()">&times;</a>
        <div style="clear: both;"></div>
      <div id="contents" class="contents">
        <h2>Sign-up</h2>
        <form method="post" onsubmit="closeNav()">
          <label for="firstname">First name:</label><br><input type="text" name="firstname" id="firstname" value=""><br>
          <label for="lastname">Last name:</label><br><input type="text" name="lastname" id="lastname" value=""><br>
          <label for="email">Email:</label><br><input type="email" name="email" id="email" value=""><br>
          <label for="phone">Phone number:</label><br><input type="tel" name="phone" id="phone" value=""><br>
          <input type="submit" name="submit" id="submit" value="Submit" onclick="closeNaV()">
        </form>
      </div>
    </div>
    <div id="container">
    <section class="countdown">
        <div id="welcome" class="welcome">
          <div class="logo">
            <img src="static/Logo.png" alt="MesaHacks">
          </div>
          <div id="details" class="details">
            <h1>June 1, 2018</h1>
            <p>2018 San Diego Mesa College</p>
            <p id="demo" class="clock"></p>
            <p id="register_info">Registration opens on March 2, 2018</p>
            <div data-aos="fade-up" data-aos-delay="1000" data-aos-duration="1500">
              <span onclick="openNav()" id="register_btn">Sign-up for updates</span>
            </div>
          </div>
          <div style="clear: none"></div>
        </div>
    </section>
    <section class="FAQ">
      <h1>FAQ</h1>
      <div class="question left border" data-aos="fade-up" data-aos-duration="2000">
          <h6>What is a hackathon?</h6>
          <p>
            A hackathon is an event in which programmers, designers, and more come
            together to collaborate on the development of a product. Over the duration
            of the event, students will learn about new technologies and build connections
            with others along the way.
          </p>
      </div>
      <div class="question right border" data-aos="fade-up" data-aos-duration="2000">
          <h6>Who can attend?</h6>
          <p>
            Any college or high school student over the age of 18 is eligble to participate.
          </p>
      </div>
      <div class="question left border" data-aos="fade-up" data-aos-duration="2000">
          <h6>What should I bring?</h6>
          <p>
            Bring your computer, student ID, chargers, monitors, and any other hardware you
            plan on using. You may also bring a change of clothes, toiletries, and a sleeping
            bag if you plan to nap.
          </p>
      </div>
      <div class="question right border" data-aos="fade-up" data-aos-duration="2000">
          <h6>Can I help?</h6>
          <p>
            Please email us at <a href="mailto:cscmesa@gmail.com" class="email">cscmesa@gmail.com</a>
            if you would like to help or have any questions not listed on this page!
          </p>
      </div>
      <div class="question left border" data-aos="fade-up" data-aos-duration="2000">
          <h6>Do I need to have a team?</h6>
          <p>
            We will give participants the option to form a team at the start of the event,
            but everyone is free to hack alone if they so desire. We allow teams of up to five.
            If you do have a team, make sure to register early! All members must register
            and include the other members' names in their applications.
          </p>
      </div>
      <div style="clear: both"></div>
    <div class="sponsors">
      <p>
        Interested in sponsoring? Email us at <a href="mailto:cscmesa@gmail.com">cscmesa@gmail.com</a>.
      </p>
    </div>
    </section>
    <div id="footer" style="width: 100vw; text-align: center;">
      <div class="footer">
        <div class="socialmedia">
          <a href="https://www.facebook.com/cscmesa/" target="blank"><i class="fab fa-facebook"></i></a>
          <a href="mailto:cscmesa@gmail.com"><i class="far fa-envelope"></i></a>
          <a href="https://www.instagram.com/mesacsc/" target="blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="mesacsclogo">
          <img src="static/mesacsclogo.png" alt="Mesa CSC Logo">
        </div>
        <div style="clear:both"></div>
      </div>
    </div>
    <script>
      AOS.init();
    </script>
  </div>
  </body>
</html>
