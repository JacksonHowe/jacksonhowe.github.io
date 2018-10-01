<?php
    // METADATA
    $title = "HTML Lesson 4: Images, Videos, &amp; Icons";
    $meta_description = "In 'Images, Videos, &amp; Icons', learn how to add media to your website.";
    $id = "3";
    
    // INTRODUCTION
    $video_src = "//www.youtube.com/embed/Y1XZRqoGA9s";
    $question1 = ["How do you tell the image tag what image to use?", "With the <code>src</code> attribute. Just say, <code>src='url'</code>.", "Put the URL between the opening and closing <code>img</code> tags.", "With the <code>alt</code> attribute.", 1];
    $question2 = ["Including what attribute in the <code>video</code> tag will enable users to play and pause the video?", "<code>autoplay</code>", "<code>pause='true'</code>", "<code>controls</code>", 3];
    $question3 = ["Which statement describing alternate text is false?", "Alternate text is used to assist screen readers, which can't read an image.", "Alternate text is an alternate image URL.", "Alternate text describes an image.", 2];
    
    // GLOSSARY
    $summary = "<p>To make a website more lively, incude media such as images, videos, and icons. For example, this code will include an image from the WebDevTutorials library (you can browse the library <a href='http://develop.webdevtutorials.net/images'>here</a>):</p><pre>&lt;img src='http://develop.webdevtutorials.net/images/medium-2.jpg' alt='Demonstration Image' class='img-responsive'&gt;</pre><p>The <code>img</code> element is used to include images in HTML. The <code>src</code> attribute is the link where the image is located. You can use any image URL as long as you remember to include the http and the file extension (.jpg etc). The <code>alt</code> attribute is not required, but is generally included as a description of the image for screen readers or text browsers. The class <code>img-responsive</code> makes the image shrink to fit in its container. If not included, the image will appear at it's original size.</p><p>To include a video, use the following code:</p><pre>&lt;video src='http://develop.webdevtutorials.net/videos/flow.mp4' height='200px' width='300px' controls autoplay&gt;&lt;/video&gt;</pre><p>Again, you can specify any video URL in the <code>src</code> attribute. Just include the .mp4 extension. The <code>height</code> and <code>width</code> attributes affect the size of the video player. The <code>autoplay</code> and <code>controls</code> attributes tell the player to play the video automatically and to include play/pause buttons.</p><p>Finally, use this code for icons: </p><pre>&lt;p&gt;&lt;span class='glyphicon glyphicon-repeat'&gt;&lt;/span&gt;&lt;/p&gt;</pre><p>Simply use the <code>span</code> tag with the attribute <code>class</code> set to the icon's name. See the video for the full listing of icons. Don't forget to close the <code>span</code> tag.</p>";
    
    $code_example = '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Images, Videos, &amp; Icons&lt;/title&gt;
    &lt;/head&gt;
    
    &lt;body&gt;
    
        &lt;div class=\'container\'&gt;
    
            &lt;div class=\'row\'&gt;
                &lt;div class=\'col-xs-6\'&gt;
                    &lt;p class=\'pull-center\'&gt;&lt;span class=\'glyphicon glyphicon-comment\'&gt;&lt;/span&gt; Comment&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
    
            &lt;div class=\'row\'&gt;
                &lt;div class=\'col-xs-6\'&gt;
                    &lt;img src=\'http://develop.webdevtutorials.net/images/medium-4.png\' alt=\'Monkeybear\' class=\'img-responsive\'&gt;
                &lt;/div&gt;
    
                &lt;div class=\'col-xs-6\'&gt;
                    &lt;video src=\'http://develop.webdevtutorials.net/videos/tour.mp4\' controls&gt;
                &lt;/div&gt;
            &lt;/div&gt;
    
        &lt;/div&gt;
    
    &lt;/body&gt;
&lt;/html&gt;';

    $glossary = [
        ["<code>&lt;img&gt;</code>", "The image tag. Used to include an image on a webpage. The image tag does not have a closing tag. Use attributes <code>src</code> for the image location, <code>alt</code> for the image alternate text, and <code>class='img-responsive'</code> to make the image auto-shrink."],
        ["<code>&lt;video&gt;</code>", "The video tag. Used to include video content on a webpage. The video tag <strong>does</strong> have a closing tag. Use attributes <code>src</code> for the video location, <code>height</code> and <code>width</code> for the size of the player (in px), <code>autoplay</code> to make the video play at page load, and <code>controls</code> to equip the player with playback controls."],
        ["<code>&lt;span&gt;</code>", "The element used to include icons. Use the <code>class='...'</code> attribute to specify the name of the icon, such as <code>glyphicon glyphicon-download</code>."]
        ];
    
    // EXERCISE
    $editor_prefill = '';

    $challenge = "Play around with images, videos, and icons. Make a nice little website for a tourism company in the pacific using media from the developer library or from online images that you have permission to use. Click the resources tab below to access the developer library. Be sure to include at least: <ul><li>1 Video</li><li>2 Images</li><li>2 Icons</li><li>Some headings such as 'Pricing', 'Exotic Locations', or 'Beautiful Scenery'.</li><li>Some paragraphs</li></ul>";
    $hint1 = "Start with the basics. Most of this will be a review of what you've learned so far. Get the <code>DOCTYPE</code> declaration and <code>html</code> tags. Get a <code>title</code> and put a <code>container</code> in your <code>body</code>. You can use the column system from last lesson to structure your tourism website.";
    $hint2 = "You might want to visit some real tourism websites for ideas. Typically you might have a heading with your company name, then 3 columns with headings, pictures, and descriptions. Don't forget to throw in some icons and video content.";
    $hint3 = "</p><h2><span class='glyphicon glyphicon-road></span> Visit Wildlife</h2><img src='//develop.webdevtutorials.net/images/medium-4.png' alt='wildlife' class='img-responsive'><p>See exotic wildlife on our pacific cruise such as the lemur and the pelican. Check out our package deal below...";
    
    $required_strings = [
    ["<img", "Try using an image. See the glossary for examples on how to do this."],
    ["<video", "Try using a video. See the glossary for examples on how to do this."],
    ["<span", "Try using an icon. See the glossary for examples on how to do this."],
    ["</span>", "Don't forget to close your <code>span</code> tags."],
    ["</video>", "Don't forget to close your <code>video</code> tags."],
    ["src", "The <code>src</code> attribute was not found! This is required in both the <code>img</code> and <code>video</code> tags."]
    ];
?>