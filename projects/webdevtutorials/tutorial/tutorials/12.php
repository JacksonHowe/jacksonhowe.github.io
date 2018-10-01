<?php
    // METADATA
    $title = "PHP Lesson 3: The If Statement";
    $meta_description = "In 'The If Statement', learn how to make decisions based on logic.";
    $id = "12";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/OnsQuipDgG4";
    $question1 = ["How does the if statement work?", "If the condition is true, the computer will execute the code within the statements body.", "If the condition is false, the computer will execute the code within the statements body.", "The if statement will be executed upon user input.", 1];
    $question2 = ["The variable <code>&#36;x</code> stores a value of 7. Which line of code will be true when 4 is greater than <code>&#36;x</code>?", "<code>if (&#36;x != 3)</code>", "<code>if (&#36;x == &#36;x)</code>", "<code>if (&#36;x < 7)</code>", 3];
    $question3 = ["If the condition in the if statement is false, then the code in its body will not be executed. What keyword defines the fallback code in case the condition is false?", "<code>else</code>", "<code>fallback</code>", "<code>false</code>", 1];
    
    // GLOSSARY
    $summary = "<p>The IF statement gives us a way to make decisions in a program. For example, we could log a user in if they have the credentials, else we redirect them to a login page. To use the IF statement, create a condition: <code>if ($variable == 1)</code>. Then open and close curly braces. If the condition is true, then the code inside the curly braces will be executed. If false, then the code will not be executed (at this point, if you have an else statement following the if statement, it's code will be run). You can use many different operators within the condition (see below). The && and the || operators are used to link conditions together. The && operator will require that both statements are true to proceed; the || (or) operator requires only one to be true.</p>";
    
    $code_example = '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;The IF Statement&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    
        &lt;?php
            $x = 4;
            $y = "foo";
    
            if ($x >= 3 || $y != "bar")
            {
                print("This statement is true");
            }
            else
            {
                print("This statement is false");
            }
        ?&gt;
    
    &lt;/body&gt;
&lt;/html&gt;';

    $glossary = [
        ["<code>==</code>", "Is equal to"],
        ["<code>!=</code>", "Is not equal to"],
        ["<code>&gt;</code>", "Is greater than"],
        ["<code>&lt;</code>", "Is less than"],
        ["<code>&gt;=</code>", "Is greater than or equal to"],
        ["<code>&lt;=</code>", "Is less than or equal to"],
        ["<code>&&</code>", "AND"],
        ["<code>||</code>", "OR"],
        ["<code>if (condition) { }</code>", "Execute the contents of the curly braces if the condition is true."],
        ["<code>else { }</code>", "Use immediatly following an IF statement. Executed if condition of IF statement is false."]
        ];
    
    // EXERCISE
    $editor_prefill = '&lt;!-- Feel free to try this exercise, but to get the output
of the PHP file, you will need to install PHP on your machine.
To learn how to do this, visit http://httpd.apache.org/docs/2.2/install.html. --&gt;';

    $challenge = "Create 2 variables. If one is greater than the other, print that variable A is greater. If not, print that variable B is greater.";
    $hint1 = "Create your PHP tags.";
    $hint2 = "Use the if and the else statements. Remember to declare your initial variables before the if statement.";
    $hint3 = "Use one equals sign to declare a variable, use two in a logical operator.";
    
    $required_strings = [
    ["<?php", "You need to use the opening PHP tag. It looks like this: <code>&lt;?php</code>."],
    ["print", "Use the <code>print</code> command to print your code into the webpage."],
    [";", "Don't forget to end a line in PHP with a semicolon."],
    ["$", "Every variable in PHP should start with a dollar sign."],
    ["if", "Use the if statement."],
    ["else", "Use the else statement."]
    ];
?>