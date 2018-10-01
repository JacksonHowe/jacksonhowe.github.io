<?php
    // METADATA
    $title = "HTML Lesson 5: Forms";
    $meta_description = "In 'Forms', learn how to let your users input into content into your site.";
    $id = "4";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/dcp_ZSf3G9E";
    $question1 = ["Which tag and attributes are required to make a form?", "<code>form</code>, <code>action</code>, <code>method</code>", "<code>form</code>, <code>submit</code>, <code>get</code>", "<code>input</code>, <code>action</code>, <code>post</code>", 1];
    $question2 = ["Which statement is <strong>false</strong> about the <code>GET</code> and <code>POST</code> form methods?", "Requests sent using the <code>GET</code> method are saved in browser history.", "You should use the <code>POST</code> method to send confidential information.", "The <code>GET</code> method does not have a length limit.", 3];
    $question3 = ["Which line of code displays a masked input box (for a password)?", "<code>&lt;input type='text' name='password'&gt;</code>", "<code>&lt;input type='password' name='password'&gt;</code>", "<code>&lt;input type='radio' name='password'&gt;</code>", 2];
    
    // GLOSSARY
    $summary = "<p>Forms allow users to input data into your website. For example, forms are used to input a username, search query, or select an option from a list.</p><p>To implement one in HTML, use the <code>form</code> element. Specify the <code>action</code> and the <code>method</code> attributes. The <code>action</code> attribute should be the URL (link) in which to send the form to when the user clicks submit. This URL is usually a file written in a language like PHP that reads the users input and uses it in some way (like inserting it into a database). The <code>method</code> attribute must be either <code>GET</code> or <code>POST</code>. The <code>method</code> specifies the way that the data should be sent. Both the <code>GET</code> and the <code>POST</code> methods have advantages and disadvantages to their use. The <code>GET</code> method puts the data in the URL, and therefore should not be used for data like passwords. It is generally used to get information. On the other hand, the <code>POST</code> method is used for sensitive information, because the requests are not stored in browser history.</p><p>Once inside the opening and closing <code>form</code> tags, specify every input using the <code>input</code> tag. The type of input is specified using the <code>type</code> attribute. Possible types include: <code>text</code> (which creates an input box), <code>password</code> (which creates a password box), <code>radio</code> (which creates a radio button), <code>checkbox</code> (which creates a checkbox), and <code>submit</code> (which makes a button to submit the form with).</p><p>You also need to give every input a <code>name</code>. The <code>name</code> attribute is used by the receiving file to identify the input, so make sure to include it. Use the same name for items in a radio or checkbox array. For these types of forms, include the value attribute, which uniquely identifies an item within a radio or checkbox array.</p>";
    
    $code_example = '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Forms&lt;/title&gt;
    &lt;/head&gt;
    
    &lt;body&gt;
    
        &lt;div class=\'container\'&gt;
    
            &lt;form action=\'http://example.com/form.php\' method=\'post\'&gt;
                Text Input: &lt;input type=\'text\' name=\'username\'&gt; &lt;br&gt;
                
                Password Input: &lt;input type=\'password\' name=\'password\'&gt; &lt;br&gt;
                
                Radio Buttons: &lt;input type=\'radio\' name=\'radioInput\'  value=\'option1\'&gt; Option 1 &lt;input type=\'radio\' name=\'radioInput\'  value=\'option2\'&gt; Option 2 &lt;br&gt;
                
                Radio Buttons: &lt;input type=\'checkbox\' name=\'checkboxInput\'  value=\'option1\'&gt; Option 1 &lt;input type=\'checkbox\' name=\'checkboxInput\'  value=\'option2\'&gt; Option 2 &lt;br&gt;
                
                &lt;input type=\'submit\'&gt;
            &lt;/form&gt;
    
        &lt;/div&gt;
    
    &lt;/body&gt;
&lt;/html&gt;';

    $glossary = [
        ["<code>&lt;form&gt;</code>", "The form tag. Used to implement a form. Include the <code>action</code> and <code>method</code> attributes."],
        ["<code>&lt;form action='http://example.com/form'&gt;</code>", "The <code>action</code> action specifies the location to send the form to when the user clicks submit."],
        ["<code>&lt;form method='GET'&gt;</code>", "The <code>method</code> attribute specifies the method in which to send the form on submit. Use either the <code>GET</code> or the <code>POST</code> methods, depending on circumstances. Use the <code>GET</code> method when retrieving information and use the <code>POST</code> method otherwise."]
        ];
    
    // EXERCISE
    $editor_prefill = '';

    $challenge = "You own a phone company. You need to make the page on your website that lets users order a new service plan. To do this, create a form in HTML. The form will need the following:</p><ul><li>A text input for their name. Use the name- 'name'</li><li>Another text input for their email address. Use the name- 'email'</li><li>A password box for their new password. Use the name- 'password'</li><li>And an array of radio buttons to pick their plan choice. Possible plans include the 'basic package', the 'accelerated package', and the 'infinity package'. Use the name- 'package'</li><li>A submit button</li></ul><p>It is important to use the specified names in the name attribute. Submit the form to the following URL: <code>http://develop.webdevtutorials.net/lesson/4</code>. When you test your completed form. That page should display the values that you entered. If you don't see anything on the page (or an error), then you did something wrong.";
    $hint1 = "What might the finished form look like? It will likely have 3 input boxes, 3 radio buttons, and a submit button. You could use columns to center the page. Don't forget to add text next to the inputs such as 'Name:'. Also remember that the <code>input</code> tag does not have a closing tag. Instead, use the <code>br</code> tag to make a new line.";
    $hint2 = "Don't forget the 2 form attributes. Set <code>action</code> to the above URL. Because we are not GETting information, set <code>method</code> to <code>POST</code>.";
    $hint3 = "If you think you're done, click the view button and fill out your form. If you get a page that has your input, nice work. If not, you better check your code.";
    
    $required_strings = [
    ["<form", "You need a <code>form</code> tag."],
    ["</form>", "You need a closing <code>form</code> tag."],
    ["action=", "You need to use the action attribute within the opening form tag. It should look like this: <code>&lt;form action='http://develop.webdevtutorials.net/lesson/4'&gt;</code>"],
    ["method=", "You need to use the method attribute within the opening form tag. It should look like this: <code>&lt;form method='POST'&gt;</code>"],
    ["POST", "Use the POST method to send the form. Make sure to use capital letters."],
    ["<input", "Use the <code>input</code> tag to include inputs."],
    ["type='text'", "type=\"text\"", "For your name and username boxes, set the <code>type</code> of the <code>input</code> to <code>text</code>."],
    ["type='password'", "type=\"password\"", "For your password box, set the <code>type</code> of the <code>input</code> to <code>password</code>. This will mask the contents for security."],
    ["type='radio'", "type=\"radio\"", "For your name and username boxes, set the <code>type</code> of the <code>input</code> to <code>radio</code>."],
    ["value=", "You need to set the <code>value</code> attribute on your radio inputs. The value of each should be unique. Try using 'infinity' for one."],
    ["name=", "Set the <code>name</code> attribute on all of your inputs."]
    ];
?>