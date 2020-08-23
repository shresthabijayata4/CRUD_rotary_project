<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$image_path= base_url('assets/');
?><!DOCTYPE html>
<html>
<head>
	<title>index page</title>
	<link rel="stylesheet"  href="<?php echo base_url('assets/css/style.css');?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/js/script.js');?>"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
 
</head>
<body style="font-family: Roboto;">
	<div class="header">
		<div class="footerhead">
			<div class="row">
				<div class="col-sm-3">
					<div class="contact-info">
						<span class="phone-icon"> <i class="fa fa-volume-control-phone" style="color:white"></i> </span>
						<span class="phone-no">+977 9843671841</span>
					</div>

				</div>

				<div class="col-sm-3">
					<span class="mail-icon"> <i class="fa fa-envelope" style="color:white"></i> </span>
					<span class="mail-address">hello@rotaryclub123.org</span>
				</div>
				<div class="col-sm-3">
					<div class="icons">
					<span class="facebook-icon"> <a href="https://www.facebook.com/PatanWest" class="fa fa-facebook-official" style="color:white"></a> </span>
					<span class="twitter-icon"> <a href="#" class="fa fa-twitter" style="color:white"></a> </span>
					<span class="instagram-icon"> <a href="https://www.instagram.com/rotaractclubofpatanwest/" class="fa fa-instagram" style="color:white"></a> </span>
					<span class="youtube-icon"> <a href="https://www.youtube.com/watch?v=W5zHTjKjFYY" class="fa fa-youtube-play" style="color:white"></a> </span>
					</div>
				</div>
				<div class="col-sm-3" style="padding-top:10px ;">
					<span class="member">Are you a Rotary Member?</span>
					<span>
						
						
						<a href="#" style="padding-left: 10px; color: yellow;">Log In</a>
						
					</span>
				</div>

			</div>
		</div>

		<div class=lo_ba>
			<div class="logo"><img src="<?php echo $image_path.'images/wheel.jpg';?>" height="110px"></div>
			<div class="banner"><img src="<?php echo base_url('assets/images/banner.jpg')?>" height="100px" align="right"></div>
			<div class=menu>
				<div class="menuitem"><a href="">HOME</a></div>
				<div class="menuitem"><a href=#aboutus-whole>ABOUT US</a></div>
				<div class="menuitem"><a href="#resources">RESOURCES</a></div>
				<div class="menuitem"><a href="#joinus-id"> JOIN US</a></div>
				<div class="menuitem"><a href="#footer-wholemenu"> CONTACT US</a></div>
			</div>
		</div>
		
	</div>
	<div class="walpaper">
        <img src="<?php echo base_url('assets/images/walpaper.jpg')?>" style="width: 100%; height: 700px;">
        <div class="overlay"></div>
            <div class="homecontent">
                <h1>Rotary Club</h1>
                <h2> Join the global movement of young leaders who are developing innovative solutions to the world’s most pressing challenges.  </h2>
				<button class="button1">
					<span class="plane-icon"> <a href="#joinus-id" class="fa fa-paper-plane-o" style="color:white; padding-right: 0px;"></a> </span>
					
					<a href="#joinus-id">Join Now</a>
				</button>
			</div>
		</div>
	</div>
	


	<div class="container">
		<a id="aboutus-whole"></a>
		<div class="aboutus-whole">
		<div id="title">
			<h1>Rotaract & Rotary</h1>
		</div>
		<div class="row">
			<div class="col-sm-4"><img class="img1" src="<?php echo base_url('assets/images/aboutus.png')?>" alt="about us"></div>
			<div class="col-sm-8">
				<h2>About US</h2>
				<p> Rotary is a worldwide organization of more than 1.2 million business, professional, and community leaders. Members of Rotary clubs, known as Rotarians, provide humanitarian service, encourage high ethical standards in all vocations, and help build goodwill and peace in the world.

					Rotaract is a Rotary-sponsored service club for young men and women aged 18 to 30 years. Rotaract clubs are either community or university based, and they’re sponsored by a local Rotary club.<span id="dots">.....</span><span id="more"> This makes them true “partners in service” and key members of the family of Rotary. Rotaract is Rotary’s most significant and fastest-growing service programs, with more than 9,030 clubs in about 170 countries and geographical areas. 
					
					Rotaract Movement started in Nepal in 1991 with the Charter of the first Rotaract Club. Since then the movement has extensively grown inspiring thousands of youths and brought out dynamic young leaders. Presently, there are 120 Rotaract Clubs across the country with more than 4000 Rotaractors spread across the nation.</span>
				</p>
				<button onclick="myFunction()" id="myBtn">Read more</button>
			</div>
		</div>
		</div>

	</div>


	<div id="resources">
		<div class="resource-title">
			<h2><b>Resources</b></h2>
		</div>
		<div class="row" style="background-color:">
			<div class="col-sm-3">
				<div class="col-1" style="padding: 50px;">
					<div class="documents">
						<i class="fa fa-bell-o" style="color:#4f4f8a"></i>

					</div>
					<div class="doc-content">
						<div class="doc-title">
							<h3>Document & Templates</h3>
						</div>
						<div class="doc-desc">
							<p>
								Find out all the documents & templates required for your club via Rotaract Resourcess
							</p>
						</div>
						<button class="button1">
							<span class="readmore"> <a href="#"></a> </span>
							
							Read More
						</button>
					</div>

				</div>
			</div>
			<div class="col-sm-3">
				<div class="2-col" style="padding: 50px;">

					<div class="tutorial">
						<i class="fa fa-youtube-play" style="color:#4f4f8a"></i>
					</div>
					<div class="tu-content">
						<div class="tu-title">
							<h3>Online Tutorials</h3>
						</div>
						<div class="tu-desc">
							<p>Find out all the video tutorials available at out official youtube channel.</p>
						</div>
						<button class="button1">
							<span class="readmore"> <a href="#"></a> </span>
							
							Read More
						</button>


					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="3-col" style="padding: 50px;">

					<div class="learning">
					<i class="fa fa-graduation-cap" style="color:#4f4f8a"></i>
					</div>

					<div class="learn-content">
						<div class="learn-title">
							<h3>Learning Center</h3>
						</div>
						<div class="learn-desc">
							<p>
								Learn about Rotaract Basics to Road to leadership through our online courses.
							</p>
						</div>
						<button class="button1">
							<span class="readmore"> <a href="#"></a> </span>
							
							Read More
						</button>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="4-col" style="padding: 50px;">

					<div class="publication">
						<i class="fa fa-book" style="color:#4f4f8a"></i>
					</div>

					<div class="pub-content">
						<div class="pub-title">
							<h3>Publication</h3>
						</div>
						<div class="pub-desc">
							<p>Check all out digital content at issuu

							</p>
						</div>
						<button class="button1">
							<span class="readmore"> <a href="#"></a> </span>
							
							Read More
						</button>
					</div>

				
				</div>
			</div>

		  </div>
	</div>
<!-- 
	=======================message from leaders================= -->
	<div class="message-title">
		<h2><b> Message From Leaders</b></h2>
	</div>

	<div class="Message-from-leaders">
		
		<div class="row">
			<div class="col-sm-4">
				<img src="<?php echo base_url('assets/images/holger.jpg')?>" class="img-thumbnail">
				<div class="content">
					<div class="title">
						<span><b>Holger Knaack</b></span>
					</div>
					<p>Rotary International President</p>
					<button class="button1">
						<span class="read"> <a href="#"></a> </span>
						
						Read 
					</button>
				</div>
			</div>
			<div class="col-sm-4">
				<img src="<?php echo base_url('assets/images/rajib.jpg')?>" class="img-thumbnail">
				<div class="content">
					<div class="title">
						<span>Rajib Pokhrel</span>
					</div>
					<p>District Governor</p>
					<button class="button1">
						<span class="read"> <a href="#"></a> </span>
						
						Read
					</button>
				</div>
			</div>
			<div class="col-sm-4">
				<img src="<?php echo base_url('assets/images/sanjib.jpg')?>" class="img-thumbnail">
				<div class="content">
					<div class="title">
						<span>Sanjib Poudel</span>
					</div>
					<p>District Rotaract Representative</p>
					<button class="button1">
						<span class="read"> <a href="#"></a> </span>
						
						Read 
					</button>
				</div>
			</div>


		</div>
	</div>
	

<!-- =====================student walpaper====================== -->

	<!-- =========================JOIN US======================== -->

	<a id="joinus-id"></a>
	<div class="join-us">
		<div class="row">
			<div class="paragraph">
				<div class="col-sm-7">
					<span class="global-movement">Be a part of Global Movement</span>
					<div class="title-content">
						<div class="title">
							<b>Join Us!</b>
						</div>
						<div class="content">
							<p>
								Check with your university or contact a local Rotary club to find out if there’s a Rotaract club in your area. Contact the Rotaract club to find out how you can join its next meeting, service project, or social event. You can use the Request to join form and the respective club shall reach to you.
							</p>
						</div>
					</div>
					<div class="members">
						<div class="member-1" style="width: 42%;">
							<i class="fa fa-user"></i>
							<div class="number-member">6,727</div>
							<div class="numberof-member">Members</div>
						</div>
						<div class="member-1" style="margin-left: 30px; width: 42%;">
						
							<i class="fa fa-home"></i>
							<div class="number-member">132</div>
							<div class="numberof-member">Clubs</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<form>

					<div class="request">
						Request to join
					</div>
					<div class="form-group">
						<label for="exampleInputName">Name</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
						<small id="emailHelp" class="form-text text-muted"></small>
					  </div>
					<div class="form-group">
					  <label for="exampleInputEmail1">Email address</label>
					  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
					  <label for="exampleInputPassword1">Message</label>
					  <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>

					</div>
					
					<button type="submit" class="btn btn-primary" style="margin: 0px 0px 0px 30px">Submit Request</button>
				  </form>
			</div>
		</div>
	</div>

	


	<!-- ==================our partners================== -->

	<div class="partners">
		<div class="our-partners">
			<h2><b>Our Partners</b></h2>
		</div>
		<div class="partner-bar">

			<div class="partneritem"><img src="<?php echo base_url('assets/images/microsoft-partner.png')?>"></div>
			<div class="partneritem"><img src="<?php echo base_url('assets/images/miniso-partner.png')?>"></div>
			<div class="partneritem"><img src="<?php echo base_url('assets/images/oyo-partner.png')?>"></div>
			<div class="partneritem"><img src="<?php echo base_url('assets/images/1-1.png')?>"></div>
			<div class="partneritem"><img src="<?php echo base_url('assets/images/2-1.png')?>"></div>


		</div>
		

	</div>


	<!-- 
	====================footer===================== -->
	<footer>
		<div id="footer-wholemenu">
			<div class="footer-uppermenu" >
				<div class="row">
					<div class="col-sm-4">
						<div class="imp-links">
							<span style="font-size: medium;"> Important Links</span>
							<ul>
								<li><a href="https://my.rotary.org/en/">My Rotary</a></li>
								<li><a href="https://brandcenter.rotary.org/en-GB">Rotary Brand Center</a></li>
								<li><a href="https://my.rotary.org/en">Rotary Learning Center</a></li>
								<li><a href="https://learn.rotaract3292.org/">Rotaract Learning Center</a></li>

							</ul>
						</div>
					</div>
					<div class="footer-contacts">
					<div class="col-sm-4">
						<span style="font-size:medium;">Contacts</span>
						<ul>
							
							<li><i class="fa fa-map-marker"></i> 
							<span>Baluwatar, Kathmandu</span>
							</li>
							<li><i class="fa fa-volume-control-phone"></i>
							<span>+977 9843671841</span>
							
							</li>
							<li><i class="fa fa-envelope"></i>
							<span>hello@rotaryclub123.org</span>
							
							</li>


						</ul>
					</div>
					</div>
					<div class="col-sm-4">
						<span style="font-size: large; font-weight: bold;">Newsletter</span>
						<form>
						<div class="form-group">
							<label for="exampleInputEmail1" style="font-weight: 500;" class="class-label">Enter your e-mail to get the latest news of Rotary</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						</div>
						<button type="submit" class="btn btn-primary">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-lowermenu">
				<div class="row">
					<div class="col-sm-6">
						<div class="copy-right">
							<span> Copyright <i class="fa fa-copyright"></i> 2020 Rotary website created by Bijayata</span>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="footer-icons">
							<ul>
							<li class="facebook-icon"> <a href="https://www.facebook.com/PatanWest" class="fa fa-facebook-official" ></a> </li>
							<li class="twitter-icon"> <a href="#" class="fa fa-twitter" ></a> </li>
							<li class="instagram-icon"> <a href="https://www.instagram.com/rotaractclubofpatanwest/" class="fa fa-instagram"></a> </li>
							<li class="youtube-icon"> <a href="https://www.youtube.com/watch?v=W5zHTjKjFYY" class="fa fa-youtube-play"></a> </li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		
		</div>
	</footer>

	<script>
		jQuery(document).ready(function(){
			jQuery('.menu .menuitem>a').on('click',function () {
				// e.preventDefault();
		
				var target = this.hash,
				jQuerytarget = jQuery(target);
		
			jQuery('html, body').stop().animate({
				'scrollTop': jQuerytarget.offset().top-170
				}, 900, 'swing', function () {
				window.location.hash = target;
				});
			});
		});
	</script>
	<script>
		jQuery(document).ready(function(){
			jQuery('.walpaper .button1>a').on('click',function () {
				// e.preventDefault();
		
				var target = this.hash,
				jQuerytarget = jQuery(target);
		
			jQuery('html, body').stop().animate({
				'scrollTop': jQuerytarget.offset().top-170
				}, 900, 'swing', function () {
				window.location.hash = target;
				});
			});
		});
	</script>

</body>
</html> 