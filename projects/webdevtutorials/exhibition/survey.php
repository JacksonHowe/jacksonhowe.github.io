<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["quality"] == "na" || $_POST["learnerstyle"] == "na") {
            header("Location: http://webdevtutorials.jacksonhowe.com/exhibition/survey?alert=warning&message=%3Cstrong%3EUh Oh!%3C/strong%3E%20Please%20comment%20on%20both%20question%201%20and%202.");
            exit();
        }
        
        $current = file_get_contents("assets/survey.txt");
        $current .= "Quality (1-10): " . $_POST["quality"] . "\n";
        $current .= "Learner Style: " . $_POST["learnerstyle"] . "\n";
        $current .= "Age: " . $_POST["age"] . "\n\n";
        file_put_contents("assets/survey.txt", $current);
        
        if ($_POST["learnerstyle"] == "visual") {
            $current = file_get_contents("assets/data/no-visual.txt");
            $current = intval($current) + 1;
            file_put_contents("assets/data/no-visual.txt", $current);
        }
        
        else if ($_POST["learnerstyle"] == "auditory") {
            $current = file_get_contents("assets/data/no-auditory.txt");
            $current = intval($current) + 1;
            file_put_contents("assets/data/no-auditory.txt", $current);
        }
        
        else if ($_POST["learnerstyle"] == "tactile") {
            $current = file_get_contents("assets/data/no-tactile.txt");
            $current = intval($current) + 1;
            file_put_contents("assets/data/no-tactile.txt", $current);
        }
        
        if (intval($_POST["age"]) > 3 && intval($_POST["age"]) < 80) {
            $current = file_get_contents("assets/data/avg-age.txt");
            $current .= "," . $_POST["age"];
            file_put_contents("assets/data/avg-age.txt", $current);
        }
    
        $current = file_get_contents("assets/data/avg-quality.txt");
        $current .= "," . $_POST["quality"];
        file_put_contents("assets/data/avg-quality.txt", $current);
        
        $current = file_get_contents("assets/data/no-total.txt");
        $current = intval($current) + 1;
        file_put_contents("assets/data/no-total.txt", $current);
        
        header("Location: http://webdevtutorials.jacksonhowe.com/exhibition/?alert=success&message=%3Cstrong%3ESuccess!%3C/strong%3E%20Thanks%20for%20the%20feedback.");
    }
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>WebDevTutorials - Feedback</title>
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
                height: 72%;
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
                top: 4%;
                width: 40%;
                left: 30%;
                text-align: center;
            }

            .btn-group, .padded {
                padding-bottom: 50px;
            }

            input {
                text-align: center;
            }

            #formemail {
                padding-bottom: 50px;
            }
        </style>
    </head>

    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if ($_GET["alert"] == "success") {
                    print("<div id='alert' class='alert alert-success'>" . $_GET['message'] . "</div>");
                    print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 4000)</script>");
                    print("<script>history.replaceState('', '', '/exhibition/survey');</script>");
                }
                else if ($_GET["alert"] == "warning") {
                    print("<div id='alert' class='alert alert-danger'>" . $_GET['message'] . "</div>");
                    print("<script>window.setTimeout(function() { $('#alert').fadeOut(); }, 8000)</script>");
                    print("<script>history.replaceState('', '', '/exhibition/survey');</script>");
                }
            }
        ?>

        <div class='container'>
            <div class="row">
                <div class="col-xs-12">

                    <div class="pills">
                        <ul class="nav nav-pills" id="nav">
                            <li><a href="display">Display</a></li>
                            <li><a href="notify">Notify Me</a></li>
                            <li class="active"><a href="survey">Feedback</a></li>
                        </ul>
                    </div>

                    <p class="lead">Rate the quality of WebDevTutorials. 1 means terrible and 10 is professional.</p>
                    <div class="btn-group text-center">
                        <button id="q1b1" onclick="q1('q1b1');" type="button" class="btn btn-default">1</button>
                        <button id="q1b2" onclick="q1('q1b2');" type="button" class="btn btn-default">2</button>
                        <button id="q1b3" onclick="q1('q1b3');" type="button" class="btn btn-default">3</button>
                        <button id="q1b4" onclick="q1('q1b4');" type="button" class="btn btn-default">4</button>
                        <button id="q1b5" onclick="q1('q1b5');" type="button" class="btn btn-default">5</button>
                        <button id="q1b6" onclick="q1('q1b6');" type="button" class="btn btn-default">6</button>
                        <button id="q1b7" onclick="q1('q1b7');" type="button" class="btn btn-default">7</button>
                        <button id="q1b8" onclick="q1('q1b8');" type="button" class="btn btn-default">8</button>
                        <button id="q1b9" onclick="q1('q1b9');" type="button" class="btn btn-default">9</button>
                        <button id="q1b10" onclick="q1('q1b10');" type="button" class="btn btn-default">10</button>
                    </div>

                    <p class="lead">In what way would you prefer to learn about a concept (such as gravity)?</p>
                    <div class="btn-group text-center">
                        <button id="visual" onclick="q2('visual');" type="button" class="btn btn-default">Read an article about gravity</button>
                        <button id="auditory" onclick="q2('auditory');" type="button" class="btn btn-default">Listen to a teacher explain gravity</button>
                        <button id="tactile" onclick="q2('tactile');" type="button" class="btn btn-default">Do an experiment involving gravity</button>
                    </div>

                    <p class="lead">How old are you (this question is anonymous, but you may leave it blank if you prefer)?</p>
                    <div class="col-xs-2 col-xs-offset-5 padded"><input class="form-control" min="0" max="110" step="1" type="number" id="ageinput" oninput="q3();"></div>


                    <form class="form-horizontal" action="/exhibition/survey" method="POST">
                        <input id="quality" type="hidden" name="quality" value="na">
                        <input id="learnerstyle" type="hidden" name="learnerstyle" value="na">
                        <input id="age" type="hidden" name="age" value="na">

                        <div id="formemail" class="form-group">
                            <div class="col-xs-6 col-xs-offset-3">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function q1(number) {
                document.getElementById("q1b1").setAttribute("class","btn btn-default");
                document.getElementById("q1b2").setAttribute("class","btn btn-default");
                document.getElementById("q1b3").setAttribute("class","btn btn-default");
                document.getElementById("q1b4").setAttribute("class","btn btn-default");
                document.getElementById("q1b5").setAttribute("class","btn btn-default");
                document.getElementById("q1b6").setAttribute("class","btn btn-default");
                document.getElementById("q1b7").setAttribute("class","btn btn-default");
                document.getElementById("q1b8").setAttribute("class","btn btn-default");
                document.getElementById("q1b9").setAttribute("class","btn btn-default");
                document.getElementById("q1b10").setAttribute("class","btn btn-default");
                document.getElementById(number).setAttribute("class","btn btn-default active");
                document.getElementById("quality").setAttribute("value",number.substring(3));
            }

            function q2(number) {
                document.getElementById("visual").setAttribute("class","btn btn-default");
                document.getElementById("auditory").setAttribute("class","btn btn-default");
                document.getElementById("tactile").setAttribute("class","btn btn-default");
                document.getElementById(number).setAttribute("class","btn btn-default active");
                document.getElementById("learnerstyle").setAttribute("value",number);
            }

            function q3() {
                var x = document.getElementById("ageinput").value;
                document.getElementById("age").setAttribute("value",x);
            }
        </script>

    </body>
</html>