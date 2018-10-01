<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>The Encryptor: Encryption Defined</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Using world-class encryption algorithms, the Encryptor is an accessible, online module for secure encryption and decryption of your data. Free!">
<meta name="author" content="Jackson Howe">
<meta name="google-site-verification" content="hTjABk3VnIsdahaMpfHXRthPNTrPEtyVYOitGSCrsZ0" />
<meta name="keywords" content="encryption, algorithm, jackson howe, philip easo, the encryptor, world-class encryption, online, fast, free, safe, secure, state-of-the-art, secret, text, hide, puzzle, encrypt, decrypt, decryption, data">

<!-- Le styles -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<style type="text/css">
body {
    padding-top: 60px;
    padding-bottom: 40px;
}

.sidebar-nav-fixed {
position:fixed;
top:60px;
width:15%;
}


</style>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="bootstrap/js/html5shiv.js"></script>
<![endif]-->

</head>

<body data-spy="scroll" data-target=".sidebar-nav">
<?php include_once("bootstrap/share.php"); ?>


<!-- NAVBAR
================================================== -->

<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="brand" href="/">The Encryptor</a>
<div class="nav-collapse collapse">
<ul class="nav">
<li><a href="/">About</a></li>
<li class="dropdown active">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Encryption Defined <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="encryptiondefined">What is Encryption?</a></li>
        <li><a href="process">Our Process</a></li>
    </ul>
</li>
<li><a href="encrypt">Encrypt</a></li>
<li><a href="decrypt">Decrypt</a></li>
<li><a href="database">Database</a></li>
<li><a href="support">Support</a></li>

</ul>
</div><!--/.nav-collapse -->
</div>
</div>
</div>



<div class="container">
    <div class="page-header">
        <h1>Encryption Defined</h1>
    </div>
    <p class="lead">What is encryption? Why do I need to know about it? How does it work? This article will explain encryption, decryption, and everything in between!</p><br/>

    <div class="well" style="max-width: 728px; margin: 0 auto 10px;">
        <!-- AD CODE HERE -->
        <script type="text/javascript"><!--
        google_ad_client = "ca-pub-4792153959839656";
        /* Encryption Defined */
        google_ad_slot = "8193818529";
        google_ad_width = 728;
        google_ad_height = 90;
        //-->
        </script>
        <script type="text/javascript"
        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    </div>
    <br/>

    <a name="1"></a>
    <h2>What is Encryption?</h2>
    <p><strong>Encryption</strong> is the process of converting data into a form that prevents unauthorized access to that data. In other words, encryption is changing or modifying text to ensure that no one else can read it. The original state is called <em>plaintext</em> and the encrypted state is called <em>ciphertext</em>. Imagine you are the president of a foreign country and need to deliver a secret message to one of your associates without anyone stealing the information. If the information were stolen, it might cause a global crisis. So, you decide to encrypt the message to ensure it’s confidentiality. Once you deliver the message, you decrypt the ciphertext so that it can again be read. <strong>Decryption</strong> is the process of restoring an encrypted message back to it’s original state.</p>

    <a name="2"></a>
    <h2>History of Cryptography</h2>
    <p>
        <blockquote>
            <p>The use of encryption/decryption is as old as the art of communication.</p>
             <small>TechTarget</small>
        </blockquote>
        Cryptography (the art of securing information) has been used for thousands of years in various systems. The earliest known use of cryptography can be dated back to 1900BC, using primitive methods of encryption such as physical concealment of secret messages. During medieval times, cryptography was used during wartime to prevent the enemy from stealing stratagems or compromising attacks. Common ciphers such as the <em>caesar cipher</em> were employed, simply shifting letters for others in a systematic fashion which could later be easily decrypted. At this time however, almost all ciphers remained vulnerable to the cryptanalytic technique of frequency analysis and could be eventually cracked. It wasn’t until the 19th century that cryptography evolved into a more secure and well-practiced process and was later heavily used during the Second World War, most notably with the <a href="http://en.wikipedia.org/wiki/Zimmermann_Telegram">Zimmermann Telegram</a>. In modern day, cryptography is used constantly to secure global data both on the internet and off-line. Public-Key encryption and hashing remain popular methods of data security and have reached a point where they can only be exploited through <em>brute-force attacks</em>. Modern cryptography is a politically controversial topic with strong arguments both for and against it's use.
    </p>

    <a name="3"></a>
    <h2>Why is Cryptography Important?</h2>
    <p>Cryptography is a necessity for all processes involving any level of confidential information. In today's world, the internet can be used to do anything from checking your email to managing potentially huge amounts of money on bank accounts from anywhere in the world. Unfortunately it becomes very difficult to be sure that a third party isn't receiving the information because of the complicated and often unknown route that it is required to take. Someone standing outside your house, for example, could connect to your router and download everything you send before it even reaches the internet. For this reason, the only way to keep information secure is by encrypting it in such a way that even if someone has the opportunity to steal it, they will be completely unable to read anything it says. This allows even highly confidential data to be shared with anyone across the world in milliseconds, and is very often much safer than any slower methods.</p>

    <a name="4"></a>
    <h2>How does Encryption Work?</h2>
        <p><em>Encryption is all about hiding the true meaning of a message from anyone you don’t want to know it. This generally involves the use of a key which is either common  for both the sender and the receiver of the message  (a process called symmetric key encryption) or unique for each receiver (asymmetric key encryption). Most modern encryption methods such as caesar's cipher and scytale transition cipher use symmetric key encryption as it is far simpler to use and harder to “crack” or decrypt without the key. The best encryption methods are those which result in ciphertext which can only be decrypted with the intended key or, as all encryption methods can be cracked, with a brute force attack. A brute force attack involves attempting to decrypt the ciphertext without the key by trying every possible key until the text is comprehensible. Such an attempt takes a very long time and as such is rarely used.</em></p>
        
            <h4>Caesar’s Cipher</h4>
                <p>The most basic encryption method, known as a shift cipher or Caesar’s cipher (which is also one of the easiest to crack) involves assigning a value to each character in a text (e.g. a = 1, b = 2, c = 3…) and adding the value of a numerical key (e.g. 3, 12, 1…) to the value of each letter before converting their sum back into letters. The following is an example of how the text “hello” would be encrypted with the key 3:</p>
                <ol start="1" type="1">
                    <li>Each letter is converted into a number where a = 1, b = 2, c = 3… so “hello” becomes 8-5-12-12-15</li>
                    <li>The value of the key, which is 3, is added to the value of each letter in the text to it becomes 11-8-15-15-18</li>
                    <li>The sums are converted into letters resulting in a cipertext of “khoor”</li>
                </ol>
                This primitive method of encryption is weak for two important reasons:
                <ul>
                    <li>A brute force type attempt to decrypt the text would require trying a maximum of only 24 values for the key since a key with a value of 26 is equivalent to one with a value of 2 (unless other characters such as numbers and punctuation are included in which case there are more possibilities however the number of possibilities remains finite), meaning that it wouldn’t take very long for someone to determine the meaning of the message without the key.</li>
                    <li>For longer messages, by counting the number of each character in the text a person could determine what each encrypted letter corresponds to in plain text if the language is known (e.g. if the language were English then the most common letter would be “e”, the second most “o”, and so on).</li>
                </ul>

            <h4>Scytale Transposition Cipher</h4>
                <p>An encryption method developed by the ancient Greeks, the scytale transposition cipher is a type of transposition cipher which involves wrapping a strip of material around one of two cylinders of the same diameter (the recipient of the message has the second) before writing a message on the strip. When the strip s unravelled the message will appear as a jumbled up sequence of characters unless it is wrapped around a cylinder of the same size as it was written on.</p>
                <img alt="Skytale. Source: Wikimedia Commons" src="img/skytale.png" class="pull-right"/>
                <p>The major weakness with this method is that there are a finite number of cylinder diameters which result in letters on the strip of material being lined up when the strip is wrapped around the cylinder, meaning that a brute force attack whereby every possible cylinder size is tested would not take long to complete.</p>

            <h4>Modern Encryption Methods</h4>
                <p>Most modern encryption methods are too complex for each to be described in detail here, however it suffices to say that most result in unnecessarily long ciphertexts or can be broken if the process is known.</p>

            <h4>Our Encryption Method</h4>
                <p>The encryption method used on this website by The Encryptor is unique and avoids all of the problems faced by other methods. Using our method, text can be encrypted by any number of arbitrarily long numbers, which reduces the risk posed by a brute force attack since the total number of possible keys is equal to <img src="http://latex.codecogs.com/gif.latex?\small&space;\sum_{i=1}^{\infty&space;}i^{i}" title="\small \sum_{i=1}^{\infty }\infty^{i}" /> = (&infin;<sup>1</sup>=1)+(&infin;<sup>2</sup>=4)+(&infin;<sup>3</sup>=27)+…(infinityinfinity=infinity) which is not only infinite, but the number of possible keys to be tested increases rapidly with the use of more keys and with larger numbers, and each possibility must be tested several times since encryption with the same text and key may result in several different ciphertexts. Letter frequency is not an issue either since each letter of plaintext is converted into 2 letters of ciphertext using an algorithm involving random numbers which ensures that letter frequency is random too. Our method is also superior to other modern encryption methods as it results in ciphertext which is only double the length of the plain text encrypted, which is not much compared with other modern methods, and because even with the process known, a person could not determine the meaning of encrypted text without a very time consuming (which could theoretically take an arbitrarily long period of time) brute force attack or the key. If you would like to learn more about how our method works please check out the <a href="process">Process</a> page of our website or contact Philip Easo at <a href="mailto:philip@theencryptor.tk">philip@theencryptor.tk</a>.</p>


    <br/><br/>
    <p class="lead">Jackson Howe <a class="btn btn-mini" href="mailto:jackson@theencryptor.tk"><i class="icon-envelope"></i></a> <a class="btn btn-mini" href="support"><i class="icon-user"></i></a><br/>
    Philip Easo <a class="btn btn-mini" href="mailto:philip@theencryptor.tk"><i class="icon-envelope"></i></a> <a class="btn btn-mini" href="support"><i class="icon-user"></i></a><br/>
    Nicola Sorace <a class="btn btn-mini" href="mailto:nicola@theencryptor.tk"><i class="icon-envelope"></i></a> <a class="btn btn-mini" href="support"><i class="icon-user"></i></a><br/>

</div>



<br/>
<br/>

<div class="container">
<hr>
<!-- FOOTER -->
<footer>
<p class="pull-right"><a href="#">Back to top</a></p>
<p>&copy; 2013 - 2014 Jackson Howe; Philip Easo &middot; <a href="support">Support</a></p>



</footer>
</div>
</div><!-- /.container -->



<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php include_once("analyticstracking.php") ?>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap-transition.js"></script>
<script src="bootstrap/js/bootstrap-alert.js"></script>
<script src="bootstrap/js/bootstrap-modal.js"></script>
<script src="bootstrap/js/bootstrap-dropdown.js"></script>
<script src="bootstrap/js/bootstrap-scrollspy.js"></script>
<script src="bootstrap/js/bootstrap-tab.js"></script>
<script src="bootstrap/js/bootstrap-tooltip.js"></script>
<script src="bootstrap/js/bootstrap-popover.js"></script>
<script src="bootstrap/js/bootstrap-button.js"></script>
<script src="bootstrap/js/bootstrap-collapse.js"></script>
<script src="bootstrap/js/bootstrap-carousel.js"></script>
<script src="bootstrap/js/bootstrap-typeahead.js"></script>
<script>
!function ($) {
    $(function(){
      // carousel demo
      $('#myCarousel').carousel()
      })
}(window.jQuery)
</script>
<script src="bootstrap/js/holder.js"></script>
</body>
</html>