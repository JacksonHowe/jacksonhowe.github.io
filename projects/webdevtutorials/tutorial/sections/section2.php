<?php
    $status = 'glossary' . $id;
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
        
            .navbar-nav.nav-justified > li { float: none; }

            a:hover {
                text-decoration: none;
            }

            dt {
                font-weight: normal;
            }
        
            .dl-horizontal dt {
                width: 300px;
            }
        
            .dl-horizontal dd {
                margin-left: 320px;
            }
        </style>
    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top nav-justified" role="navigation">
            <ul class="nav navbar-nav nav-justified">
                <li><a id='homeTooltip' data-toggle='popover' data-placement='bottom' title='Go back to the tutorial listing' href="account"><span class="glyphicon glyphicon-home"></span></a></li>
                <?php print("<li><a id='introTooltip' data-toggle='popover' data-placement='bottom' title='Go to the intro video' href='lesson?section=1&tutorial=" . $id . "'>Introduction</a></li>"); ?>
                <?php print("<li class='active'><a id='glossaryTooltip' data-toggle='popover' data-placement='bottom' title='You are here' href='lesson?section=2&tutorial=" . $id . "'>Glossary</a></li>"); ?>
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
        
        <!-- Header -->
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <p class="lead text-center"><?php print($title); ?></p>
                </div>
            </div>
            
            <!-- Summary -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <?php print($summary); ?>
                </div>
            </div>
            
            <!-- Code example -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <pre class="pre-scrollable"><?php print($code_example); ?></pre>
                </div>
            </div>
            
            <!-- Glossary -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <dl class="dl-horizontal">
                        <?php
                            for ($i = 0; $i < count($glossary); $i++) {
                                print("<dt>" . $glossary[$i][0] . "</dt>");
                                print("<dd>" . $glossary[$i][1] . "</dd>");
                            }
                        ?>
                    </dl>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2 col-md-offset-8">
                    <div class="btn-group">
                        <button id="printButton" data-toggle="popover" data-placement="top" data-container="body" title="Print the glossary" onclick="window.print();" type="button" class="btn btn-info"><span class="glyphicon glyphicon-print"></span></button>
                        <?php print("<button id='nextButton' data-toggle='popover' data-placement='top' data-container='body' title='Advance to the exercise' onclick=\"location.href='lesson?section=3&tutorial=" . $id . "'\" type='button' class='btn btn-success'><span class='glyphicon glyphicon-chevron-right'></span></button>"); ?>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->

        <script>
            $(document).ready(function() {
                $('#printButton').tooltip();
                $('#nextButton').tooltip();
                $('#homeTooltip').tooltip();
                $('#introTooltip').tooltip();
                $('#glossaryTooltip').tooltip();
                $('#exerciseTooltip').tooltip();
            });
        </script>

        <script src="resources/style/globaljs.js"></script>
    </body>
</html>