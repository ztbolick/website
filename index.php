<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114591991-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-114591991-1');
    </script>

    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,  intial-scale=1, shrink-to-fit=no">
    <meta name="description" content="San Diego Mesa Computer Science Club">
    <meta name="keywords" content="San Diego, SD, Mesa, CSC, MesaCSC, computer, science, club">
    <title>Mesa CSC</title>

    <link rel="icon" href="favicon.ico">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FULLCALENDAR CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.2/fullcalendar.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/preload.css">
    <!-- JQUERY -->
    <script src="/js/jquery.min.js"></script>
    <!-- ANIME.JS -->
    <script src="/js/anime.min.js" rel="preload"></script>
    <!-- MAIN.JS -->
    <script src="/js/main.js" rel="preload"></script>
  </head>

  <body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- PRELOADER AREA -->
    <div id="preloader-wrapper">
      <div class="preloader">
        <svg viewBox="0 0 349.25 168.73">
          <title>svg_logo</title>
          <g id="Layer_2" data-name="Layer 2">
            <g id="BG">
              <text transform="translate(101.61 14.21)" style="font-size: 16px;fill: #fff;stroke: #fff;stroke-miterlimit: 10;font-family: HelveticaNeue-Light, Helvetica Neue, Segoe UI, Arial;letter-spacing: 0.375em">S D M E S A</text>
            </g>
            <g id="Text">
              <line x1="117.58" y1="108.19" x2="231.67" y2="108.19" style="fill: none;stroke: #fff;stroke-miterlimit: 10;stroke-width: 7px"/>
              <path id="one" d="M32,58.77a57,57,0,1,0,85.56,49.42v0a57,57,0,0,1,57.05-57h14.26" style="fill: none;stroke: #fff;stroke-miterlimit: 10;stroke-width: 7px"/>
              <path id="two" d="M260.26,58.77a57,57,0,0,0-28.59,49.46v0a57,57,0,0,1-57,57H160.37" style="fill: none;stroke: #fff;stroke-miterlimit: 10;stroke-width: 7px"/>
              <path id="three" d="M231.67,108.19a57,57,0,0,0,114.08,0" style="fill: none;stroke: #fff;stroke-miterlimit: 10;stroke-width: 7px"/>
            </g>
          </g>
        </svg>
      </div>
    </div>
    <!-- END PRELOADER -->

<!-- NAVBAR START -->
    <?php include 'partials/_nav.php'; ?>    
<!-- NAVBAR END -->
    

    <!-- MAIN IMAGE -->
    <div id="topdiv" class="container w-100 mb-5">
      <img src="/static/club_photo.jpg" alt="" class="img-fluid">
    </div>

    <!-- ABOUT SECTION -->
    <div id="about" class="container my-5 anchor">
      <div class="row justify-content-center text-center">
        <div class="col-xs-4 col-md-5 align-self-center px-5">
          <h2 class="border-bottom mb-3">Who We Are</h2>
          <p class="mb-3">We are a student organization at San Diego Mesa College dedicated to being an invaluable resource for learning,
            understanding, and discussing topics centered around Computer Science in a friendly setting. We strive
            to create an environment where students can meet like-minded people, make friends, gain knowledge, build
            careers, and have fun!</p>
            <a href="#team" class="btn btn-outline-dark mb-5" role="button">Our Team</a>
        </div>
        <div class="col px-0">
          <!-- CAROUSEL -->
          <div id="carousel" class="container w-100">
            <div class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" style="height: 400px; overflow: hidden;">
                <div class="carousel-item active">
                  <img src="/static/social.jpg" alt="First Slide" class="d-block img-fluid">
                </div>
                <div class="carousel-item">
                  <img src="/static/bonfire.jpg" alt="First Slide" class="d-block img-fluid">
                </div>
                <div class="carousel-item">
                  <img src="/static/carousel3.jpg" alt="First Slide" class="d-block img-fluid">
                </div>
                <div class="carousel-item">
                  <img src="/static/officers.jpg" alt="First Slide" class="d-block img-fluid">
                </div>
                <div class="carousel-item">
                  <img src="/static/arduino.jpg" alt="First Slide" class="d-block img-fluid">
                </div>
              </div>
            </div>
          </div>
          <!-- CAROUSEL END -->
        </div>
      </div>
    </div>

    <!-- EVENTS SECTION -->
    <div id="events" class="container my-5 anchor">
      <div class="row justify-content-center text-center">
        <div class="col-xs-4">
          <h2 class="border-bottom">Events</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-11">
          <div id="calendar"></div>
        </div>
      </div>
    </div>

    <!-- MODAL FOR CALENDAR -->
    <div id="calModal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 id="modalTitle" class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="modalBody" class="modal-body">
          </div>
          <div class="modal-footer">
            <a id="eventURL" class="btn btn-primary text-white" target="_blank">Go to Google Calendar</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- TEAM SECTION -->
    <div class="container my-5 anchor">
      <div class="row justify-content-center text-center">
        <div class="col-xs-4">
          <h2 class="border-bottom">Our Team</h2>
        </div>
      </div>
        <div class="row justify-content-center text-left">
          <div class="col-md-3 my-2">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active magictab" id="2018-tab" data-toggle="tab" role="tab">2018</a>
            </li>
            <li class="nav-item">
              <a class="nav-link magictab" id="2017-tab" data-toggle="tab" role="tab">2017</a>
            </li>
          </ul>
        </div>
      </div>
      <div id="team">
        
      </div>
    </div>

    <!-- CONTACT SECTION -->
    <div id="contact" class="container my-5 anchor">
      <div class="row justify-content-center text-center">
        <div class="col-xs-4">
          <h2 class="border-bottom">Get Involved</h2>
        </div>
      </div>
      <div id="signup-form" class="row justify-content-center mt-4">
        <div class="col-md-5 text-center">
          <p style="font-size:18px;">Join our mailing list!</p>
          <form action="https://facebook.us15.list-manage.com/subscribe/post" method="POST">
            <input type="hidden" name="u" value="4d17c732168375fe07492f128">
            <input type="hidden" name="id" value="371a1c3c71">
            <div class="form-group">
                <input type="text" name="MERGE1" placeholder="First Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="MERGE2" placeholder="Last Name" class="form-control">
            </div>
            <div class="form-group">
                <input type="email" name="MERGE0" placeholder="Email" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark col-4">Sign-Up</button>
          </form>
        </div>
      </div>
    </div>
  </body>
  <footer class="bg-dark">
    <div id="footer" class="container py-5">
      <div class="row justify-content-center text-center py-3 mt-3">
        <div class="col">
          <a href="https://www.facebook.com/cscmesa/" class="mx-2" target="blank"><img src="static/facebook-f.svg" alt="" style="width: 40px;"></a>
          <a href="https://www.instagram.com/mesacsc/" class="mx-2" target="blank"><img src="static/instagram.svg" alt="" style="width: 40px;"></a>
          <a href="https://cscmesa.slack.com/" class="mx-2" target="blank"><img src="static/slack.svg" alt="" style="width: 40px;"></a>
          <a href="https://twitter.com/csc_mesa" class="mx-2" target="blank"><img src="static/twitter.svg" alt="" style="width: 40px;"></a>
          <a href="https://github.com/cscmesa" class="mx-2" target="blank"><img src="static/github.svg" alt="" style="width: 40px;"></a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 text-center">
          <p class="text-white">San Diego Mesa Computer Science Club</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="/js/preload.js" rel="preload"></script>
  <!-- MOMENT.JS -->
  <script src="/js/moment.js"></script>
  <!-- FULLCALENDAR.JS -->
  <script src="/js/fullcalendar.min.js"></script>
  <script src='/js/gcal.min.js'></script>
  <!-- POPPER.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <!-- BOOTSTRAP.JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
