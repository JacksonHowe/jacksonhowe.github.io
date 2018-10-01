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
                width: 65%;
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
        ?>

        <div class="container">
            <div class="col-sm-6 col-sm-offset-3">
                <p class="lead text-center">Reset Password</p><hr>
                
                <form class="form-horizontal" method="post" action="auth">
                    <fieldset>
                        <?php print("<input type='hidden' name='token' value='" . $_GET['token'] . "'>"); ?>

                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password</label>

                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="confirmation" class="col-sm-3 control-label">Verify</label>

                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="confirmation" name="confirmation" placeholder="Password Confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-success btn-block">Reset Password</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>