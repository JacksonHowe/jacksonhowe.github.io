<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>WebDevTutorials - Utility</title>
        <link href="http://webdevtutorials.net/resources/style/stylesheet.css" rel='stylesheet' />
        <script src="http://webdevtutorials.net/resources/style/jquery.js"></script>
        <style>
            html { 
                background: url('http://webdevtutorials.net/exhibition/assets/bg.png') no-repeat center center fixed;
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

        </style>
    </head>

    <body>
        <div class='container'>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">

                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <input class="form-control" id="input" placeholder="Array of Values" oninput="calc()">
                        </div>
                    </form>
                    <br>
                    <p id="p">Begin typing to calculate average...</p>

                </div>
            </div>
        </div>

        <script>
            function calc() {
                var input = document.getElementById("input").value.split(',');
                var add = 0;
                for (var i = 0; i < input.length; i++) {
                    add += parseInt(input[i]);
                }
                var final = add / input.length;
                document.getElementById("p").innerHTML = final;
            }
        </script>

    </body>
</html>