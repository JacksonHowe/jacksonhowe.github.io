<?php
    query("UPDATE users SET tutorials_started = tutorials_started + 1 WHERE id=?", $_SESSION['id']);
    $status = 'opened' . $id;
    query("UPDATE analytics SET $status = $status + 1");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebDevTutorials - <?php print($title); ?></title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jackson Howe">
        <?php print("<meta name='description' content=\"" . $meta_description . "\">"); ?>
        <meta name="keywords" content="tutorial web web development code program programming HTML PHP Javascript learn webdevtutorials academy school college learntocode teaching style visual auditory">
            
        <link href="resources/style/stylesheet.css" rel="stylesheet" />
        <!--<link href="resources/style/theme.css" rel="stylesheet" />-->
        <script src="resources/style/jquery.js"></script>

        <style>
            body {
                <?php print("background-image: url('" . $bg . "');"); ?>
                background-attachment: fixed;
                margin-top: 80px;
                padding-bottom: 50px;
            }

            a:hover {
                text-decoration: none;
            }
        
            .navbar-nav.nav-justified > li { float: none; }
            
            @screen-small: 100px;
        </style>
    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top nav-justified" role="navigation">
            <ul class="nav navbar-nav nav-justified">
                <li><a id='homeTooltip' data-toggle='popover' data-placement='bottom' title='Go back to the tutorial listing' href="account"><span class="glyphicon glyphicon-home"></span></a></li>
                <?php print("<li class='active'><a id='introTooltip' data-toggle='popover' data-placement='bottom' title='You are here' href='lesson?section=1&tutorial=" . $id . "'>Introduction</a></li>"); ?>
                <?php print("<li><a id='glossaryTooltip' data-toggle='popover' data-placement='bottom' title='Go to the glossary' href='lesson?section=2&tutorial=" . $id . "'>Glossary</a></li>"); ?>
                <?php print("<li><a id='exerciseTooltip' data-toggle='popover' data-placement='bottom' title='Go to the exercise - this is recommended after the other sections' href='lesson?section=3&tutorial=" . $id . "'>Exercise</a></li>"); ?>
                <li class="dropdown">
                    <a title='More' href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-question-sign"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="account"><span class="glyphicon glyphicon-home"></span> Back to Dashboard</a></li>
                        <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
                        <li><a href="help"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
                        <li><a href="about"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
                        <li><a href="help#contact"><span class="glyphicon glyphicon-inbox"></span> Ask a Question</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Video -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="lead text-center"><?php print($title); ?></p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <?php print("<iframe width='100%' height='80%' src='" . $video_src . "?wmode=transparent&modestbranding=1&rel=0&fs=1&showinfo=0&origin=http://webdevtutorials.net' frameborder='0' allowfullscreen></iframe>"); ?>
                </div>
            </div>
            
            <!-- Question 1 -->
            <br/><br/>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php print("<h3>" . $question1[0] . "</h3>"); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <div class="radio">
                        <label>
                            <input type="radio" name="question1" id="question1-1" value="question1-1">
                            <?php print($question1[1]); ?>
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="question1" id="question1-2" value="question1-2">
                            <?php print($question1[2]); ?>
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="question1" id="question1-3" value="question1-3">
                            <?php print($question1[3]); ?>
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <p class="lead text-center"><span id="question1correct" class="glyphicon glyphicon-ok-circle" style="color: #787878;"></span>&nbsp;<span id="question1incorrect" class="glyphicon glyphicon-remove-circle" style="color: #787878;"></span></p>
                    <p class="text-center">
                        <?php print("<a onclick=\"checkQuestion('question1correct', 'question1incorrect', 'question1-" . $question1[4] ."')\" class='btn btn-default'>Check</a>"); ?>
                    </p>
                </div>
            </div>
            
            <!-- Question 2 -->
            <br/><br/>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php print("<h3>" . $question2[0] . "</h3>"); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <div class="radio">
                        <label>
                            <input type="radio" name="question2" id="question2-1" value="question2-1">
                            <?php print($question2[1]); ?>
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="question2" id="question2-2" value="question2-2">
                            <?php print($question2[2]); ?>
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="question2" id="question2-3" value="question2-3">
                            <?php print($question2[3]); ?>
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <p class="lead text-center"><span id="question2correct" class="glyphicon glyphicon-ok-circle" style="color: #787878;"></span>&nbsp;<span id="question2incorrect" class="glyphicon glyphicon-remove-circle" style="color: #787878;"></span></p>
                    <p class="text-center">
                        <?php print("<a onclick=\"checkQuestion('question2correct', 'question2incorrect', 'question2-" . $question2[4] ."')\" class='btn btn-default'>Check</a>"); ?>
                    </p>
                </div>
            </div>
            
            <!-- Question 3 -->
            <br/><br/>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php print("<h3>" . $question3[0] . "</h3>"); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <div class="radio">
                        <label>
                            <input type="radio" name="question3" id="question3-1" value="question3-1">
                            <?php print($question3[1]); ?>
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="question3" id="question3-2" value="question3-2">
                            <?php print($question3[2]); ?>
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="question3" id="question3-3" value="question3-3">
                            <?php print($question3[3]); ?>
                        </label>
                    </div>
                </div>
                <div class="col-md-2">
                    <p class="lead text-center"><span id="question3correct" class="glyphicon glyphicon-ok-circle" style="color: #787878;"></span>&nbsp;<span id="question3incorrect" class="glyphicon glyphicon-remove-circle" style="color: #787878;"></span></p>
                    <p class="text-center">
                        <?php print("<a onclick=\"checkQuestion('question3correct', 'question3incorrect', 'question3-" . $question3[4] ."')\" class='btn btn-default'>Check</a>"); ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2 col-md-offset-10">
                    <?php print("<p><a id='nextButton' data-toggle='popover' data-placement='top' data-container='body' title='Advance to the glossary' class='btn btn-success' href='lesson?section=2&tutorial=" . $id . "'>Next <span class='glyphicon glyphicon-chevron-right'></span></a></p>"); ?>
                </div>
            </div>
        </div> <!-- /container -->

        <script>
            $(document).ready(function() {
                $('#nextButton').tooltip();
                $('#homeTooltip').tooltip();
                $('#introTooltip').tooltip();
                $('#glossaryTooltip').tooltip();
                $('#exerciseTooltip').tooltip();
            });
        </script>
        
        <script>
            function checkQuestion(correct, incorrect, correctResponse) {
                if (document.getElementById(correctResponse).checked) {
                    document.getElementById(correct).style.color = "green";
                    document.getElementById(incorrect).style.color = "#787878";
                } else {
                    document.getElementById(incorrect).style.color = "red";
                    document.getElementById(correct).style.color = "#787878";
                }
            }
        </script>

        <script src="resources/style/globaljs.js"></script>
    </body>
</html>