<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WasomiOnline</title>
<link rel="shortcut icon" href="img/favicon.ico" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />

<link href="css/front.css" media="screen, projection" rel="stylesheet" type="text/css">

<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript"
			src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery.ennui.contentslider.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#one').ContentSlider({
					width : '820px',
					height : '250px',
					speed : 800,
					easing : 'easeInOutBack'
				});
			});
		</script>
<script type="text/javascript">
        $(document).ready(function() {

            $(".signin").click(function(e) {          
				e.preventDefault();
                $("fieldset#signin_menu").toggle();
				$(".signin").toggleClass("menu-open");
            });
			
			$("fieldset#signin_menu").mouseup(function() {
				return false
			});
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.signin").length==0) {
					$(".signin").removeClass("menu-open");
					$("fieldset#signin_menu").hide();
				}
			});			
			
        });
</script>
<script src="js/jquery.tipsy.js" type="text/javascript"></script>
<script type='text/javascript'>
    $(function() {
	  $('#forgot_username_link').tipsy({gravity: 'w'});   
    });
  </script>	

</head>
<body>
<div id="wrapper"><!-- begin wrapper -->
		<div id="logo-search" class="clearfloat"><!-- begin logo-search -->
    	<h1 id="logo"><a href="http://www.wasomionline.com/">WasomiOnline</a></h1>
		<div style="float:right;margin-right:15px;"><script type="text/javascript">
</script>
</div>
    </div><!-- end logo-search -->
	<div id="myslidemenu" class="jqueryslidemenu"><!-- begin jqueryslidemenu -->
            <ul>
                <li><a href="http://www.wasomionline.com/">Home</a></li>
                <li ><a href="http://www.wasomionline.com/">News</a>
                </li>
                <li ><a href="http://www.wasomionline.com/">Services</a>
                </li>
                <li><a href="http://localhost/wasomionline/index.php/gallery">Gallery</a></li>
				 <li><a href="http://www.wasomionline.com/">Contact us</a></li>
                <li class="last"> <div id="topnav" class="topnav"><a href="login" class="signin"><span>Sign in</span></a>  		                 </div></li>
				<li>
				<fieldset id="signin_menu">
    <form method="post" id="signin" action="https://twitter.com/sessions">
      <label for="username">Username </label>
      <input id="username" name="username" value="" title="username" tabindex="4" type="text">
      </p>
      <p>
        <label for="password">Password</label>
        <input id="password" name="password" value="" title="password" tabindex="5" type="password">
      </p>
      <p class="remember">
        <input id="signin_submit" value="Sign in" tabindex="6" type="submit">
        <input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
        <label for="remember">Remember me</label>
      </p>
      <p class="forgot"> <a href="#" id="resend_password_link">Forgot your password?</a> </p>
      <p class="forgot-username"> <A id=forgot_username_link 
title="If you remember your password, try logging in with your email" 
href="#">Forgot your username?</A> </p>
    </form>
  </fieldset>
				</li>
            </ul>

    </div><!-- end jqueryslidemenu --><div id="pagename">
          <div class="breadcrumbs"><!-- begin breadcrumbs -->
              		<a href="http://www.wasomionline.com/">Home</a>
              		<span class="date"><b><?php $datestring = "Year: %Y Month: %m Day: %d - %h:%i %a";
$time = time();

echo mdate($datestring, $time);?></b> </span>
          </div><!-- end breadcrumbs -->
    </div>
    <div class="rounded-top"></div>
    	<div id="container" class="clearfloat"><!-- begin container -->
                   
            <div id="main-content" class="clearfloat">
			<div>
			<div id="outerbox">
			
			<div id="box1">
								<div id="rnd_container">
								<b class="rnd_top"><b class="rnd_b1"></b><b class="rnd_b2"></b><b class="rnd_b3"></b><b class="rnd_b4"></b></b>
								<div class="rnd_content"> 
								<h5>
								<img alt="Site offline" height="32" src="img/favicon.ico" width="32" />Site under construction</h5>
									<p>WasomiOnline website is currently under 
									construction but will air any time soon.</p>
									<p>

																		<a href="http://wasomionline.com/contact">Leave
																		your 
																		comments here</a></p>
								</div>
								<b class="rnd_bottom"><b class="rnd_b4"></b><b class="rnd_b3"></b><b class="rnd_b2"></b><b class="rnd_b1"></b></b>
								</div>
								</div>
							<div id="box2">
								<div id="rnd_container">
								<b class="rnd_top"><b class="rnd_b1"></b><b class="rnd_b2"></b><b class="rnd_b3"></b><b class="rnd_b4"></b></b>

								<div class="rnd_content"> 
								<h5>
								<img alt="WasomiOnline" height="32" src="img/favicon.ico" width="32" />Grand Opening</h5>
									<p> This is to inform every one that the 
									site will son be launched!! You should all expect
									lots of good things from this site.
									 </p>
									<p>
									<a href="http://wasomionline.com/tour">Quick site tour</a></p>
								</div>

								<b class="rnd_bottom"><b class="rnd_b4"></b><b class="rnd_b3"></b><b class="rnd_b2"></b><b class="rnd_b1"></b></b>
								</div>
								</div>
			</div>
			</div>
            </div>
            <div class="space"></div>
			<div id="content-slider" >
			<div id="one" class="contentslider">
			<div class="cs_wrapper">
				<div class="cs_slider">

					<div class="cs_article">
						<h2> <a href="#">Article Number One</a> </h2>
						<a href="#">
							<img src="images/article01.jpg"
								alt="Artist's interpretation of article headline" />
						</a>
						<p>
							Hendrerit tincidunt vero vel eorum claritatem. Soluta
							legunt quod qui dolore typi. Vel dolore soluta qui odio
							non. Sollemnes minim eorum feugiat nihil nobis. Gothica
							dolor in legentis nihil quinta.
						</p>
						<p>
							Iriure parum autem putamus lectores duis. Quam sit quis
							me me zzril. Facer etiam in lectores hendrerit etiam.
							Exerci lorem liber tincidunt nostrud decima. Mutationem
							est zzril ipsum facer nobis.
						</p>
						<a href="#" class="readmore">Read More</a>
					</div><!-- End cs_article -->

					<div class="cs_article">
						<h2> <a href="#">Article Number Two</a> </h2>
						<a href="#">
							<img src="images/article02.jpg"
								alt="Artist's interpretation of article headline" />
						</a>
						<p>
							Nibh nihil et ex accumsan insitam. Qui lius congue
							hendrerit quam vero. Demonstraverunt molestie ipsum
							magna nobis sequitur. Ex diam euismod quis ii velit.
						</p>
						<p>
							In quam lectores placerat Investigationes illum. Diam
							sollemnes nihil lorem claram consectetuer. Eros nam
							placerat claritas claritatem congue. Adipiscing ut
							clari suscipit nulla habent.
						</p>
						<a href="#" class="readmore">Read More</a>
					</div><!-- End cs_article -->

					<div class="cs_article">
						<h2> <a href="#">Article Number Three</a> </h2>
						<a href="#">
							<img src="images/article03.jpg"
								alt="Artist's interpretation of article headline" />
						</a>
						<p>
							Clari eum vel blandit notare quarta. Autem processus
							lectores augue iriure facit. Volutpat aliquip erat
							imperdiet ipsum tation. Typi luptatum ut
							demonstraverunt eros quam. Ut clari consectetuer
							tincidunt liber qui. 
						</p>
						<p>
							Modo vel facilisis qui liber est. Eorum Investigationes
							processus adipiscing commodo ea. Id iis claritatem vero
							ea consequat.
						</p>
						<a href="#" class="readmore">Read More</a>
					</div><!-- End cs_article -->

					<div class="cs_article">
						<h2> <a href="#">Article Number Four</a> </h2>
						<a href="#">
							<img src="images/article04.jpg"
								alt="Artist's interpretation of article headline" />
						</a>
						<p>
							Iis nostrud claritas quis sed qui. Ut nunc facilisi
							claritatem quinta sit. Assum ii liber diam zzril nobis.
							Qui nibh delenit fiant te illum. Delenit claritas ut
							exerci eros typi. 
						</p>
						<p>
							Videntur vel euismod ut eleifend quis. Nobis aliquam
							nunc vero blandit illum. Lius placerat litterarum
							processus quam legere. Accumsan modo non at congue
							duis. Odio duis ut blandit feugait in. 
						</p>
						<a href="#" class="readmore">Read More</a>
					</div><!-- End cs_article -->

				</div><!-- End cs_slider -->
			</div><!-- End cs_wrapper -->
		</div><!-- End contentslider -->
			</div>
							<div id="outerbox">
<div class="box"><!-- begin box -->
                	<div class="box-top">
                        <h4>Advertisements</h4>
                    </div>
                    <div class="box-body2">
                    	<p>If you have found WasomiOnline to be useful, please consider 
			  donating a small amount to help with the running costs of this 
			  site. In return, any personal donation of $20 or more can have a link 
			  to their website.</p><br />
						<p style="text-align:center;">
						<a href="donations.htm">
			<input type="image" src="img/x-click-but21.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="vertical-align:text-bottom; border:none;" width="110" height="23" /></a></p>
<p>Random link from previous donators...</p>
<a href="http://www.ureviewit.net/" target="_blank">Software Reviews</a>                    </div>
                    <div class="box-bottom"></div>
                </div><!-- end box --> 
				
				<div class="box"><!-- begin box -->
                	<div class="box-top">
                        <h4>Academic</h4>
                    </div>
                    <div class="box-body2">
                    	<p>If you have found WasomiOnline to be useful, please consider 
			  donating a small amount to help with the running costs of this 
			  site. In return, any personal donation of $20 or more can have a link 
			  to their website.</p><br />
						<p style="text-align:center;">
						<a href="donations.htm">
			<input type="image" src="img/x-click-but21.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="vertical-align:text-bottom; border:none;" width="110" height="23" /></a></p>
<p>Random link from previous donators...</p>
<a href="http://www.ureviewit.net/" target="_blank">Software Reviews</a>                    </div>
                    <div class="box-bottom"></div>
                </div><!-- end box -->           

							<div class="box"><!-- begin box -->
                	<div class="box-top">
                        <h4>Social &amp; Enter.</h4>
                    </div>
                    <div class="box-body2">
                    	<p>If you have found WasomiOnline to be useful, please consider 
			  donating a small amount to help with the running costs of this 
			  site. In return, any personal donation of $20 or more can have a link 
			  to their website.</p><br />
						<p style="text-align:center;">
						<a href="donations.htm">
			<input type="image" src="img/x-click-but21.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="vertical-align:text-bottom; border:none;" width="110" height="23" /></a></p>
<p>Random link from previous donators...</p>
<a href="http://www.ureviewit.net/" target="_blank">Software Reviews</a>                    </div>
                    <div class="box-bottom"></div>
                </div><!-- end box -->           
							
							

							
							
							</div>
            <div style="clear:both"></div><br />
			
            <div class="space"></div>

       </div>
            <!--webbot bot="Include" u-include="includes/google.htm" tag="BODY" startspan -->

<!--webbot bot="Include" endspan i-checksum="54313" --></div>

            <!-- end main-content -->
    	   <!--webbot bot="Include" u-include="includes/nav.htm" tag="BODY" startspan -->

<!--webbot bot="Include" endspan i-checksum="54917" --><!-- end sidebar --></div><!-- end container -->
         
    <div class="rounded-bottom"></div>
<!--webbot bot="Include" u-include="includes/footer.htm" tag="BODY" startspan -->
    <div id="footer" class="clearfloat"><!-- begin footer -->
    	<div class="one-fourth"><!-- begin one-fouth -->
        	<h3>Footer Navigation</h3>
       	  <ul class="footer-navigation">
           	  <li><a href="http://www.wasomionline.com/">Home</a></li>
              <li><a href="http://www.wasomionline.com/">News</a></li>
       		  <li><a href="http://www.wasomionline.com/">Services</a></li>
              <li><a href="http://www.wasomionline.com/">Gallery</a></li>
              <li><a href="http://www.wasomionline.com/">Contact Us</a></li>
          </ul>

        </div><!-- end one-fouth -->
        <div class="one-fourth"><!-- begin one-fouth -->
        	<h3>Friends</h3>
            <ul class="footer-navigation">
            	<li><a href="http://www.wasomionline.com/">Web Hosting</a></li>
                <li><a href="http://www.wasomionline.com/">COSTECH</a></li>
                <li><a href="http://www.wasomionline.com/">ITSADU</a></li>
                <li><a href="http://www.wasomionline.com/">Global Publishers</a></li>
                <li><a href="http://www.wasomionline.com/">IPP Media</a></li>
            </ul>
        </div><!-- end one-fouth -->
        <div class="one-fourth one-fourth-last"><!-- begin one-fouth -->
        	<h3>About Us</h3>
            <p>WasomiOnline is a free resource site for webmasters to take some of the hassle out of creating everyday items for their website. Within this website, you will find a number of different online generators, we have searched the internet to bring you some of the best generators in one place.</p>
        </div><!-- end one-fouth -->
		<div class="one-fourth one-fourth-last"><!-- begin one-fouth -->
        	<h3>Contact Us</h3>
            <p>WasomiOnline is a free resource site for webmasters to take some of the hassle out of creating everyday items for their website. Within this website, you will find a number of different online generators, we have searched the internet to bring you some of the best generators in one place.</p>
        </div><!-- end one-fouth -->
    </div><!-- end footer -->
    <div id="copyright"><!-- begin copyright -->
    	<p>Copyright &copy; 2011, WasomiOnline . All rights reserved</p>
    </div><!-- end copyright -->

<!--webbot bot="Include" endspan i-checksum="20027" --></div><!-- end wrapper -->
</body>

<!-- Mirrored from generateit.net/ by HTTrack Website Copier/3.x [XR&CO'2006], Mon, 14 Nov 2011 11:02:15 GMT -->
</html>
