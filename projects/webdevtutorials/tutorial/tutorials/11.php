<?php
    // METADATA
    $title = "PHP Lesson 2: Math, Variables";
    $meta_description = "In 'Math, Variables', learn about executing basic math expressions and storing them in variables.";
    $id = "11";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/VYElVmo7aFA";
    $question1 = ["Which operator is used to multiply two numbers?", "<code>x</code>", "<code>*</code>", "<code>**</code>", 2];
    $question2 = ["Which statement will return a value of 4 in the following array: <code>&#36;array = [3, 7, 2, 4, 9]; </code>?", "<code>&#36;array[4];</code>", "<code>&#36;array[1];</code>", "<code>&#36;array[3];</code>", 3];
    $question3 = ["Which statement is <strong>false</strong>?", "Arrays are 0-indexed.", "Arrays are variables.", "An array should be used to store only one number.", 3];
    
    // GLOSSARY
    $summary = "<p>Math expressions in PHP are very similar to expressions in real life. Just use the appropriate operator, and the computer will follow order of operations. For addition, use +. For subtraction, use -. For multiplication, use *. And for division, use /. You can set an exponent using ^.</p><p>A variable is like a box to store something in. This box can hold numbers, letters, and more. Give the variable a name that starts with &#36; and is only one word. Then use the equals sign. On the right side of the equal sign, write what you want to store in the variable. For example, <code>&#36;name = 5;</code>. Don't forget the semicolon. You can store words by wrapping the string in quotation marks.</p><p>An array is like a grouping of boxes. Arrays are formed in the same way as normal variables, but use square brackets to inform the compiler that you are creating an array. Separate each item in the array with a comma. An array might look like this: <code>&#36;array = ['One', 'Two', 'Three'];</code>. To access an item in the array, use the square bracket notation with the index of the item you wish to access. To access the first item in the above array, use this code: <code>&#36;array[0];</code>.</p>";
    
    $code_example = '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Math, Variables&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
        &lt;?php
            print(5 + 7);
            print(10 - 35);
            print(2 * 23.5);
            print(1.342 / 0.9);
    
            $my_first_variable = 12;
            print($my_first_variable);
            
            $number = 6;
            print($my_first_variable + $number);
            
            $array = ["Welcome", "to", "arrays", "in", "PHP"];
            print($array[2]);
        ?&gt;
    
    &lt;/body&gt;
&lt;/html&gt;';

    $glossary = [
        ["<code>+</code>", "Addition operator."],
        ["<code>-</code>", "Subtraction operator."],
        ["<code>*</code>", "Multiplication operator."],
        ["<code>/</code>", "Division operator."],
        ["<code>^</code>", "Exponents operator."],
        ["<code>&#36;name = 'contents';</code>", "Declare a variable. Variables are places to store data. Put the name of the variable before the equals sign, and the value after."],
        ["<code>&#36;array = [1, 2, 3];</code>", "Array. An array is one variable with multiple sections. Separate each section with a comma."]
        ];
    
    // EXERCISE
    $editor_prefill = '&lt;!-- Feel free to try this exercise, but to get the output
of the PHP file, you will need to install PHP on your machine.
To learn how to do this, visit http://httpd.apache.org/docs/2.2/install.html. --&gt;';

    $challenge = "Play around with some math functions. Try doing different operations. Also try creating number and textual variables. Make sure to try out arrays too.";
    $hint1 = "Start with HTML. Setup everything except the contents of the <code>body</code>.";
    $hint2 = "Remember, use the <code>print()</code> command to print the output of different operations.";
    $hint3 = "Review the following code for help on creating variables: <pre>&#36;name_of_variable = \"contents of variable\"</pre>";
    
    $required_strings = [
    ["<?php", "You need to use the opening PHP tag. It looks like this: <code>&lt;?php</code>."],
    ["print", "Use the <code>print</code> command to print your code into the webpage."],
    [";", "Don't forget to end a line in PHP with a semicolon."],
    ["$", "Every variable in PHP should start with a dollar sign."]
    ];
?>