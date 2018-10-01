<?php
    print("<!DOCTYPE html><html><head><style>body { padding-top:50px; padding-bottom:50px; }</style><link href='http://webdevtutorials.net/resources/style/stylesheet.css' rel='stylesheet'><title>Your Subscription</title></head><body><div class='container'><div class='col-sm-6 col-sm-offset-3'>");
    
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        print("<p class='lead text-center'>This request was not sent using the POST method. To view the contents of this page, submit a form using the POST method.</p>");
    }
    else {
        print("<p class='lead text-center'>Your request has been received. Details of the submission:</p><br>");
        print("<p>Name: " . $_POST['name'] . "</p>");
        print("<p>Email: " . $_POST['email'] . "</p>");
        print("<p>Password: " . $_POST['password'] . "</p>");
        print("<p>Service Package: " . $_POST['package'] . "</p>");
        print("<br><small>If you filled in the form, but an option above is blank, make sure you are using the right name attribute. If your service package is not correct, insure that you give every radio button input the same name (package), and a different value. The selected value should appear above. If everything looks correct. Nice work. Close this tab and check the code in the editor.</small>");
    }
    
    print("</div></div></body></html>");
?>