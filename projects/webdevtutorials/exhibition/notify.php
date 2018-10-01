<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once("../resources/functions.php");
        
        $mail = mailBySmtp($_POST["email"], 'WebDevTutorials', "Hello, <br><br>Here is the link to WebDevTutorials, a website designed to teach HTML and PHP. To get started, click <a href='http://webdevtutorials.jacksonhowe.com/'>here</a> and create an account. <br><br>If that link doesn't work, copy and paste the following into your browser: <br>http://webdevtutorials.jacksonhowe.com/ <br><br>Have a good " . date('l') . " ! <br>Jackson Howe");
        if ($mail != "Sent") {
            header("Location: http://webdevtutorials.jacksonhowe.com/exhibition/notify?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Message%20not%20sent. " . $mail);
        } else {
            $current = file_get_contents("assets/notify.txt");
            $current .= $_POST["email"] . "\n";
            file_put_contents("assets/notify.txt", $current);
            
            header("Location: http://webdevtutorials.jacksonhowe.com/exhibition/?alert=success&message=%3Cstrong%3EMessage%20Sent!%3C/strong%3E%20Check%20your%20email%20for%20the%20link.");
        }
    }
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>WebDevTutorials - Notify Me</title>
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
                height: 45%;
                margin: auto;
                top: 0; left: 0; bottom: 0; right: 0;
                text-align: center;
            }

            .pills {
                text-align: center;
                padding-bottom: 50px;
            }
            .pills ul.nav-pills { display: inline-block; }
            .pills li { display: inline; }
            .pills a { float: left; }

            .nav-pills > li > a:hover {
                background-color: #C0C0C0;
            }

            #alert {
                position: fixed;
                margin: auto;
                top: 10%;
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
                    print("<script>history.replaceState('', '', '/exhibition/notify');</script>");
                }
                else if ($_GET["alert"] == "warning") {
                    print("<div id='alert' class='alert alert-danger'>" . $_GET['message'] . "</div>");
                    print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 8000)</script>");
                    print("<script>history.replaceState('', '', '/exhibition/notify');</script>");
                }
            }
        ?>

        <div class='container'>
            <div class="row">
                <div class="col-xs-12">

                    <div class="pills">
                        <ul class="nav nav-pills" id="nav">
                            <li><a href="display">Display</a></li>
                            <li class="active"><a href="notify">Notify Me</a></li>
                            <li><a href="survey">Survey</a></li>
                        </ul>
                    </div>

                    <p class="lead">I want to try! Send me a link to WebDevTutorials: </p>

                    <form class="form-horizontal" action="/exhibition/notify" method="POST">
                        <div id="formemail" class="form-group">
                            <div class="col-xs-6 col-xs-offset-3">
                                <input type="email" oninput="validateEmail()" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
                            </div>
                        </div>

                        <div id="formemail" class="form-group">
                            <div class="col-xs-6 col-xs-offset-3">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Send</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <script>
            function validateEmail() {
                var email = document.getElementById("email").value;
                if (email.indexOf("@") != -1 && email.indexOf(".") != -1) {
                    document.getElementById("formemail").className = "form-group has-success";
                }
            }
        </script>
    </body>
</html>