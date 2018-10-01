<?php
    // METADATA
    $title = "HTML Lesson 2: Stylizing Text";
    $meta_description = "In 'Stylizing Text', learn how to give text style, such as making text bold or emphasized. Also learn basic structures such as lists and quotes.";
    $id = "1";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/TsCnr8SCloU";
    $question1 = ["Which of the following tags does <em>not</em> make text appear bold or underlined?", "<code>&lt;div&gt;</code>", "<code>&lt;strong&gt;</code>", "<code>&lt;u&gt;</code>", 1];
    $question2 = ["What is the difference between the <code>&lt;ol&gt;</code> and <code>&lt;ul&gt;</code> tags?", "The <code>&lt;ul&gt;</code> tag makes text bold while the <code>&lt;ol&gt;</code> tag makes them italic.", "There is no differece between the two. They do the same thing.", "The <code>&lt;ol&gt;</code> tag is for ordered lists, or lists that are numbered while the <code>&lt;ul&gt;</code> is an unordered list- a list with bullet points.", 3];
    $question3 = ["Which of these opening tags needs a closing tag too?", "<code>&lt;hr&gt;</code>", "<code>&lt;br&gt;</code>", "<code>&lt;p&gt;</code>", 3];
    
    // GLOSSARY
    $summary = "<p>The <code>&lt;p&gt;</code> tag is not the only tag available for putting text on a webpage. Imagine using a desktop word processor like Microsoft Word. You have a whole range of possibilities for styling text. The same goes when writing HTML code. You can change the color, the size, the emphasis, and the alignment. You can also make quotes, lists, and headings. All you have to do to specify format is wrap the text in tags. For example, to make a word bold, use the <code>&lt;strong&gt;</code> tag.</p><br><p>An apple a day keeps the <strong>doctor</strong> away!</p><p><pre>&lt;p&gt;An apple a day keeps the &lt;strong&gt;doctor&lt;/strong&gt; away!&lt;/p&gt;</pre></p><br><p>To specify a heading, use the <code>&lt;h1&gt;</code> — <code>&lt;h6&gt;</code> tag. The smaller the number, the bigger the heading.</p><p>To make a list, utilize either the <code>&lt;ol&gt;</code> or the <code>&lt;ul&gt;</code> tag. The difference between the two is that the <strong>o</strong>rdered <strong>l</strong>ist tag will use numbers as bullets while the <strong>u</strong>nordered <strong>l</strong>ist tag will use bullet points. Then, wrap each list item in <code>&lt;li&gt;</code> tags.</p><p>Finally, comments are used to make notes to yourself or to others who might read the code. The computer ignores comments in an HTML file: <code>&lt;!-- The computer doesn't see this --&gt;</code></p>";
    
    $code_example = '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Shopping List&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2 class=\'text-center\'&gt;Shopping List &lt;small&gt;For Monday&lt;/small&gt;&lt;/h2&gt;
        
        &lt;h4&gt;Frozen Goods&lt;/h4&gt;
        &lt;ul&gt;
            &lt;li&gt;frozen food 1&lt;/li&gt;
            &lt;li&gt;the second frozen food&lt;/li&gt;
        &lt;/ul&gt;
        
        &lt;h4&gt;Snacks&lt;/h4&gt;
        &lt;ul&gt;
            &lt;li&gt;We will have the first snack item here&lt;/li&gt;
            &lt;li&gt;And the second here in this unordered list&lt;/li&gt;
        &lt;/ul&gt;
        
        &lt;hr&gt; &lt;!-- remember that the hr tag doesn\'t have a closing tag --&gt;
        
        &lt;h4&gt;Directions to supermarket&lt;/h4&gt;
        &lt;ol&gt;
            &lt;li&gt;Take route 3&lt;/li&gt;
            &lt;li&gt;turn right&lt;/li&gt;
            &lt;li&gt;The store is on your left&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/body&gt;
&lt;/html&gt;';
    
    $glossary = [
        ["<code>&lt;h1&gt;</code> - <code>&lt;h6&gt;</code>", "Headings and subheadings. <code>&lt;h1&gt;</code> is the largest and <code>&lt;h6&gt;</code> is merely a subheading."],
        ["<code>&lt;small&gt; &lt;/small&gt;</code>", "Include this tag inside a heading tag to add subtext."],
        ["<code>&lt;p class='lead'&gt; &lt;/p&gt;</code>", "The lead class emphasizes paragraphs."],
        ["<code>&lt;p class='text-center&gt; &lt;/p&gt;</code>", "The text-center, text-right, and text-left classes control the alignment of a paragraph."],
        ["<code>&lt;strong&gt; &lt;/strong&gt;</code>", "<strong>Bold</strong>"],
        ["<code>&lt;em&gt; &lt;/em&gt;</code>", "<em>Italics</em>"],
        ["<code>&lt;u&gt; &lt;/u&gt;</code>", "<u>Underline</u>"],
        ["<code>&lt;blockquote&gt; &lt;/blockquote&gt;</code>", "Creates a quote. Note that putting a small tag inside a blockquote is good for the quote's source."],
        ["<code>&lt;p style='color:red;'&gt; &lt;/p&gt;</code>", "The style attribute defines style. The color specification defines color. The color spec can take common color names, hexadecimal color codes, or RGB color codes."],
        ["<code>&lt;ul&gt; &lt;/ul&gt;</code>", "Unordered list. Use the <code>&lt;li&gt;</code> tag inside for every list item."],
        ["<code>&lt;ol&gt; &lt;/ol&gt;</code>", "Ordered list. Use the <code>&lt;li&gt;</code> tag inside for every list item."],
        ["<code>&lt;br&gt;</code>", "Line break. Note that the closing tag is not required."],
        ["<code>&lt;hr&gt;</code>", "A horizontal line across the page. Note that the closing tag is not required."],
        ["<code>&lt;!-- Comment --&gt;</code>", "Comment. The computer ignores comments."]
        ];
    
    // EXERCISE
    $editor_prefill = '&lt;!-- Here is the file for your second challenge. --&gt;
&lt;!-- Remember, click the challenge button on the right to get started. --&gt;';

    $challenge = "This time, you'll be making a biography webpage for yourself. Title the page 'Biography'. Use the different styles we talked about in the video in your biography. Use an <code>&lt;h1&gt;</code> tag to display a header with your name in it. Under the heading, use a lead paragraph to summarize yourself. Tell one of your favorite quotes too.</p><p>Next, use 3 subheadings (<code>&lt;h3&gt;</code> tags) and lists under the subheadings that describe your education, experience, and achievements, respectively.</p><p>Also, try out using some underline, bold, and italic tags. You can also try coloring something. Don't forget to add some comments.";
    $hint1 = "If you don't know where to start, get your code out from last tutorial. It provides the basic structure, including the <code>&lt;DOCTYPE&gt;</code> declaration, <code>&lt;html&gt;</code> tags, <code>&lt;head&gt;</code> tags, <code>&lt;body&gt;</code> tags, and the <code>&lt;title&gt;</code>.";
    $hint2 = "Don't forget to close your tags once you're done applying them.";
    $hint3 = "In case you're having trouble remembering what an attribute looks like, here is an example of using <code>&lt;p&gt;</code>'s class attribute: <pre>&lt;p class='lead'&gt;This paragraph is of class lead.&lt;/p&gt;</pre></p>";
    
    $required_strings = [
    ["Biography", "Your title doesn't seem quite right. You should have the words, 'Biography' in the title element."],
    ["<title", "You don't seem to have an opening <code>&lt;title&gt;</code> tag. The title tag needs to be positioned in the head of a webpage."],
    ["</title>", "Make sure you have a closing <code>&lt;title&gt;</code> tag."],
    ["<h1", "Make sure you use that <code>&lt;h1&gt;</code> tag for your header. See the challenge specification for details."],
    ["</h1>", "Better close that <code>&lt;h1&gt;</code> tag."],
    ["class=", "Use the <code>class</code> attribute in a <code>p</code> tag to specify the <code>lead</code> class."],
    ["<blockquote", "As seen in the spec, include a quote about yourself using the <code>&lt;blockquote&gt;</code> tag."],
    ["</blockquote>", "Close the <code>&lt;blockquote&gt;</code>!"],
    ["<h3>", "Use some <code>&lt;h3&gt;</code> tags for the subheadings described in the spec."],
    ["Experience", "You need an experience subheading. Use the <code>&lt;h3&gt;</code> tag."],
    ["Education", "You need an education subheading. Use the <code>&lt;h3&gt;</code> tag."],
    ["Achievements", "You need an achievements subheading. Use the <code>&lt;h3&gt;</code> tag."],
    ["<strong", "Try out making something bold. We want to always use the <code>&lt;strong&gt;</code> tag compared to the <code>&lt;b&gt;</code> tag because the <code>&lt;strong&gt;</code> tag works better with screenreaders."],
    ["<em", "Try out making something italic. We want to always use the <code>&lt;em&gt;</code> tag compared to the <code>&lt;i&gt;</code> tag because the <code>&lt;em&gt;</code> tag works better with screenreaders."],
    ["<u", "Try out making something underlined. Use the <code>&lt;u&gt;</code> tag."],
    ["<!--", "Do you have any comments yet? Try adding one."],
    ["-->", "Never forget to close a comment tag with <code>--&gt;</code>."],
    ];
?>