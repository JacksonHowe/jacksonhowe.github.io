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
                    function randToken($length) {
                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $string = '';
                        for ($p = 0; $p < $length; $p++) {
                            $string .= $characters[mt_rand(0, strlen($characters))];
                        }
                        
                        return $string;
                    }
                                        
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                        $email = $_POST["email"];
                        $user = query("SELECT * FROM users WHERE email = ?", $email);
                        
                        if (count($user) == 1) {
                            $user = $user[0];
                            $rand = randToken(100);
                            query("UPDATE users SET resetauthtoken = ? WHERE email = ?", $rand, $email);
                            
                            $mail = mailBySmtp($email, 'Password Reset Request', "<p style='align:center;'><strong>Password Reset Request</strong></p><p style='align:center;'>Hello. We have received a request to reset your password on WebDevTutorials. If you requested this password reset, click on the link below to initiate the reset process: </p><p style='align:center;'><a href='http://webdevtutorials.net/resetpwd/reset?token=" . $rand . "'>http://webdevtutorials.net/resetpwd/reset?token=" . $rand . "</a></p><p style='align:center;'>If you did not request this reset, please ignore this email. Contact support here if you require other assistance.</p><p style='align: center'><em>WebDevTutorials</em></p>");

                            if ($mail == "Sent") {
                                print("An email has been sent to the account you entered. Instructions to complete the reset process are listed there. If you do not receive this email, check your spam or <a href='mailto:support@webdevtutorials.net'>contact support</a>.");
                            } else {
                                print("An error has occured. " . $mail . "Please try again later or <a href='mailto:support@webdevtutorials.net'>contact support</a>.");
                            }
                        }
                        else {
                            print("The email address you entered is not associated with an active WebDevTutorials account. If you think this is incorrect, please <a href='mailto:support@webdevtutorials.net'>contact support</a>.");
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