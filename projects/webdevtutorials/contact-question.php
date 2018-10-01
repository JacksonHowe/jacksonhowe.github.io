<?php
    session_set_cookie_params('172800'); //=48 hours
    session_start();
    include_once("resources/functions.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $users = query("SELECT * FROM users WHERE id = ?", $_SESSION['id']);

        $mail = mailBySmtp('support@webdevtutorials.net', 'Programming QA', "<strong>Programming QA Sumbitted via Accounts</strong><br><br>Name (posted): " . $name . "<br>Username (verified): " . $users[0]['username'] . "<br><br>ID (verified): " . $users[0]['id'] . "<br>Timestamp (verified): " . date('r') . "<br><br>Email (verified): " . $users[0]['email'] . "<br>Email (posted): " . $email . "<br><br>Message (posted): " . $message);
        if ($mail != "Sent") {
            header("Location: http://webdevtutorials.net/account?alert=success&message=%3Cstrong%3EError%3C/strong%3E%20Message%20not%20sent.");
        }
    }
    
    else {
        header("Location: http://webdevtutorials.net/account");
    }
    
    header("Location: http://webdevtutorials.net/account?alert=success&message=%3Cstrong%3ESuccess%3C/strong%3E%20Message%20sent!%20Request%20should%20be%20processed%20within%2012%20hours.");
?>