<?php
	require_once("mailfunction.php");
?>
<html>
<head>
<meta name="author" content="Saikat Das">
<meta name="description" content="Saikat's Personal">
<title>Hi, I'm Saikat</title>
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
				<li class="page-scroll"><a href="#about">About</a></li>
				<li class="logo page-scroll"><a title="code is poetry" href="index.php"><img src="images/logo.png" alt="" class="responsive"/></a></li>
			    <li class="page-scroll"><a href="https://imsaikat.wordpress.com">blog</a></li>
				<li class="page-scroll"><a href="#contact">get in touch</a></li>
			</ul>
			<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
		</nav>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="slider_bg"><!-- start slider -->
<div class="container">
		<div class="row slider">
		<div class="wmuSlider example1"><!-- start wmuSlider example1 -->
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				  	 	<div class="slider_img text-center">
				   			<ul class="list-unstyled list_imgs">
				   				<li><img src="images/slider.jpg" alt="" class="responsive"/></li>
				   			</ul>
			           	</div>
				   </article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				  	 	<div class="slider_img text-center">
				   			<ul class="list-unstyled list_imgs">
				   				<li><img src="images/slider1.jpg" alt="" class="responsive"/></li>
				   			</ul>
			           	</div>
				   </article>
				 </div>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                </ul>
			<script src="js/jquery.wmuSlider.js"></script> 
		     <script>
				 $('.example1').wmuSlider();         
			</script>
        </div><!-- end wmuSlider example1 -->
        <div class="clearfix"></div>
      </div>
</div>
</div>
<div class="main_bg"  id="about"><!-- start about us -->
<div class="container">
	<div class="row about">
		<div class="col-md-3 about_img">
			<img src="images/imsaikat.png" alt="" class="responsive"/>
		</div>
		<div class="col-md-9 about_text">
			<h3>saikat das</h3>
			<h4>web designer, developer, photographer</h4>
			<p>Hello everyone. Thanks for visiting. Myself Saikat. Currently I'm studying B.Tech final year in Computer Science and Engineering at Jalpaiguri Government Engineering College. My interest is always on Web Technologies. Besides that its my hobby to snap nature beauties. I have worked on a number of projects in the past and some are still under active development. But I've given here only a few because all are not open source.Thank you all again. Mail me , comment on my blog, follow me on social sites.</p>
			<div class="soc_icons navbar-right">
				<ul class="list-unstyled text-center">
					<li><a href="https://www.facebook.com/Saikatds38"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/RockingRONY"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://plus.google.com/+SaikatDas38"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://github.com/imsaikat"><i class="fa fa-github-square"></i></a></li>
					<li><a href="http://instagram.com/69hackys"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.youtube.com/user/Saikatds38"><i class="fa fa-youtube-play"></i></a></li>
				</ul>	
			</div>
		</div>
	</div>
</div>
</div>
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
				<p class="link"><span>&#169; All rights reserved | Website by&nbsp;<a href="http://about.me/imsaikat"> Saikat</a></span></p>
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