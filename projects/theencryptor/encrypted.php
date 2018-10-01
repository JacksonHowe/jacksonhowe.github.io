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

<?php
	ini_set('max_execution_time', 0);
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
        
        
        // Form Validation
        $valid = 0;
        
        // Valid_1
        if (empty($_POST["text"]) == true)
        {
            print("<div class='alert alert-error'>");
            print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
            print("<strong>Error</strong> Please enter some text to encrypt.");
            print("</div>");
        }
        else
            $valid++;
        
        
        // Valid_2
		$txt = (string) $_POST["text"];	
        $condition = containsSpecialChars($txt);
        
        if ($condition)
        {
			print("<div class='alert alert-error'>");
            print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
            print("<strong>Error</strong> Please don't use special characters such as accents or symbols (è, ç, ®).");
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
                array_push($passcodes, (string) $_POST["akey"]);
            }
            else if ($_POST["DATA_VAL"] == "two")
            {
                array_push($passcodes, (string) $_POST["akey"]);
                array_push($passcodes, (string) $_POST["bkey"]);
            }
            else if ($_POST["DATA_VAL"] == "three")
            {
                array_push($passcodes, (string) $_POST["akey"]);
                array_push($passcodes, (string) $_POST["bkey"]);
                array_push($passcodes, (string) $_POST["ckey"]);
            }
            else if ($_POST["DATA_VAL"] == "more")
            {
                $passcodes = explode(',', (string) $_POST["keys"]);
            }
            
            $finalText = encrypt($txt, $passcodes, $_POST['clength'], $_POST["min"]); // ENCRYPT !!
			print("<div class='hero-unit'>");
            print("<h1>Ciphertext</h1><br>");
            print("<textarea readonly style='width:100%;'>");
			print($finalText);
            print("</textarea>");
            print("</div>");
        }
        
            
        
            //the banners (that show the keys) start here
            if ($_POST["DATA_VAL"] == "password")
            {
                print("<div class='alert alert-info'>");
                print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
                print("<strong>Password:</strong> " . $_POST["password"]);
                print("</div>");
            }
            else if ($_POST["DATA_VAL"] == "one")
            {
                print("<div class='alert alert-info'>");
                print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
                print("<strong>A Key:</strong> " . $_POST["akey"]);
                print("</div>");
            }
            else if ($_POST["DATA_VAL"] == "two")
            {
                print("<div class='alert alert-info'>");
                print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
                print("<strong>A Key:</strong> " . $_POST["akey"]);
                print("</div>");
                
                print("<div class='alert alert-info'>");
                print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
                print("<strong>B Key:</strong> " . $_POST["bkey"]);
                print("</div>");
            }
            else if ($_POST["DATA_VAL"] == "three")
            {
                print("<div class='alert alert-info'>");
                print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
                print("<strong>A Key:</strong> " . $_POST["akey"]);
                print("</div>");
                
                print("<div class='alert alert-info'>");
                print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
                print("<strong>B Key:</strong> " . $_POST["bkey"]);
                print("</div>");
                
                print("<div class='alert alert-info'>");
                print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
                print("<strong>C Key:</strong> " . $_POST["ckey"]);
                print("</div>");
            }
            else if ($_POST["DATA_VAL"] == "more")
            {
                print("<div class='alert alert-info'>");
                print("<button type='button' class='close' data-dismiss='alert'>&times;</button>");
                print("<strong>Keys:</strong> " . $_POST["keys"]);
                print("</div>");
            }
            //banner end
        
        
        /* Cookies not supported with this webhost (at least 'setcookie')
            setcookie("text", $final);
            setcookie("akey", $_POST["akey"]);
            setcookie("bkey", $_POST["bkey"]);
        */
            
    }
    else
    {
        print("<script>window.location = 'http://theencryptor.jacksonhowe.com/encrypt';</script>");
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
/* Encrypted */
google_ad_slot = "7203266526";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4792153959839656";
/* Encrypted_2 */
google_ad_slot = "7288834927";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<br/>

<!-- Can't mail sans cookies
<form class="form-horizontal" action="mailer" method="post">
    <strong>Send encrypted message</strong><br/>
    <input type="text" placeholder="Email" name="email">
    <button type="submit" class="btn">Send</button>
</form>
-->

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