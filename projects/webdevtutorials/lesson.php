<?php
    session_set_cookie_params('172800'); //=48 hours
    session_start();
    if (isset($_SESSION['id']) == false) {
        header("Location: http://webdevtutorials.net/?alert=warning&message=%3Cstrong%3EError%3C/strong%3E%20Please%20login.");
    }

    if (($_GET['section'] != 1 && $_GET['section'] != 2 && $_GET['section'] != 3) || ($_GET['tutorial'] == "")) {
        header("Location: http://webdevtutorials.net/account");
    }
    
    if ($_GET['tutorial'] == 16) {
        header("Location: http://webdevtutorials.net/start");
        exit(0);
    }

    include_once("resources/functions.php");
    include_once("resources/analytics.php");
    
    if (!file_exists("tutorial/tutorials/" . $_GET['tutorial'] . ".php")) {
        print("<script>window.location='http://webdevtutorials.net/resources/errors/coming_soon.php';</script>");
        exit();
    }
    
    $bgs = ['3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '19', '20', '22'];
    $bg = "//webdevtutorials.net/resources/images/tutorials/bg/" . $bgs[array_rand($bgs)] . ".jpg";
    
    require_once("tutorial/tutorials/" . $_GET['tutorial'] . ".php");
    
    if ($_GET['tutorial'] < 15) {
        if ($_GET['section'] == 1) {
            require_once("tutorial/sections/section1.php");
        }
        else if ($_GET['section'] == 2) {
            require_once("tutorial/sections/section2.php");
        }
        else if ($_GET['section'] == 3) {
            if ($_GET['tutorial'] < 10) {
                require_once("tutorial/sections/section3.php");
            } else {
                require_once("tutorial/sections/section3_php.php");
            }
        }
    }
    
?>