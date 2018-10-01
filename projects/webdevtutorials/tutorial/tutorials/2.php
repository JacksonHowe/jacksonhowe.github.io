<?php
    // METADATA
    $title = "HTML Lesson 3: Organizing the Page";
    $meta_description = "In 'Organizing the Page', learn how to use columns and offsets for better webpage structure.";
    $id = "2";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/BAGFDdNYKE0";
    $question1 = ["What div class creates a container?", "<code>&lt;container&gt;</code>", "<code>div-container</code>", "<code>&lt;div class='container'&gt;</code>", 3];
    $question2 = ["How many columns does Bootstrap enable?", "12", "6", "24", 1];
    $question3 = ["What is the code to use to create a column which is 3 blocks wide and offset by 1 unit?", "<code>&lt;div class='col-xs-3 col-xs-offset-1'&gt;</code>", "<code>&lt;div class='row'&gt;</code>", "<code>&lt;div class='column-xs-3-offset-1'&gt;</code>", 1];
    
    // GLOSSARY
    $summary = "<p>In previous lessons, you created sites with one column of text. Usually however, sites have multiple columns. To do this, we're going to use a CSS library (stylesheet) called Bootstrap, which will help us get started faster. It's automatically included in the editor. Bootstrap has many classes that work with the <code>div</code> tag. The <code>div</code> tag is a generic element which has style applied to it in the <code>class attribute</code>.</p><p>Before using columns, we need to create a container. This tag might span over the entire body of your webpage: <pre>&lt;div class='container'&gt;...&lt;/div&gt;</pre></p><p>Then, for each span of 12 columns, we use the row class: <pre>&lt;div class='row'&gt;...&lt;/div&gt;</pre></p><p>Finally, columns are created using this syntax: <pre>&lt;div class='col-xs-4'&gt;...&lt;/div&gt;</pre></p><p>For now, feel free to ignore the <code>xs</code> part. We'll discuss that later. The number can be changed to adjust the width of the column. Remember, you have 12 column units in total across the width of the page.</p><p>What if you want some space between columns? To offset a column by 2 units, use the offset class: <pre>&lt;div class='col-xs-4 col-xs-offset-2'&gt;...&lt;/div&gt;</pre></p><p>The number after offset is the number of units to offset the column by. This also adds to your total 12 blocks.</p><p>Here are some common groupings, as seen in the video:</p>";
    
    $code_example = '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Organizing the Webpage&lt;/title&gt;
    &lt;/head&gt;
    
    &lt;body&gt;
    
        &lt;div class=\'container\'&gt; &lt;!-- Remember to always use this class if you want to use columns --&gt;
    
            &lt;div class=\'row\'&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
                &lt;div class=\'col-xs-1\'&gt;col-xs-1&lt;/div&gt;
            &lt;/div&gt;
    
            &lt;div class=\'row\'&gt;
                &lt;div class=\'col-xs-3\'&gt;col-xs-3&lt;/div&gt;
                &lt;div class=\'col-xs-6\'&gt;col-xs-6&lt;/div&gt;
                &lt;div class=\'col-xs-3\'&gt;col-xs-3&lt;/div&gt;
            &lt;/div&gt;
    
            &lt;div class=\'row\'&gt;
                &lt;div class=\'col-xs-2\'&gt;col-xs-2&lt;/div&gt;
                &lt;div class=\'col-xs-4\'&gt;col-xs-4&lt;/div&gt;
                &lt;div class=\'col-xs-3\'&gt;col-xs-3&lt;/div&gt;
                &lt;div class=\'col-xs-3\'&gt;col-xs-3&lt;/div&gt;
            &lt;/div&gt;
    
            &lt;div class=\'row\'&gt;
                &lt;div class=\'col-xs-4\'&gt;col-xs-4&lt;/div&gt;
                &lt;div class=\'col-xs-4 col-xs-offset-4\'&gt;col-xs-4 col-xs-offset-4&lt;/div&gt;
            &lt;/div&gt;
    
            &lt;div class=\'row\'&gt;
                &lt;div class=\'col-xs-3 col-xs-offset-1\'&gt;col-xs-3 col-xs-offset-1&lt;/div&gt;
                &lt;div class=\'col-xs-3 col-xs-offset-1\'&gt;col-xs-3 col-xs-offset-1&lt;/div&gt;
                &lt;div class=\'col-xs-3 col-xs-offset-1\'&gt;col-xs-3 col-xs-offset-1&lt;/div&gt;
            &lt;/div&gt;
    
            &lt;div class=\'row\'&gt;
                &lt;div class=\'col-xs-2\'&gt;col-xs-2&lt;/div&gt;
                &lt;div class=\'col-xs-5 col-xs-offset-2\'&gt;col-xs-5 col-xs-offset-2&lt;/div&gt;
                &lt;div class=\'col-xs-3\'&gt;col-xs-3&lt;/div&gt;
            &lt;/div&gt;
    
        &lt;/div&gt;
    
    &lt;/body&gt;
&lt;/html&gt;';

    $glossary = [
        ["<code>&lt;div&gt;</code>", "The division element is a generic element which groups markup using the <code>class</code> attribute."],
        ["<code>class</code>", "An attribute used in the <code>div</code> tag to define styles and columns."],
        ["<code>class='container'</code>", "A style used to format margins and padding. Wrap any columns in a container."],
        ["<code>class='row'</code>", "A row is used to create a group of 12 column units. It is a horizontal row with 12 column units inside it."],
        ["<code>class='col-xs-3'</code>", "Creates a column. Change the number to the desired column width. 12 blocks total."],
        ["<code>class='col-xs-3 col-xs-offset-3'</code>", "Creates a column of width 3, but also offsets this column by 3 units."]
        ];
    
    // EXERCISE
    $editor_prefill = '&lt;!-- Welcome. Read the challenge on the right. --&gt;
&lt;!-- Please do not delete the template below. --&gt;
    
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;My Randomizer&lt;/title&gt; &lt;!-- Feel free to change the title. --&gt;
    
        &lt;style&gt; /* The style tag defines CSS for the whole page. */
            /* These blocks of CSS mandate the look of the buttons and result windows. */
            #numberButton, #numberResult {
                background-color: blue;
                height: 100px;
                text-align: center;
                font-size: 20px;
                line-height: 100px;
            }
    
            #colorButton, #colorResult {
                background-color: red;
                height: 100px;
                text-align: center;
                font-size: 20px;
                line-height: 100px;
            }
    
            #letterButton, #letterResult {
                background-color: green;
                height: 100px;
                text-align: center;
                font-size: 20px;
                line-height: 100px;
            }
    
            #resetAllButton {
                background-color: gray;
                height: 100px;
                text-align: center;
                font-size: 20px;
                line-height: 100px;
            }
    
            /* These lines change the status of the button when they are being clicked. */
            #numberButton:hover, #colorButton:hover, #letterButton:hover, #resetAllButton:hover { opacity: 0.85; }
            #numberButton:active, #colorButton:active, #letterButton:active, #resetAllButton:active { opacity: 0.3; }
        &lt;/style&gt;
    &lt;/head&gt;
    
    &lt;body&gt;
        &lt;!-- Your code here. --&gt;
    
        &lt;!-- The scripts below are called when a button is clicked. No need to edit them. --&gt;
        &lt;script&gt;
            document.getElementById(\'numberButton\').onclick = function() {
                var x = Math.random() * 100;
                document.getElementById(\'numberResult\').innerHTML = Math.round(x);
            };
        &lt;/script&gt;
    
        &lt;script&gt;
            document.getElementById(\'colorButton\').onclick = function() {
                var colors = [\'Red\', \'Blue\', \'Green\', \'Orange\', \'Yellow\', \'Purple\', \'Pink\', \'Black\', \'Brown\', \'Gold\', \'Silver\'];
                var x = colors[Math.floor(Math.random() * colors.length)];
                document.getElementById(\'colorResult\').innerHTML = x;
            };
        &lt;/script&gt;
    
        &lt;script&gt;
            document.getElementById(\'letterButton\').onclick = function() {
                var letters = [\'A\', \'B\', \'C\', \'D\', \'E\', \'F\', \'G\', \'H\', \'I\', \'J\', \'K\', \'L\', \'M\', \'N\', \'O\', \'P\', \'Q\', \'R\', \'S\', \'T\', \'U\', \'V\', \'W\', \'X\', \'Y\', \'Z\'];
                var x = letters[Math.floor(Math.random() * letters.length)];
                document.getElementById(\'letterResult\').innerHTML = x;
            };
        &lt;/script&gt;
                                        
        &lt;script&gt;
            document.getElementById(\'resetAllButton\').onclick = function() {
                document.getElementById(\'numberResult\').innerHTML = \'\';
                document.getElementById(\'colorResult\').innerHTML = \'\';
                document.getElementById(\'letterResult\').innerHTML = \'\';
            };
        &lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;';

    $challenge = "Your challenge today is to make a 'randomizer'. At the conclusion of this challenge, you'll have a page which allows someone to click a button an get either a random number, a random color, or a random letter. To enable this, you need to make a place on your webpage for 3 buttons, 3 result windows, and a reset-all button. You may arrange this however you please. Use the column class as we discussed earlier in this tutorial.</p><p>You will also need to use a new attribute called <code>id</code>. Inside your <code>div</code>, use the id attribute like this:</p><pre>&lt;div class='col-xs-4' id='numberButton'&gt;&lt;/div&gt;</pre><p>A special Javascript file has been included to handle the logic behind the randomizer. Just make sure to use the following IDs: </p><ul><li>numberButton</li><li>colorButton</li><li>letterButton</li><li>numberResult</li><li>colorResult</li><li>letterResult</li><li>resetAllButton</li></ul><p>Make sure to pay attention to capitalization on those IDs. If you set them up right, clicking on one of the 'buttons' will trigger something inside the 'results'.";
    $hint1 = "</p><a target='_blank' href='//webdevtutorials.net/resources/images/tutorials/id2.png'><img src='//webdevtutorials.net/resources/images/tutorials/id2.png' class='img-responsive' alt='Example'></a><br><p>Don't get distracted by the code that is already there. It is just some CSS in a <code>style</code> tag and some Javascript in a <code>script</code> tag. The basic DOCTYPE declarations and HTML tags are taken care of. Just look for a comment that says 'Your code here', and work on the challenge.";
    $hint2 = "You have 7 'parts' to make (3 buttons, 3 result windows, and 1 reset button, see the spec). For each of them, use a <code>div</code> tag with the <code>class</code> attribute for the columns and the <code>id</code> attribute for the game (as in spec). Inside the buttons's div, you could put 'Random Color' for example. That title is open for you to change too.";
    $hint3 = "Don't forget those <code>class='container'</code> and <code>class='row'</code> attributes: <pre>&lt;div class='container'&gt;</pre><pre>&lt;div class='row'&gt;</pre>";
    
    $required_strings = [
    ["id='numberButton'", "id=\"numberButton\"", "You aren't including the button to create a random number properly. You should be using the <code>&lt;div id='numberButton'&gt;</code> syntax. Check for correct spelling of the ID and make sure you close the tag. Also try using the <code>class</code> attribute on that div to position it. Feel free to edit what it says."],
    ["id='colorButton'", "id=\"colorButton\"", "You aren't including the button to create a random color properly. You should be using the <code>&lt;div id='colorButton'&gt;</code> syntax. Check for correct spelling of the ID and make sure you close the tag. Also try using the <code>class</code> attribute on that div to position it. Feel free to edit what it says."],
    ["id='letterButton'", "id=\"letterButton\"", "You aren't including the button to create a random letter properly. You should be using the <code>&lt;div id='letterButton'&gt;</code> syntax. Check for correct spelling of the ID and make sure you close the tag. Also try using the <code>class</code> attribute on that div to position it. Feel free to edit what it says."],
    ["id='numberResult'", "id=\"numberResult\"", "You aren't including the result window for the random number. You should be using the <code>&lt;div id='numberResult'&gt;</code> syntax. Check for correct spelling of the ID and make sure you close the tag. Also try using the <code>class</code> attribute on that div to position it."],
    ["id='colorResult'", "id=\"colorResult\"", "You aren't including the result window for the random color. You should be using the <code>&lt;div id='colorResult'&gt;</code> syntax. Check for correct spelling of the ID and make sure you close the tag. Also try using the <code>class</code> attribute on that div to position it."],
    ["id='letterResult'", "id=\"letterResult\"", "You aren't including the result window for the random letter. You should be using the <code>&lt;div id='letterResult'&gt;</code> syntax. Check for correct spelling of the ID and make sure you close the tag. Also try using the <code>class</code> attribute on that div to position it."],
    ["<div", "Where are all your <code>div</code> tags?"],
    ["</div>", "Make sure you close every <code>div</code> tag."],
    ["col-xs", "You don't seem to have any columns specified. Try using a column: <code>&lt;div class='col-xs-3'&gt;</code>."],
    ["container", "For the columns to work, you need to have everything wrapped in a <code>&lt;div class='container'&gt;</code>. You should only need to include this once."],
    ["row", "You need a <code>&lt;div class='row'&gt;</code> for your columns to work. Add one before the column group and close it after you close all of your columns."],
    ["<style", "Uh-oh! Did you accidentally delete some of the template? You might need to restart."],
    ["<script", "Uh-oh! Did you accidentally delete some of the template? You might need to restart."]
    ];
?>