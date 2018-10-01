<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Encryptor: Secure Online Data Encryption</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Using world-class encryption algorithms, the Encryptor is an accessible, online module for secure encryption and decryption of your data. Free!">
<meta name="author" content="Jackson Howe">
<meta name="keywords" content="encryption, algorithm, jackson howe, philip easo, the encryptor, world-class encryption, online, fast, free, safe, secure, state-of-the-art, secret, text, hide, puzzle, encrypt, decrypt, decryption, data">

<!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

<style type="text/css">
body {
    padding-top: 60px;
    padding-bottom: 40px;
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

<?php
    function redirect($destination)
    {
        if (preg_match("/^https?:\/\//", $destination))
        {
            header("Location: " . $destination);
        }
        
        else if (preg_match("/^\//", $destination))
        {
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            header("Location: $protocol://$host$destination");
        }
        
        else
        {
            $protocol = (isset($_SERVER["HTTPS"])) ? "https" : "http";
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("Location: $protocol://$host$path/$destination");
        }
        
        exit;
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        require("resources/functions.php");
        print("<div class='container'>");
        
        // Validation
        if (empty($_POST["text"]) == true)
        {
            print("<div class='alert alert-error'>");
            print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
            print("<strong>Error</strong> Please enter some text to decrypt.");
            print("</div>");
        }
        else
            $valid++;
        
        
        if (mb_strlen($_POST["text"], "UTF-8") % 2 != 0)
        {
            print("<div class='alert alert-error'>");
            print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
            print("<strong>Error</strong> This isn't a valid decryption message. Error 4:invalid numchar.");
            print("</div>");
        }
        else
            $valid++;
        
        // Validation
        if ($valid >= 2)
        {
            // Passcodes prep
            $passcodes = [];
            
			if ($_POST["DATA_VAL"] == "password")
			{
				$password = $_POST["password"];
                for ($n = 0; $n < len($password); $n++)
				{
					array_push($passcodes, ord($password[$n]));
				}
			}
            else if ($_POST["DATA_VAL"] == "one")
            {
                array_push($passcodes, (int) $_POST["akey"]);
            }
            else if ($_POST["DATA_VAL"] == "two")
            {
                array_push($passcodes, (int) $_POST["akey"]);
                array_push($passcodes, (int) $_POST["bkey"]);
            }
            else if ($_POST["DATA_VAL"] == "three")
            {
                array_push($passcodes, (int) $_POST["akey"]);
                array_push($passcodes, (int) $_POST["bkey"]);
                array_push($passcodes, (int) $_POST["ckey"]);
            }
            else if ($_POST["DATA_VAL"] == "more")
            {
                $passcodes = explode(',', (int) $_POST["keys"]);
            }

            $txt = $_POST["text"];
			$finalText = decrypt($txt, $passcodes); // DECRYPT !!
            
			print("<div class='hero-unit'>");
            print("<p>");
			print($finalText);
            print("</p>");
            print("</div>");
            print("</div>");
        }
        
            
    }
    else
    {
        print("<script>window.location = 'http://theencryptor.jacksonhowe.com/decrypt';</script>");
    }
    
?>


<br/>
<!-- AD CODE HERE
============================================ -->
<br/>
<div class="well" style="max-width: 728px; margin: 0 auto 10px;">
<!-- ad code -->
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4792153959839656";
/* Decrypted */
google_ad_slot = "8679999726";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4792153959839656";
/* Decrypted_2 */
google_ad_slot = "8765568125";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<br/>

<hr>

<!-- FOOTER -->
<footer>
<p align="center">&copy; 2013 - 2014 Jackson Howe; Philip Easo &middot; <a href="support">Support</a></p>
</footer>

</div>

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
</body>
</html>