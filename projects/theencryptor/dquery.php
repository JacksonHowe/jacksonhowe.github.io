<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Encryptor Database</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Using world-class encryption algorithms, the Encryptor is an accessible, online module for secure encryption and decryption of your data. Free!">
<meta name="author" content="Jackson Howe">
<meta name="keywords" content="encryption, algorithm, jackson howe, philip easo, the encryptor, world-class encryption, online, fast, free, safe, secure, state-of-the-art, secret, text, hide, puzzle, encrypt, decrypt, decryption, data">

<!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<script src="functions.js"></script>

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
                    <li><a href="decrypt">Decrypt</a></li>
                    <li class="active"><a href="database">Database</a></li>
                    <li><a href="support">Support</a></li>
                    
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
    

<br/><br/>
<div class="container">

<?php
    require("resources/functions.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if ($_POST["DATA_VAL"] == "new") {
            // new ID
            $password = $_POST["password"];
            $passwordConfirm = $_POST["passwordConfirm"];
            
            if ($password == $passwordConfirm) {
                $max = query("SELECT `max_id` FROM `max` WHERE 1");
                $max = $max[0]["max_id"] + 1;
                query("UPDATE `max` SET `max_id`=?", $max);
                query("INSERT INTO `ids`(`id`, `password`, `text`, `default`) VALUES (?,?,?,0)", $max, crypt($password), "No Data Yet");
                printf("<div class='hero-unit'><h1>Welcome</h1><p>Your new ID has been created. Your ID is <span class='badge badge-success'> $max </span>. Write it down for your records.<br/>Click below to put something in your new secure ID!</p><a class='btn btn-primary btn-large' href='database'>Fill ID with Data</a></div>");
            } else {
                print("<div class='alert alert-error'>Passwords do not match.</div>");
            }
        }
        
        
        
        
        else if ($_POST["DATA_VAL"] == "view") {
            // view ID contents
            $id = $_POST["id"];
            $password = $_POST["password"];
            
            $user = query("SELECT * FROM `ids` WHERE `id` = ?", $id);
            if ($user !== false) {
                if (crypt($password, $user[0]["password"]) == $user[0]["password"]) {
                    
                    $passcodes = [];
                    for ($n = 0; $n < len($password); $n++)
                    {
                        array_push($passcodes, ord($password[$n]));
                    }
                    
                    $txt = $user[0]["text"];
                    $userID = $user[0]["id"];
                    $finalText = html_entity_decode(decrypt($txt, $passcodes), ENT_NOQUOTES, 'UTF-8');
                    
                    print("<div class='hero-unit'>");
                    print("<h1>ID $userID </h1>");
                    print("<p>");
                    
                    if ($user[0]["default"] == 1)
                    {
                        print($finalText);
                    }
                    
                    else {
                        print("No data has been found under this ID. Click below to edit the contents of this ID.</p> <a class='btn btn-primary btn-large' href='database'>Edit Contents of ID</a>");
                    }
                    print("</p>");
                    print("</div>");
                } else {
                    print("<div class='alert alert-error'>Not a valid ID/password combination.</div>");
                }
            } else {
                print("<div class='alert alert-error'>Not a valid ID.</div>");
            }
        }
        
        
        
        
        else if ($_POST["DATA_VAL"] == "edit") {
            // edit contents
            $id = $_POST["id"];
            $password = $_POST["password"];
            $newText = $_POST["text"];
            
            $user = query("SELECT * FROM `ids` WHERE `id` = ?", $id);
            if ($user !== false) {
                if (crypt($password, $user[0]["password"]) == $user[0]["password"]) {

                    $txt = $newText;
                    $while = len($txt);
                    $condition = false;
                    for ($i = 0; $i < $while; $i++)
                    {
                        if (ord($txt[$i]) > 127)
                        {
                            $q = chr(ord($txt[$i]));
                            $condition = true;
                            break;
                        }
                    }
                    
                    if ($condition == false)
                    {
                        $passcodes = [];
                        $password = $_POST["password"];
                        for ($n = 0; $n < len($password); $n++) {
                            array_push($passcodes, ord($password[$n]));
                        }
                        
                        $finalText = html_entity_decode(encrypt($txt, $passcodes), ENT_NOQUOTES, 'UTF-8');
                    }

                    if (query("UPDATE `ids` SET `text`=?,`default`=1 WHERE `id`=?", $finalText, $id) !== false) {
                        print("<div class='hero-unit'><h1>Success</h1><p>The data was successfully encrypted and written to ID $id.</p><a class='btn btn-primary btn-large' href='database'>Back</a></div>");
                    } else {
                        print("<div class='alert alert-error'>Error: an unknown problem was encountered when saving the data. (200)</div>"); 
                    }
                } else {
                    print("<div class='alert alert-error'>Not a valid ID/password combination.</div>");
                }
            } else {
                print("<div class='alert alert-error'>Not a valid ID.</div>");
            }
        }
        
        
        
        
        else if ($_POST["DATA_VAL"] == "remove") {
            // remove ID
            $id = $_POST["id"];
            $password = $_POST["password"];
            
            $user = query("SELECT * FROM `ids` WHERE `id` = ?", $id);
            if ($user !== false) {
                if (crypt($password, $user[0]["password"]) == $user[0]["password"]) {
                    if (query("DELETE FROM `ids` WHERE `id`=?", $id) !== false) {
                        print("<div class='hero-unit'><h1>ID $id Removed</h1><p>The data was securely wiped and the ID removed from the system.</p><a class='btn btn-primary btn-large' href='database'>Back</a></div>");
                    } else {
                        print("<div class='alert alert-error'>Error: an unknown problem was encountered when removing the user. (201)</div>"); 
                    }
                } else {
                    print("<div class='alert alert-error'>Not a valid ID/password combination.</div>");
                }
            } else {
                print("<div class='alert alert-error'>Not a valid ID.</div>");
            }
        }
    }
    else
    {
        print("<div class='alert alert-error'>Error 3501: Please return to the last page visited. (Method not POST)</div>");
    }
    
?>

</div> <!-- /container -->
<br/>
    
<!-- AD CODE HERE
============================================ -->
<br/>
<div class="well" style="max-width: 970px; margin: 0 auto 10px;">
<!-- ad code -->
    <script type="text/javascript"><!--
        google_ad_client = "ca-pub-4792153959839656";
        /* Dquery */
        google_ad_slot = "4195767729";
        google_ad_width = 970;
        google_ad_height = 90;
        //-->
        </script>
    <script type="text/javascript"
        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    <script type="text/javascript"><!--
        google_ad_client = "ca-pub-4792153959839656";
        /* Dquery_2 */
        google_ad_slot = "5672500926";
        google_ad_width = 970;
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