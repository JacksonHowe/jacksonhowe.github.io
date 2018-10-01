<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>WebDevTutorials - Exhibition Index</title>
        <link href="/resources/style/stylesheet.css" rel='stylesheet' />
        <script src="/resources/style/jquery.js"></script>
        <style>
            html { 
                background: url('/exhibition/assets/bg.png') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .container {
                position: absolute;
                height: 22%;
                width: 50%;
                margin: auto;
                top: 0; left: 0; bottom: 0; right: 0;
                text-align: center;
            }

            .nav-pills > li.active > a:active {
                background-color: gray;
            }

            #alert {
                position: fixed;
                margin: auto;
                top: 20%;
                width: 40%;
                left: 30%;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if ($_GET["alert"] == "success") {
                    print("<div id='alert' class='alert alert-success'>" . $_GET['message'] . "</div>");
                    print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 4000)</script>");
                    print("<script>history.replaceState('', '', '/exhibition/');</script>");
                }
                else if ($_GET["alert"] == "warning") {
                    print("<div id='alert' class='alert alert-danger'>" . $_GET['message'] . "</div>");
                    print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 8000)</script>");
                    print("<script>history.replaceState('', '', '/exhibition/');</script>");
                }
            }
        ?>

        <div class='container'>
            <div class="row">
                <div class="col-xs-12">

                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="display"><strong><span class="glyphicon glyphicon-unchecked"></span> View the display</strong></a></li>
                        <li class="active"><a href="notify"><strong><span class="glyphicon glyphicon-share"></span> Email me a link to the site</strong></a></li>
                        <li class="active"><a href="survey"><strong><span class="glyphicon glyphicon-check"></span> Submit feedback about WebDevTutorials</strong></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </body>
</html>