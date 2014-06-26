<?php
	require_once("mailfunction.php");
?>
<html>
<head>
<meta name="author" content="Saikat Das">
<meta name="description" content="Saikat's Personal">
<title>Hi, I'm Saikat : CoreJava</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Kreon:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();
			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
</head>
<body>
<div class="header_bg" id="home"><!-- start header -->
<div class="container">
	<div class="row header text-center specials">
		<div class="h_logo">
			<a href="index.php"><img src="images/logo.png" alt="" class="responsive"/></a>
		</div>
		<nav class="top-nav">
			<ul class="top-nav nav_list">
				<li><a href="portfolio.php">portfolio</a></li>
				<li class="page-scroll"><a href="index.php">About</a></li>
				<li class="logo page-scroll"><a title="code is poetry" href="index.php"><img src="images/logo.png" alt="" class="responsive"/></a></li>
			    <li class="page-scroll"><a href="https://imsaikat.wordpress.com/">blog</a></li>
				<li class="page-scroll"><a href="#contact">get in touch</a></li>
			</ul>
			<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
		</nav>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="blog"><!-- start main -->
	<div class="container">
		<div class="main row">
			<h2 class="style">A JAVA Project</h2>
			<div class="details row">
				<div class="col-md-6">
					<img src="images/java.jpg" alt="" class="img-responsive"/>
				</div>
				<div class="col-md-6">
					<p class="para">Java is a computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible. It is intended to let application developers "write once, run anywhere" (WORA), meaning that code that runs on one platform does not need to be recompiled to run on another. Java applications are typically compiled to bytecode (class file) that can run on any Java virtual machine (JVM) regardless of computer architecture. Java is, as of 2014, one of the most popular programming languages in use, particularly for client-server web applications, with a reported 9 million developers. </p>
					<p class="para">Java was originally developed by James Gosling at Sun Microsystems (which has since merged into Oracle Corporation) and released in 1995 as a core component of Sun Microsystems' Java platform.</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<p class="para">Here is a Java project on Car Rental System i.e. a desktop application used by the Car Hire Companies or Car Rental Services. This project is made using JAVA 7. All the packages, classes, interfaces are well designed according to the code convention mantained in IT companies. Codes are very simple and easy to understand. You all can download the complete package by clicking the link below. Thank U All 4 visting. </p>
			<div class="read_more">
				<a href="http://www.mediafire.com/download/cu1ef2e97r3ls8w/Car_Rental_System.zip">download</a>
			</div>
		</div>
	</div>
</div><!-- end main -->
<div class="footer_bg" id="contact"><!-- start footer -->
<div class="container">
	<div class="row footer">
		<div class="col-md-8 contact_left">
			<h3>get in touch</h3>
			<p>In order to get in touch use the contact form below:</h4>
			<form name="from1" id="from1" action="" method="post">
				<input type="text" value="Name (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}" name="fullname">
				<input type="text" value="Email (Required)" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}" name="emailid">
				<input type="text" value="Subject" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}" name="subject">
                <input type="text" value="Phone No" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Phone No';}" name="phone">
				<textarea onFocus="if(this.value == 'Your Message here....') this.value='';" onBlur="if(this.value == '') this.value='Your Message here....;" name="comments">Your Message here....</textarea>
				<span class="pull-right"><input type="submit" value="submit us" name="submit"/></span>
			</form>
			<p><?php if(!empty($message)) echo $message; ?></p>
		</div>
		<div class="col-md-4  contact_right">
			<p><span>My Contact Details: </span> If you have any doubts you can contact me. You can also ask me on my blog. My contact details is given here. Once again thanks for visiting.</p>
			<ul class="list-unstyled address">
				<li><i class="fa fa-map-marker"></i><span>Hostel no.-3, JGEC</span></li>
				<li><i class="fa fa-phone"></i><span>(91) 8535 920 217</span></li>
				<li><i class="fa fa-envelope"></i><a href="mailto:saikat2@live.co.uk">mail(at)im.saikat</a></li>
			</ul>
		</div>		
	</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Template by&nbsp;<a href="http://about.me/imsaikat"> Saikat</a></span></p>
				<a href="#home" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
		<script type="text/javascript">
				$(function() {
				  $('a[href*=#]:not([href=#])').click(function() {
				    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				      if (target.length) {
				        $('html,body').animate({
				          scrollTop: target.offset().top
				        }, 1000);
				        return false;
				      }
				    }
				  });
				});
		</script>
		<!---- start-smoth-scrolling---->		
	</div>
</div>
</body>
</html>