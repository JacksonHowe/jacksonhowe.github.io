<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Making a Real Website: a Step-by-Step Tutorial</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jackson Howe">
        <meta name="description" content="From Awesome to Amazing: Making a Real Website Step-by-Step Tutorial on WebDevTutorials. Learn how to write your own website in HTML and publish it to the web. This tutorial covers everything from web hosting to directory content.">
        <meta name="keywords" content="tutorial web web development code program programming HTML PHP Javascript learn webdevtutorials academy school college learntocode teaching style visual auditory">

        <link href="resources/style/stylesheet.css" rel="stylesheet" />
        <script src="resources/style/jquery.js"></script>
        <script src="resources/style/localscroll.js"></script>
        <script src="resources/style/scrollto.js"></script>

        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>

        <style>
            body {
                background-color: rgb(196, 191, 187);
            }

            div.content-frame {
                background-color: white;
                padding-left: 0;
                padding-right: 0;
                padding-top: 0;
                padding-bottom: 0;
            }

            div.text-frame {
                padding-left: 7%;
                padding-right: 7%;
                padding-top: 40px;
                padding-bottom: 30px;
            }

            div.dark {
                background-color: rgb(196, 191, 187);
            }
        
            div.title {
                padding-top: 15px;
                padding-bottom: 15px;
            }
        
            p.no-padding {
                margin-bottom: 0;
            }
        
            p.extra-padded {
                padding-top: 10px;
                padding-bottom: 10px;
            }
        
            span.blue {
                color: blue;
            }
            
            span.red {
                color: red;
            }
        
            span.green {
                color: green;
            }
        
            a.muted {
                color: black;
            }
        </style>
    </head>

    <body>
        <?php
            include_once("resources/functions.php");
            include_once("resources/analytics.php");
        ?>

        <div class="container content-frame" id="main">
            <div class="text-frame dark title">
                <p class="lead text-center no-padding">WebDevTutorials</p>
            </div>
            
            <img src="resources/images/start/cover.jpg" alt="Making a real website" class="img-responsive">
            
            <div class="text-frame">
                <p>So, you've decided to make a real website. Up until now, you've used the editor to make temporary webpages, but those are lost once you click finish. A real website allows you to hold an online presence for as long as you please. Before we begin, realize that anything you put online is viewable by anyone. Just because you don't tell people the URL doesn't necessarily mean someone can't find it.</p>
                <p>As you may recall from the <a href="http://webdevtutorials.net/lesson?section=1&tutorial=0">first HTML tutorial</a>, when people want to visit a website, their computer sends a message to another computer asking for a certain file. This computer that stores all of a website's files is called a server. Technically, you could setup your own computer as a server, but because it is likely to have a lot of downtime (time when not able to serve data), it is generally better to invest in a professional web host. They are companies who have hundreds of servers capable of storing web files with virtually 100% uptime (working all the time). Some of these hosts provide their service at a price, while other offer free plans. We'll talk more about getting a host in <a href="#section1">Section 1</a>.</p>
                <p>Once you have a host with whom you can store your web files, you'll need a domain name to access them from. The domain name is the address you type into your browser to visit a website (such as www.google.com). Almost all generic domain names (.com, .net, .org) will require an annual fee, but again, there are ways to secure a domain name for free. We'll talk domain names in <a href="#section2">Section 2</a>.</p>
                <p>Finally, you'll just need to create the files for your site on your computer. There are a number of free code editors out there for every operating system. Make the files, upload them to your server using a FTP client, and there you go! <a href="#section3">Section 3</a> contains a list of recommendations for FTP clients.</p>
            </div>

            <div class="text-frame dark">
                <div class="row">
                    <div class="col-xs-4"><a href="#section1"><img class="img-responsive img-circle" alt="Section 1: Web Hosting" src="resources/images/start/section1-thumb.jpg"></a></div>
                    <div class="col-xs-4"><a href="#section2"><img class="img-responsive img-circle" alt="Section 2: Domains" src="resources/images/start/section2-thumb.jpg"></a></div>
                    <div class="col-xs-4"><a href="#section3"><img class="img-responsive img-circle" alt="Section 3: Logistics" src="resources/images/start/section3-thumb.jpg"></a></div>
                </div>
            </div>

            <div class="text-frame">
                <div class="row">
                    <div class="col-xs-2">
                        <img class="img-responsive" alt="Section 1: Web Hosting" src="resources/images/start/section1-number.jpg">
                    </div>
                    <div class="col-xs-10">
                        <p class="lead" style="color: #0099FF;"><a id="section1"></a>Web Hosting</p>
                        <p>The first thing you'll need to do is find a web host to host your web files for you. Most hosts boast more than 99% uptime, great speed, and virtually unlimited storage. There are both free and paid options available, but the trick is in finding one that suits your individual needs. Here are some of my personal favorites:</p>
                        
                        <h4>Free Hosts</h4>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h4>x10 Hosting</h4>
                                        <p class="extra-padded">My favorite of free hosts, x10 offers almost unlimited storage, and a host of great features with no ads. Simply visit the control panel once per month to keep a free account active.</p>
                                        
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> No forced ads</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Good uptime</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Free subdomain</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> DNS control settings</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> MySQL database</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Email accounts</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> FTP access</p>
                                        
                                        <p><a href="http://x10hosting.com" target="_blank" class="btn btn-default" role="button">Visit x10</a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h4>BIZ.NF</h4>
                                        <p class="extra-padded">Another great host, biz.nf comes with a plethora of options packaged in a modern interface.<br><br><br></p>
                                        
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> No forced ads</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Free subdomain</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> DNS control settings</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> MySQL database</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Email accounts</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> FTP access</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> .htaccess Generator</p>
                                        
                                        <p><a href="http://biz.nf" target="_blank" class="btn btn-default" role="button">Visit Biz.nf</a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h4>000webhost</h4>
                                        <p class="extra-padded">Last but certainly not least, 000webhost is known by its name. Advanced hosting with no ads or subscription necessary.<br><br></p>
                                        
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> No forced ads</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Multiple free subdomains</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> DNS control settings</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> MySQL database</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Email accounts</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> FTP access</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> 99% Uptime</p>
                                        
                                        <p><a href="http://000webhost.com" target="_blank" class="btn btn-default" role="button">Visit 000webhost</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <h4>Paid Hosts</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h4>Dreamhost</h4>
                                        <p class="extra-padded"><em>$8.95/mo</em></p>
                                        
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Unlimited disk storage</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Unlimited bandwidth</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Unlimited domains hosted</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> MySQL databases</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Email accounts</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> FTP access</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Full shell access</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> SSL server</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> 24/7 support</p>
                                        
                                        <p><a href="http://dreamhost.com" target="_blank" class="btn btn-default" role="button">Visit Dreamhost</a></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h4>Hostgator</h4>
                                        <p class="extra-padded"><em>Hatchling plan — $3.96/mo</em></p>
                                        
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Unlimited disk storage</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Unlimited bandwidth</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> 1 domain hosted</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> MySQL databases</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Email accounts</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> FTP access</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Shared SSL server</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> 24/7 support</p>
                                        <p><span class="glyphicon glyphicon-ok-circle"></span> Private IP &amp; SSL with another plan</p>
                                        
                                        <p><a href="http://hostgator.com" target="_blank" class="btn btn-default" role="button">Visit Hostgator</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <p>Pick any of these options, or feel free to do some research and find another host. If you do decide to use your own find, consider the following: </p>
                        <div class="well well-sm">
                            <ul>
                                <li>Does the host you chose offer a free subdomain or allow you to use a different top-level domain?</li>
                                <li>Does the host you chose allow you to upload files via FTP?</li>
                                <li>If your host doesn't offer SSL encryption, will your site contain information that should be transferred securely?</li>
                            </ul>
                        </div>
                        
                        <br><br>
                        
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="img-responsive" alt="cPanel" src="resources/images/start/cpanel.jpg">
                            </div>
                            <div class="col-sm-8">
                                <p>Once you have made your choice, sign up for an account. If your host offers a free subdomain, go ahead and create one. This is the location at which users will access your site. Now you will see the control panel. Most hosts use cPanel, a versatile control panel used by professionals around the world (x10hosting members can switch to the cPanel using a button in the top-right corner). It's fairly simple to use. Just click the icon for a setting that you wish to manage. When you're done, just click the home button to go back. Here are a few useful settings: </p>
                                
                                <div class="media">
                                    <p class="pull-left"><img class="media-object" src="resources/images/start/icons/getting-started.png" alt="Getting Started"></p>
                                    <div class="media-body">
                                        <h4 class="media-heading">Getting Started Wizard</h4>
                                        Click on this icon to follow a guided setup tour. The Getting started wizard will teach you about the cPanel, help you setup the disk, and create a webmail account.
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <p class="pull-left"><img class="media-object" src="resources/images/start/icons/parked-domains.png" alt="Parked Domains"></p>
                                    <div class="media-body">
                                        <h4 class="media-heading">Parked Domains</h4>
                                        Configure any 3rd party domain names here. We will talk about this in the second section.
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <p class="pull-left"><img class="media-object" src="resources/images/start/icons/subdomains.png" alt="Subdomains"></p>
                                    <div class="media-body">
                                        <h4 class="media-heading">Subdomains</h4>
                                        Want to create a subdomain (subdomain.mysite.com instead of mysite.com/subdomain)? Click here to configure subdomains.
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <p class="pull-left"><img class="media-object" src="resources/images/start/icons/ftp-accounts.png" alt="FTP Accounts"></p>
                                    <div class="media-body">
                                        <h4 class="media-heading">FTP Accounts</h4>
                                        FTP is how you'll access the server from your own computer. See Section 3 for more details.
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <p class="pull-left"><img class="media-object" src="resources/images/start/icons/email-accounts.png" alt="Email Accounts"></p>
                                    <div class="media-body">
                                        <h4 class="media-heading">Email Accounts</h4>
                                        Click on email accounts to configure custom email addresses such as admin@mysite.com.
                                    </div>
                                </div>
                                
                                <div class="media">
                                    <p class="pull-left"><img class="media-object" src="resources/images/start/icons/mysql-databases.png" alt="MySQL Databases"></p>
                                    <div class="media-body">
                                        <h4 class="media-heading">MySQL Databases</h4>
                                        If you ever want to store information in a MySQL database, then you'll have to set it up here. Many hosts provide free databases.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <p>And that's cPanel. Setup your domain name and your FTP client and you will be able to upload files to your website and view them on your domain. Any other custom settings can be changed in cPanel.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-frame dark"></div>
            
            <div class="text-frame">
                <div class="row">
                    <div class="col-xs-2">
                        <img class="img-responsive" alt="Section 2: Domains" src="resources/images/start/section2-number.jpg">
                    </div>
                    <div class="col-xs-10">
                        <p class="lead" style="color: purple;"><a id="section2"></a>Domains</p>
                        <p>A domain name is the URL that you enter into an address bar to visit a site. There are different types of domain names. A <strong>second-level-domain</strong> is a regular website, such as webdevtutorials.net or google.com. These types of domain names usually cost a monthly fee, and are generally registered for 1-4 years. The price will vary depending on the length of the name (shorter domains are more expensive) and the ending of the domain — .com domains are more expensive then .info. Sometimes paid hosting providers will offer a domain name with their plan. </p>
                        <p>Another type of domain is called a <strong>subdomain</strong>. A subdomain is an extension of a second-level-domain, such as develop.webdevtutorials.net or drive.google.com (made up of 3 parts). Because domain owners can have an almost unlimited number of subdomains on a site, you can easily find subdomains available for free. In fact, most hosting providers offer free subdomains.</p>
                        <p>If you don't want to fork out a monthly fee but you still want a second-level-domain name, then there is one option. The country Tokelau offers free registration for domain names under .tk. Visit <a href="http://dot.tk" target="blank">dot.tk</a> to register.<br></p>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Once you pick a registrar, consider the following:</p>
                                <div class="well well-sm">
                                    <ul>
                                        <li>Is there a required length of time that you must register this domain for?</li>
                                        <li>Once the domain expires, will you be able to renew it?</li>
                                        <li>Does the plan include any privacy protection features? Without these, anyone might be able to see your name, email, and address if they do a WHOIS search of the site.</li>
                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-xs-3"><img class="img-responsive" alt="Important" src="resources/images/start/arrow.png"></div>
                                    <div class="col-xs-9"><p>According to ICANN policy, a website owner must provide contact information on a public WHOIS database. Anyone on the internet can see this database, so any contact information (such as your email and address) can be seen by anyone. For some people, it might be worth looking into a privacy protection (WhoisGuard) addon to your plan to prevent anyone from seeing your personal information. Most registrars offer these features with your plan or for a small additional fee.</p></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="list-group">
                                    <a href="https://www.namecheap.com" class="list-group-item" target="_blank">
                                        <h4 class="list-group-item-heading">Namecheap</h4>
                                        <p class="list-group-item-text">With domain names going as little as $4 per year, Namecheap lives up to it's name, but thats the only thing cheap about it. They offer a host of other features with their domain names.</p>
                                    </a>
                                    
                                    <a href="http://en.gandi.net" class="list-group-item" target="_blank">
                                        <h4 class="list-group-item-heading">Gandi</h4>
                                        <p class="list-group-item-text">Gandi offers domain names at affordable prices with lots of features.</p>
                                    </a>
                                    
                                    <a href="http://www.dreamhost.com/domains/" class="list-group-item" target="_blank">
                                        <h4 class="list-group-item-heading">Dreamhost</h4>
                                        <p class="list-group-item-text">They don't just host, Dreamhost is also an ICANN-accredited domain registrar. Note that they offer free domain names with any of their paid plans.</p>
                                    </a>
                                    
                                    <a href="http://dot.tk" class="list-group-item" target="_blank">
                                        <h4 class="list-group-item-heading">Dot.tk</h4>
                                        <p class="list-group-item-text">As one of the only free domain registrars available, dot.tk is a fast and simple solution for those who want a free domain name.</p>
                                    </a>
                                    
                                    <a href="http://www.subdomain.com" class="list-group-item" target="_blank">
                                        <h4 class="list-group-item-heading">Subdomain.com</h4>
                                        <p class="list-group-item-text">Don't want to use a second-level-domain? Register a subdomain of eu.nu, web.gg, us.nf, int.nf, tv.gg, co.gp, online.gp, asia.gp, biz.uz, pro.vg, name.vu, info.nu, edu.ms or mobi.ps here for free.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <p>At this point, you should register for your domain. Pick a domain that is short but descriptive of your future site. Also consider which TLD (.com, .net) you use. If you use a subdomain, you should find one that is short. Once you are in the control panel, you will need to change the nameservers for the domain name (if your domain registrar is different from your hosting provider). You will also need to add the domain name to your hosting account in the cPanel. This will connect the domain name and the server.</p>
                        
                        <ol>
                            <li>Find the nameservers for your hosting provider. They usually look like this: ns1.host.com, ns2.host.com.</li>
                            <li>Login to your domain control panel. Find an option to change the nameservers. Change them to the ones you found above. The change might take a while to complete. Sometimes upto 24 hours. This process is known as propagation.</li>
                            <li>Login to your hosting account. Find the 'Parked Domains' option in the cPanel. Add your new domain name here.</li>
                        </ol>
                        
                        <p>Once the propagation completes, you should be able to access your website from your new domain name. Now you just need to add files to the site.</p>
                        
                    </div>
                </div>
            </div>
            
            <div class="text-frame dark"></div>

            <div class="text-frame">
                <div class="row">
                    <div class="col-xs-2">
                        <img class="img-responsive" alt="Section 3: Logistics" src="resources/images/start/section3-number.jpg">
                    </div>
                    <div class="col-xs-10">
                        <p class="lead" style="color: red;"><a id="section3"></a>Logistics: FTP Clients, Directories, &amp; HTML Files</p>
                        <p>You have a name. You have a place to store files. Now all you need are the actual files that make up the site. But what do you do with those files? How do you store them? The last section of this article should help answer these questions. Lets start with some background: </p>
                        <div class="panel panel-danger">
                            <div class="panel-heading">Apache Server Background</div>
                            <div class="panel-body">
                                In the URL (the address in the address bar), everything after the domain name is called the file path. In 'http://webdevtutorials.net/start', the path is '/start'. When the server receives this request, the server will send back the file requested by the path. On most servers, if the path is simply '/', then the default file to return is index.html or index.php. The file name that makes up the homepage for WebDevTutorials is actually named 'index.php', but when you simply type the website name into the address bar, you will see this file because it is the default file in the directory. If a directory does not have a default file, then most servers will return an error or a directory listing (a page with links to all of the pages in the directory). The defaults can be changed in a file called '.htaccess'.
                            </div>
                        </div>
                        
                        <p>Lets get started:</p>
                        <ol>
                            <li>Create a new directory somewhere on your computer. You might name it the same name as your site.</li>
                            <li>Now you need to get a code editor. A code editor is like Microsoft Word or Apple Pages, but it is made for writing code. Code editors number lines and color syntax to make the experience easier. See the code editor suggestions below.</li>
                            <li>Create a file called 'index.php', and save it in your new directory. This file will be the file that you see when you first load your website. Remember that you can type HTML in this file and add PHP when needed (with the PHP tags).</li>
                            <li>Download an FTP client called FileZilla (or any other FTP client). See instructions for downloading and using FileZilla below.</li>
                            <li>Upload your index file to your server using FileZilla.</li>
                            <li>Open the website and make sure you can see the new file. You will also be able to view it at <em>sitename.com/index.php</em>.</li>
                            <li>Now you can add any other files and directories to your site. Create everything using your code editor and save it within your site directory. You can create directories within the site too. Just remember, when you enter the filepath for a new directory, you need to have an index file else you will get an error. Make sure that your server stays up-to-date by uploading everything using FileZilla.</li>
                            <li>
                                If you want to include any images on your site, I suggest creating a directory called <em>images</em>, and uploading any image files you want to upload there. Then use this line of code to create the image:
                                <pre><span class="blue">&lt;img</span> <span class="red">src</span>="<span class="green">images/imagename.png</span>"<span class="blue">&gt;</span></pre>
                            </li>
                        </ol>
                        
                        <br><hr><br>
                        
                        <div class="well">
                            <h3 class="text-center">Code Editors</h3>
                            <p class="text-center"><em>To create HTML and PHP files on your computer, getting one of these code editors will be best.</em></p>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="text-center">Mac OS X</h4>
                                    <a href="https://developer.apple.com/xcode/" target="_blank"><img class="img-responsive center-block" alt="Xcode" src="resources/images/start/xcode.png"></a>
                                    <h6 class="text-center">Xcode</h6>
                                    <p class="text-center">Xcode is a great free code editor for Mac, made by Apple. It is pre-configured to work developing Mac Applications, but is also wonderful for web development.</p>
                                </div>
                                <div class="col-sm-4">
                                    <h4 class="text-center">Windows</h4>
                                    <a href="http://notepad-plus-plus.org/download/v6.5.3.html" target="_blank"><img class="img-responsive center-block" alt="Notepad++" src="resources/images/start/notepadplusplus.png"></a>
                                    <h6 class="text-center">Notepad++</h6>
                                    <p class="text-center">Notepad++ is a Notepad replacement for Windows, offering features such as syntax highlighting and auto-completion. </p>
                                </div>
                                <div class="col-sm-4">
                                    <h4 class="text-center">Linux</h4>
                                    <a href="https://wiki.gnome.org/Apps/Gedit" target="_blank"><img class="img-responsive center-block" alt="gedit" src="resources/images/start/gedit.png"></a>
                                    <h6 class="text-center">gedit</h6>
                                    <p class="text-center">gedit is the GNOME text editor, designed as a simple but powerful all-purpose text and code editor. gedit is included with most linux distributions.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="well">
                            <h3 class="text-center">Downloading FileZilla</h3>
                            <p class="text-center"><em>FileZilla is the free, cross-platform FTP client which enables you to upload files to your server. Follow these instructions to download the version for your machine.</em></p>
                            <hr>
                            <img src="resources/images/start/download-fz.png" alt="FileZilla Download Page" class="img-responsive">
                            <ol>
                                <li>Visit the <a href="https://filezilla-project.org/download.php?show_all=1" target="_blank">FileZilla download page</a>.</li>
                                <li>Click the download link for your computer.</li>
                                <li>If the download doesn't start automatically, choose a location to save the application. Else find it in your downloads folder.</li>
                                <li>Click the file to open. You may wish to move the application to your applications folder.</li>
                                <li>Follow the instructions below to connect to your server and upload files.</li>
                            </ol>
                        </div>

                        <div class="well">
                            <h3 class="text-center">Using FileZilla</h3>
                            <p class="text-center"><em>To upload files from your computer to your server, follow this tutorial.</em></p>
                            <hr>
                            <a href="resources/images/start/filezilla-usage.jpg"><img src="resources/images/start/filezilla-usage.jpg" alt="FileZilla Usage Manual" class="img-responsive"></a>
                        </div>

                        <p>Hopefully you will be able to download these new applications without problem. As always, FileZilla and the suggested code editors are just that: suggestions. If you have an app that you like better, then by all means, use it!</p>
                    </div>
                </div>
            </div>
                
            
            <div class="text-frame dark"></div>
            
            <img src="resources/images/start/end.jpg" class="img-responsive">
                
            <div class="text-frame">
                <p>Once you've finished this tutorial, you should find yourself looking at a newly created website! And it's all yours. Creating a website requires patience and time, but once you've decided on a domain name, registered with a web host, and uploaded HTML files to your server, you'll be able to enjoy the fruits of your labor for as long as you keep your website.</p>
                <p>To extend what you have already done, there are a few optional features that you might consider adding. Do you want to create custom email accounts for your site? You can configure webmail in cPanel. Do you need your site to handle confidential information? If so, you should setup an SSL certificate. Do you want to remove the <code>.php</code> or <code>.html</code> extensions at the end of an address. Then some alterations to your .htaccess file will do the trick. The possibilities are endless. I'll leave you to it now. Good luck!</p>
            </div>

            <div class="text-frame dark title">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="lead text-left no-padding">Jackson Howe</p>
                        <p class="text-left no-padding">15 December 2013</p>
                    </div>
                    <div class="col-sm-4">
                        <p class="lead text-center no-padding">WebDevTutorials</p>
                        <p class="text-center no-padding"><a class="muted" href="help">Help</a> | <a class="muted" href="help#contact">Contact</a></p>
                    </div>
                    <div class="col-sm-4">
                        <ul class="pager">
                            <li class="next"><a class="muted" href="account"><span class="glyphicon glyphicon-home"></span> Home &rarr;</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
                
        <script>
            $( document ).ready(function() {
                $('#main').localScroll();
            });
        </script>

        <script type="text/javascript">stLight.options({publisher: "66d2f128-4f3c-4b52-b902-7380e9d68c82", doNotHash: true, doNotCopy: false, hashAddressBar: false});</script>
        <script>
            var options={ "service": "facebook", "timer": { "countdown": 30, "interval": 10, "enable": false}, "frictionlessShare": true, "style": "3", "publisher": "66d2f128-4f3c-4b52-b902-7380e9d68c82"};
            var st_service_widget = new sharethis.widgets.serviceWidget(options);
        </script>

    </body>
</html>