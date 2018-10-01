<?php
	echo "<!DOCTYPE html>
	<html lang='en'>
	    <head>
	        <title>Jackson Howe - $title</title>
	        
	        <meta charset='utf-8'>
	        <meta name='author' content='Jackson Howe'>
	        <meta name='description' content='Jackson Howe\'s JATC portfolio.'>
	        <meta name='keywords' content='jackson, howe, geoffrey, web development, portfolio, resume, work, experience, development, html, jatc'>
	            
	        <link href='style.css' rel='stylesheet' type='text/css'>
	    </head>
	    <body>
	        <div class='background'><img src='img/bg.jpg'></div>
	        
	        <div class='header'>
	            <div class='inner'>
	                <h1><a href='/'>JACKSON HOWE</a></h1>
	                <p>JATC Web Development Portfolio</p>
	            </div>
	        </div>
	        
	        <div class='navbar'>
	            <div class='mobilecenter'>";
					if ($title == "Leadership") {
						echo "<p id='navitem1'><a class='active' href='/'>LEADERSHIP</a></p>
	                			<p id='navitem2'><a href='career'>CAREER READINESS</a></p>
	               				<p id='navitem3'><a href='program'>PROGRAM COMPETENCY</a></p>
	                			<p id='navitem4'><a href='college'>COLLEGE READINESS</a></p>";
					} else if ($title == "Career Readiness") {
						echo "<p id='navitem1'><a href='/'>LEADERSHIP</a></p>
	                			<p id='navitem2'><a class='active' href='career'>CAREER READINESS</a></p>
	               				<p id='navitem3'><a href='program'>PROGRAM COMPETENCY</a></p>
	                			<p id='navitem4'><a href='college'>COLLEGE READINESS</a></p>";
					} else if ($title == "Program Competency") {
						echo "<p id='navitem1'><a href='/'>LEADERSHIP</a></p>
	                			<p id='navitem2'><a href='career'>CAREER READINESS</a></p>
	               				<p id='navitem3'><a class='active' href='program'>PROGRAM COMPETENCY</a></p>
	                			<p id='navitem4'><a href='college'>COLLEGE READINESS</a></p>";
					} else if ($title == "College Readiness") {
						echo "<p id='navitem1'><a href='/'>LEADERSHIP</a></p>
	                			<p id='navitem2'><a href='career'>CAREER READINESS</a></p>
	               				<p id='navitem3'><a href='program'>PROGRAM COMPETENCY</a></p>
	                			<p id='navitem4'><a class='active' href='college'>COLLEGE READINESS</a></p>";
					}
	               
			echo "</div>
	        </div>
	        
	        <div class='master'>
	            <div class='body1'>
	                <h2>Core Requirements</h2>";
                        if (count($coreImages) == 0) {
                            echo "<p>Images not yet available</p>";
                        } else {
                            foreach ($coreImages as $image) {
                                echo "<img class='clickable' src='img/$image[0]' alt='$image[1]'>";
                            }
                        }
	        echo "</div>
	            
	            <div class='body2'>
	                <h2>Supplementary Requirements</h2>
	                <div class='slider'>";
                        if (count($supImages) == 0) {
                            echo "<p>Images not yet available</p>";
                        } else {
                            foreach ($supImages as $image) {
                                echo "<img class='clickable' src='img/$image[0]' alt='$image[1]'>";
                            }
                        }
	                echo "</div>
	            </div>
    
                <div class='popup'></div>
	            
	            <div class='footer'>
	                <div class='left'>
	                    <p>&copy; 2014 - 2015 Jackson Howe</p>
	                </div>
	                <div class='right'>
	                    <p><a href='http://jacksonhowe.com/contact'>Get in Touch</a></p>
	                </div>
	            </div>
	        </div>
	        
	        <script src='http://jacksonhowe.com/js/jquery.js'></script>
	        <script>
	            $(document).ready(function() {
	                // fadein animation for nav
	                $('#navitem1, #navitem2, #navitem3, #navitem4').css({
	                    'display': 'none'
	                });
	                              
	                $('#navitem1').fadeIn(2000);
	                $('#navitem2').fadeIn(2000);
	                $('#navitem3').fadeIn(2000);
	                $('#navitem4').fadeIn(2000);

	                // handles navbar
	                var navbarTop = $('.navbar').offset().top;
	                $(window).scroll(function() {
	                    if ($(document).scrollTop() >= navbarTop && $('.navbar').css('position') == 'absolute') {
	                        $('.navbar').css({
	                            'position': 'fixed',
	                            'top': '0%',
	                            'opacity': '1'
	                        });
	                    }
	
	                    else if ($(document).scrollTop() < navbarTop && $('.navbar').css('position') == 'fixed') {
	                        $('.navbar').css({
	                            'position': 'absolute',
	                            'top': '250px',
	                            'opacity': '0.8'
	                        });
	                    }
	                });
                                  
                    $('.clickable').click(function() {
                        var source = $(this).attr('src');
                        $('.popup').css('background-image', 'url(' + source + ')');
                        $('.popup').fadeIn().css('display', 'table');
                    });
                                  
                    $('.popup').click(function() {
                        $('.popup').fadeOut();
                    });
	            });
	        </script>
	    </body>
	</html>";
?>