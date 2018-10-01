<?php
    // METADATA
    $title = "HTML Lesson 7: Navigation";
    $meta_description = "In 'Navigation', learn how to create a navbar to navigate around a website.";
    $id = "6";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/N2bHcvPeSgw";
    $question1 = ["Which line of code does not create a navbar?", "<code>&lt;nav class='navbar navbar-default'&gt;</code>", "<code>&lt;nav class='navbar navbar-inverse'&gt;</code>", "<code>&lt;nav class='nav navbar-nav'&gt;</code>", 3];
    $question2 = ["Which line of code creates a link within a navbar?", "<code>&lt;li&gt;&lt;a href='#'&gt;Link&lt;/a&gt;&lt;/li&gt;</code>", "<code>&lt;li a href='#'&gt;Link&lt;/li&gt;</code>", "<code>&lt;a class='nav-link' href='#'&gt;Link&lt;/a&gt;</code>", 1];
    $question3 = ["What class defines a dropdown menu?", "<code>dropdown</code>", "<code>menu</code>", "<code>dropdown-menu</code>", 3];
    
    // GLOSSARY
    $summary = "<p>Navbars are used to provide links to other pages on a website. Use the <code>nav</code> and <code>ul class='nav navbar-nav'</code> tags to create the navbar. Fill it with links, dropdowns, and forms as seen here:</p>";
    
    $code_example = '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;The Navbar&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div class=\'container\'&gt;
    
            &lt;nav class=&quot;navbar navbar-default&quot; role=&quot;navigation&quot;&gt;
                &lt;ul class="nav navbar-nav"&gt;
            
                    &lt;li&gt;&lt;a href="…"&gt;Link&lt;/a&gt;&lt;/li&gt;
            
                    &lt;li class="dropdown"&gt;
                        &lt;a href=&quot;#&quot; class=&quot;dropdown-toggle&quot; data-toggle=&quot;dropdown&quot;&gt;Dropdown&lt;/a&gt;
                        &lt;ul class=&quot;dropdown-menu&quot;&gt;
                            &lt;li&gt;&lt;a href="…"&gt;Link 1&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="…"&gt;Link 2&lt;/a&gt;&lt;/li&gt;
                            &lt;li&gt;&lt;a href="…"&gt;Link 3&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                    &lt;/li&gt;
            
                    &lt;form class=&quot;navbar-form navbar-left&quot; role=&quot;search&quot;&gt;
                        &lt;div class=&quot;form-group&quot;&gt;
                            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Search&quot;&gt;
                        &lt;/div&gt;
                        &lt;button type=&quot;submit&quot; class=&quot;btn btn-default&quot;&gt;Submit&lt;/button&gt;
                    &lt;/form&gt;
            
                &lt;/ul&gt;
            &lt;/nav&gt;
    
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;';

    $glossary = [
        ["<code>&lt;nav&gt;</code>", "Nav tab creates a generic navbar. Apply the <code>class</code> and <code>role</code> attributes."]
        ];
    
    // EXERCISE
    $editor_prefill = '';

    $challenge = "Create a navbar linking to 3 different sites (one of these sites must be <code>http://develop.webdevtutorials.net</code>. Then create a dropdown menu in the same navbar with a few more links.";
    $hint1 = "Review the example code on the glossary. See resources tab.";
    $hint2 = "Use the <code>nav</code> -> <code>ul</code> tags to create the basic outline. Then add <code>li</code> elements.";
    $hint3 = "To create the dropdown, start by creating an <code>li</code> element. Then create the <code>a</code> element to open the dropdown. Create the actual dropdown contents in a <code>ul</code> tag.";
    
    $required_strings = [
    ["<nav", "You need a <code>nav</code> tag."],
    ["</nav>", "You need a closing <code>nav</code> tag."],
    ["<ul", "You need a <code>ul</code> tag."],
    ["</ul>", "You need a closing <code>ul</code> tag."],
    ["<li", "You need a <code>li</code> tag."],
    ["</li>", "You need a closing <code>li</code> tag."],
    ["<a", "You need a <code>a</code> tag."],
    ["</a>", "You need a closing <code>a</code> tag."],
    ["class", "Don't forget to set the class of the nav."],
    ["dropdown-menu", "You need a dropdown menu. Set the class of an <code>li</code> element as <code>dropdown-menu</code>."],
    ["href=", "Set the <code>href</code> of an <code>a</code> tag to a couple of different sites."],
    ["develop.webdevtutorials.net", "One of the links must be to <code>http://develop.webdevtutorials.net</code>."]
    ];
?>