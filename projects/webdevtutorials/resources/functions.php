<?php
    
    /* GLOBALS
     ================================== */
    // database's name
    define("DATABASE", "cl11-wdt");
    
    // database's password
    define("PASSWORD", "webdevtutorials22350625");
    
    // database's server
    define("SERVER", "localhost");
    
    // database's username
    define("USERNAME", "cl11-wdt");
    
    
    
    /* QUERY
     ================================== */
    function query(/* $sql [, ... ] */)
    {
        $sql = func_get_arg(0);
        
        $parameters = array_slice(func_get_args(), 1);
        
        static $handle;
        if (!isset($handle))
        {
            try
            {
                $handle = new PDO("mysql:dbname=" . DATABASE . ";host=" . SERVER, USERNAME, PASSWORD);
                
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            }
            catch (Exception $e)
            {
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }
        
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }
        
        $results = $statement->execute($parameters);
        
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }
    
    
    /* mailBySmtp
     ================================== */
    function mailBySmtp($email, $subject, $body) {
        require_once("mail/class.phpmailer.php");
        require_once("mail/class.smtp.php");
        
        $mail = new PHPMailer;
        
        $mail->isSMTP();
        $mail->Host = 'mail.webdevtutorials.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'support@webdevtutorials.net';
        $mail->Password = 'bossman2012';
        $mail->SMTPSecure = 'tls';
        
        $mail->From = 'support@webdevtutorials.net';
        $mail->FromName = 'WebDevTutorials Support';
        $mail->addAddress($email);
        
        $mail->isHTML(true);
        
        $mail->Subject = $subject;
        $mail->Body    = $body;
        
        if ($mail->send()) {
            return "Sent";
        } else {
            return $mail->ErrorInfo;
        }
    }
    
?>