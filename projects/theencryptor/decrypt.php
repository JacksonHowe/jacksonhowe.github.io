<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Encryptor: Decrypt</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Using world-class encryption algorithms, the Encryptor is an accessible, online module for secure encryption and decryption of your data. Free!">
<meta name="author" content="Jackson Howe">
<meta name="keywords" content="encryption, algorithm, jackson howe, philip easo, the encryptor, world-class encryption, online, fast, free, safe, secure, state-of-the-art, secret, text, hide, puzzle, encrypt, decrypt, decryption, data">


<!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<style type="text/css">
body {
    padding-top: 40px;
    padding-bottom: 40px;
}

.form-signin {
    max-width: 300px;
padding: 19px 29px 29px;
margin: 0 auto 20px;
    background-color: #fff;
border: 1px solid #e5e5e5;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
    box-shadow: 0 1px 2px rgba(0,0,0,.05);
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
    margin-bottom: 10px;
}
.form-signin input[type="text"],
.form-signin input[type="password"] {
    font-size: 16px;
height: auto;
    margin-bottom: 15px;
padding: 7px 9px;
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

<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
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
<li class="active"><a href="decrypt">Decrypt</a></li>
<li><a href="database">Database</a></li>
<li><a href="support">Support</a></li>

</ul>
</div><!--/.nav-collapse -->
</div>
</div>
</div>

<br/><br/>

<div class="container">

<!-- alerts here
<div class="alert">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Warning!</strong> We're still in our developers' beta mode. Feel free to explore, but the encryptor is not fully functional yet. We should be ready by the end of the month.
</div>
-->

<div class="row">

<div class="span5 offset2">

<!-------->
<div id="content">

<!--
<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    <li class="active"><a href="#password" data-toggle="tab">Decrypt with Password</a></li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Decrypt with Numerical Keys <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#one" data-toggle="tab">1 Key</a></li>
            <li><a href="#two" data-toggle="tab">2 Keys</a></li>
            <li><a href="#three" data-toggle="tab">3 Keys</a></li>
            <li><a href="#more" data-toggle="tab">More than 3 Keys</a></li>
        </ul>
    </li>

</ul>
-->

<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    <li class="active"><a href="#two" data-toggle="tab">2 Keys</a></li>
</ul>

<div id="my-tab-content" class="tab-content">
    <div class="tab-pane" id="password">
        <h1>Decrypt with Password</h1>
            <form class="form-signin" action="decrypted" method="post">
                <input type="hidden" name="DATA_VAL" value="password">
                <textarea type="text" rows="4" name="text" placeholder="Text"></textarea>

                <div class="controls controls-row">
                    <input class="input-large" name="password" placeholder="Password" type="password"/>
                </div>

                <div class="controls controls-row">
                    <button class="btn btn-large btn-primary" type="submit">Decrypt</button>
                </div>
            </form>
    </div>

    <div class="tab-pane" id="one">
        <h1>Decrypt with 1 Key</h1>
            <form class="form-signin" action="decrypted" method="post">
                <input type="hidden" name="DATA_VAL" value="one">
                <textarea type="text" rows="4" name="text" placeholder="Text"></textarea>

                <div class="controls controls-row">
                    <input class="input-small" name="akey" placeholder="Key" type="password"/>
                </div>

                <div class="controls controls-row">
                    <button class="btn btn-large btn-primary" type="submit">Decrypt</button>
                </div>
            </form>
    </div>

    <div class="tab-pane active" id="two">
        <h1>Decrypt with 2 Keys</h1>
            <form class="form-signin" action="decrypted" method="post">
                <input type="hidden" name="DATA_VAL" value="two">
                <textarea type="text" rows="4" name="text" placeholder="Text"></textarea>

                <div class="controls controls-row">
                    <input class="input-small" name="akey" placeholder="A Key" type="password"/>
                    <input class="input-small" name="bkey" placeholder="B Key" type="password"/>
                </div>

                <div class="controls controls-row">
                    <button class="btn btn-large btn-primary" type="submit">Decrypt</button>
                </div>
            </form>
    </div>

    <div class="tab-pane" id="three">
        <h1>Decrypt with 3 Keys</h1>
            <form class="form-signin" action="decrypted" method="post">
                <input type="hidden" name="DATA_VAL" value="three">
                <textarea type="text" rows="4" name="text" placeholder="Text"></textarea>

                <div class="controls controls-row">
                    <input class="input-mini" name="akey" placeholder="A Key" type="password"/>
                    <input class="input-mini" name="bkey" placeholder="B Key" type="password"/>
                    <input class="input-mini" name="ckey" placeholder="C Key" type="password"/>
                </div>

                <div class="controls controls-row">
                    <button class="btn btn-large btn-primary" type="submit">Decrypt</button>
                </div>
            </form>
    </div>

    <div class="tab-pane" id="more">
        <h1>Decrypt with Multiple Keys</h1>
            <form class="form-signin" action="decrypted" method="post">
                <input type="hidden" name="DATA_VAL" value="more">
                <textarea type="text" rows="4" name="text" placeholder="Text"></textarea>

                <div class="controls controls-row">
                    <input class="input-large" name="keys" placeholder="Numerical Keys" type="text"/><br>
                    <em>Separate with commas (,)</em><br><br>
                </div>

                <div class="controls controls-row">
                    <button class="btn btn-large btn-primary" type="submit">Decrypt</button>
                </div>
            </form>
    </div>
</div>

<p align="center"><a href="/#guide"><button class="btn btn-small">Confused?</button></a></p>

</div>

<script src="bootstrap/js/bootstrap-dropdown.js"></script>
<script type="text/javascript">
jQuery(document).ready(function ($) {
                       $('#tabs').tab();
                       });
</script>


</div> <!--/span -->

<!-- AD CODE HERE
============================================ -->
<div class="span4 offset1"><br><br><br>
<!-- ads -->
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4792153959839656";
/* Decrypt */
google_ad_slot = "5726533323";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div><!--/span-->


</div> <!-- /row -->



<br/>

<hr>

<!-- FOOTER -->
<footer>
<p align="center">&copy; 2013 - 2014 Jackson Howe; Philip Easo &middot; <a href="support">Support</a></p>

</footer>
</div> <!-- /container -->



<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include_once("analyticstracking.php") ?>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
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
</body>
</html>