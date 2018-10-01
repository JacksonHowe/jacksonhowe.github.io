<?php
    // METADATA
    $title = "HTML Lesson 6: Tables";
    $meta_description = "In 'Tables', learn how to create tables in HTML.";
    $id = "5";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/F1i5VfVn1Xg";
    $question1 = ["Which tag will create a table?", "<code>th</code>", "<code>table</code>", "<code>tr</code>", 2];
    $question2 = ["Which tag is used to create a new row?", "<code>th</code>", "<code>table</code>", "<code>tr</code>", 3];
    $question3 = ["What attribute, applied to the table tag, will alter the appearance of the table?", "<code>class</code>", "<code>tablestyle</code>", "<code>t</code>", 1];
    
    // GLOSSARY
    $summary = "<p>Making a table in HTML is easy, but you have to learn what tags to use where. Every table should have the <code>table</code> tag surrounding it. You can use the class attribute in this tag to make the table look fancy. Then, specify a table header and a table body using the <code>thead</code> and <code>tbody</code> elements. For each row in the table, use <code>tr</code>. You probably only have 1 row in the <code>thead</code>. Finally, for a cell in the table, use either <code>th</code> or <code>td</code>. The <code>th</code> tag is used only for cells within the <code>thead</code>.</p><p>Here is the table example from the video:</p>";
    
    $code_example = '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Tables&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=\'container\'&gt;
    
            &lt;table class=\'table table-striped\'&gt;
    
                &lt;thead&gt;
                    &lt;tr&gt;
                        &lt;th&gt;First Name&lt;/th&gt;
                        &lt;th&gt;Last Name&lt;/th&gt;
                        &lt;th&gt;Age&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;

                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;td&gt;George&lt;/td&gt;
                        &lt;td&gt;Smith&lt;/td&gt;
                        &lt;td&gt;20&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;Steve&lt;/td&gt;
                        &lt;td&gt;Robinson&lt;/td&gt;
                        &lt;td&gt;35&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;td&gt;Alfred&lt;/td&gt;
                        &lt;td&gt;Patterson&lt;/td&gt;
                        &lt;td&gt;18/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
    
            &lt;/table&gt;
    
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;';

    $glossary = [
        ["<code>&lt;table&gt;</code>", "1st Level - Use to surround an entire table."],
        ["<code>&lt;thead&gt;</code>", "2nd Level - Use to create the table header."],
        ["<code>&lt;tbody&gt;</code>", "2nd Level - Use to create the table body."],
        ["<code>&lt;tr&gt;</code>", "3rd Level - Use to create a row within the table."],
        ["<code>&lt;th&gt;</code>", "4th Level - Use to create a header cell."],
        ["<code>&lt;td&gt;</code>", "4th Level - Use to create a body cell."]
        ];
    
    // EXERCISE
    $editor_prefill = '';

    $challenge = "Make a menu for a restaurant. You should have 3 or 4 header cells- for example 'Appetizer', 'Main Course', 'Dessert', etc... Under each list a couple of foods for your menu. Make the table look nice using one of the table classes discussed in the video. Feel free to add other content to this page. You could put some text/ images describing your restaurant above the table.";
    $hint1 = "There are 4 levels of table creation. Start with the <code>table</code> tag, then the <code>thead</code> and <code>tbody</code>. The 3rd level is a row. Use the <code>tr</code> element to create a row. Finally, pick either <code>th</code> or <code>td</code> to make an individual cell.";
    $hint2 = "Look over the example code on the glossary page.";
    $hint3 = "The first line of the table should look similar to this: <pre>&lt;table class='table table-striped'&gt;</pre>";
    
    $required_strings = [
    ["<table", "You need a <code>table</code> tag."],
    ["</table>", "You need a closing <code>table</code> tag."],
    ["<thead", "You need a <code>thead</code> tag."],
    ["</thead>", "You need a closing <code>thead</code> tag."],
    ["<tbody", "You need a <code>tbody</code> tag."],
    ["</tbody>", "You need a closing <code>tbody</code> tag."],
    ["<tr", "You don't have any rows in your table - use the <code>tr</code> tag."],
    ["<th", "Use the <code>th</code> tag for header cells - such as 'Main Course'"],
    ["<td", "Use the <code>td</code> tag for body cells - such as 'Salmon'"],
    ["class", "Set the table class using the <code>class</code> attribute in the table tag. You could use <code>class='table table-striped'</code>"]
    ];
?>