<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (!isset($_COOKIE["attackcounter"])) {
			setcookie("attackcounter", 1, time()+3600);
		} else {
			setcookie("attackcounter", $_COOKIE["attackcounter"]+1, time()+3600);
			if ($_COOKIE["attackcounter"] > 3) {
				header("Location: http://jacksonhowe.com/errors/1200.html");
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jackson Howe - Contact</title>
        
        <meta charset="utf-8">
        <meta name="author" content="Jackson Howe">
        <meta name="description" content="Jackson Howe's web development portfolio. Includes experience, technical skills, and past work samples.">
        <meta name="keywords" content="jackson, howe, geoffrey, web development, portfolio, resume, work, experience, development, html">

        <link href="css/contact/desktop.css" rel="stylesheet" type="text/css">
        <link href="css/contact/tablet.css" rel="stylesheet" type="text/css" media="(min-width: 640px) and (max-width: 1099px)">
        <link href="css/contact/phone.css" rel="stylesheet" type="text/css" media="(max-width: 639px)">
        <link href="css/contact/tablet.css" rel="stylesheet" type="text/css" media="(min-device-width: 640px) and (max-device-width: 1099px)">
        <link href="css/contact/phone.css" rel="stylesheet" type="text/css" media="(max-device-width: 639px)">

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
             (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
             })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-55205788-1', 'auto');
            ga('send', 'pageview');
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <div class="background"><img src="img/bg.jpg"></div>
        
        <div class="header">
            <div class="inner">
                <h1><a href="/">CONTACT</a></h1>
                <p>Jackson Howe - Portfolio</p>
            </div>
        </div>
        
        <div class="navbar">
            <div class="mobilecenter">
                <p id="navitem1"><a href="skills">TECHNICAL SKILLS</a></p>
                <p id="navitem2"><a href="projects.html">PROJECTS</a></p>
                <p id="navitem3"><a href="certifications">CERTIFICATIONS</a></p>
                <p id="navitem4"><a href="contact" class="active">CONTACT</a></p>
            </div>
        </div>
        
        <div class="master">
            <div id="twitter" class="mediabutton">
                <a href="http://twitter.com/jacksonhowe_" target="_blank"><img src="img/contacticons/twitter.png" alt="Twitter"></a>
                <div class="caption"><p><a href="http://twitter.com/jacksonhowe_" target="_blank">@JacksonHowe_</a></p></div>
			</div>
			
			<div id="skype" class="mediabutton">
                <a href="skype:jacksonh98?chat" target="_blank"><img src="img/contacticons/skype.png" alt="Skype"></a>
                <div class="caption"><p><a href="skype:jacksonh98?chat" target="_blank">JacksonH98</a></p></div>
			</div>
			
			<div id="linkedin" class="mediabutton">
                <a href="http://www.linkedin.com/in/jacksonhowe" target="_blank"><img src="img/contacticons/linkedin.png" alt="LinkedIn"></a>
                <div class="caption"><p><a href="http://www.linkedin.com/in/jacksonhowe" target="_blank">JacksonHowe</a></p></div>
			</div>
			
			<div id="googleplus" class="mediabutton">
                <a href="http://google.com/+JacksonHowe1" target="_blank"><img src="img/contacticons/googleplus.png" alt="Google Plus"></a>
                <div class="caption"><p><a href="http://google.com/+JacksonHowe1" target="_blank">+JacksonHowe1</a></p></div>
			</div>
			
			<div id="mail" class="mediaform">
                <div class="wrapper">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name = $_POST["name"];
                            $email = $_POST["email"];
                            $message = $_POST["message"];
                            
                            require_once "js/recaptchalib.php";
                            $siteKey = "6LdG0wATAAAAAEQpW4e6PJDADVtLKH425reh5PTF";
                            $secret = "6LdG0wATAAAAACmXi6eczUrqxWTcBflhymU0ih0C";
                            $lang = "en";
                            $resp = null;
                            $error = null;
                            $reCaptcha = new ReCaptcha($secret);
                            if ($_POST["g-recaptcha-response"]) {
                                $resp = $reCaptcha->verifyResponse(
                                    $_SERVER["REMOTE_ADDR"],
                                    $_POST["g-recaptcha-response"]
                                );
                            }
                            
                            // ensure everything is filled out
                            if (empty($name) || empty($email) || empty($message)) {
                                echo "<h2>Send me a note</h2><p>Please be sure to fill in every field.</p><form method='post' action='contact'><div class='step1'><input type='text' name='name' placeholder='YOUR NAME'><input type='email' name='email' placeholder='YOUR EMAIL ADDRESS'><textarea rows='5' name='message' placeholder='YOUR MESSAGE'></textarea><button type='button' id='verifynote'>SEND</button></div><div class='step2'><div id='cap1'></div><button type='submit'>SEND</button></div></form>";
                            }
                            
                            // validate email
                            else if (strpos($email, '@') == false || strpos($email, '.') == false) {
                                echo "<h2>Send me a note</h2><p>That wasn't a valid email. Please try again.</p><form method='post' action='contact'><div class='step1'><input type='text' name='name' placeholder='YOUR NAME'><input type='email' name='email' placeholder='YOUR EMAIL ADDRESS'><textarea rows='5' name='message' placeholder='YOUR MESSAGE'></textarea><button type='button' id='verifynote'>SEND</button></div><div class='step2'><div id='cap1'></div><button type='submit'>SEND</button></div></form>";
                            }
                            
                            // check for unreasonable lengths
                            else if (strlen($name) > 254 || strlen($email) > 254 || strlen($message) > 10000) {
                                echo "<h2>Send me a note</h2><p>One of your fields was unreasonably long. Please make it shorter and try again.</p><form method='post' action='contact'><div class='step1'><input type='text' name='name' placeholder='YOUR NAME'><input type='email' name='email' placeholder='YOUR EMAIL ADDRESS'><textarea rows='5' name='message' placeholder='YOUR MESSAGE'></textarea><button type='button' id='verifynote'>SEND</button></div><div class='step2'><div id='cap1'></div><button type='submit'>SEND</button></div></form>";
                            }
                            
                            // check captcha
                            else if ($resp == null || !$resp->success) {
                                echo "<h2>Send me a note</h2><p>Are you sure you're human? Make sure to fill in the captcha and try again.</p><form method='post' action='contact'><div class='step1'><input type='text' name='name' placeholder='YOUR NAME'><input type='email' name='email' placeholder='YOUR EMAIL ADDRESS'><textarea rows='5' name='message' placeholder='YOUR MESSAGE'></textarea><button type='button' id='verifynote'>SEND</button></div><div class='step2'><div id='cap1'></div><button type='submit'>SEND</button></div></form>";
                            }
                            
                            // finally... send!
                            else {
                                $date = date("r");
                                $mail = mail("jackson@jacksonhowe.com", "Email Message from Portfolio Site", "Email Message from Portfolio Site: \nTimestamp: $date \nName: $name \nEmail: $email \nMessage: $message");
                                file_put_contents("js/formresponses.txt", "Email Message from Portfolio Site: \nTimestamp: $date \nName: $name \nEmail: $email \nMessage: $message\n\n", FILE_APPEND);
                                
                                if ($mail) {
                                    echo "<h2>Sent!</h2>";
                                } else {
                                    echo "<h2>Send me a note</h2><p>There was an unexpected error in the delivery. Please try again.</p><form method='post' action='contact'><div class='step1'><input type='text' name='name' placeholder='YOUR NAME'><input type='email' name='email' placeholder='YOUR EMAIL ADDRESS'><textarea rows='5' name='message' placeholder='YOUR MESSAGE'></textarea><button type='button' id='verifynote'>SEND</button></div><div class='step2'><div id='cap1'></div><button type='submit'>SEND</button></div></form>";
                                }
                            }
                        }
                        
                        else {
                            echo "<h2>Send me a note</h2><form method='post' action='contact'><div class='step1'><input type='text' name='name' placeholder='YOUR NAME'><input type='email' name='email' placeholder='YOUR EMAIL ADDRESS'><textarea rows='5' name='message' placeholder='YOUR MESSAGE'></textarea><button type='button' id='verifynote'>SEND</button></div><div class='step2'><div id='cap1'></div><button type='submit'>SEND</button></div></form>";
                        }
                    ?>
                </div>
			</div>
			
			<div id="phone" class="mediaform">
                <div class="wrapper">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name = $_POST["name"];
                            $phone = $_POST["phone"];
                            $timing = $_POST["timing"];
                            
                            require_once "js/recaptchalib.php";
                            $siteKey = "6Le_0wATAAAAAASV5IoZjqfqxWF-Gt-miLa3-Liz";
                            $secret = "6Le_0wATAAAAALWpgenfEbxr74Gg0UlMZAja4HST";
                            $lang = "en";
                            $resp = null;
                            $error = null;
                            $reCaptcha = new ReCaptcha($secret);
                            if ($_POST["g-recaptcha-response"]) {
                                $resp = $reCaptcha->verifyResponse(
                                    $_SERVER["REMOTE_ADDR"],
                                    $_POST["g-recaptcha-response"]
                                );
                            }
                            
                            // ensure everything is filled out
                            if (empty($name) || empty($phone)) {
                                echo "<h2>Have me call you back</h2><p>Please be sure to fill in every field.</p><form method='post' action='contact'><div class='phonestep1'><input type='text' name='name' placeholder='Your Name'><input type='tel' name='phone' placeholder='Your Phone Number'><select name='timing'><option selected value='none'>When is the best time to call?</option><option value='ASAP'>As soon as possible</option><option value='Morning'>Morning</option><option value='Afternoon'>Afternoon</option><option value='Evening'>Evening</option></select><button type='button' id='verifyphone'>Submit</button></div><div class='phonestep2'><div id='cap2'></div><button type='submit'>Submit</button></div></form>";
                            }
                            
                            // check for unreasonable lengths
                            else if (strlen($name) > 254 || strlen($phone) > 254) {
                                echo "<h2>Have me call you back</h2><p>One of your fields was unreasonably long. Please make it shorter and try again.</p><form method='post' action='contact'><div class='phonestep1'><input type='text' name='name' placeholder='Your Name'><input type='tel' name='phone' placeholder='Your Phone Number'><select name='timing'><option selected value='none'>When is the best time to call?</option><option value='ASAP'>As soon as possible</option><option value='Morning'>Morning</option><option value='Afternoon'>Afternoon</option><option value='Evening'>Evening</option></select><button type='button' id='verifyphone'>Submit</button></div><div class='phonestep2'><div id='cap2'></div><button type='submit'>Submit</button></div></form>";
                            }
                            
                            // ensure timing is good
                            else if ($timing == "none") {
                                echo "<h2>Have me call you back</h2><p>Please be sure to indicate when you would like me to call.</p><form method='post' action='contact'><div class='phonestep1'><input type='text' name='name' placeholder='Your Name'><input type='tel' name='phone' placeholder='Your Phone Number'><select name='timing'><option selected value='none'>When is the best time to call?</option><option value='ASAP'>As soon as possible</option><option value='Morning'>Morning</option><option value='Afternoon'>Afternoon</option><option value='Evening'>Evening</option></select><button type='button' id='verifyphone'>Submit</button></div><div class='phonestep2'><div id='cap2'></div><button type='submit'>Submit</button></div></form>";
                            }
                            
                            // check captcha
                            else if ($resp == null || !$resp->success) {
                                echo "<h2>Send me a note</h2><p>Are you sure you're human? Make sure to fill in the captcha and try again.</p><form method='post' action='contact'><div class='phonestep1'><input type='text' name='name' placeholder='Your Name'><input type='tel' name='phone' placeholder='Your Phone Number'><select name='timing'><option selected value='none'>When is the best time to call?</option><option value='ASAP'>As soon as possible</option><option value='Morning'>Morning</option><option value='Afternoon'>Afternoon</option><option value='Evening'>Evening</option></select><button type='button' id='verifyphone'>Submit</button></div><div class='phonestep2'><div id='cap2'></div><button type='submit'>Submit</button></div></form>";
                            }
                            
                            // finally... send!
                            else {
                                $date = date("r");
                                $mail = mail("jackson@jacksonhowe.com", "Call Request from Portfolio Site", "Call Request from Portfolio Site: \nTimestamp: $date \nName: $name \nPhone: $phone \nTiming Preference: $timing");
                                file_put_contents("js/formresponses.txt", "Call Request from Portfolio Site: \nTimestamp: $date \nName: $name \nPhone: $phone \nTiming Preference: $timing\n\n", FILE_APPEND);
                                
                                if ($mail) {
                                    echo "<h2>Sent!</h2>";
                                } else {
                                    echo "<h2>Have me call you back</h2><p>There was an unexpected error in the delivery. Please try again.</p><form method='post' action='contact'><div class='phonestep1'><input type='text' name='name' placeholder='Your Name'><input type='tel' name='phone' placeholder='Your Phone Number'><select name='timing'><option selected value='none'>When is the best time to call?</option><option value='ASAP'>As soon as possible</option><option value='Morning'>Morning</option><option value='Afternoon'>Afternoon</option><option value='Evening'>Evening</option></select><button type='button' id='verifyphone'>Submit</button></div><div class='phonestep2'><div id='cap2'></div><button type='submit'>Submit</button></div></form>";
                                }
                            }
                        }
                        
                        else {
                            echo "<h2>Have me call you back</h2><form method='post' action='contact'><div class='phonestep1'><input type='text' name='name' placeholder='Your Name'><input type='tel' name='phone' placeholder='Your Phone Number'><select name='timing'><option selected value='none'>When is the best time to call?</option><option value='ASAP'>As soon as possible</option><option value='Morning'>Morning</option><option value='Afternoon'>Afternoon</option><option value='Evening'>Evening</option></select><button type='button' id='verifyphone'>Submit</button></div><div class='phonestep2'><div id='cap2'></div><button type='submit'>Submit</button></div></form>";
                        }
                    ?>
                </div>

			</div>
            
            <div class="footer">
                <div class="left">
                    <p>&copy; 2016 Jackson Howe</p>
                </div>
                <div class="right">
                    <p><a href="contact">Get in Touch</a></p>
                </div>
            </div>
        </div>
        
        <script src="js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                // Verify note
                $("#verifynote").click(function() {
                    $(".step1").css("display", "none");
                    $(".step2").css("display", "inline-block");
                    grecaptcha.render("cap1", {"sitekey": "6LdG0wATAAAAAEQpW4e6PJDADVtLKH425reh5PTF"});
                });
                
                $("#verifyphone").click(function() {
                    $(".phonestep1").css("display", "none");
                    $(".phonestep2").css("display", "inline-block");
                    grecaptcha.render("cap2", {"sitekey": "6Le_0wATAAAAAASV5IoZjqfqxWF-Gt-miLa3-Liz"});
                });
                
                // fadein animation for nav
                $("#navitem1, #navitem2, #navitem3, #navitem4").css({
                    "display": "none"
                });
                              
                $("#navitem1").delay(400).fadeIn(2000);
                $("#navitem2").delay(600).fadeIn(2000);
                $("#navitem3").delay(800).fadeIn(2000);
                $("#navitem4").delay(1000).fadeIn(2200);
                              
                // handles navbar
                if ($(".navbar").css("height") != "350px") {
                    var navbarTop = $(".navbar").offset().top;
                    $(window).scroll(function() {
                        if ($(document).scrollTop() >= navbarTop && $(".navbar").css("position") == "absolute") {
                            $(".navbar").css({
                                "position": "fixed",
                                "top": "0%",
                                "opacity": "1"
                            });
                        }

                        else if ($(document).scrollTop() < navbarTop && $(".navbar").css("position") == "fixed") {
                            $(".navbar").css({
                                "position": "absolute",
                                "top": "250px",
                                "opacity": "0.8"
                            });
                        }
                    });
                }
            });
        </script>
    </body>
</html>