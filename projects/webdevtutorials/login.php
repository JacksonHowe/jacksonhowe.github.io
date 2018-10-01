<?php
    session_set_cookie_params('172800'); //=48 hours
    session_start();
    include_once("resources/functions.php");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"]) || empty($_POST["password"])) {
            header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Please%20enter%20a%20username%20and%20password.");
            exit();
        }
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $users = query("SELECT * FROM users WHERE username = ?", $username);
        if ($users === false) {
            header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20An%20unknown%20error%20occured.%20Please%20try%20again%20later%20or%20contact%20the%20system%20admin.");
            exit();

        }
        
        if (count($users) == 1) {
            $password = crypt($password, $users[0]['password']);
            if ($password == $users[0]['password']) {
                $_SESSION['id'] = $users[0]['id'];
                query("UPDATE users SET last_login=? WHERE id=?", date('r'), $_SESSION['id']);
                header("Location: http://webdevtutorials.net/account");
            }
            else {
                header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Incorrect%20login%20credentials.%20Please%20retry.");
                exit();
            }
        }
        else {
            header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Not%20a%20valid%20username.%20Try%20again.");
            exit();
        }
    }
    
    else {
        header("Location: http://webdevtutorials.net");
    }
?>