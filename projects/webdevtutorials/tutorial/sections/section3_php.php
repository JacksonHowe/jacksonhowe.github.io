<?php
    $status = 'attempted' . $id;
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
            .navbar-nav.nav-justified > li { float: none; }
            
            #editor {
                position: absolute;
                top: 50px;
                right: 0;
                bottom: 0;
                left: 0;
                width: 65%;
            }
        
            #display {
                position: absolute;
                top: 50px;
                right: 0;
                bottom: 0;
                left: 65%;
                width: 35%;
                padding-top: 20px;
                padding-bottom: 20px;
                padding-right: 40px;
                padding-left: 40px;
                background-color: rgb(57, 57, 57);
                overflow: auto;
            }
        
            p, h1, h2, h3, h4, h5, li {
                color: white;
            }
        
            #top {
                color: rgb(72,72,72);
                border-color: rgb(72,72,72);
                margin-bottom: 8px;
                margin-top: 18px;
            }
            
            #bottom {
                color: rgb(72,72,72);
                border-color: rgb(72,72,72);
                margin-top: 8px;
                margin-bottom: 18px;
            }
        
            a {
                color: rgb(128,128,128);
                transition: color 0.5s linear;
                -webkit-transition: color 0.5s linear;
                -o-transition: color 0.5s linear;
                -ms-transition: color 0.5s linear;
                -moz-transition: color 0.5s linear;
            }
        
            a:hover {
                color: white;
                text-decoration: none;
                cursor: pointer;
            }
        
            #responseWindow {
                position: relative;
                width: 100%;
                height: 200px;
                background-color: white;
                margin-top: 30px;
                margin-bottom: 30px;
                overflow: auto;
                padding-left: 6px;
                padding-right: 6px;
                padding-top: 6px;
                padding-bottom: 6px;
            }
        </style>
    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top nav-justified" role="navigation">
            <ul class="nav navbar-nav nav-justified">
                <li><a id='homeTooltip' data-toggle='popover' data-placement='bottom' title='Go back to the tutorial listing' href="account"><span class="glyphicon glyphicon-home"></span></a></li>
                <?php print("<li><a id='introTooltip' data-toggle='popover' data-placement='bottom' title='Go to the intro video' href='lesson?section=1&tutorial=" . $id . "'>Introduction</a></li>"); ?>
                <?php print("<li><a id='glossaryTooltip' data-toggle='popover' data-placement='bottom' title='Go to the glossary' href='lesson?section=2&tutorial=" . $id . "'>Glossary</a></li>"); ?>
                <?php print("<li class='active'><a id='exerciseTooltip' data-toggle='popover' data-placement='bottom' title='You are here' href='lesson?section=3&tutorial=" . $id . "'>Exercise</a></li>"); ?>
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
        
        <!-- Editor -->
        <div id="editor"><?php print($editor_prefill); ?></div>
        <script src="http://webdevtutorials.net/resources/ace/ace.js" type="text/javascript" charset="utf-8"></script>
        <script>
            var editor = ace.edit("editor");
            editor.setTheme("ace/theme/tomorrow_night_eighties");
            editor.getSession().setMode("ace/mode/php");
            editor.resize(true);
            editor.focus();
        </script>
        <?php print("<script>var x = \"" . $editor_prefill . "\"; editor.setValue(x);</sc" . "ript>"); ?>
        
        <!-- Display -->
        <div class="container" id="display">
            <?php print("<p class='lead text-center'>" . $title . "</p>"); ?>
            
            <!-- Challenge -->
            <hr id="top" style="margin-bottom: 22px;">
            <p class="text-center"><strong><a id='tooltipChallenge' data-toggle='popover' data-container='body' data-placement='left' title='See the challenge' class="orange" onclick="toggle('challenge')">Challenge</a></strong></p>
            <div id="challenge" style="display:block">
                <?php print("<p>" . $challenge . "</p>"); ?>
            </div>
            <hr id="bottom" style="margin-top: 22px;">
            
            <!-- Hints -->
            <hr id="top">
            <p class="text-center"><strong><a id='tooltipHint1' data-toggle='popover' data-container='body' data-placement='left' title='Get a hint' class="orange" onclick="toggle('hint1')">Hint 1</a></strong></p>
            <div id="hint1" style="display:none">
                <?php print("<p>" . $hint1 . "</p>"); ?>
            </div>
            <hr id="bottom">
            
            <hr id="top">
            <p class="text-center"><strong><a id='tooltipHint2' data-toggle='popover' data-container='body' data-placement='left' title='Get a hint' class="orange" onclick="toggle('hint2')">Hint 2</a></strong></p>
            <div id="hint2" style="display:none">
                <?php print("<p>" . $hint2 . "</p>"); ?>
            </div>
            <hr id="bottom">
            
            <hr id="top">
            <p class="text-center"><strong><a id='tooltipHint3' data-toggle='popover' data-container='body' data-placement='left' title='Get a hint' class="orange" onclick="toggle('hint3')">Hint 3</a></strong></p>
            <div id="hint3" style="display:none">
                <?php print("<p>" . $hint3 . "</p>"); ?>
            </div>
            <hr id="bottom">
            
            <!-- View and check buttons -->
            <button id="checkButton" class="btn btn-primary btn-block" data-toggle="popover" data-placement="bottom" title="Check your code." onclick="check();"><span class="glyphicon glyphicon-ok"></span> Check</button>

            <!-- Error report (hidden at load) -->
            <div style="display:none" id="errorReportDiv">
                <hr id="top">
                <p class="text-center"><strong><a id='tooltipError' data-toggle='popover' data-container='body' data-placement='left' title='View your errors' class="orange" onclick="toggle('errorReport')">Error Report</a></strong></p>
                <div id="errorReport" style="display:none">
                    <!-- Javascript loaded -->
                </div>
                <hr id="bottom">
            </div>
            
            <!-- Resources -->
            <hr id="top">
            <p class="text-center"><strong><a id='tooltipResources' data-toggle='popover' data-container='body' data-placement='left' title='Access to the glossary and developer libraries' class="orange" onclick="toggle('resources')">Resources</a></strong></p>
            <div id="resources" style="display:none">
                <p class="text-center">
                <?php print("<a href='lesson?section=2&tutorial=" . $id . "' target='_blank' class='btn btn-default'>Glossary</a>"); ?>
                <a href="http://develop.webdevtutorials.net/images" target="_blank" class="btn btn-default">Image Library</a>
                <a href="http://develop.webdevtutorials.net/videos" target="_blank" class="btn btn-default">Video Library</a>
                </p>
            </div>
            <hr id="bottom">
            
            <!-- Problem Solving -->
            <hr id="top">
            <p class="text-center"><strong><a id='tooltipPS' data-toggle='popover' data-container='body' data-placement='left' title='Get help solving problems' class="orange" onclick="toggle('ps')">Problem Solving Techniques</a></strong></p>
            <div id="ps" style="display:none">
                <p>When coding, you often find yourself doing something called 'debugging' — looking for mistakes you might have made. Here are some techniques to help you: </p>
                <ul>
                    <li>Check the result often - don't wait until you have hundreds of lines to see what it looks like.</li>
                    <li>Make sure all your tags have closing tags (except those which don't need it).</li>
                    <li>Temporarily delete or comment-out lines of code until you get the expected code.</li>
                    <li>Make your code readable. Use comments and intent.</li>
                    <li>Most browsers have debugging consoles. Find out how to open yours.</li>
                    <li>Start from scratch. Some problems are best solved by restarting (unfortunatly).</li>
                    <li>Try something else. Maybe there's another solution to your problem.</li>
                    <li>If all else fails, ask for help <a href="help#contact" target="_blank">here</a>.</li>
                </ul>
            </div>
            <hr id="bottom">
            
            <!-- Editor Assistant -->
            <hr id="top">
            <p class="text-center"><strong><a id='tooltipEditorAssistant' data-container='body' data-toggle='popover' data-placement='left' title='Learn about the editor' class="orange" onclick="toggle('assistant')">Editor Assistant</a></strong></p>
            <div id="assistant" style="display:none">
                <p>Welcome to the exercise editor. The page before you is called an integrated development environment (IDE). Get instructions on the right side, and type the code on the left.</p>
                <h4>What are the resources?</h4>
                <p>To help you in the challenge, you have access to a couple of resources. There is a link to the syntax glossary for the current lesson, as well as access to the developer library.</p>
                <h4>What are the little red x buttons next to the line numbers?</h4>
                <p>The x icons indicate errors. Mouse over one for more information.</p>
                <h4>What web browsers do you support?</h4>
                <p>The editor will run on Google Chrome, Mozilla Firefox, and Opera without problem. Apple Safari is supported, however due to some limitations, the title element will not appear on websites you render with the editor. Microsoft Internet Explorer is not supported.</p>
            </div>
            <hr id="bottom">
            
            <!-- Bottom -->
            <br>
            <p class="text-center"><small><a href="about">About</a> | <a onclick="toggle('assistant')">Help</a> | <a href="about#terms">Terms</a> <br> &copy; 2013 - 2014 WebDevTutorials. All rights reserved.</small></p>
        </div>
                                                                   
        <script>
            $(document).ready(function() {
                //buttons
                $('#checkButton').tooltip();
                              
                //navbar
                $('#homeTooltip').tooltip();
                $('#introTooltip').tooltip();
                $('#glossaryTooltip').tooltip();
                $('#exerciseTooltip').tooltip();
                              
                //exercise
                $('#tooltipChallenge').tooltip();
                $('#tooltipHint1').tooltip();
                $('#tooltipHint2').tooltip();
                $('#tooltipHint3').tooltip();
                $('#tooltipResources').tooltip();
                $('#tooltipError').tooltip();
                $('#tooltipPS').tooltip();
                $('#tooltipEditorAssistant').tooltip();
            });
        </script>
        
        <script>        
            // Opens or closes information boxes on the side
            function toggle(id) {
                var p = document.getElementById(id);
                if (p.style.display == 'none') {
                    p.style.display = 'block';
                } else {
                    p.style.display = 'none';
                }
            }
        
            // Checks correctness of program
            function check() {
                var code = editor.getValue();
                var errors = [];
                
                if (code == "") {
                    errors.push("You submitted a blank document. Read the challenge above, then type some code on the left. Click the check button after you have viewed the results and are satisfied with them.");
                }
                
                if (code.search("<!DOCTYPE html>") == -1) { errors.push("The first line of every HTML file should be <code>&lt;!DOCTYPE html&gt;</code>"); }
                if (code.search("<html") == -1) { errors.push("The opening <code>&lt;html&gt;</code> tag is missing. It should follow the DOCTYPE declaration."); }
                if (code.search("</html>") == -1) { errors.push("The closing <code>&lt;html&gt;</code> tag is missing. It should be the very last line in an HTML file."); }
                if (code.search("<head") == -1) { errors.push("The opening <code>&lt;head&gt;</code> tag is missing."); }
                if (code.search("</head>") == -1) { errors.push("The closing <code>&lt;head&gt;</code> tag is missing."); }
                if (code.search("<body") == -1) { errors.push("The opening <code>&lt;body&gt;</code> tag is missing. The body of a webpage should contain everything that belongs on the main page."); }
                if (code.search("</body>") == -1) { errors.push("The closing <code>&lt;body&gt;</code> tag is missing. This is almost always the second to last line in an HTML file."); }
                
                <?php print("var required_strings = " . json_encode($required_strings) . ";"); ?>
                for (var b = 0; b < required_strings.length; b++) {
                    if (required_strings[b].length == 2) {
                        if (code.search(required_strings[b][0]) == -1) { errors.push(required_strings[b][1]); }
                    }
                    else if (required_strings[b].length == 3) {
                        if (code.search(required_strings[b][0]) == -1 && code.search(required_strings[b][1]) == -1) { errors.push(required_strings[b][2]); }
                    }
                    
                }
                
                
                if (errors.length == 0) {
                    document.getElementById('checkButton').setAttribute("class", "btn btn-success btn-block");
                    document.getElementById('checkButton').innerHTML = "Nice Work! Click to continue.";
                    <?php print("document.getElementById('checkButton').setAttribute('onclick', \"window.location = 'http://webdevtutorials.net/account?updateuser=true&finished=" . $id . "';\");"); ?>
                    document.getElementById("errorReportDiv").style.display = 'none';
                    document.getElementById("errorReport").style.display = 'none';
                }

                else if (errors.length > 0) {
                    document.getElementById('checkButton').setAttribute("class", "btn btn-danger btn-block");
                    document.getElementById('checkButton').innerHTML = "<span class='glyphicon glyphicon-remove'></span> Click to Retest";
                    
                    document.getElementById("errorReport").innerHTML = "<p class='text-center'><strong>" + errors.length + " errors detected.<br>Check your code and click above to retest.</strong></p>";
                    
                    for (var i = 0; i < errors.length; i++) {
                        document.getElementById("errorReport").innerHTML += "<p><span class='glyphicon glyphicon-warning-sign' style='color:red;'></span> " + errors[i] + "</p>";
                    }
                                                                   
                    document.getElementById("errorReportDiv").style.display = 'block';
                    document.getElementById("errorReport").style.display = 'block';
                }
            }
        </script>
        
        <script src="resources/style/globaljs.js"></script>
    </body>
</html>