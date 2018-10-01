<!DOCTYPE html>
<html lang="en">
    <head>
        <title>WebDevTutorials Editor</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jackson Howe">
        <meta name='description' content="WebDevTutorials Editor — An Integrated Development Environment syntax coloring and instant execution.">
        <meta name="keywords" content="tutorial web web development code program programming HTML PHP Javascript learn webdevtutorials academy school college learntocode teaching style visual auditory">
            
        <link href="http://webdevtutorials.net/resources/style/stylesheet.css" rel="stylesheet" />
        <script src="http://webdevtutorials.net/resources/style/jquery.js"></script>

        <style>
            #editor {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 65%;
            }
        
            #display {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 65%;
                width: 35%;
                padding-top: 20px;
                padding-bottom: 20px;
                padding-right: 40px;
                padding-left: 40px;
                background-color: rgb(57, 57, 57);
                overflow: auto;
            }
        
            p, h1, h2, h3, h4, h5, li {
                color: white;
            }
        
            #top {
                color: rgb(72,72,72);
                border-color: rgb(72,72,72);
                margin-bottom: 8px;
                margin-top: 18px;
            }
            
            #bottom {
                color: rgb(72,72,72);
                border-color: rgb(72,72,72);
                margin-top: 8px;
                margin-bottom: 18px;
            }
        
            a {
                color: rgb(128,128,128);
                transition: color 0.5s linear;
                -webkit-transition: color 0.5s linear;
                -o-transition: color 0.5s linear;
                -ms-transition: color 0.5s linear;
                -moz-transition: color 0.5s linear;
            }
        
            a:hover {
                color: white;
                text-decoration: none;
                cursor: pointer;
            }
        
            #responseWindow {
                position: relative;
                width: 100%;
                height: 200px;
                background-color: white;
                margin-top: 30px;
                margin-bottom: 30px;
                overflow: auto;
                padding-left: 6px;
                padding-right: 6px;
                padding-top: 6px;
                padding-bottom: 6px;
            }
        </style>
    </head>

    <body>

        <div id="modal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 style="color: black;" class="modal-title">Verification Report</h4>
                    </div>
                    
                    <div class="modal-body">
                        <iframe id="modalbody" width="100%" height="60%" seamless></iframe>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Editor -->
        <div id="editor"></div>
        <script src="http://webdevtutorials.net/resources/ace/ace.js" type="text/javascript" charset="utf-8"></script>
        <script>
            var editor = ace.edit("editor");
            editor.setTheme("ace/theme/tomorrow_night_eighties");
            editor.getSession().setMode("ace/mode/html");
            editor.resize(true);
            editor.focus();
            editor.getSession().on('change', function() {
                document.getElementById("responseWindow").src = "data:text/html;charset=utf-8," + " <link href='http://webdevtutorials.net/resources/style/stylesheet.css' rel='stylesheet'/> <link href='http://webdevtutorials.net/resources/style/theme.css' rel='stylesheet'/> <script src='http://webdevtutorials.net/resources/style/jquery.js'> </scr" + "ipt> <script src='http://webdevtutorials.net/resources/style/globaljs.js'> </scr" + "ipt>" + escape(editor.getValue());
            });
        </script>
        
        <!-- Display -->
        <div class="container" id="display">
            <p class='lead text-center'>WDT Editor</p>

            <!-- Instant response -->
            <iframe seamless='seamless' name="responseWindow" id="responseWindow" src="data:text/html;charset=utf-8, <link href='http://webdevtutorials.net/resources/style/stylesheet.css' rel='stylesheet'/> <br> <p class='text-center' style='color: gray'><strong>Instant Result Window</strong><br>Your rendered code will appear here as you type</p>"></iframe>
            
            <!-- View and check buttons -->
            <button class="btn btn-default btn-block" onclick="view();"><span class="glyphicon glyphicon-eye-open"></span> View</button>
            <button id="checkButton" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modal" title="Make sure the result looks the way you'd like before submitting." onclick="validate();"><span class="glyphicon glyphicon-ok"></span> Check</button>
            
            <!-- Resources -->
            <hr id="top">
            <p class="text-center"><strong><a class="orange" onclick="toggle('resources')">Resources</a></strong></p>
            <div id="resources" style="display:none">
                <p class="text-center">
                <a href='//webdevtutorials.net/account' target='_blank' class='btn btn-default'>Glossary</a>
                <a href="http://develop.webdevtutorials.net/images" target="_blank" class="btn btn-default">Developer Library</a>
                </p>
            </div>
            <hr id="bottom">
            
            <!-- Problem Solving -->
            <hr id="top">
            <p class="text-center"><strong><a class="orange" onclick="toggle('ps')">Problem Solving Techniques</a></strong></p>
            <div id="ps" style="display:none">
                <p>When coding, you often find yourself doing something called 'debugging' — looking for mistakes you might have made. Here are some techniques to help you: </p>
                <ul>
                    <li>Check the result often - don't wait until you have hundreds of lines to see what it looks like.</li>
                    <li>Make sure all your tags have closing tags (except those which don't need it).</li>
                    <li>Temporarily delete or comment-out lines of code until you get the expected code.</li>
                    <li>Make your code readable. Use comments and intent.</li>
                    <li>Most browsers have debugging consoles. Find out how to open yours.</li>
                    <li>Start from scratch. Some problems are best solved by restarting (unfortunatly).</li>
                    <li>Try something else. Maybe there's another solution to your problem.</li>
                    <li>If all else fails, ask for help <a href="http://webdevtutorials.net/help#contact" target="_blank">here</a>.</li>
                </ul>
            </div>
            <hr id="bottom">
            
            <!-- Editor Assistant -->
            <hr id="top">
            <p class="text-center"><strong><a class="orange" onclick="toggle('assistant')">Editor Assistant</a></strong></p>
            <div id="assistant" style="display:none">
                <p>Welcome to the exercise editor. The page before you is called an integrated development environment (IDE). Get instructions on the right side, and type the code on the left.</p>
                <h4>What do all the colors in the code mean?</h4>
                <p>When you type code in the IDE, the editor will highlight syntax to help you read the code better. Don't worry, it doesn't mean anything in the actual HTML.</p>
                <h4>Why is code appearing as I type?</h4>
                <p>As you know, most tags in HMTL have a closing tag. The editor likes to help you out by automatically inserting that closing tag for you.</p>
                <h4>What are the resources?</h4>
                <p>To help you in the challenge, you have access to a couple of resources. There is a link to the syntax glossary for the current lesson, as well as access to the developer library.</p>
                <h4>What's the developer library?</h4>
                <p>In some challenges, you may need special resources like images. The developer library, located at <a href="http://develop.webdevtutorials.net" target="_blank">develop.webdevtutorials.net</a> contains some sample images that you might use. For example, this code makes a baboon:</p> <pre>&lt;img src="http://develop.webdevtutorials.net/images/medium-4.png"&gt;</pre> <p>You can see the available images by visiting the developer library.</p>
                <h4>How do I see what my code is doing?</h4>
                <p>Good question. Click the <em>view</em> button on the right hand side. A new tab will open with your webpage.</p>
                <h4>What web browsers do you support?</h4>
                <p>The editor will run on Google Chrome, Mozilla Firefox, and Opera without problem. Apple Safari is supported, however due to some limitations, the title element will not appear on websites you render with the editor. Microsoft Internet Explorer is not supported.</p>
            </div>
            <hr id="bottom">
            
            <!-- Bottom -->
            <br>
            <p class="text-center"><small><a href="http://webdevtutorials.net/about">About</a> | <a onclick="toggle('assistant')">Help</a> | <a href="http://webdevtutorials.net/about#terms">Terms</a> <br> &copy; 2013 - 2014 WebDevTutorials. All rights reserved.</small></p>
        </div>
        
        <script>
            // Open view/result window
            function view() {
                var newPage = window.open("", "newPage");
                var code = editor.getValue();
                var text = "<link href='http://webdevtutorials.net/resources/style/stylesheet.css' rel='stylesheet'/> <link href='http://webdevtutorials.net/resources/style/theme.css' rel='stylesheet'/> <script src='http://webdevtutorials.net/resources/style/jquery.js'> </scr" + "ipt> <script src='http://webdevtutorials.net/resources/style/globaljs.js'> </scr" + "ipt> <span style='display:block;' id='alert' onclick='window.close();' class='label label-default'><span class='glyphicon glyphicon-circle-arrow-left pull-left'></span> WebDevTutorials - Close this tab or click here to return to the editor.<br></span>";
                newPage.document.body.innerHTML = "";
                newPage.document.write(text + code);
            }
        
            // Opens or closes information boxes on the side
            function toggle(id) {
                var p = document.getElementById(id);
                if (p.style.display == 'none') {
                    p.style.display = 'block';
                } else {
                    p.style.display = 'none';
                }
            }
                                                                   
            function validate() {
                var xmlhttp = new XMLHttpRequest();
                
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var newDOM = document.createElement('div');
                        newDOM.innerHTML = xmlhttp.responseText;
                        var validation = newDOM.getElementsByTagName("ol")[0].innerHTML;
                        validation = validation.replace("<li class=\"info warning\"><p><strong>Warning</strong>: <span>Being lax about non-HTML Content-Type: text/plain</span></p></li>", "");
                       if (validation == "") {
                            validation = "Code validates against HTML5 specifications sucessfully!";
                       }
                        document.getElementById("modalbody").src = "data:text/html;charset=utf-8," + validation;
                    }
                    else if (xmlhttp.readyState == 4 && xmlhttp.status != 200) {
                        document.getElementById("modalbody").src = "data:text/html;charset=utf-8, <h2>" + xmlhttp.status + "</h2><p>An Error has occured.</p>";
                    }
                    else {
                        document.getElementById("modalbody").src = "data:text/html;charset=utf-8, <p>Loading...</p>";
                    }
                }
                
                xmlhttp.open("POST", "http://validator.nu/?laxtype=yes&parser=html5", true);
                xmlhttp.setRequestHeader("Content-type", "text/plain;charset=utf-8");
                xmlhttp.send(editor.getValue());
            }
        </script>

        <script src="http://webdevtutorials.net/resources/style/globaljs.js"></script>
    </body>
</html>