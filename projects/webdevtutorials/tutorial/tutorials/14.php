<?php
    // METADATA
    $title = "PHP Lesson 5: Functions";
    $meta_description = "Learn about calling built-in and user functions in this tutorial.";
    $id = "14";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/X8eEIB71Zag";
    $question1 = ["Which line of code will return the number of items in array <code>&#36;cost</code>?", "<code>&#36;cost.count;</code>", "<code>count(&#36;cost);</code>", "<code>count(,cost);</code>", 2];
    $question2 = ["What keyword defines a user function?", "<code>user</code>", "<code>name</code>", "<code>function</code>", 3];
    $question3 = ["Can a function call another function?", "Yes, although usually not itself.", "Never", "Always", 1];
    
    // GLOSSARY
    $summary = "<p>Functions are commands that you can use to do various things. For example, the date function returns the current date and time. To call a function, simply pass any arguments (input) into parenthesis. If a function is expected to return data, then store it in a variable. This code will store the date in a variable called date: <code>&#36;date = date('r');</code>. A full reference of built-in functions is available at <a href='http://php.net' target='_blank'>php.net</a>.</p><p>You can also create your own functions. Use the following syntax:";
    
    $code_example = '&lt;?php
    function name(&#36;argument1, &#36;argument2)
    {
        return "hello"; // The return command will send data back (at the end of a function, but it will not print it to the screen.
    }
?&gt;';

    $glossary = [
        ["<code>count()</code>", "Returns the number of elements in an array."],
        ["<code>date()</code>", "Returns the date in a format according to the given format string."],
        ["<code>is_int()</code>", "Returns true if the input is an integer."],
        ["<code>round()</code>", "Rounds an integer."],
        ["<code>return</code>", "Ends execution of a function and returns its argument as a value."]
        ];
    
    // EXERCISE
    $editor_prefill = '&lt;!-- Feel free to try this exercise, but to get the output
of the PHP file, you will need to install PHP on your machine.
To learn how to do this, visit http://httpd.apache.org/docs/2.2/install.html. --&gt;';

    $challenge = "Create a function which accepts 2 arguments. If the arguments are equal, print 'Equal', else print 'Not Equal'.";
    $hint1 = "Setup a function and name it.";
    $hint2 = "Name the two arguments and test if they are equal in the block of code.";
    $hint3 = "Don't forget to call the function. Separate the arguments with a comma.";
    
    $required_strings = [
    ["<?php", "You need to use the opening PHP tag. It looks like this: <code>&lt;?php</code>."],
    ["print", "Use the <code>print</code> command to print your answer into the webpage."],
    [";", "Don't forget to end a line in PHP with a semicolon."],
    ["$", "Every variable in PHP should start with a dollar sign."],
    ["function", "Create a function."],
    ["if", "Test if the variables are equal using if."],
    ["Equal", "equal", "Print equal if the arguments are equal."]
    ];
?>