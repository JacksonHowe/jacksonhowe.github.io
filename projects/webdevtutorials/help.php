<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Help</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jackson Howe">
        <meta name="description" content="WebDevTutorials is an innovative, online learning center for web languages like HTML and PHP. It uses a variety of teaching methods to ensure that everyone can get something out of it.">
        <meta name="keywords" content="tutorial web web development code program programming HTML PHP Javascript learn webdevtutorials academy school college learntocode teaching style visual auditory">
            
        <link href="resources/style/stylesheet.css" rel="stylesheet" />
        <!--<link href="resources/style/theme.css" rel="stylesheet" />-->
        <script src="resources/style/jquery.js"></script>

        <style>
            @media screen and ( max-width: 550px ) {
                #responsiveLinks { display: none;}
                #responsiveDropdown { display: inline;}
            }

            @media screen and ( min-width: 550px ) {
                #responsiveLinks { display: inline;}
                #responsiveDropdown { display: none;}
            }

            a:hover {
                text-decoration: none;
                cursor: pointer;
            }
        
            a:active {
                color: rgb(0,0,172);
            }

            body {
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 20px;
                padding-right: 20px;
            }

            .header,
            .marketing,
            .footer {
              padding-left: 15px;
              padding-right: 15px;
            }

            .header {
              border-bottom: 1px solid #e5e5e5;
            }
            .header h3 {
              margin-top: 0;
              margin-bottom: 0;
              line-height: 40px;
              padding-bottom: 19px;
            }

            .footer {
              padding-top: 19px;
              color: #777;
              border-top: 1px solid #e5e5e5;
            }

            @media (min-width: 768px) {
              .container {
                max-width: 730px;
              }
            }
            .container-narrow > hr {
              margin: 30px 0;
            }

            .jumbotron {
              text-align: center;
              border-bottom: 1px solid #e5e5e5;
            }
            .jumbotron .btn {
              font-size: 21px;
              padding: 14px 24px;
            }

            .marketing {
              margin: 40px 0;
            }
            .marketing p + h4 {
              margin-top: 28px;
            }

            @media screen and (min-width: 768px) {
              .header,
              .marketing,
              .footer {
                padding-left: 0;
                padding-right: 0;
              }
              .header {
                margin-bottom: 30px;
              }
              .jumbotron {
                border-bottom: 0;
              }
            }

        </style>
    </head>

    <body>
        <?php
            include_once("resources/functions.php");
            include_once("resources/analytics.php");
            require_once("resources/recaptchalib.php");
            $publickey = "6LeA4ukSAAAAAMiY-MHej_fANTulHrg3tlExoNjh";
        ?>

        <script type="text/javascript">
            var RecaptchaOptions = {
                theme : 'custom',
                custom_theme_widget: 'recaptcha_widget'
            };
        </script>

        <div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <li><a href="/"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
                    <li id="responsiveLinks"><a href="#faq">FAQ</a></li>
                    <li id="responsiveLinks"><a href="#contact">Contact</a></li>

                    <li id="responsiveDropdown" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Help <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                <h3 class="text-muted">Help</h3>
            </div>
            
            <div class="row">

                <!-- Alerts -->
                <div class="container">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                            if ($_GET["alert"] == "success") {
                                print("<div class='row'><div id='alert' class='alert alert-success'>" . $_GET['message'] . "</div></div><br/>");
                                print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 8000)</script>");
                                print("<script>history.replaceState('', '', '/help');</script>");
                            }
                            else if ($_GET["alert"] == "warning") {
                                print("<div class='row'><div id='alert' class='alert alert-danger'>" . $_GET['message'] . "</div></div><br/>");
                                print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 8000)</script>");
                                print("<script>history.replaceState('', '', '/help');</script>");
                            }
                        }
                    ?>
                </div>

                <p id="faq" class="lead">FAQ</p>
                
                <p><a onclick="faq('faq1')">What is WebDevTutorials?</a></p>
                <p id="faq1" style="display:block">WebDevTutorials is an online, interactive learning resource for students who want to learn the basics of web development in an innovative way.</p>
                
                <p><a onclick="faq('faq2')">What languages do you teach?</a></p>
                <p id="faq2" style="display:none">HTML and PHP. You also might learn some CSS along the way!</p>
                
                <p><a onclick="faq('faq3')">Why is the teaching style so innovative?</a></p>
                <p id="faq3" style="display:none">Everybody learns in a different way. Some people are auditory learners, some visual, and some learn best kinesthetically. WebDevTutorials considers every learning style and presents information in a way that everyone can understand.</p>
                
                <p><a onclick="faq('faq4')">What is a typical lesson like?</a></p>
                <p id="faq4" style="display:none">When you start a new lesson, plan to sit down for between 10-20 minutes. A lesson has 3 parts, typically starting with a video and review questions. After the video you will have the opportunity to study from a printable study guide. To put your new skills to the test, a lesson almost always concludes with an interactive programming exercise.</p>
                
                <p><a onclick="faq('faq5')">What are those interactive exercises you are talking about?</a></p>
                <p id="faq5" style="display:none">Interactive programming exercises provide a fun way to make cool web projects. WebDevTutorials has a special code editor with live parsing of your code so you can see your results instantly.</p>
                
                <p><a onclick="faq('faq11')">What will I learn in the first lesson?</a></p>
                <p id="faq11" style="display:none">The first lesson is entitled, Introduction to HTML. In that lesson, you'll learn what web development actually is, and the basics behind HTML such as elements, attributes, etc.</p>
                
                <p><a onclick="faq('faq6')">Is WebDevTutorials free to use?</a></p>
                <p id="faq6" style="display:none">Of course! There aren't even any ads.</p>
                
                <p><a onclick="faq('faq12')">Do you spam?</a></p>
                <p id="faq12" style="display:none">Nope. You'll get an email when you sign up, when you want to change your password, and a couple rare announcements.</p>
                
                <p><a onclick="faq('faq7')">How do I change my email or password?</a></p>
                <p id="faq7" style="display:none">Login, then click <em>account settings.</em></p>
                
                <p><a onclick="faq('faq8')">Do I have to be a professional to use WebDevTutorials?</a></p>
                <p id="faq8" style="display:none">Of course not. WebDevTutorials is designed for people with little to no programming experiance whatsoever.</p>
                
                <p><a onclick="faq('faq9')">Where can I learn more about the history of WebDevTutorials?</a></p>
                <p id="faq9" style="display:none">Visit the <a href="about">about page</a>.</p>
                
                <p><a onclick="faq('faq10')">I have question or suggestion that isn't addressed here.</a></p>
                <p id="faq10" style="display:none">Please fill out the contact form below. I'll try to reply as soon as possible.</p>
            </div>

            <script>
                function faq(number) {
                    var p = document.getElementById(number);
                    if (p.style.display == 'none') {
                        p.style.display = 'block';
                    } else {
                        p.style.display = 'none';
                    }
                }
            </script>
            
            <br/><br/>
            
            <div class="row">
                <p id="contact" class="lead">Contact</p>
                <p><em>Have a question or suggestion? Just fill out this short form and I'll try to reply as soon as possible</em>:</p>
                
                <form class="form-horizontal" method="post" action="contact">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-xs-1 control-label"><span class="glyphicon glyphicon-user"></span></label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-xs-1 control-label"><span class="glyphicon glyphicon-send"></span></label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-xs-1 control-label"><span class="glyphicon glyphicon-pencil"></span></label>
                            <div class="col-xs-8">
                                <textarea class="form-control" type="text" rows="5" name="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>

                        <div id="recaptcha_widget" style="display:none">
                            <div class="form-group" id="captcha2">
                                <label class="col-xs-1 control-label"><span class="glyphicon glyphicon-book"></span></label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="recaptcha_response_field" placeholder="Type the characters below" id="recaptcha_response_field">
                                </div>
                                <div class="col-xs-1">
                                    <div><a class="btn btn-link" href="javascript:Recaptcha.reload()"><span class="glyphicon glyphicon-refresh"></span></a></div>
                                </div>
                            </div>

                            <div class="form-group" id="captcha1">
                                <div id="recaptcha_image" class="col-xs-6 col-xs-offset-1"></div>
                            </div>
                        </div>

                        <script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6LeA4ukSAAAAAMiY-MHej_fANTulHrg3tlExoNjh"></script>
                        <noscript>
                            <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LeA4ukSAAAAAMiY-MHej_fANTulHrg3tlExoNjh" height="300" width="500" frameborder="0"></iframe><br>
                            <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                            <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
                        </noscript>
                        
                        <div class="form-group">
                            <div class="col-xs-2 col-xs-offset-1">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            
            <br/>
            
            <div class="footer">
                <p>&copy; 2013 - 2014 WebDevTutorials &bull; <a href="about">About</a></p>
            </div>
        </div>

        <script src="resources/style/globaljs.js"></script>
    </body>
</html>