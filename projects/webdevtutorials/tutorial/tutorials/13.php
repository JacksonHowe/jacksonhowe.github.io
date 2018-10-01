<?php
    // METADATA
    $title = "PHP Lesson 4: The 'for' Loop";
    $meta_description = "In 'The For Loop', learn how to automate long processes.";
    $id = "13";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/9Atrij9Cf3M";
    $question1 = ["How many times is the initializer executed?", "Once", "Twice", "Three times", 1];
    $question2 = ["When is the 3rd expression run?", "At the end of each iteration of the loop.", "At the beginning of each iteration of the loop.", "None of the above.", 2];
    $question3 = ["<span class='label label-default'>Bonus</span> Which line of code will decrement <code>&#36;b</code> by one?", "<code>&#36;b++;</code>", "<code>&#36;b--;</code>", "<code>&#36;b==;</code>", 2];
    
    // GLOSSARY
    $summary = "<p>Sometimes in programming, we need to perform a task hundereds of times. We can do this by 'looping' through tasks. PHP has a control structure called the 'for' loop, which we can use to automate lengthy tasks. To use it, setup a basic control structure like this:</p><pre>for (initializer; test counter; increment counter) {  }</pre><p>The first statement, called the initializer, enables you to declare variables which can be used throughout the loop. The second statement is a test counter, like the if statement. This expression is evaluated before the loop begins. If it is true, then the loop will iterate. If false, then the loop terminates. The final statement allows you to do something after the successful execution of the loop, such as updating a variable. The code within the block will be executed until the test counter is false.</p><p>Beware of infinate loops. Sometimes you might accidentally create a loop that doesn't stop.</p>";
    
    $code_example = '&lt;?php
    for (&#36;i = 0; &#36;i <= 100; &#36;i++)
    {
        print(&#36;i . " ");
    }
?&gt;';

    $glossary = [
        ["<code>for</code>", "The command structure for loops through its block until the test counter is false."],
        ["<code>&#36;i++;</code>", "The ++ syntax increases the value of the variable by 1."],
        ["<code>&#36;i--;</code>", "The -- syntax decreases the value of the variable by 1."]
        ];
    
    // EXERCISE
    $editor_prefill = '&lt;!-- Feel free to try this exercise, but to get the output
of the PHP file, you will need to install PHP on your machine.
To learn how to do this, visit http://httpd.apache.org/docs/2.2/install.html. --&gt;';

    $challenge = "Print the numbers from 50 to 1000 backwards, starting with 1000. Use a for loop to do this.";
    $hint1 = "Review the glossary.";
    $hint2 = "This is like the example in the video, however the initializer, test counter, and increment counter are slightly modified.";
    $hint3 = "Initialize a variable with a value of 1000.";
    
    $required_strings = [
    ["<?php", "You need to use the opening PHP tag. It looks like this: <code>&lt;?php</code>."],
    ["print", "Use the <code>print</code> command to print your numbers into the webpage."],
    [";", "Don't forget to end a line in PHP with a semicolon."],
    ["$", "Every variable in PHP should start with a dollar sign."],
    ["for", "Use the for statement."]
    ];
?>