<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebDevTutorials - Reset Password</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jackson Howe">
        <meta name="description" content="WebDevTutorials is an innovative, online learning center for web languages like HTML and PHP. It uses a variety of teaching methods to ensure that everyone can get something out of it.">
        <meta name="keywords" content="tutorial web web development code program programming HTML PHP Javascript learn webdevtutorials academy school college learntocode teaching style visual auditory">
            
        <link href="../resources/style/stylesheet.css" rel="stylesheet" />

        <style>
            .container {
                width: 50%;
                height: 50%;
                overflow: auto;
                margin: auto;
                position: absolute;
                top: 0; left: 0; bottom: 0; right: 0;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <?php
            include_once("../resources/functions.php");
            include_once("../resources/analytics.php");
        ?>

        <div class="container">
            <div class="col-sm-6 col-sm-offset-3">
                <p class="lead text-center">Reset Password</p><hr>
                <p class="text-center">Enter your email to reset your password.</p>

                <form class="form-horizontal" method="post" action="sendresetemail">
                    <fieldset>

                        <div class="form-group">
                            <label for="emailInput" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="emailInput" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-success btn-block">Send Reset Email</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>