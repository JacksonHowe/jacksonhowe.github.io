<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Encryptor: Encrypt</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Using world-class encryption algorithms, the Encryptor is an accessible, online module for secure encryption and decryption of your data. Free!">
<meta name="author" content="Jackson Howe">
<meta name="keywords" content="encryption, algorithm, jackson howe, philip easo, the encryptor, world-class encryption, online, fast, free, safe, secure, state-of-the-art, secret, text, hide, puzzle, encrypt, decrypt, decryption, data">


<!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>

<script type="text/javascript" src="functions.js"></script>
    
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
<li class="active"><a href="encrypt">Encrypt</a></li>
<li><a href="decrypt">Decrypt</a></li>
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

<script>
    
    function encryptWithJavaScript(method)
    {
        if (method == "password") {
            var password = document.getElementById("passwordCode").value;
            var txt = document.getElementById("passwordText").value;
            
            var passcodes = [];
            for (var n = 0; n < password.length; n++) {
                passcodes.push(ord(password[n]));
            }

            if (password.length > 1 && txt != "") {
                var final = encryptjs(txt, passcodes);
                document.getElementById("passwordBox").value = final;
            } else document.getElementById("passwordBox").value = "";
            
        } else if (method == "one") {
            var passcode = document.getElementById("oneCode").value;
            var txt = document.getElementById("oneText").value;
            var passcodes = [parseInt(passcode), parseInt(passcode)];

            if (passcode.length > 1 && txt != "") {
                var final = encryptjs(txt, passcodes);
                document.getElementById("oneBox").value = final;
            } else document.getElementById("oneBox").value = "";
            
        } else if (method == "two") {
            var passcode1 = document.getElementById("twoCode1").value;
            var passcode2 = document.getElementById("twoCode2").value;
            var txt = document.getElementById("twoText").value;
            var passcodes = [parseInt(passcode1), parseInt(passcode2)];

            if (passcode1.length > 1 && passcode2.length > 1 && txt != "") {
                var final = encryptjs(txt, passcodes);
                document.getElementById("twoBox").value = final;
            } else document.getElementById("twoBox").value = "";
            
        } else if (method == "three") {
            var passcode1 = document.getElementById("threeCode1").value;
            var passcode2 = document.getElementById("threeCode2").value;
            var passcode3 = document.getElementById("threeCode3").value;
            var txt = document.getElementById("threeText").value;
            var passcodes = [parseInt(passcode1), parseInt(passcode2), parseInt(passcode3)];
            
            if (passcode1.length > 1 && passcode2.length > 1 && passcode3.length > 1 && txt != "") {
                var final = encryptjs(txt, passcodes);
                document.getElementById("threeBox").value = final;
            } else document.getElementById("threeBox").value = "";
            
        } else if (method == "more") {
            var passcodearr = document.getElementById("moreCode").value;
            var txt = document.getElementById("moreText").value;
            var passcodes = passcodearr.split(',');
            for (var i = 0; i < passcodes.length; i++) {
                passcodes[i] = parseInt(passcodes[i]);
            }
            
            if (passcodes.length > 1 && txt != "") {
                var final = encryptjs(txt, passcodes);
                document.getElementById("moreBox").value = final;
            } else document.getElementById("moreBox").value = "";
        }
    }
    
</script>
    
<div id="content">

<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
    <li class="active"><a href="#password" data-toggle="tab">Encrypt with Password</a></li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Encrypt with Numerical Keys <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="#one" data-toggle="tab">1 Key (Not Recommended)</a></li>
            <li><a href="#two" data-toggle="tab">2 Keys</a></li>
            <li><a href="#three" data-toggle="tab">3 Keys</a></li>
            <li><a href="#more" data-toggle="tab">More than 3 Keys</a></li>
        </ul>
    </li>
</ul>

<div id="my-tab-content" class="tab-content">
    <div class="tab-pane active" id="password">
        <h1>Encrypt with Password</h1>
            <form class="form-signin" action="encrypted" method="post">
                <div class="controls controls-row">
                    <input id="passwordCode" class="input-large" name="password" placeholder="Password" type="password" oninput="encryptWithJavaScript('password')"/>
                </div>

                <textarea id="passwordText" type="text" rows="4" name="text" placeholder="Text" oninput="encryptWithJavaScript('password')"></textarea>

                <textarea id="passwordBox" readonly onclick="this.select()" type="text" rows="4" name="text" placeholder="Ciphertext"></textarea>
            </form>
    </div>

    <div class="tab-pane" id="one">
        <h1>Encrypt with 1 Key</h1>
            <form class="form-signin" action="encrypted" method="post">
                <input type="hidden" name="DATA_VAL" value="one">

                <div class="controls controls-row">
                    <input id="oneCode" class="input-small" name="akey" placeholder="Key" type="password" oninput="encryptWithJavaScript('one')"/>
                </div>

                <textarea id="oneText" type="text" rows="4" name="text" placeholder="Text" oninput="encryptWithJavaScript('one')"></textarea>

                <textarea id="oneBox" readonly onclick="this.select()" type="text" rows="4" name="text" placeholder="Ciphertext"></textarea>
            </form>
    </div>

    <div class="tab-pane" id="two">
        <h1>Encrypt with 2 Keys</h1>
            <form class="form-signin" action="encrypted" method="post">
                <input type="hidden" name="DATA_VAL" value="two">

                <div class="controls controls-row">
                    <input id="twoCode1" class="input-small" name="akey" placeholder="A Key" type="password" oninput="encryptWithJavaScript('two')"/>
                    <input id="twoCode2" class="input-small" name="bkey" placeholder="B Key" type="password" oninput="encryptWithJavaScript('two')"/>
                </div>
                    
                <textarea id="twoText" type="text" rows="4" name="text" placeholder="Text" oninput="encryptWithJavaScript('two')"></textarea>

                <textarea id="twoBox" readonly onclick="this.select()" type="text" rows="4" name="text" placeholder="Ciphertext"></textarea>
            </form>
    </div>

    <div class="tab-pane" id="three">
        <h1>Encrypt with 3 Keys</h1>
            <form class="form-signin" action="encrypted" method="post">
                <input type="hidden" name="DATA_VAL" value="three">

                <div class="controls controls-row">
                    <input id="threeCode1" class="input-mini" name="akey" placeholder="A Key" type="password" oninput="encryptWithJavaScript('three')"/>
                    <input id="threeCode2" class="input-mini" name="bkey" placeholder="B Key" type="password" oninput="encryptWithJavaScript('three')"/>
                    <input id="threeCode3" class="input-mini" name="ckey" placeholder="C Key" type="password" oninput="encryptWithJavaScript('three')"/>
                </div>
                
                <textarea id="threeText" type="text" rows="4" name="text" placeholder="Text" oninput="encryptWithJavaScript('three')"></textarea>

                <textarea id="threeBox" readonly onclick="this.select()" type="text" rows="4" name="text" placeholder="Ciphertext"></textarea>
            </form>
    </div>

    <div class="tab-pane" id="more">
        <h1>Encrypt with Multiple Keys</h1>
            <form class="form-signin" action="encrypted" method="post">
                <input type="hidden" name="DATA_VAL" value="more">

                <div class="controls controls-row">
                    <input id="moreCode"  class="input-large" name="keys" placeholder="Numerical Keys" type="text" oninput="encryptWithJavaScript('more')"/><br>
                    <em>Separate with commas (,)</em><br><br>
                </div>
                    
                <textarea id="moreText" type="text" rows="4" name="text" placeholder="Text" oninput="encryptWithJavaScript('more')"></textarea>
                
                <textarea id="moreBox" readonly onclick="this.select()" type="text" rows="4" name="text" placeholder="Ciphertext"></textarea>
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
/* Encrypt */
google_ad_slot = "4249800121";
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
<p align="center">&copy; 2013 - 2014 Jackson Howe; Philip Easo &middot; <a href="support">Support</a><br/></p>

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