<?php
    session_set_cookie_params('172800'); //=48 hours
    session_start();
    if (isset($_SESSION['id']) == false) {
        header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Please%20login.");
    }

    include_once("resources/functions.php");
    include_once("resources/analytics.php");
    
    $user = query("SELECT * FROM users WHERE id = ?", $_SESSION['id']);
    $user = $user[0];
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if ($_GET['updateuser'] == 'true') {
            if ($user["current_tutorial"] <= $_GET['finished']) {
                if ($_GET['finished'] < 14) {
                    $new = $_GET['finished'] + 1;
                } else {
                    $new = $_GET['finished'];
                }
                query("UPDATE users SET current_tutorial=? WHERE id=?", $new, $_SESSION['id']);
            }
            
            query("UPDATE users SET tutorials_finished = tutorials_finished + 1 WHERE id=?", $_SESSION['id']);
            $status = 'finished' . $_GET['finished'];
            query("UPDATE analytics SET $status = $status + 1");
            
            print("<script>history.replaceState('', '', '/account');</script>");
        }
    }
    
    $user = query("SELECT * FROM users WHERE id = ?", $_SESSION['id']);
    $user = $user[0];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebDevTutorials - <?php print($user['username']); ?></title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jackson Howe">
        <meta name="description" content="WebDevTutorials is an innovative, online learning center for web languages like HTML and PHP. It uses a variety of teaching methods to ensure that everyone can get something out of it.">
        <meta name="keywords" content="tutorial web web development code program programming HTML PHP Javascript learn webdevtutorials academy school college learntocode teaching style visual auditory">
            
        <link href="resources/style/stylesheet.css" rel="stylesheet" />
        <!--<link href="resources/style/theme.css" rel="stylesheet" />-->
        <script src="resources/style/jquery.js"></script>
        <script src="resources/style/localscroll.js"></script>
        <script src="resources/style/scrollto.js"></script>

        <style>
            body {
                <?php
                    $bg = "//webdevtutorials.net/resources/images/account/" . rand(1, 5) . ".jpg";
                    print("background-image: url('" . $bg . "');");
                ?>
                background-attachment: fixed;
                margin-top: 60px;
                padding-bottom: 50px;
            }
        
            hr {
                color: rgb(112,112,112);
                border-color: rgb(112,112,112);
            }

            a {
                color: #4d4d4d;
                transition: color 0.25s linear;
                -webkit-transition: color 0.25s linear;
                -o-transition: color 0.25s linear;
                -ms-transition: color 0.25s linear;
                -moz-transition: color 0.25s linear;
            }

            a:hover {
                color: #010101;
                text-decoration: none;
                cursor: pointer;
            }
        </style>
    </head>

    <body>
        <!-- Content -->
        <div class="container" id="main">
            
            <div class="col-sm-8 col-sm-offset-2">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        if ($_GET["alert"] == "success") {
                            print("<div class='row'><div id='alert' class='alert alert-success'>" . $_GET['message'] . "</div></div><br/>");
                            print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 8000)</script>");
                            print("<script>history.replaceState('', '', '/account');</script>");
                        }
                        else if ($_GET["alert"] == "warning") {
                            print("<div class='row'><div id='alert' class='alert alert-danger'>" . $_GET['message'] . "</div></div><br/>");
                            print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 8000)</script>");
                            print("<script>history.replaceState('', '', '/account');</script>");
                        }
                    }
                ?>
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-question-sign"></span> Help <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="help#faq">FAQ</a></li>
                        <li><a href="help#contact">Contact</a></li>
                        <li><a href="about">About</a></li>
                    </ul>
                </div>
                <a id='blank' data-toggle='popover' data-container='body' data-placement='bottom' title='Want to work on a project of your own? Open a blank document in the WDT editor...' href="//develop.webdevtutorials.net" class="btn btn-default btn-sm">Blank Editor</a>
                <a id='logout' data-toggle='popover' data-container='body' data-placement='bottom' title='See you next time...' href="logout" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
            </div>
    
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <hr>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-4 col-xs-offset-2">
                    <p class="lead">Welcome back, <strong><?php print($user['username']); ?></strong>!</p>
                    <?php print("<a id='recommendedTrack1' data-toggle='popover' data-container='body' data-placement='bottom' title='Continue where you left off' href='lesson?section=1&tutorial=" . $user['current_tutorial'] . "' class='btn btn-lg btn-success'>Continue Track &rarr;</a>"); ?>
                </div>
                <div class="col-xs-4">
                    <div id="slide">
                        <?php print("<p><a href='lesson?section=1&tutorial=" . $user['current_tutorial'] . "'>Continue Track &rarr;</a></p>"); ?>
                        <p><a href="#tutorial">Select Tutorial</a></p>
                        <p><a href="#settings">Account Settings</a></p>
                        <p><a href="#help">Help &amp; Support</a></p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <hr>
                    <p class="lead"><a name="tutorial"></a><span class="glyphicon glyphicon-pencil"></span> Select Tutorial</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-4 col-sm-offset-2">
                    <div class="well">
                        <h4>Recommended Track</h4>
                        <?php print("<a id='recommendedTrack2' data-toggle='popover' data-container='body' data-placement='bottom' title='Continue where you left off' href='lesson?section=1&tutorial=" . $user['current_tutorial'] . "' class='btn btn-success'>Continue Track &rarr;</a>"); ?>
                    </div>
                    <div class="well">
                        <h4>HTML Track</h4>
                        <p><a id='tt0' data-toggle='popover' data-container='body' data-placement='right' title='Learn the basics of web programming including an introduction to HTML and your first webpage.' href="lesson?section=1&tutorial=0">Lesson 1: Introduction to HTML &rarr;</a></p>
                        <p><a id='tt1' data-toggle='popover' data-container='body' data-placement='right' title='Learn about typography including headers, paragraphs, classes, quotes, color, and stylizing.' href="lesson?section=1&tutorial=1">Lesson 2: Stylizing Text &rarr;</a></p>
                        <p><a id='tt2' data-toggle='popover' data-container='body' data-placement='right' title='Learn how to organize a document using columns and offsets.' href="lesson?section=1&tutorial=2">Lesson 3: Organizing the Page &rarr;</a></p>
                        <p><a id='tt3' data-toggle='popover' data-container='body' data-placement='right' title='Learn to add media to your website.' href="lesson?section=1&tutorial=3">Lesson 4: Images, Videos, &amp; Icons &rarr;</a></p>
                        <p><a id='tt4' data-toggle='popover' data-container='body' data-placement='right' title='Learn all about HTML forms in this lesson.' href="lesson?section=1&tutorial=4">Lesson 5: Forms &rarr;</a></p>
                        <p><a id='tt5' data-toggle='popover' data-container='body' data-placement='right' title='HTML tables. Very useful.' href="lesson?section=1&tutorial=5">Lesson 6: Tables &rarr;</a></p>
                        <p><a id='tt6' data-toggle='popover' data-container='body' data-placement='right' title='Learn about navbars and other navigational structures.' href="lesson?section=1&tutorial=6">Lesson 7: Navigation &rarr;</a></p>
                        <!--<p><a id='tt7' data-toggle='popover' data-container='body' data-placement='right' title='A short lesson on making dropdown menus.' href="lesson?section=1&tutorial=7">Lesson 8: Dropdowns &rarr;</a></p>-->
                        <!--<p><a id='tt8' data-toggle='popover' data-container='body' data-placement='right' title='How to make badges and jumbotrons in bootstrap.' href="lesson?section=1&tutorial=8">Lesson 9: Badges and Jumbotron &rarr;</a></p>-->
                        <!--<p><a id='tt9' data-toggle='popover' data-container='body' data-placement='right' title='Learn about alerts and notifications in HTML.' href="lesson?section=1&tutorial=9">Lesson 10: Alerts &rarr;</a></p>-->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <h4>PHP Track</h4>
                        <p><a id='tt10' data-toggle='popover' data-container='body' data-placement='right' title='Learn to make dynamic webpages in this introduction to a logial language: PHP.' href="lesson?section=1&tutorial=10">Lesson 1: Introduction to PHP &rarr;</a></p>
                        <p><a id='tt11' data-toggle='popover' data-container='body' data-placement='right' title='Perform basic math functions and store variables in PHP.' href="lesson?section=1&tutorial=11">Lesson 2: Variables, Math &rarr;</a></p>
                        <p><a id='tt12' data-toggle='popover' data-container='body' data-placement='right' title='Make logical decisions.' href="lesson?section=1&tutorial=12">Lesson 3: The If Statement &rarr;</a></p>
                        <p><a id='tt13' data-toggle='popover' data-container='body' data-placement='right' title='Repeat actions using the for loop.' href="lesson?section=1&tutorial=13">Lesson 4: The For Loop &rarr;</a></p>
                        <p><a id='tt14' data-toggle='popover' data-container='body' data-placement='right' title='Learn to create your own PHP functions.' href="lesson?section=1&tutorial=14">Lesson 5: Functions &rarr;</a></p>
                    </div>
                    <div class="well">
                        <h4>Specialized Tutorials</h4>
                        <!--<p><a id='tt15' data-toggle='popover' data-container='body' data-placement='right' title='In a new series, discover how to make the transition between HTML and PHP smoother. Take this lesson at any time.' href="lesson?section=1&tutorial=15">Breaking the barrior between HTML and PHP &rarr;</a></p>-->
                        <p><a id='tt16' data-toggle='popover' data-container='body' data-placement='right' title='Ready to take the step away from the WDT editor? Learn the basics behind transitioning to a real site.' href="lesson?section=1&tutorial=16"><span class="label label-default">New</span> Setting up a real website &rarr;</a></p>
                        <!--<p><a id='tt17' data-toggle='popover' data-container='body' data-placement='right' title='Errors can be difficult at best. Learn to solve them here.' href="lesson?section=1&tutorial=17">Troubleshooting errors &rarr;</a></p>-->
                        <!--<p><a id='tt18' data-toggle='popover' data-container='body' data-placement='right' title='Responsive web design: a hot modern topic. Learn to adjust your site based on the screen size and device of the end user.' href="lesson?section=1&tutorial=18">Responsive web development &rarr;</a></p>-->
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <hr>
                    <p class="lead"><a name="settings"></a><span class="glyphicon glyphicon-cog"></span>  Account Settings</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <form class="form-horizontal" method="post" action="changeinfo" autocomplete="off">
                        <fieldset>
                            <div class="form-group" id="formemail">
                                <label class="col-xs-3 control-label">Change Email</label>
                                <div class="col-xs-9">
                                    <?php print("<input type='email' class='form-control' name='email' autocomplete='off' placeholder='" . $user['email'] . "'>"); ?>
                                </div>
                            </div>
                            <div class="form-group" id="formusername">
                                <label class="col-xs-3 control-label">Change Username</label>
                                <div class="col-xs-9">
                                    <?php print("<input type='text' class='form-control' name='username' autocomplete='off' placeholder='" . $user['username'] . "'>"); ?>
                                </div>
                            </div>
                            <div class="form-group" id="formpassword">
                                <label class="col-xs-3 control-label">Change Password</label>
                                <div class="col-xs-9">
                                    <input type="password" class="form-control" name="password" autocomplete="off" placeholder="*******">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4 col-xs-offset-3">
                                    <button type="submit" class="btn btn-default">Update Account Info</button>
                                </div>
                                <div class="col-xs-5">
                                    <a class='btn btn-link pull-right' href="mailto:support@webdevtutorials.net?subject=Request%20to%20close%20account&body=Place%20the%20request%20to%20close%20your%20account%20here.%20Don't%20forget%20to%20include%20your%20username.">Close Account</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <hr>
                    <p class="lead"><a name="help"></a><span class="glyphicon glyphicon-question-sign"></span>  Help &amp; Support</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <p class="lead text-center">Stuck? Ask a programming question...</p>

                    <form class="form-horizontal" method="post" action="contact-question">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-xs-1 col-xs-offset-1 control-label"><span class="glyphicon glyphicon-user"></span></label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-xs-1 col-xs-offset-1 control-label"><span class="glyphicon glyphicon-send"></span></label>
                                <div class="col-xs-9">
                                    <input type="text" class="form-control" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-xs-1 col-xs-offset-1 control-label"><span class="glyphicon glyphicon-pencil"></span></label>
                                <div class="col-xs-9">
                                    <textarea class="form-control" type="text" rows="5" name="message" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-xs-2 col-xs-offset-2">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                    <p class="text-center"><a href="about">About</a> &middot; <a href="about#terms">Terms</a> &middot; <a href="help#faq">FAQ</a> &middot; <a href="help#contact">Contact</a></p>
                    <p class="text-center">&copy; 2013 - 2014 WebDevTutorials. All rights reserved.</p>
                </div>
            </div>
        
        </div> <!-- /container -->
        
        <script>
            $( document ).ready(function() {
                $('#slide').localScroll({duration:800});
                $('#tt0').tooltip();
                $('#tt1').tooltip();
                $('#tt2').tooltip();
                $('#tt3').tooltip();
                $('#tt4').tooltip();
                $('#tt5').tooltip();
                $('#tt6').tooltip();
                $('#tt7').tooltip();
                $('#tt8').tooltip();
                $('#tt9').tooltip();
                $('#tt10').tooltip();
                $('#tt11').tooltip();
                $('#tt12').tooltip();
                $('#tt13').tooltip();
                $('#tt14').tooltip();
                $('#tt15').tooltip();
                $('#tt16').tooltip();
                $('#tt17').tooltip();
                $('#tt18').tooltip();
                                
                $('#recommendedTrack1').tooltip();
                $('#recommendedTrack2').tooltip();
                $('#blank').tooltip();
                $('#logout').tooltip();
            });
        </script>

        <script src="resources/style/globaljs.js"></script>
    </body>
</html>