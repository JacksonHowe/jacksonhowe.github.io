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
        ?>

        <div class="container">
            <div class="col-sm-6 col-sm-offset-3">
                <p class="lead text-center">Reset Password</p><hr>
                <p class="text-center">

                <?php
                    include_once("../resources/functions.php");
                    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                        $token = $_POST["token"];
                        $password = $_POST["password"];
                        $confirmation = $_POST["confirmation"];
                        
                        $user = query("SELECT * FROM users WHERE resetauthtoken = ?", $token);
                        
                        if (count($user) == 1) {
                            $user = $user[0];
                            
                            if ($password == $confirmation) {
                                query("UPDATE users SET password = ? WHERE resetauthtoken = ?", crypt($password), $token);
                                query("UPDATE users SET resetauthtoken = NULL WHERE resetauthtoken = ?", $token);
                                mailBySmtp($user["email"], 'WebDevTutorials Password Reset', "<p>Dear " . $user["username"] . ", </p><p>We would like to let you know that your password on WebDevTutorials has been reset.</p> <p>If this change was intentional, feel free to ignore this email. If this action was unauthorized, please <a href='http://webdevtutorials.net/help#contact'>contact support</a> immediately.</p>");
                                print("Password reset successfully. Please <a href='http://webdevtutorials.net/'>login</a>.");
                            } else {
                                print("Password and confirmation do not match. Try again.");
                            }
                        }
                        else {
                            print("This reset token is invalid. Please re-initiate the reset process.");
                        }
                    }
                    
                    else {
                        print("<script>window.location='http://webdevtutorials.net/resetpwd/';</script>");
                    }
                ?>
                </p>
            </div>
        </div>
    </body>
</html>