<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Jackson Howe">
        <meta name="description" content="WebDevTutorials is an innovative, online learning center for web languages like HTML and PHP. It uses a variety of teaching methods to ensure that everyone can get something out of it.">
        <meta name="keywords" content="tutorial web web development code program programming HTML PHP Javascript learn webdevtutorials academy school college learntocode teaching style visual auditory">
            
        <link href="resources/style/stylesheet.css" rel="stylesheet" />
        <!--<link href="resources/style/theme.css" rel="stylesheet" />-->
        <script src="resources/style/jquery.js"></script>

        <style>
            @media screen and ( max-width: 550px ) {
                #responsiveLinks { display: none;}
                #responsiveDropdown { display: inline;}
            }

            @media screen and ( min-width: 550px ) {
                #responsiveLinks { display: inline;}
                #responsiveDropdown { display: none;}
            }

            a:hover {
                text-decoration: none;
            }

            body {
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 20px;
                padding-right: 20px;
            }

            .header,
            .marketing,
            .footer {
              padding-left: 15px;
              padding-right: 15px;
            }

            .header {
              border-bottom: 1px solid #e5e5e5;
            }

            .header h3 {
              margin-top: 0;
              margin-bottom: 0;
              line-height: 40px;
              padding-bottom: 19px;
            }

            .footer {
              padding-top: 19px;
              color: #777;
              border-top: 1px solid #e5e5e5;
            }

            @media (min-width: 768px) {
              .container {
                max-width: 730px;
              }
            }

            .container-narrow > hr {
              margin: 30px 0;
            }

            .jumbotron {
              text-align: center;
              border-bottom: 1px solid #e5e5e5;
            }
            .jumbotron .btn {
              font-size: 21px;
              padding: 14px 24px;
            }

            .marketing {
              margin: 40px 0;
            }
            .marketing p + h4 {
              margin-top: 28px;
            }

            @media screen and (min-width: 768px) {
              .header,
              .marketing,
              .footer {
                padding-left: 0;
                padding-right: 0;
              }
              .header {
                margin-bottom: 30px;
              }
              .jumbotron {
                border-bottom: 0;
              }
            }

        </style>
    </head>

    <body>
        <?php
            include_once("resources/functions.php");
            include_once("resources/analytics.php");
        ?>

        <div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <li><a href="/"><span class="glyphicon glyphicon-chevron-left"></span> Back</a></li>
                    <li id="responsiveLinks"><a href="#about">About</a></li>
                    <li id="responsiveLinks"><a href="#privacy">Privacy Policy</a></li>
                    <li id="responsiveLinks"><a href="#terms">Terms</a></li>

                    <li id="responsiveDropdown" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            About <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#about">About</a></li>
                            <li><a href="#privacy">Privacy Policy</a></li>
                            <li><a href="#terms">Terms</a></li>
                        </ul>
                    </li>
                </ul>
                <h3 class="text-muted">About</h3>
            </div>
            
            <div class="row">
                <p id="about" class="lead">About</p>
                <p>WebDevTutorials was created in November 2013 by a student in Geneva, Switzerland investigating the ways people learn best. The goal of this website is to teach students an essential skill for the world to come in a fun and understandable way. The combination of learning activities such as videos, printable glossaries, and programming exercises allow everybody to engage with the material presented.</p>

                 <p>For more information, please visit the <a href="help">help</a> page.</p>
            </div>

            <br/><br/>
            
            <div class="row">
                <p id="privacy" class="lead">Privacy Policy</p>
                
                <p><strong>WebDevTutorials Privacy Policy</strong></p>
                <p>This Privacy Policy was last modified on November 07, 2013.</p>
                <p>WebDevTutorials ("us", "we", or "our") operates http://webdevtutorials.net (the "Site"). This page informs you of our policies regarding the collection, use and disclosure of Personal Information we receive from users of the Site.</p>
                <p>We use your Personal Information only for providing and improving the Site. By using the Site, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible at http://webdevtutorials.net.</p>

                <p><strong>Information Collection And Use</strong><br />While using our Site, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. Personally identifiable information may include, but is not limited to, your name, email address, postal address and phone number ("Personal Information").</p>

                <p><strong>Log Data</strong><br />Like many site operators, we collect information that your browser sends whenever you visit our Site ("Log Data"). This Log Data may include information such as your computer's Internet Protocol ("IP") address, browser type, browser version, the pages of our Site that you visit, the time and date of your visit, the time spent on those pages and other statistics.</p>

                <p><strong>Cookies</strong><br />Cookies are files with small amount of data, which may include an anonymous unique identifier. Cookies are sent to your browser from a web site and stored on your computer's hard drive.</p>
                <p>Like many sites, we use "cookies" to collect information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Site.</p>

                <p><strong>Do Not Track</strong><br />We support the Do Not Track browser setting. Do Not Track (or DNT) is a preference you can set in your browser to let the websites you visit know that you do not want them collecting certain information about you.</p>

                <p><strong>Security</strong><br />The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage, is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>

                <p><strong>Links To Other Sites</strong><br />Our Site may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
                <p>WebDevTutorials has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party sites or services.</p>

                <p><strong>Changes To This Privacy Policy</strong><br />WebDevTutorials may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on the Site. You are advised to review this Privacy Policy periodically for any changes.</p>

                <p><strong>Contact</strong><br />If you have any questions about this Privacy Policy, please fill in the contact form <a href="help#contact">here</a>.</p>
                <p><img src="http://termsfeed.com/seals/ts-pp-authenticity.png" /></p>

            </div>
            
            <br/><br/>
            
            <div class="row">
                <p id="terms" class="lead">Terms</p>
                
                <p><strong>WebDevTutorials Terms and Conditions ("Agreement")</strong></p>
                <p>This Agreement was last modified on November 07, 2013.</p>
                
                <p>Please read these Terms and Conditions ("Agreement", "Terms and Conditions") carefully before using http://webdevtutorials.net ("the Site") operated by WebDevTutorials ("us", "we", or "our"). This Agreement sets forth the legally binding terms and conditions for your use of the Site at http://webdevtutorials.net.</p>
                <p>By accessing or using the Site in any manner, including, but not limited to, visiting or browsing the Site or contributing content or other materials to the Site, you agree to be bound by these Terms and Conditions. Capitalized terms are defined in this Agreement.</p>
                
                <p><strong>Intellectual Property</strong><br />The Site and its original content, features and functionality are owned by WebDevTutorials and are protected by international copyright, trademark, patent, trade secret and other intellectual property or proprietary rights laws.</p>
                
                <p><strong>Termination</strong><br />We may terminate your access to the Site, without cause or notice, which may result in the forfeiture and destruction of all information associated with you. All provisions of this Agreement that by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity, and limitations of liability.</p>
                
                <p><strong>Links To Other Sites</strong><br />Our Site may contain links to third-party sites that are not owned or controlled by WebDevTutorials.</p>
                <p>WebDevTutorials has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party sites or services. We strongly advise you to read the terms and conditions and privacy policy of any third-party site that you visit.</p>
                
                <p><strong>Governing Law</strong><br />This Agreement (and any further rules, polices, or guidelines incorporated by reference) shall be governed and construed in accordance with the laws of Virginia, United States, without giving effect to any principles of conflicts of law.</p>
                
                <p><strong>Changes To This Agreement</strong><br />We reserve the right, at our sole discretion, to modify or replace these Terms and Conditions by posting the updated terms on the Site. Your continued use of the Site after any such changes constitutes your acceptance of the new Terms and Conditions.</p>
                <p>Please review this Agreement periodically for changes. If you do not agree to any of this Agreement or any changes to this Agreement, do not use, access or continue to access the Site or discontinue any use of the Site immediately.</p>
                
                <p><strong>Contact</strong><br />If you have any questions about this Agreement, please fill in the contact form <a href="help#contact">here</a>.</p>
                
            </div>
            
            <br/>
            
            <div class="footer">
                <p>WebDevTutorials &bull; &copy; 2013 - 2014 Jackson Howe. All rights reserved. &bull; <a href="help">Help</a></p>
            </div>
        </div>

        <script src="resources/style/globaljs.js"></script>
    </body>
</html>