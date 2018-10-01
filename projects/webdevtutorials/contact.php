<?php
    session_set_cookie_params('172800'); //=48 hours
    session_start();
    include_once("resources/functions.php");
    
    require_once("resources/recaptchalib.php");
    $privatekey = "6LeA4ukSAAAAAJV4LbJRxxB6XkfWnZgj_v7212yV";
    $resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
    
    if (!$resp->is_valid) {
        header("Location: http://webdevtutorials.net/help?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20The%20letters%20in%20the%20box%20weren't%20typed%20correctly.%20Please%20check%20that%20you%20typed%20the%20correct%20letters%20and%20try%20again.");
        exit();
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $users = query("SELECT * FROM users WHERE id = ?", $_SESSION['id']);

        $mail = mailBySmtp('support@webdevtutorials.net', 'Support Request Ticket', "<strong>Support request</strong><br>Name: " . $name . "<br>ID: " . $users[0]['id'] . "<br>Email: " . $users[0]['email'] . "<br>Username: " . $users[0]['username'] . "<br>Requested Email: " . $email . "<br>Message: " . $message . "<br>Timestamp: " . date('r'));
        if ($mail != "Sent") {
            header("Location: http://webdevtutorials.net/help?alert=success&message=%3Cstrong%3EError%3C/strong%3E%20Message%20not%20sent.");
        }
    }
    
    else {
        header("Location: http://webdevtutorials.net/help");
    }
    
    header("Location: http://webdevtutorials.net/help?alert=success&message=%3Cstrong%3ESuccess%3C/strong%3E%20Message%20sent!");
?>