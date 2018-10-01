<?php
    session_set_cookie_params('172800'); //=48 hours
    session_start();
    include_once("resources/functions.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        require_once("resources/recaptchalib.php");
        $privatekey = "6LeA4ukSAAAAAJV4LbJRxxB6XkfWnZgj_v7212yV";
        $resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);

        if (!$resp->is_valid) {
            header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20The%20letters%20in%20the%20box%20weren't%20typed%20correctly.%20Please%20check%20that%20you%20typed%20the%20correct%20letters%20and%20try%20again.");
            exit();
        }
    
        if (empty($_POST["email"]) || empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["confirmation"])) {
            header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Please%20include%20an%20email,%20username,%20and%20password%20in%20your%20submission.");
        }
        
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmation = $_POST["confirmation"];
        
        if (strlen($password) < 7 || strlen($username) < 5) {
            header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Username%20or%20password%20too%20short.%20Please%20use%20passwords%20which%20are%20at%20least%208%20characters%20long.");
            exit();
        }
        
        if (strlen($email) > 99 || strlen($username) > 99 || strlen($password) > 199) {
            header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Username%20or%20email%20too%20long.%20Try%20again%20with%20shorter%20values.");
            exit();
        }
        
        if (strpos($email, '@') == false || strpos($email, '.') == false) {
            header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Email%20not%20valid.%20Please%20try%20again%20using%20a%20valid%20email.");
            exit();
        }
        
        if ($password != $confirmation) {
            header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Password%20and%20confirmation%20do%20not%20match.%20Try%20again.");
            exit();
        }
        
        $users = query("SELECT * FROM users");
        for ($i = 0; $i < count($users); $i++) {
            if ($users[$i]['username'] == $username || $users[$i]['email'] == $email) {
                header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20A%20user%20with%20that%20email%20or%20username%20already%20exists.%20Please%20try%20again%20with%20a%20different%20username%20or%20password.");
                exit();
            }
        }
        
        $max = 0;
        for ($i = 0; $i < count($users); $i++) {
            if ($users[$i]['id'] > $max) {
                $max = $users[$i]['id'];
            }
        }
        $id = $max + 1;
        
        $password = crypt($password);
        if (query("INSERT INTO `users` (`id`, `email`, `username`, `password`, `current_tutorial`, `tutorials_started`, `tutorials_finished`, `account_created`) VALUES (?,?,?,?,?,?,?,?)", $id, $email, $username, $password, 0, 0, 0, date('r')) === false) {
            header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20An%20unknown%20error%20occured.%20Please%20try%20again%20later%20or%20contact%20the%20system%20admin.");
            exit();
        }
        else {
            $_SESSION["id"] = $id;
                        
            $mail = mailBySmtp($email, 'Welcome to WebDevTutorials', "<p style='align:center'>" . $username . ",</p> <p style='align:center'>Welcome to WebDevTutorials!</p> <p>I hope you're excited to get started learning how to make a website. I suggest you follow the recommended track of tutorials, but if you would like to learn some specific concepts, feel free to select any of the tutorials available. To get started, <a href='http://webdevtutorials.net/'>sign in</a> here.</p> <p>I also have a special tutorial available <a href='http://webdevtutorials.net/start'>here</a> which will get you started creating a real website.</p> <p style='align:center'>Have fun,</p> <p style='align:center'>WebDevTutorials</p>");
            
            header("Location: http://webdevtutorials.net/account");
        }
    }
    
    else {
        header("Location: http://webdevtutorials.net");
    }
?>