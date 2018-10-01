<?php
    // METADATA
    $title = "HTML Lesson 1: Introduction to HTML";
    $meta_description = "In 'Introduction to HTML', learn the basics of web development and the basic structure of HTML files.";
    $id = "0";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/XhfEM_1bhEg";
    $question1 = ["What language do web browsers read to format a web page?", "Javascript", "HTML", "Chinese", 2];
    $question2 = ["Every opening tag in HTML also has a corresponding ...", "Closing tag", "Attribute", "Symbol", 1];
    $question3 = ["What line of code must every HTML document begin with?", "<code>&lt;html&gt;</code>", "<code>&lt;head&gt;</code>", "<code>&lt;!DOCTYPE html&gt;</code>", 3];
    
    // GLOSSARY
    $summary = "<p>Every page on every website on the internet is made up of HTML. HTML stands for Hypertext Markup Language. It's the language that computers understand when they are reading an HTML file. You'll write some of these files in HTML when you start making websites. </p><p>Because HTML is a markup language, we use tags to tell the computer how to format a website. For example, the <code>&lt;b&gt;</code> tag makes text bold. An opening tag has a less-than sign and a greater-than sign with the tag name in the middle. You can also put attributes in the opening tag to modify it's behavior. Almost all tags have a closing tag — a less-than sign, a slash, the tag name, and a greater-than sign. </p><p>Every HTML file begins with the <code>&lt;!DOCTYPE html&gt;</code> tag. This tells the browser (a broswer is an application that reads HTML and displays it on your screen) what version of HTML it will read. Then the whole document is wrapped in an <code>&lt;html&gt;</code> tag. </p>";
    
    $code_example = '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Hello world&lt;/title&gt;
    &lt;/head&gt;
    
    &lt;body&gt;
        &lt;p&gt;Hello world&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;';

    $glossary = [
        ["<code>&lt;!DOCTYPE html&gt;</code>", "This is always the first line of every HTML file. It tells the browser what version of HTML we are going to use."],
        ["<code>&lt;html&gt; &lt;/html&gt;</code>", "This tag surrounds an html head and body. The closing <code>&lt;html&gt;</code> tag is the last line in a file."],
        ["<code>&lt;head&gt; &lt;/head&gt;</code>", "The head of an HTML file contains metadata to make the site function. The head can include a title, links to CSS files, and information about the site."],
        ["<code>&lt;title&gt; &lt;/title&gt;</code>", "The title is the text that appears on the tab bar. Don't make the title too long, or it will be cut off!"],
        ["<code>&lt;body&gt; &lt;/body&gt;</code>", "The body tag surrounds everything that makes up the content of a page."],
        ["<code>&lt;p&gt; &lt;/p&gt;</code>", "The p tag creates a paragraph."],
        ["<code>&lt;a href='link'&gt; &lt;/a&gt;</code>", "The a tag creates a link which points to the link in the href attribute."]
        ];
    
    // EXERCISE
    $editor_prefill = '&lt;!-- Welcome to the editor! --&gt;
&lt;!-- Read the challenge on the right and type the code here. --&gt;
&lt;!-- Then click the view button to see what you\'ve made. --&gt;
&lt;!-- When you like the result, click check. --&gt;
&lt;!-- Feel free to delete these lines. --&gt;';

    $challenge = "Design a webpage which simply displayes your name. Put the words 'My first webpage' in the titlebar. Use appropriate HTML 5 syntax. The result will appear below, and should display your name. Click 'Check' when finished.";
    $hint1 = "Remember, this is like the code we discussed in the video. You simply have to edit the title and the body.";
    $hint2 = "The first line of every HTML file is <code>&lt;!DOCTYPE html&gt;</code> - don't forget it.";
    $hint3 = "Always use both an opening and closing tag (except for tags like the DOCTYPE declaration). An opening tag looks like this: <pre>&lt;p&gt;</pre></p><p>A closing tag looks like this: <pre>&lt;/p&gt;</pre>.";
    
    $required_strings = [
    ["My first webpage", "Your title doesn't seem quite right. You should have the words, 'My first webpage' in title and head elements."],
    ["<title", "You don't seem to have an opening <code>&lt;title&gt;</code> tag. The title tag needs to be positioned in the head of a webpage."],
    ["</title>", "Make sure you have a closing <code>&lt;title&gt;</code> tag."]
    ];
?>