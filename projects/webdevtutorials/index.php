<?php
    session_set_cookie_params('172800'); //=48 hours
    session_start();
    if (!empty($_SESSION['id']) && $_GET["override"] != "true") {
        header("Location: http://webdevtutorials.net/account");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebDevTutorials - Interactive Online Web Development Tutorials</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jackson Howe">
        <meta name="description" content="WebDevTutorials is an innovative, online learning center for web languages like HTML and PHP. It uses a variety of teaching methods to ensure that everyone can get something out of it.">
        <meta name="keywords" content="tutorial web web development code program programming HTML PHP Javascript learn webdevtutorials academy school college learntocode teaching style visual auditory">
        <meta name="google-site-verification" content="IUgxaF3lwyNQBrmK1tNz2H0m40oLIBWEuCXdYsC2S_Y" />
            
        <link href="resources/style/stylesheet.css" rel="stylesheet" />
        <!--<link href="resources/style/theme.css" rel="stylesheet" />-->
        <link rel="shortcut icon" href="http://webdevtutorials.net/favicon.ico?v=2" />
        <script src="resources/style/jquery.js"></script>
        <script src="resources/style/localscroll.js"></script>
        <script src="resources/style/scrollto.js"></script>

        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>

        <style>
            html, body { height:100%; }
            .carousel, .item, .active { height:100%; position:fixed; }
            .carousel-inner { height:100%; }

            a:hover {
                text-decoration: none;
            }

            @media screen and ( max-width: 350px ) {
                .carousel-caption {
                    margin-bottom: 10%;
                }
            }
        
            @media screen and ( min-width: 350px ) {
                .carousel-caption {
                    margin-bottom: 15%;
                }
            }
        
            #nav {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 10;
                margin-top: 20px;
                margin-bottom: -90px;
            }
        
            #content {
                position: absolute;
                background-color: rgba(255, 255, 255, 0.985);
                top: 0;
                left: 0;
                right: 0;
                z-index: 5;
            }
        
            #content-container {
                padding-top: 50px;
                padding-bottom: 50px;
                padding-left: 80px;
                padding-right: 80px;
            }
            
            #img-center {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            #username {
                text-transform: capitalize;
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

        <!-- Navigation -->
        <div id="nav" class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="glyphicon glyphicon-question-sign"></span> Help <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="help#faq">FAQ</a></li>
                        <li><a href="help#contact">Contact</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="resetpwd/">Forgot Username/Password</a></li>
                    </ul>
                    <a href="#signup" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Sign Up</a>
                    <a href="#login" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Log In</a>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                            if ($_GET["alert"] == "success") {
                                print("<div class='row'><div id='alert' class='alert alert-success'>" . $_GET['message'] . "</div></div><br/>");
                                print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 8000)</script>");
                                print("<script>history.replaceState('', '', '/');</script>");
                            }
                            else if ($_GET["alert"] == "warning") {
                                print("<div class='row'><div id='alert' class='alert alert-danger'>" . $_GET['message'] . "</div></div><br/>");
                                print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 8000)</script>");
                                print("<script>history.replaceState('', '', '/');</script>");
                            }
                        }
                    ?>
                </div>
            </div>
        </div>


        <!-- Carousel -->
        <a name="top"></a>
        <div id="carousel" class="carousel slide" data-interval="9000" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" style="height:100%;" src="resources/images/index/carousel/1.jpg" alt="What is WebDevTutorials?">
                    <div class="carousel-caption">
                        <div id="slide">
                            <h1>What is WebDevTutorials?</h1>
                            <p class="lead">WebDevTutorials is an online, interactive learning resource for students who want to learn the basics of web development in an innovative way.</p>
                            <p><a href="#signup" data-toggle="modal" class="btn btn-primary">Sign Up</a> <a href="#whatis" class="btn btn-primary">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" style="height:100%;" src="resources/images/index/carousel/2.jpg" alt="Why Learn to Code?">
                    <div class="carousel-caption">
                        <div id="slide2">
                            <h1>Why Learn to Code?</h1>
                            <p class="lead">Every website, whether its Google, Facebook, or a small developing website, is made up of files written in HTML. We are in the midst of a digital evolution — there are almost a billion websites out there and anyone who can make one has an advantage over those who can't. Plus, its fun!</p>
                            <p><a href="#signup" data-toggle="modal" class="btn btn-primary">Sign Up</a> <a href="#whycode" class="btn btn-primary">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" style="height:100%;" src="resources/images/index/carousel/3.jpg" alt="Languages">
                    <div class="carousel-caption">
                        <div id="slide3">
                            <h1 style="color:black;">Languages</h1>
                            <p class="lead" style="color:black;">Every page on every website in the world is made in HTML. HTML is a markup language essential to web development. This resource is intended to teach HTML and PHP- another popular web scripting language.</p>
                            <p><a href="#signup" data-toggle="modal" class="btn btn-primary">Sign Up</a> <a href="#languages" class="btn btn-primary">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" style="height:100%;" src="resources/images/index/carousel/4.jpg" alt="A Learning Environment for All">
                    <div class="carousel-caption">
                        <div id="slide4">
                            <h1>A Learning Environment for All</h1>
                            <p class="lead">WebDevTutorials uses a wide variety of teaching methods to make sure everyone learns in the way they learn best. After all, you shouldn't have to adapt to your teacher. It should adapt to you so you get the most out of the time you put in.</p>
                            <p><a href="#signup" data-toggle="modal" class="btn btn-primary">Sign Up</a> <a href="#forall" class="btn btn-primary">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" style="height:100%;" src="resources/images/index/carousel/5.jpg" alt="Interactive Projects">
                    <div class="carousel-caption">
                        <div id="slide5">
                            <h1>Interactive Projects</h1>
                            <p class="lead">After you finish learning something, put your new skills to test with a fun project. You'll learn to make cool websites in no time!</p>
                            <p><a href="#signup" data-toggle="modal" class="btn btn-primary">Sign Up</a> <a href="#projects" class="btn btn-primary">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="img-responsive" style="height:100%;" src="resources/images/index/carousel/7.jpg" alt="Learn More">
                    <div class="carousel-caption">
                        <div id="slide6">
                            <h1>Learn More</h1>
                            <p class="lead">Scroll down to learn more about WebDevTutorials. Have a question? Check out the <a href="help#faq">FAQ</a> or <a href="help#contact">submit a question</a> here. Want to <a target='_blank' href='//develop.webdevtutorials.net'>open a blank document</a> in the editor? <a href="about">About</a> WebDevTutorials.</p>
                            <p><a href="#signup" data-toggle="modal" class="btn btn-primary">Sign Up Now!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        
            <a class="left carousel-control" href="#carousel" data-slide="prev"><span class="icon-prev"></span></a>
            <a class="right carousel-control" href="#carousel" data-slide="next"><span class="icon-next"></span></a>
        </div>
        
        <!-- More info -->
        <div class="row" id="content" style="margin-top: 800px;">
            <p class="text-center" style="color: gray; padding-top: 15px; padding-bottom: 15px;">More &darr;</p>
            <div id="content-container" class="row">
                <div class="col-sm-7">
                    <h1><a name="whatis"></a>What is WebDevTutorials?</h1>
                    <p class="lead">WebDevTutorials is a website for learning. It is an online tutorial/resource center for people who want to learn web development. The languages and concepts taught on WebDevTutorials are designed for beginners or novices to web development and will teach the steps required to build functional websites. WebDevTutorials uses different teaching methods engineered to cater every learning style.</p>
                </div>
                <div class="col-sm-5">
                    <img class="img-responsive" alt="Learning styles diagram" src="resources/images/index/learning-styles-diagram.png" />
                </div>
            </div>
            
            <div id="content-container" class="row" style="background-color: rgba(192, 192, 192, 0.2);">
                <div class="col-md-8 col-md-offset-2">
                    <a name="whycode"></a>
                    <h1 style="text-align:center">Why learn web development?</h1>
                    <p class="lead" style="text-align:center">Why? Because the world is in the middle of a digital revolution. The graph below shows just how much the internet is being used. And by 2020, more than half of the world will be connected.</p>
                    <img id="img-center" class="img-responsive" alt="Internet statistics" src="resources/images/index/internet-stats.png" />
                </div>
            </div>
            
            <div id="content-container" class="row">
                <div class="row">
                    <div class="col-sm-3 col-md-offset-2">
                        <a name="languages"></a>
                        <h1>Languages.</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-2">
                        <div class="row well">
                            <div class="col-xs-6"><img class="img-responsive" alt="HTML5" src="resources/images/index/html5-logo.png" /></div>
                            <div class="col-xs-6"><h1>HTML</h1></div>
                        </div>
                        <p>HTML 5 is the markup language that all web browsers read. Every page on the web is made of some HTML code.</p>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="row well">
                            <div class="col-xs-6"><img class="img-responsive" alt="PHP" src="resources/images/index/php-logo.png" /></div>
                            <div class="col-xs-6"><h1>PHP</h1></div>
                        </div>
                        <p>PHP is a fast, flexible scripting language that can be used to power everything from your blog to the largest social networking site. <a href="http://php.net">Learn More &rsaquo;</a></p>
                    </div>
                </div>
            </div>
            
            <div id="content-container" class="row" style="background-color: rgba(192, 192, 192, 0.2);">
                <div class="col-md-8 col-md-offset-2">
                    <a name="forall"></a>
                    <h1 style="text-align:center">A learning environment for all.</h1>
                    <p class="lead" style="text-align:center">WebDevTutorials recognizes the 3 main learning styles: <strong>visual</strong>, <strong>auditory</strong>, and <strong>kinaesthetic</strong>. Therefore, we use many different methods to teach you how to program.</p>
                    <div class="col-md-4 col-md-offset-2">
                        <h3>Video tutorials</h3><p>At the very beginning of most lessons, you will have the opportunity to watch video introductions to new concepts. Listen and watch the animated notes so that both auditory and visual learners benefit.</p>
                        <h3>Review questions</h3><p>After the video, a couple of short review questions will make sure you are taking in the knowledge. These questions offer instant feedback and are completely optional.</p>
                        <h3>Concept summaries</h3><p>Concept summaries explain an aspect of programming in a brief, understandable paragraph. Concept summaries usually coincide with  glossaries.</p>
                    </div>
                    <div class="col-md-4">
                        <h3>Printable glossaries</h3><p>For people who like organized, color-coded notes, printable glossaries offer a reference to important syntax discussed in the videos.</p>
                        <h3>Interactive programming exercises</h3><p>Finally, you will have the opportunity to put your new skills to the test with a project. Projects are real-life applications of web development that kinesthetic learners will appreciate.</p>
                    </div>
                </div>
            </div>
            
            <div id="content-container" class="row">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <a name="projects"></a>
                        <h1 style="text-align:center">Interactive Projects.</h1>
                        <p class="lead" style="text-align:center">The programming exercises at the end of a section are a great way to practice web development in a real-life context. WebDevTutorials has a great, hands-on development environment for you to use.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="resources/images/index/projects/1.png" alt="Integrated Development Environment" class="img-responsive" style="margin:0 auto;" />
                        <h3 class="text-center">Integrated Development Environment</h3>
                        <p class="text-center">The integrated development environment includes a code editor right in your browser. Just type and the code is automatically numbered and the syntax colored.</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="resources/images/index/projects/2.png" alt="Instant Execution" class="img-responsive" style="margin:0 auto;" />
                        <h3 class="text-center">Instant Execution</h3>
                        <p class="text-center">Get instant results as you type. Next to the code editor, a separate screen will show you what you are building. And a full screen view is just a click away.</p>
                        <p class='text-center'><a href="//develop.webdevtutorials.net" class="btn btn-default btn-sm">Try the Editor</a></p>
                    </div>
                    <div class="col-sm-4">
                        <img src="resources/images/index/projects/3.png" alt="Feedback" class="img-responsive" style="margin:0 auto;" />
                        <h3 class="text-center">Feedback</h3>
                        <p class="text-center">Make a mistake? You can get instant feedback and learn how to improve. You can even request a detailled report that tells you the exact line number where things went wrong.</p>
                    </div>
                </div>
            </div>
            
            <div id="content-container" class="row" style="background-color: rgba(192, 192, 192, 0.2);">
                <div class="col-md-12">
                    <div id="slide0">
                        <p class="text-center"><small>WebDevTutorials &middot; <a href="#top">Top</a> &middot; <a href="#signup" data-toggle="modal">Sign Up</a> &middot; <a href="#login" data-toggle="modal">Log In</a> &middot; <a href="about">About</a> &middot; <a href="help">Help</a> &middot; <a href="about#terms">Terms</a> &middot; &copy; 2013 - 2014 WebDevTutorials. All rights reserved.</small></p>
                    </div>
                </div>
            </div>
        </div><!-- /div for more info -->
        
        <!-- Login -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="login">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-xs-1 col-xs-offset-1 control-label"><span class="glyphicon glyphicon-user"></span></label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-xs-1 col-xs-offset-1 control-label"><span class="glyphicon glyphicon-ok-circle"></span></label>
                                <div class="col-xs-8">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-xs-2 col-xs-offset-2">
                                    <button type="submit" class="btn btn-default">Login</button>
                                </div>
                                <div class="col-xs-6">
                                    <a class="btn btn-link pull-right" href="resetpwd/">Forgot Password</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
              </div>
            </div>
        </div>
        
        <!-- Signup -->
        <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Sign Up for WebDevTutorials</h4>
                </div>
                <div class="modal-body">
                    <script>
                        function validatePassword() {
                            if (document.getElementById("password").value == document.getElementById("confirm").value && document.getElementById("password").value != "" && document.getElementById("password").value.length > 6) {
                                document.getElementById("formpassword").className = "form-group has-success";
                                document.getElementById("formconfirm").className = "form-group has-success";
                            } else {
                                document.getElementById("formpassword").className = "form-group has-error";
                                document.getElementById("formconfirm").className = "form-group has-error";
                            }
                        }
                    
                        function validateEmail() {
                            var email = document.getElementById("email").value;
                            if (email.indexOf("@") != -1 && email.indexOf(".") != -1) {
                                document.getElementById("formemail").className = "form-group has-success";
                            } else {
                                document.getElementById("formemail").className = "form-group has-error";
                            }
                        }

                        function validateUsername() {
                            if (document.getElementById("username").value.length > 5) {
                                document.getElementById("formusername").className = "form-group has-success";
                            } else {
                                document.getElementById("formusername").className = "form-group has-error";
                            }
                        }
                    
                        function changeMode() {
                            if (document.getElementById("existing").checked) {
                                document.getElementById("parent").setAttribute("type", "hidden");
                            } else {
                                document.getElementById("parent").setAttribute("type", "text");
                            }
                        }
                    </script>

                    <script type="text/javascript">
                        var RecaptchaOptions = {
                            theme : 'custom',
                            custom_theme_widget: 'recaptcha_widget'
                        };
                    </script>


                  <form class="form-horizontal" method="post" action="signup">
                    <fieldset>
                      <div class="form-group" id="formemail">
                        <label class="col-xs-1 col-xs-offset-1 control-label"><span class="glyphicon glyphicon-send"></span></label>
                        <div class="col-xs-8">
                          <input type="email" class="form-control" name="email" placeholder="Email" required id="email" oninput="validateEmail()">
                        </div>
                      </div>
                      
                      <div class="form-group" id="formusername">
                        <label class="col-xs-1 col-xs-offset-1 control-label"><span class="glyphicon glyphicon-user"></span></label>
                        <div class="col-xs-8">
                          <input type="text" class="form-control" name="username" placeholder="Username" oninput="validateUsername()" required id="username">
                        </div>
                      </div>
                      
                      <div class="form-group" id="formpassword">
                        <label class="col-xs-1 col-xs-offset-1 control-label"><span class="glyphicon glyphicon-ok-circle"></span></label>
                        <div class="col-xs-8">
                            <input type="password" class="form-control" name="password" placeholder="Password" oninput="validatePassword()" required id="password">
                        </div>
                      </div>
                      
                      <div class="form-group" id="formconfirm">
                        <label class="col-xs-1 col-xs-offset-1 control-label"><span class="glyphicon glyphicon-ok-circle"></span></label>
                        <div class="col-xs-8">
                          <input type="password" class="form-control" name="confirmation" placeholder="Confirm Password" oninput="validatePassword()" required id="confirm">
                        </div>
                      </div>

                        <div id="recaptcha_widget" style="display:none">
                            <div class="form-group" id="captcha2">
                                <label class="col-xs-1 col-xs-offset-1 control-label"><span class="glyphicon glyphicon-book"></span></label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="recaptcha_response_field" placeholder="Type the characters below" id="recaptcha_response_field">
                                </div>
                                <div class="col-xs-1">
                                    <div><a class="btn btn-link" href="javascript:Recaptcha.reload()"><span class="glyphicon glyphicon-refresh"></span></a></div>
                                </div>
                            </div>

                            <div class="form-group" id="captcha1">
                                <div id="recaptcha_image" class="col-xs-7 col-xs-offset-2"></div>
                            </div>
                        </div>

                        <script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6LeA4ukSAAAAAMiY-MHej_fANTulHrg3tlExoNjh"></script>
                        <noscript>
                            <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LeA4ukSAAAAAMiY-MHej_fANTulHrg3tlExoNjh" height="300" width="500" frameborder="0"></iframe><br>
                            <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                            <input type="hidden" name="recaptcha_response_field" value="manual_challenge">
                        </noscript>

                      <div class="form-group">
                        <div class="col-xs-2 col-xs-offset-2">
                          <button type="submit" class="btn btn-default">Sign Up</button>
                        </div>
                      </div>
                      
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
        </div>

        <script>
            $( document ).ready(function() {
                var attribute = "margin-top: " + (window.innerHeight - 50) + "px;";
                $('#content').attr("style", attribute);
                $('#slide0').localScroll({duration:800});
                $('#slide').localScroll({duration:800});
                $('#slide2').localScroll({duration:800});
                $('#slide3').localScroll({duration:800});
                $('#slide4').localScroll({duration:800});
                $('#slide5').localScroll({duration:800});
                $('#slide6').localScroll({duration:800});
            });
        </script>

        <script type="text/javascript">stLight.options({publisher: "66d2f128-4f3c-4b52-b902-7380e9d68c82", doNotHash: true, doNotCopy: false, hashAddressBar: false});</script>
        <script>
        var options={ "service": "facebook", "timer": { "countdown": 30, "interval": 10, "enable": false}, "frictionlessShare": true, "style": "3", "publisher": "66d2f128-4f3c-4b52-b902-7380e9d68c82"};
        var st_service_widget = new sharethis.widgets.serviceWidget(options);
        </script>

        <script src="resources/style/globaljs.js"></script>
    </body>
</html>