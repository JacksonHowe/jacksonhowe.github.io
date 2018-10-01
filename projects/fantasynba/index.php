<?php
    require_once("database.php");
    require_once("algorithm.php");
    $teamsize = 1;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Fantasy Basketball</title>

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
        
        <style>
            body {
                background-image: url('bg.jpg');
                background-attachment: fixed;
            }

            .centerwell {
                position: absolute;
                height: 90%;
                width: 60%;
                margin: auto;
                top: 0; left: 0; bottom: 0; right: 0;
            }

            .infowell {
                text-align: center;
            }

            .red {
                color: red;
            }

            .green {
                color: green;
            }

            .footer {
                color: black;
                font-size: 9pt;
                padding-bottom: 30px;
            }

            .nopadding {
                margin-bottom: 10px;
            }
        </style>
    </head>
    
    <body>
        <div class="centerwell">
            <a href="index.php"><img alt="Basketball" src="logo.png" class="img-responsive"></a>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $tmp_players = [$_POST["p1"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"], $_POST["p6"], $_POST["p7"], $_POST["p8"], $_POST["p9"], $_POST["p10"], $_POST["p11"], $_POST["p12"], $_POST["p13"], $_POST["p14"], $_POST["p15"], $_POST["p16"], $_POST["p17"], $_POST["p18"], $_POST["p19"], $_POST["p20"]];
                    $players = [];
                    for ($c = 0; $c < $teamsize; $c++) {
                        array_push($players, $tmp_players[$c]);
                    }

                    if ($_POST["team"] == "") {
                        echo("<div class='well well-sm infowell red'>Error: Please give your team a name.</div>\n");
                    }
                    
                    else if (in_array("", $players)) {
                        echo("<div class='well well-sm infowell red'>Error: Please select " . $teamsize . " players.</div>\n");
                    }
                    
                    else if (count(array_unique($players)) != $teamsize) {
                        echo("<div class='well well-sm infowell red'>Error: Please select " . $teamsize . " <strong>unique</strong> players.</div>\n");
                    }
                    
                    else {
                        echo("<div class='well well-sm infowell green'>Team <em>" . $_POST["team"] . "</em> has a relative score of <strong>" . calc($players, $database) . "</strong>.</div>\n");
                    }
                }
            ?>

            <div class="well well-lg nopadding">
                <form class="form-horizontal" action="" method="POST">

                    <div class="form-group">
                        <div class="col-xs-12"><input type="text" name="team" class="form-control" placeholder="Team Name"><br></div>
                    </div>

                        <?php
                            for ($b = 1; $b < $teamsize + 1; $b++) {
                                echo("<div class='form-group'>\n<div class='col-xs-12'>\n<select class='form-control' name='p" . $b . "'>\n");
                                echo("<option disabled selected value=''>Select Player " . $b . "</option>\n");
                                for ($i = 1; $i < 264; $i++) {
                                    echo("<option value='" . $i . "'>" . $database[$i][1] . "</option>\n");
                                }
                                echo("</select>\n</div>\n</div>\n\n");
                            }
                            
                        ?>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <br><button type="submit" class="btn btn-success btn-block">Calculate Score</button>
                        </div>
                    </div>

                </form>
            </div>

            <p class="footer">Considering PTS, FG%, 3FG%, FT%, OREB, DREB, AST, STL, BLK, and TOV. Not all variables weighted equally. Designed by Jackson Howe.</p>
        </div>

    </body>
</html>