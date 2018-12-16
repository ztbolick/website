@include('partials._head')
@include('partials._preload')
@include('partials._nav')
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
@include('partials._footer')
