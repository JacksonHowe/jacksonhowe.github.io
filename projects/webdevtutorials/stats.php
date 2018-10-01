<?php
    session_set_cookie_params('172800'); //=48 hours
    session_start();
    if (isset($_SESSION['id']) == false || $_SESSION['id'] != 1) {
        header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3ERestricted%20Area%3C/strong%3E%20Please%20login%20as%20admin.");
    }

    include_once("resources/functions.php");
    include_once("resources/analytics.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebDevTutorials - Admin</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jackson Howe">

        <link href="resources/style/stylesheet.css" rel="stylesheet" />
        <!--<link href="resources/style/theme.css" rel="stylesheet" />-->
        <script src="resources/style/jquery.js"></script>
        
        <style>
            body {
                margin-top: 100px;
            }
            .navbar-nav.nav-justified > li { float: none; }
        </style>
    </head>

    <body>
        <?php
            $users = query("SELECT * FROM users");
            $analytics = query("SELECT * FROM analytics")[0];
            
            $started = $analytics['opened0'] + $analytics['opened1'] + $analytics['opened2'] + $analytics['opened3'] + $analytics['opened4'] + $analytics['opened5'] + $analytics['opened6'] + $analytics['opened7'] + $analytics['opened8'] + $analytics['opened9'] + $analytics['opened10'] + $analytics['opened11'] + $analytics['opened12'] + $analytics['opened13'] + $analytics['opened14'];
            $glossary = $analytics['glossary0'] + $analytics['glossary1'] + $analytics['glossary2'] + $analytics['glossary3'] + $analytics['glossary4'] + $analytics['glossary5'] + $analytics['glossary6'] + $analytics['glossary7'] + $analytics['glossary8'] + $analytics['glossary9'] + $analytics['glossary10'] + $analytics['glossary11'] + $analytics['glossary12'] + $analytics['glossary13'] + $analytics['glossary14'];
            $attempted = $analytics['attempted0'] + $analytics['attempted1'] + $analytics['attempted2'] + $analytics['attempted3'] + $analytics['attempted4'] + $analytics['attempted5'] + $analytics['attempted6'] + $analytics['attempted7'] + $analytics['attempted8'] + $analytics['attempted9'] + $analytics['attempted10'] + $analytics['attempted11'] + $analytics['attempted12'] + $analytics['attempted13'] + $analytics['attempted14'];
            $finished = $analytics['finished0'] + $analytics['finished1'] + $analytics['finished2'] + $analytics['finished3'] + $analytics['finished4'] + $analytics['finished5'] + $analytics['finished6'] + $analytics['finished7'] + $analytics['finished8'] + $analytics['finished9'] + $analytics['finished10'] + $analytics['finished11'] + $analytics['finished12'] + $analytics['finished13'] + $analytics['finished14'];

        ?>
        
        <nav class="navbar navbar-inverse navbar-fixed-top nav-justified" role="navigation">
            <ul class="nav navbar-nav nav-justified">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="http://google.com/analytics">Google Analytics</a></li>
                <li><a href="http://x10hosting.com/sso/login">X10 Control &amp; PMA</a></li>
            </ul>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Users</div>
                        <div class="panel-body">
                            <p>Number of Users: <?php print(count($users)); ?> </p>
                            <ul>
                                <?php
                                    foreach ($users as $user) {
                                        print ("<li>". $user['username'] . " - " . $user['tutorials_started'] . " / " . $user['tutorials_finished'] / $user['tutorials_started'] * 100 . "%</li>");
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">Activity</div>
                        <div class="panel-body">
                            <ul>
                                <?php
                                    foreach ($users as $user) {
                                        print ("<li>". $user['last_login'] . "</li>");
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Data</div>
                        <div class="panel-body">
                            <p>Number of Users: <?php print(count($users)); ?> </p>
                            <p>Average current tutorial ID:
                                <?php
                                    $sum = 0;
                                    foreach ($users as $user) {
                                        $sum += $user["current_tutorial"];
                                    }
                                    print($sum / count($users));
                                ?>
                            </p>
                            
                            <hr>
                            
                            <p>Count of tutorials opened: <?php print($started); ?> </p>
                            <p>Count of tutorials partially completed: <?php print($glossary); ?> </p>
                            <p>Count of tutorials with attempted exercises: <?php print($attempted); ?> </p>
                            <p>Count of tutorials completed: <?php print($finished); ?> </p>

                            <hr>

                            <p>Percent of tutorials finished of tutorials begun: <?php print($finished / $started * 100 . "%"); ?> </p>
                            <p>Percent of tutorials finished of tutorials partially completed: <?php print($finished / $glossary * 100 . "%"); ?> </p>
                            <p>Percent of exercises finished of exercises attempted: <?php print($finished / $attempted * 100 . "%"); ?> </p>
                            
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">Password Assistant</div>
                        <div class="panel-body">
                            <form method="POST" action="resources/crypt.php" class="form-inline" role="form">
                                <div class="form-group">
                                    <input type="text" name="input" class="form-control" placeholder="New Password">
                                    <button class="btn btn-success" type="submit">Crypt</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="resources/style/globaljs.js"></script>
    </body>
</html>