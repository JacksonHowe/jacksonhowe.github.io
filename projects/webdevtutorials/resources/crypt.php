<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print(crypt($_POST['input']));
    }
    
    else {
        header("Location: http://webdevtutorials.net/stats");
    }
?>