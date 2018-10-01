<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Encryptor Database</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Using world-class encryption algorithms, the Encryptor is an accessible, online module for secure encryption and decryption of your data. Free!">
<meta name="author" content="Jackson Howe">
<meta name="google-site-verification" content="hTjABk3VnIsdahaMpfHXRthPNTrPEtyVYOitGSCrsZ0" />
<meta name="keywords" content="encryption, algorithm, jackson howe, philip easo, the encryptor, world-class encryption, online, fast, free, safe, secure, state-of-the-art, secret, text, hide, puzzle, encrypt, decrypt, decryption, data">

<!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<style>

/* GLOBAL STYLES
 -------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
    padding-bottom: 40px;
color: #5a5a5a;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}



/* CUSTOMIZE THE NAVBAR
 -------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
position: absolute;
top: 0;
left: 0;
right: 0;
    z-index: 10;
    margin-top: 20px;
    margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
}
.navbar-wrapper .navbar {
    
}

/* Remove border and change up box shadow for more contrast */
.navbar .navbar-inner {
border: 0;
    -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
    -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
    box-shadow: 0 2px 10px rgba(0,0,0,.25);
}

/* Downsize the brand/project name a bit */
.navbar .brand {
padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
    font-size: 16px;
    font-weight: bold;
    text-shadow: 0 -1px 0 rgba(0,0,0,.5);
}

/* Navbar links: increase padding for taller navbar */
.navbar .nav > li > a {
padding: 15px 20px;
}

/* Offset the responsive button for proper vertical alignment */
.navbar .btn-navbar {
    margin-top: 10px;
}



/* CUSTOMIZE THE CAROUSEL
 -------------------------------------------------- */

/* Carousel base class */
.carousel {
    margin-bottom: 60px;
}

.carousel .container {
position: relative;
    z-index: 9;
}

.carousel-control {
height: 80px;
    margin-top: 0;
    font-size: 120px;
    text-shadow: 0 1px 1px rgba(0,0,0,.4);
    background-color: transparent;
border: 0;
    z-index: 10;
}

.carousel .item {
height: 500px;
}
.carousel img {
position: absolute;
top: 0;
left: 0;
    min-width: 100%;
height: 500px;
}

.carousel-caption {
    background-color: transparent;
position: static;
    max-width: 550px;
padding: 0 20px;
    margin-top: 200px;
}
.carousel-caption h1,
.carousel-caption .lead {
margin: 0;
    line-height: 1.25;
color: #fff;
    text-shadow: 0 1px 1px rgba(0,0,0,.4);
}
.carousel-caption .btn {
    margin-top: 10px;
}



/* MARKETING CONTENT
 -------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .span4 {
    text-align: center;
}
.marketing h2 {
    font-weight: normal;
}
.marketing .span4 p {
    margin-left: 10px;
    margin-right: 10px;
}


/* Featurettes
 ------------------------- */

.featurette-divider {
margin: 80px 0; /* Space out the Bootstrap <hr> more */
}
.featurette {
    padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
overflow: hidden; /* Vertically center images part 2: clear their floats. */
}
.featurette-image {
    margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
}

/* Give some space on the sides of the floated elements so text doesn't run right into it. */
.featurette-image.pull-left {
    margin-right: 40px;
}
.featurette-image.pull-right {
    margin-left: 40px;
}

/* Thin out the marketing headings */
.featurette-heading {
    font-size: 50px;
    font-weight: 300;
    line-height: 1;
    letter-spacing: -1px;
}



/* RESPONSIVE CSS
 -------------------------------------------------- */

@media (max-width: 979px) {
    
    .container.navbar-wrapper {
        margin-bottom: 0;
    width: auto;
    }
    .navbar-inner {
        border-radius: 0;
    margin: -20px 0;
    }
    
    .carousel .item {
    height: 500px;
    }
    .carousel img {
    width: auto;
    height: 500px;
    }
    
    .featurette {
    height: auto;
    padding: 0;
    }
    .featurette-image.pull-left,
    .featurette-image.pull-right {
    display: block;
        float: none;
        max-width: 40%;
    margin: 0 auto 20px;
    }
}


@media (max-width: 767px) {
    
    .navbar-inner {
    margin: -20px;
    }
    
    .carousel {
        margin-left: -20px;
        margin-right: -20px;
    }
    .carousel .container {
        
    }
    .carousel .item {
    height: 300px;
    }
    .carousel img {
    height: 300px;
    }
    .carousel-caption {
    width: 65%;
    padding: 0 70px;
        margin-top: 100px;
    }
    .carousel-caption h1 {
        font-size: 30px;
    }
    .carousel-caption .lead,
    .carousel-caption .btn {
        font-size: 18px;
    }
    
    .marketing .span4 + .span4 {
        margin-top: 40px;
    }
    
    .featurette-heading {
        font-size: 30px;
    }
    .featurette .lead {
        font-size: 18px;
        line-height: 1.5;
    }
    
    /* Custom container */
    .container-narrow {
    margin: 0 auto;
        max-width: 700px;
    }
    .container-narrow > hr {
    margin: 30px 0;
    }
    
    .jumbotron {
    margin: 60px 0;
        text-align: center;
    }
    .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
    }
    .jumbotron .btn {
        font-size: 21px;
    padding: 14px 24px;
    }
    
}
</style>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="bootstrap/js/html5shiv.js"></script>
<![endif]-->

</head>

<body>

<?php include_once("bootstrap/share.php"); ?>


<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
<div class="container">
<div class="navbar navbar-inverse">
<div class="navbar-inner">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

<a class="brand" href="/">The Encryptor</a>
<div class="nav-collapse collapse">
<ul class="nav">

<li><a href="/">About</a></li>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Encryption Defined <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="encryptiondefined">What is Encryption?</a></li>
        <li><a href="process">Our Process</a></li>
    </ul>
</li>

<li><a href="encrypt">Encrypt</a></li>

<li><a href="decrypt">Decrypt</a></li>

<li class="active"><a href="database">Database</a></li>

<li><a href="support">Support</a></li>

</li>
</ul>
</div><!--/.nav-collapse -->
</div><!-- /.navbar-inner -->
</div><!-- /.navbar -->
</div> <!-- /.container -->
</div><!-- /.navbar-wrapper -->



<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
<div class="carousel-inner">
<div class="item active">
<img src="img/car2_1.jpg" alt="Store passwords securely.">
<div class="container">
<div class="carousel-caption">
<h1>Store passwords and text securely.</h1>
<p class="lead">Using the Encryptor's database feature, you can encrypt your passwords and data and store them online safely. No need to worry about passwords getting stolen.</p>
<a class="btn btn-large btn-primary accordion-toggle" href="#new" data-toggle="collapse" data-parent="#accordion2">Try it!</a>
</div>
</div>
</div>
<div class="item">
<img src="img/car2_2.jpg" alt="Access your passwords anywhere.">
<div class="container">
<div class="carousel-caption">
<h1>Access your passwords anywhere.</h1>
<p class="lead">We all have lots of passwords. Use the Encryptor Database to access your passwords anywhere with a Mac, PC, or mobile device.</p>
<a class="btn btn-large btn-primary" href="#help" data-toggle="modal">How do I get started?</a>
</div>
</div>
</div>
<div class="item">
<img src="img/car2_3.jpg" alt="Simple, Free, and Secure.">
<div class="container">
<div class="carousel-caption">
<h1 style="color: black;">Simple, Free, and Secure.</h1>
<p style="color: black;" class="lead">The Encryptor Database uses secure algorithms to make sure no one can steal your passwords. And it's free! </p>
<a class="btn btn-large btn-primary" href="process">Learn How</a>
</div>
</div>
</div>
</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->
</div>

<div class="container">


<!-- Accordian
================================================== -->


<div class="row">
<div class="span6 offset1">
    
    <script>
        function validatePassword() {
            if (document.getElementById("password").value == document.getElementById("passwordConfirm").value) {
                document.getElementById("controlRow").className = "control-group success";
                document.getElementById("controlRow2").className = "control-group success";
            } else {
                document.getElementById("controlRow").className = "control-group error";
                document.getElementById("controlRow2").className = "control-group error";
            }
        }
    </script>

<div class="accordion" id="accordion2">

    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#new" name="go">
          Create New ID
        </a>
      </div>
      <div id="new" class="accordion-body collapse">
        <div class="accordion-inner">
            <form class="form-signin" action="dquery" method="post">
                <input type="hidden" name="DATA_VAL" value="new">

                <div class="control-group" id="controlRow">
                    <input class="input-large" name="password" placeholder="Password" type="password" id="password" oninput="validatePassword()" required/>
                    <button class="btn btn-success pull-right" type="submit">Create New ID</button>
                </div>
                    
                <div class="control-group" id="controlRow2">
                    <input class="input-large" name="passwordConfirm" placeholder="Confirm Password" type="password" id="passwordConfirm" oninput="validatePassword()" required/>
                </div>
            </form>
        </div>
      </div>
    </div>

    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#view">
          View ID Contents
        </a>
      </div>
      <div id="view" class="accordion-body collapse">
        <div class="accordion-inner">
            <form class="form-signin" action="dquery" method="post">
                <input type="hidden" name="DATA_VAL" value="view">

                <div class="controls controls-row">
                    <input class="input-small" name="id" placeholder="ID" type="number" required/>
                    <input class="input-large" name="password" placeholder="Password" type="password" required/>
                    <button class="btn btn-primary pull-right" type="submit">View ID Contents</button>
                </div>
            </form>
        </div>
      </div>
    </div>

    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#edit">
          Edit ID Contents
        </a>
      </div>
      <div id="edit" class="accordion-body collapse">
        <div class="accordion-inner">
            <form class="form-signin" action="dquery" method="post">
                <input type="hidden" name="DATA_VAL" value="edit">

                <div class="controls controls-row">
                    <input class="input-small" name="id" placeholder="ID" type="number" required/>
                    <input class="input-large" name="password" placeholder="Password" type="password" required/>
                    <button class="btn btn-primary pull-right" type="submit">Update ID Contents</button>
                </div>
                    
                <textarea type="text" rows="4" name="text" placeholder="New Text" required></textarea>
            </form>
        </div>
      </div>
    </div>

    <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#remove">
          Remove Existing ID
        </a>
      </div>
      <div id="remove" class="accordion-body collapse">
        <div class="accordion-inner">
            <form class="form-signin" action="dquery" method="post">
                <input type="hidden" name="DATA_VAL" value="remove">

                <div class="controls controls-row">
                    <input class="input-small" name="id" placeholder="ID" type="number" required/>
                    <input class="input-large" name="password" placeholder="Password" type="password" required/>
                    <button class="btn btn-warning pull-right" type="submit">Remove ID &amp; Contents</button>
                </div>
            </form>
        </div>
      </div>
    </div>

</div> <!-- /accordian -->
    
<a class="btn btn-info pull-right" href="#help" data-toggle="modal">How do I get started?</a>

</div> <!-- /span -->


<div class="span4 offset1">
    <!-- AD CODE -->
    <script type="text/javascript"><!--
        google_ad_client = "ca-pub-4792153959839656";
        /* Database */
        google_ad_slot = "2719034527";
        google_ad_width = 336;
        google_ad_height = 280;
        //-->
        </script>
    <script type="text/javascript"
        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    
</div> <!-- span -->


</div> <!-- /row -->


    <div id="help" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">The Encryptor Database: Guide</h3>
        </div>
        <div class="modal-body">
            <p>Using the Encryptor Database is easy! Just follow these simple steps:</p>
            <ol>
                <li>Click <strong>Create New ID</strong>, enter a password, and click the green button to make a new ID. Write the assigned ID and your password down for record.</li><br>
                <li>To put text or passwords into the ID, click <strong>Edit ID Contents</strong>. Then enter your ID, password, and the <em>unencrypted</em>text you would like to be saved. The Encryptor Database will automatically encrypt your text and store it for you.</li><br>
                <li>To view the message later, click <strong>View ID Contents</strong>, enter your ID and password, and the text will be decrypted for you.</li><br>
            </ol>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>



<br/>
<br/>
<br/>

<div class="container">
<hr>
<!-- FOOTER -->
<footer>
<p class="pull-right"><a href="#">Back to top</a></p>
<p>&copy; 2013 - 2014 Jackson Howe; Philip Easo &middot; <a href="support">Support</a></p>

</footer>
</div>
</div><!-- /.container -->



<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include_once("analyticstracking.php") ?>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap-transition.js"></script>
<script src="bootstrap/js/bootstrap-alert.js"></script>
<script src="bootstrap/js/bootstrap-modal.js"></script>
<script src="bootstrap/js/bootstrap-dropdown.js"></script>
<script src="bootstrap/js/bootstrap-scrollspy.js"></script>
<script src="bootstrap/js/bootstrap-tab.js"></script>
<script src="bootstrap/js/bootstrap-tooltip.js"></script>
<script src="bootstrap/js/bootstrap-popover.js"></script>
<script src="bootstrap/js/bootstrap-button.js"></script>
<script src="bootstrap/js/bootstrap-collapse.js"></script>
<script src="bootstrap/js/bootstrap-carousel.js"></script>
<script src="bootstrap/js/bootstrap-typeahead.js"></script>
<script>
!function ($) {
    $(function(){
      // carousel demo
      $('#myCarousel').carousel()
      })
}(window.jQuery)
</script>
<script src="bootstrap/js/holder.js"></script>
</body>
</html>