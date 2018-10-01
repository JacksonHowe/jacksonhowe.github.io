<?php
    session_set_cookie_params('172800'); //=48 hours
    session_start();

    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
    
    header("Location: http://webdevtutorials.net/?alert=success&message=%3Cstrong%3ESuccess%3C/strong%3E%20You%20have%20been%20logged%20out.");
?>