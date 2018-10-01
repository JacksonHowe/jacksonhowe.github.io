<?php
    session_set_cookie_params('172800'); //=48 hours
    session_start();
    require_once("resources/functions.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Any values to change
        if (empty($_POST["username"]) && empty($_POST["email"]) && empty($_POST["password"])) {
            header("Location: http://webdevtutorials.net/account?alert=warning&message=%3Cstrong%3EUnable%20to%20update%20account%20info.%3C/strong%3E%20Nothing%20to%20change.");
            exit();
        }
        
        // assign some local variables
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // make sure values arent too long
        if (strlen($email) > 99 || strlen($username) > 99 || strlen($password) > 199) {
            header("Location: http://webdevtutorials.net/account?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Username%20or%20email%20too%20long.%20Try%20again%20with%20shorter%20values.");
            exit();
        }
        
        // make sure users dont already exist
        $users = query("SELECT * FROM users");
        for ($i = 0; $i < count($users); $i++) {
            if ($users[$i]['username'] == $username || $users[$i]['email'] == $email) {
                header("Location: http://webdevtutorials.net/account?alert=warning&message=%3Cstrong%3EUnable%20to%20update%20account%20info.%3C/strong%3E%20Username%20or%20email%20already%20taken.");
                exit();
            }
        }
        
        // username
        if (strlen($username) != 0) {
            if (strlen($username) >= 5) {
                if (query("UPDATE users SET username = ? WHERE id = ?", $username, $_SESSION['id']) === false) {
                    header("Location: http://webdevtutorials.net/account?alert=warning&message=%3Cstrong%3EUnknown%20error%3C/strong%3E%20Unknown%20database%20access%20error%2012300.");
                    exit();
                }
            } else {
                header("Location: http://webdevtutorials.net/account?alert=warning&message=%3Cstrong%3EUnable%20to%20update%20account%20info.%3C/strong%3E%20Username%20too%20short.%20Please%20retry.");
                exit();
            }
        }
        
        // password
        if (strlen($password) != 0) {
            if (strlen($password) >= 7) {
                if (query("UPDATE users SET password = ? WHERE id = ?", crypt($password), $_SESSION['id']) === false) {
                    header("Location: http://webdevtutorials.net/account?alert=warning&message=%3Cstrong%3EUnknown%20error%3C/strong%3E%20Unknown%20database%20access%20error%2012300.");
                    exit();
                } else {
                    $user = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"])[0];
                    mailBySmtp($user["email"], 'WebDevTutorials Password Reset', "<p>Dear " . $user["username"] . ", </p><p>We would like to let you know that your password on WebDevTutorials has been reset.</p> <p>If this change was intentional, feel free to ignore this email. If this action was unauthorized, please <a href='http://webdevtutorials.net/help#contact'>contact support</a> immediately.</p>");
                }
            } else {
                header("Location: http://webdevtutorials.net/account?alert=warning&message=%3Cstrong%3EUnable%20to%20update%20account%20info.%3C/strong%3E%20Password%20too%20short.%20Please%20retry.");
                exit();
            }
        }
        
        // email
        if (strlen($email) != 0) {
            if (query("UPDATE users SET email=? WHERE id=?", $email, $_SESSION['id']) === false) {
                header("Location: http://webdevtutorials.net/account?alert=warning&message=%3Cstrong%3EUnknown%20error%3C/strong%3E%20Unknown%20database%20access%20error%2012300.");
                exit();
            }
        }
        
        // yay!
        header("Location: http://webdevtutorials.net/account?alert=success&message=%3Cstrong%3ESuccess%3C/strong%3E%20Requested%20information%20updated!");
    }
    
    else {
        header("Location: http://webdevtutorials.net/account");
    }
?>