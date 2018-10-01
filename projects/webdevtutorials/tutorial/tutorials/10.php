<?php
    // METADATA
    $title = "PHP Lesson 1: Introduction to PHP";
    $meta_description = "In 'Introduction to PHP', learn the basics of PHP.";
    $id = "10";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/DrZx1ZrOFGM";
    $question1 = ["When the browser (your computer) receives a PHP file, will there be any PHP in it?", "Yes of course. It's a PHP file.", "No, the PHP has already been executed by the server and only the resultant HTML appears.", "I don't know.", 2];
    $question2 = ["What does an opening and closing PHP tag look like?", "<code>&lt;?php ... ?&gt;</code>", "<code>&lt;php ... php&gt;</code>", "<code>&lt;? ... ?&gt;</code>", 1];
    $question3 = ["Which command will print the words 'Hi' into a file?", "<code>date('Hi');</code>", "<code>print('Hi')</code>", "<code>print('Hi');</code>", 3];
    
    // GLOSSARY
    $summary = "<p>PHP is another language like HTML, but instead of telling the browser how to format stuff, PHP tells the server to make HTML. For example, imagine you simply want to have a webpage with the time that the page loaded on it. In the PHP file, you can write all the HTML (such as the head and body tags). When the server receives a request to send you that file, the server finds a php tag in it. It looks in the PHP tag and finds a <code>print</code> command which says to print the current time to the file. Now, the PHP tags are removed, and you are left with just the time in the HTML. The browser reads this file. PHP is used in almost every server today to help make files more dynamic.</p>";
    
    $code_example = '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;What is PHP?&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
        &lt;?php
            print(\'&lt;p&gt;Hello world&lt;/p&gt;\');
        ?&gt;
    
    &lt;/body&gt;
&lt;/html&gt;';

    $glossary = [
        ["<code>&lt;?php ... ?&gt;</code>", "The opening and closing PHP tags. Use these in a PHP file to tell the server to execute the contents as PHP."],
        ["<code>print('Hi');</code>", "The print command tells the PHP parser to insert its contents into the file (in this case, 'Hi'). Don't forget to end the line with a semicolon."]
        ];
    
    // EXERCISE
    $editor_prefill = '&lt;!-- Feel free to try this exercise, but to get the output
of the PHP file, you will need to install PHP on your machine.
To learn how to do this, visit http://httpd.apache.org/docs/2.2/install.html. --&gt;';

    $challenge = "Print your name to the screen using PHP. Make sure you setup your HTML too.";
    $hint1 = "Start with HTML. Setup everything except the contents of the <code>body</code>.";
    $hint2 = "To tell the server that you are writing PHP, use the opening and closing PHP tags.";
    $hint3 = "You'll have to print your name to the screen using the print command: <pre>print('George');</pre>";
    
    $required_strings = [
    ["<?php", "You need to use the opening PHP tag. It looks like this: <code>&lt;?php</code>."],
    ["print", "Use the <code>print</code> command to print your name into the webpage."],
    [";", "Don't forget to end a line in PHP with a semicolon."]
    ];
?>