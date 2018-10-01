<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Encryptor: Secure Online Data Encryption</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Using world-class encryption algorithms, the Encryptor is an accessible, online module for secure encryption and decryption of your data. Free!">
<meta name="author" content="Jackson Howe">
<meta name="google-site-verification" content="nWJBL1IUarIOHopG-Hb3WRfuC8yMNEE1tiel-YpJQwc" />
<meta name="keywords" content="encryption, algorithm, jackson howe, philip easo, the encryptor, world-class encryption, online, fast, free, safe, secure, state-of-the-art, secret, text, hide, puzzle, encrypt, decrypt, decryption, data">

<!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link href="http://vjs.zencdn.net/4.1/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/4.1/video.js"></script>
<style>

/* GLOBAL STYLES
 -------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
    padding-bottom: 40px;
color: #5a5a5a;
}



/* CUSTOMIZE THE NAVBAR
 -------------------------------------------------- */

.navbar .navbar-form {
    padding-top: 5px;
}

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

<li class="active"><a href="/">About</a></li>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Encryption Defined <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="encryptiondefined">What is Encryption?</a></li>
        <li><a href="process">Our Process</a></li>
    </ul>
</li>

<li><a href="encrypt">Encrypt</a></li>

<li><a href="decrypt">Decrypt</a></li>

<li><a href="database">Database</a></li>

<li><a href="support">Support</a></li>

</li>
</ul>

<!-- Ad Search -->
<form action="http://www.google.com" id="cse-search-box" class="navbar-form pull-right">
  <div>
    <input type="hidden" name="cx" value="partner-pub-4792153959839656:7149234128" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="45" class="input-medium search-query"/>
    <input type="submit" name="sa" value="Search" class="btn"/>
  </div>
</form>

<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>


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
<img src="img/car1.jpg" alt="World Class Encryption.">
<div class="container">
<div class="carousel-caption">
<h1 style="color:#000000;">World Class Encryption</h1>
<p class="lead" style="color:#000000;">The Encryptor uses state-of-the-art encryption methods to secure your data. Never worry about data theft again. </p>
<a class="btn btn-large btn-primary" href="process">Learn How</a>
</div>
</div>
</div>
<div class="item">
<img src="img/car2.jpg" alt="Secure your data.">
<div class="container">
<div class="carousel-caption">
<h1>Secure Your Data</h1>
<p class="lead">The Encryptor allows you to take plain text and turn it into an encrypted message which can only be decrypted with your knowing.</p>
<a class="btn btn-large btn-primary" href="encrypt">Try it</a>
</div>
</div>
</div>
<div class="item">
<img src="img/car3.jpg" alt="Engineered with Care.">
<div class="container">
<div class="carousel-caption">
<h1>What is Encryption?</h1>
<p class="lead">Need to learn more about encryption and cryptography? </p>
<a class="btn btn-large btn-primary" href="encryptiondefined">Click Here</a>
</div>
</div>
</div>

</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<a name="guide"></a>

<div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
<div class="span3">
<img src="img/circle1.jpg" alt="Step 1: Click encrypt.">
<h2>Step 1</h2>
<p>Click the <strong>encrypt</strong> tab at the top of the page. Decide whether to encrypt with a password or multiple numerical keys and select the appropriate tab. Enter your message and your password/keys and click encrypt. The Encryptor will then encrypt your text. <em>It's that simple!</em></p>
<p><a class="btn" href="encrypt">Encrypt &raquo;</a></p>
</div><!-- /.span4 -->
<div class="span3">
<img src="img/circle2.png" alt="Step 2: Share ciphertext">
<h2>Step 2</h2>
<p>Give, send, or post the encrypted text to someone else who knows the secret password/keys. To send it to them through facebook, click the facebook button at the bottom of the page. </p>
<p><a class="btn" href="encrypt">Encrypt &raquo;</a></p>
</div><!-- /.span4 -->
<div class="span3">
<img src="img/circle3.png" alt="Step 3: Click decrypt and view the original text!">
<h2>Step 3</h2>
<p>They can then go the decryption page, enter the encrypted text with the password or keys and click decrypt. The Encryptor will decrypt the text and the original message will appear!</p>
<p><a class="btn" href="decrypt">Decrypt &raquo;</a></p>
</div><!-- /.span4 -->


<!-- AD CODE HERE
============================================ -->
<div class="span3"><br><br>
<!-- ads -->
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4792153959839656";
/* Index */
google_ad_slot = "8819600528";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div><!--/span-->

</div><!-- /.row -->


<!-- START THE FEATURETTES -->

<hr class="featurette-divider">

<div class="featurette">
<img class="featurette-image pull-right" src="img/feature1.jpg" alt="Fast, free, and safe. And all online.">
<h2 class="featurette-heading">Fast, Free, and Safe. <span class="muted">And all online.</span></h2>
<p class="lead"><em>Everything</em> you need to encrypt your data can be found here. <strong>Free.</strong></p>
</div>

<hr class="featurette-divider">

<div class="featurette">
<img class="featurette-image pull-left" src="img/feature2.png" alt="Secure messaging to any email or facebook">
<h2 class="featurette-heading">With secure messaging you can send 'em in style and security. <span class="muted"> Easy.</span></h2>
<p class="lead">The Encryptor allows you to send customized messages to any email <strong>securely.</strong> Decryption for the recipient is no problem at all.</p>
</div>

<hr class="featurette-divider">

<div class="featurette">
<img class="featurette-image pull-right" src="img/feature3.png" alt="The Encryptor's algorithms were designed for safety, efficiency, and ease. With you in mind.">
<h2 class="featurette-heading">The Encryptor's algorithms were designed for safety, efficiency, and ease. <span class="muted">With you in mind.</span></h2>
<p class="lead">The Encryptor's sophisticated algorithms were designed to help you stay safe online and keep your identity personal. Visit <a href="support">our support page</a> to learn about the developers of The Encryptor.</p>
</div>

<!-- /END THE FEATURETTES -->

<hr class="featurette-divider">

<!-- FOOTER -->
<footer>
<p class="pull-right"><a href="#">Back to top</a></p>
<br><br><p class="pull-right"><a href="mailto:admin@theencryptor.tk"><img src="img/icon_mail.png" alt="Email Us"/></a>
<p class="pull-right"><a href="http://facebook.com/theencryptorofficial"><img src="img/icon_facebook.png" alt="Facebook Page"/></a>
<p class="pull-right"><a href="http://www.youtube.com/channel/UCCk4z2-Jvzte3akigLN3Pkw/"><img src="img/icon_youtube.png" alt="Youtube Channel"/></a>
</p>
<p>&copy; 2013 - 2014 Jackson Howe; Philip Easo &middot; <a href="support">Support</a></p>


</footer>

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
