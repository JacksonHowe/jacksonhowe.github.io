<?php
    require_once("database.php");
    require_once("algorithm.php");
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
                echo("<div class='well well-sm infowell green'>" . calc($database) . "</div>\n");
            ?>
        </div>

    </body>
</html>