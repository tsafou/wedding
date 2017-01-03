
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ioanna & Kostis Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/apple-touch-icon.png">
    <link href="assets/css/plugins.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <!--[if lte IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <![endif]-->


    <script type="text/javascript">
        function validation() {
            var nam = document.comment.name.value;
            var nam1 = document.getElementById('name');
            if (nam == "") {
                document.comment.name.focus();
                nam1.style.borderColor = "#f00";
                return false;
            }
            var nam1 = document.getElementById('name');
            nam1.style.borderColor = "";

            var jo = document.comment.email.value;
            var jo1 = document.getElementById('email');
            if (jo == "") {
                document.comment.email.focus();
                jo1.style.borderColor = "#f00";
                return false;
            }
            var jo1 = document.getElementById('email');
            jo1.style.borderColor = "";
            var mess = document.comment.comment.value;
            var mess1 = document.getElementById('comment');
            if (mess == "") {
                document.comment.comment.focus();
                mess1.style.borderColor = "#f00";
                return false;
            }
        }
    </script>
</head>
<body id="page" class="hfead bordered">

<header id="masterhead" class="site-header">
    <div class="container-fluid">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".site-navigation"
                aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="site-branding">
                    <h1 class="site-title">
                        <a href="index.html">Ioanna &amp; Kostis</a>
                    </h1>
                </div><!-- end site-branding -->
            </div><!-- end col -->
            <div class="col-md-8 col-sm-12">
                <div class="site-navigation navbar-collapse collapse">
                    <div class="nav-menu">

                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <!--<li><a href="couple.html">Couple</a></li>-->
                            <!--<li><a href="our-story.html">Our Story</a></li>-->
                            <li><a href="guest-book.php">Guest</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <!--<li><a href="rsvp.html">RSVP</a></li>-->
                            <li><a href="event.html">Event</a></li>
                            <!--<li><a href="blog.html">Blog</a>-->
                            <!--<ul>-->
                            <!--<li>-->
                            <!--<a href="blog-single.html">Blog Single</a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--<a href="404.html">404 Page Not Found</a>-->
                            <!--</li>-->
                            <!--<li>-->
                            <!--<a href="ui-elements.html">UI Elements</a>-->
                            <!--</li>-->
                            <!--</ul>-->
                            <!--</li>-->
                        </ul>

                    </div><!-- end nav-menu -->
                </div><!-- end site-navigation -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</header><!-- end header -->

<div class="page-heading"
     style="background:#333 url('assets/img/demo/page-title-bg.png')no-repeat; background-size:cover;">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h2 class="entry-title">Guest Book</h2>
            </div><!-- end col -->

        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end featured-slider -->

<!-- START MAIN CONTENT -->
<div id="content" class="site-content">
    <div class="container">
        <div class="row">

            <div class="testimonial-content">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "21112001AbC";
                $db = "wedding";

                // Create connection
                $mysqli = new mysqli($servername, $username, $password, $db);

                $query = "SELECT * FROM comment";
                $result = $mysqli->query($query);

                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//    echo "<div id='sty'>";
//    echo "<img src='files/fav icon.png'" . "' width='50px' height='50px' align='left' />";
                    echo "<div id='nameid' class=\"col-sm-6 testimonial-grid\"><blockquote>\"" . $row['comment'] . "\"<cite>" .$row['name']. "</cite></blockquote></div>";
//                    echo "<div id='msgid' class=\"col-sm-6 testimonial-grid\"><blockquote>" . $row['comment'] . "</blockquote></div>";
//                    echo "</div><br />";
                }
                /* close connection */
                $mysqli->close();
                ?>
<!--                <div class="col-sm-6 testimonial-grid">-->
<!--                    <blockquote>" I wish you all these things-but remember sometimes dreams are all up to you! " <cite>Sheril-->
<!--                            Indarwati</cite></blockquote>-->
<!--                </div><!-- end column -->
<!---->
<!--                <div class="col-sm-6 testimonial-grid">-->
<!--                    <blockquote>" Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming mazim-->
<!--                        placerat facer possim assum " <cite>Hendra Binoto</cite></blockquote>-->
<!--                </div><!-- end column -->
<!---->
<!--                <div class="col-sm-6 testimonial-grid">-->
<!--                    <blockquote>" notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum-->
<!--                        formas humanitatis " <cite>Yoppie Suherman</cite></blockquote>-->
<!--                </div><!-- end column -->
<!---->
<!--                <div class="col-sm-6 testimonial-grid">-->
<!--                    <blockquote>" seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum-->
<!--                        clari, fiant sollemnes " <cite>Ratna Listy</cite></blockquote>-->
<!--                </div><!-- end column -->
<!---->
<!--                <div class="col-sm-6 testimonial-grid">-->
<!--                    <blockquote>" Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming mazim-->
<!--                        placerat facer possim assum " <cite>Hendra Binoto</cite></blockquote>-->
<!--                </div><!-- end column -->
<!---->
<!--                <div class="col-sm-6 testimonial-grid">-->
<!--                    <blockquote>" notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum-->
<!--                        formas humanitatis " <cite>Yoppie Suherman</cite></blockquote>-->
<!--                </div><!-- end column -->

            </div><!-- end testimonial-content -->

        </div><!-- end row -->

        <div class="row">
            <div class="contact-form">
                <form name="comment" method="post" action="../php/comment.php" onSubmit="return validation()">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="inner-contact">
                            <div class="entry-header">
                                <h2 class="entry-title">Leave Us Your WIsh</h2>
                                <p>Your Email Address will not Published.</p>
                            </div><!-- end entry-header -->
                            <div class="entry-content">
                                <p><input class="form-control" type="text" name="name" id="name"
                                          placeholder="Your Name"></p>
                                <p><input class="form-control" type="email" name="email" id="email"
                                          placeholder="Your Email"></p>
                                <p><textarea class="form-control" rows="10" name="comment" id="comment"
                                             maxlength="250"></textarea></p>
                                <p><input type="submit" name="submit" value="Add Wish" class="btn btn-line btn-lg"
                                          id="button"></p>
                            </div><!-- end entry-content -->
                        </div><!-- end inner-contact -->
                    </div><!-- end col -->
                </form>
            </div><!-- end contact-form -->

        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end #content -->
<!-- END OF MAIN CONTENT -->

<div class="bottom-space"></div>

<div class="bottom-section">
    <div class="container">
        <h2 class="closing">We Are in Love &amp; Getting Married</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="name-bottom">
                    <p>Ioanna Karamichailidou</p>
                    <p>&amp;</p>
                    <p>Kostis Tsafaris</p>
                </div><!-- end name-bottom -->
            </div>
        </div>
    </div><!-- end container -->

    <footer class="site-credit">
        <div class="container">
            <p>COPYRIGHT &copy; 2017. BUILT BY TSAFOU.</p>
        </div>
    </footer>
</div><!-- end bottom section -->

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.plugin.js"></script>
<script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>

</html>