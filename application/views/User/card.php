<!DOCTYPE HTML>
<html>

<head>
	<title><?= $company_info['company_name'] ?></title>
	<link href="<?= base_url() ?>assets/user/css/css-bootstrap.css" rel="stylesheet" type="text/css">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?= base_url() ?>assets/user/js/5883-js-jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="<?= base_url() ?>assets/user/css/css-style.css" rel="stylesheet" type="text/css">
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<!-- webfonts -->
	<link href="//fonts.googleapis.com/css?family=Asap:400,700,400italic" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
	<!-- rating -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/user/css/rating.css">
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="<?= base_url() ?>assets/user/js/5127-js-move-top.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/user/js/2835-js-easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!---- start-smoth-scrolling---->
</head>

<body>
	<script src="<?= base_url() ?>assets/user/js/1.10.2-jquery.min.js"></script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
			}
		})();
	</script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
			}
		})();
	</script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
			}
		})();
	</script>
	<div id="codefund">
		<!-- fallback content -->
	</div>

	<!-- container -->
	<!-- header -->
	<div id="home" class="header">
		<div class="container">
			<!-- top-hedader -->
			<div class="top-header">
				<!-- /logo -->
				<!--top-nav---->
				<div class="top-nav">
					<div class="navigation">
						<div class="logo">
							<h1><a style="color:black"><?= $company_info['company_name'] ?></a></h1>
						</div>
						<div class="navigation-right">
							<span class="menu"><img src="<?= base_url() ?>assets/user/images/images-menu.png" alt=" "></span>
							<nav class="link-effect-3" id="link-effect-3">
								<ul class="nav1 nav nav-wil">
									<li class="active"><a data-hover="Home" href="index.html">Home</a></li>
									<li><a style="color:black" class="scroll" data-hover="About" href="#about">About</a></li>
									<li><a style="color:black" class="scroll" data-hover="Services" href="#services">Services</a></li>
									<li><a style="color:black" class="scroll" data-hover="Portfolio" href="#port">Portfolio</a></li>
									<li><a style="color:black" class="scroll" data-hover="Contact" href="#contact">Contact</a></li>
									<li><a style="color:black" class="scroll" data-hover="Feedback" href="#feedback">Feeddback</a></li>
									<li><a style="color:black" class="scroll" data-hover="Enquiry" href="#enquiry">Enquiry</a></li>
								</ul>
							</nav><!-- script-for-menu -->
							<script>
								$("span.menu").click(function () {
									$("ul.nav1").slideToggle(300, function () {
										// Animation complete.
									});
								});
							</script><!-- /script-for-menu -->
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- /top-hedader -->
				</div>
				<div class="banner-info">
					<div class="col-md-7 header-right">
						<h1>Welcome !</h1>
						<h6><?= $company_info['company_name'] ?> <?= $company_info['nature_business'] ?></h6>
						<ul class="address">
							<li>
								<ul class="address-text">
									<li><b>PHONE </b></li>
									<li><a href="tel:<?= $company_info['email'] ?>"><?= $company_info['phone'] ?></a></li>
								</ul>
							</li>
							<li>
								<ul class="address-text">
									<li><b>ADDRESS </b></li>
									<li><?= $company_info['address'] ?></li>
								</ul>
							</li>
							<li>
								<ul class="address-text">
									<li><b>E-MAIL </b></li>
									<li><a href="mailto:<?= $company_info['email'] ?>"> <?= $company_info['email'] ?></a></li>
								</ul>
							</li>
							<li>
								<ul class="address-text">
									<li><b>WEBSITE </b></li>
									<li><a href="<?= $company_info['website'] ?>"><?= $company_info['website'] ?></a></li>
								</ul>
							</li>

						</ul>
					</div>
					<div class="col-md-5 header-left">
						<img src="<?= base_url() ?>assets/user/images/keights_logo.png" alt=""></div>
					<div class="clearfix"> </div>

				</div>
			</div>
		</div>
	</div>
	<!-- about -->
	<div id="about" class="about">
		<div class="col-md-6 about-left">
			<div id="owl-demo1" class="owl-carousel owl-carousel2">
				<div class="item">
					<div class="about-left-grid">
						<h2>Welcome To, <span><?= $company_info['company_name'] ?></span></h2>
						<?= $about_form['own_words'] ?>
						<ul>
							<li><a class="a-btn-a scroll" href="#enquiry">Enquiry</a></li>
						</ul>
					</div>
				</div>
				<div class="item">
					<div class="about-left-grid">
						<h2>Our <span>Specialities</span></h2>
						<?= $about_form['specialities'] ?>	
						<ul>
							<li><a class="a-btn-a scroll" href="#enquiry">Enquiry</a></li>
						</ul>
					</div>
				</div>
				<div class="item">
					<div class="about-left-grid">
						<h2>Our <span>Mission</span></h2>
							<?= $about_form['mission'] ?>
						<h2>Our <span>Approach</span></h2>
							<?= $about_form['approach'] ?>
						<ul>
							<li><a class="a-btn-a scroll" href="#enquiry">Enquiry</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 about-right">

		</div>
		<div class="clearfix"> </div>
		<link href="<?= base_url() ?>assets/user/css/css-owl.carousel.css" rel="stylesheet">
		<script src="<?= base_url() ?>assets/user/js/9363-js-owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$("#owl-demo1").owlCarousel({
					items: 1,
					lazyLoad: false,
					autoPlay: true,
					navigation: false,
					navigationText: false,
					pagination: true,
				});
			});
		</script><!-- Feedback -->
		<script>
			$(document).ready(function () {
				$("#owl-demo3").owlCarousel({
					items: 1,
					lazyLoad: false,
					autoPlay: true,
					navigation: false,
					navigationText: true,
					pagination: true,
				});
			});
		</script>
	</div>
	<!-- /about -->
	<!-- services -->
	<div id="services" class="services">
		<div class="container">
			<!---728x90--->

			<div class="service-head one text-center ">
				<h4>WHAT WE DO</h4>
				<h3>Our <span>SERVICES</span></h3>
				<span class="border two"></span>
			</div>
			
			<!-- services-grids -->
			<div class="wthree_about_right_grids w3l-agile">
				<div class="col-md-6 wthree_about_right_grid">
					<div class="col-xs-4 wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-pencil"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_about_right_grid_right">
						<h4>Web Design</h4>
						<p>When it comes to website design, creativity runs wild in Keights India's office as your designs and ideas 
							are brought to life.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 wthree_about_right_grid">
					<div class="col-xs-4 wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-cog"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_about_right_grid_right">
						<h4>Web Development</h4>
						<p>With some of the brightest minds at our disposal, your website can be customized from something as simple as a page of plain text to the most complex website with 
							the most latest features and incorporating the most latest technologies</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 wthree_about_right_grid">
					<div class="col-xs-4 wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-phone"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_about_right_grid_right">
						<h4>Mobile App development</h4>
						<p>A mobile application is a software application designed to run on smartphones,
							tablet computers and other mobile devices.
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 wthree_about_right_grid">
					<div class="col-xs-4 wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-gift"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_about_right_grid_right">
						<h4>E-Commerce</h4>
						<p>Designing winning ecommerce websites is a skill that we have mastered here at Keights India. A great ecommerce website 
							will connect the user to the product he/she is looking for in a seamless, super-efficient and fun way.
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
				<div class="clearfix"> </div>
			</div>

			<!-- services-grids -->
			<!---728x90--->

		</div>
	</div>
	<!-- services -->
	<!-- portfolio -->
	<div class="portfolio" id="port">
		<!---728x90--->

		<div class="service-head text-center">
			<h4>Our WORKS</h4>
			<h3>Our <span>PORTFOLIO</span></h3>
			<span class="border"></span>
		</div>
		<div class="portfolio-grids">
			<script src="<?= base_url() ?>assets/user/js/7855-js-easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});

			</script>
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>ALL</span></li>
					</ul>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="col-md-4 team-gd ">

								<a href="#portfolioModal1" class="portfolio-link b-link-diagonal b-animate-go"
									data-toggle="modal"><img src="<?= base_url() ?>uploads/images/<?= $gallery['image_1'] ?>" alt=""></a>

							</div>
							<div class="col-md-4 team-gd ">

								<a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go"
									data-toggle="modal"><img src="<?= base_url() ?>uploads/images/<?= $gallery['image_2'] ?>" alt=""></a>

							</div>
							<div class="col-md-4 team-gd ">

								<a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go"
									data-toggle="modal"><img src="<?= base_url() ?>uploads/images/<?= $gallery['image_4'] ?>" alt=""></a>

							</div>
							<div class="clearfix"></div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
	
	<!-- /header -->
	<div class="footer" id="contact">
		<div class="container">
			<div class="service-head one text-center">
				<h4>CONTACT US</h4>
				<h3>GET <span>IN TOUCH WITH US</span></h3>
				<span class="border two"></span>
			</div>
			<div class="mail_us">
				<div class="col-md-6 mail_left">
					<div class="contact-grid1-left">
						<div class="contact-grid1-left1">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<h4>Contact By Email</h4>
							<ul>
								<li>Mail: <a href="mailto:<?= $company_info['email'] ?>"><?= $company_info['email'] ?></a></li>
							</ul>
						</div>
					</div>
					<div class="contact-grid1-left">
						<div class="contact-grid1-left1">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<h4>Contact By Phone</h4>
							<ul>
								<li>Phone: <?= $company_info['phone'] ?></li>
							</ul>
						</div>
					</div>
					<div class="contact-grid1-left">
						<div class="contact-grid1-left1">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							<h4>Looking For Address</h4>
							<?= $company_info['address'] ?>
						</div>
						<br><br>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 mail_right">
				<div id="feedback" class="service-head one text-center">
					<br>
					<h4></h4>
					<h3 style="color:#00a78e;">Feedback</span></h3>
					<span class="border two"></span>
				</div>
				<br>
				<br>
					<form id="feedform"  acttion="<?= base_url() ?>visiting_users/take_feedback" method="post">
						<input type="hidden" name="card_id" value="<?= $card_id ?>" >
						<input type="text" name="name" placeholder="Name" required="">
						<textarea name="feedback" required=""></textarea>
						<div class="rate">
							<input type="radio"  name="rate" value="5" required/><label for="star5" title="text">5 stars</label>
							<input type="radio"  name="rate" value="4" required/><label for="star4" title="text">4 stars</label>
							<input type="radio"  name="rate" value="3" required/><label for="star3" title="text">3 stars</label>
							<input type="radio"  name="rate" value="2" required/><label for="star2" title="text">2 stars</label>
							<input type="radio"  name="rate" value="1" required/><label for="star1" title="text">1 star</label>
						</div><br>
						<input type="submit" value="Send">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
				<div class="col-md-6 mail_right">
				<div id="enquiry" class="service-head one text-center">
					<br>
					<h4>Ask!</h4>
					<h3 style="color:#00a78e;">Enquiry</span></h3>
					<span class="border two"></span>
				</div>  
					<form id="enquiry_form"  acttion="<?= base_url() ?>visiting_users/take_enquiry" method="post">
		
							<input type="hidden" name="card_id" value="<?= $card_id ?>" >
							<input type="text" name="name" value="Name" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Name';}" required="">
							
							<input type="email"
							name="email" value="email" required="">

							<input type="text" name="phone" value="Mobile number" required="">
							<textarea
							name="enquiry_text" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'Message...';}"
							required="">Message...</textarea>
						<input type="submit" value="Send">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="copy_right text-center">
				<p> 2020 Mycard</p>
				<ul class="social-icons two">
					<li><a href="<?= $company_info['twitter_link'] ?>"> </a></li>
					<li><a href="<?= $company_info['facebook_link'] ?>" class="fb"> </a></li>
					<li><a href="<?= $company_info['insta_link'] ?>" class="in"> </a></li>
					<li><a href="<?= $company_info['website'] ?>" class="dott"> </a></li>
				</ul>
				<br>
				<br>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- /container -->
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog"
		aria-hidden="true">
		<div class="modal-content port-modal">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<div class="modal-body">
							<img src="<?= base_url() ?>uploads/images/<?= $gallery['image_1'] ?>" class="img-responsive img-centered" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog"
		aria-hidden="true">
		<div class="modal-content port-modal">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<div class="modal-body">
							<img src="<?= base_url() ?>uploads/images/<?= $gallery['image_2'] ?>" class="img-responsive img-centered" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog"
		aria-hidden="true">
		<div class="modal-content port-modal">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<div class="modal-body">
							<img src="<?= base_url() ?>uploads/images/<?= $gallery['image_3'] ?>" class="img-responsive img-centered" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog"
		aria-hidden="true">
		<div class="modal-content port-modal">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<div class="modal-body">
							<img src="<?= base_url() ?>uploads/images/<?= $gallery['image_4'] ?>" class="img-responsive img-centered" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog"
		aria-hidden="true">
		<div class="modal-content port-modal">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<div class="modal-body">							
							<img src="<?= base_url() ?>uploads/images/<?= $gallery['image_5'] ?>" class="img-responsive img-centered" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog"
		aria-hidden="true">
		<div class="modal-content port-modal">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 text-center">
						<div class="modal-body">							
							<img src="<?= base_url() ?>uploads/images/<?= $gallery['image_6'] ?>" class="img-responsive img-centered" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!--start-smooth-scrolling-->
	<script type="text/javascript">
		$(document).ready(function () {

			$('#feedform').submit(function(e){

				e.preventDefault();
				$.ajax({
					url: "<?= base_url() ?>visiting_users/take_feedback",
					method: "POST",
					data: new FormData(this),
					processData: false,
					contentType:false,
					cache:false,
					success: function(data){
						if(data.status === 1){
							alert("Thank You!");
						}
					}
				});

			});

			$('#enquiry_form').submit(function(e){

				e.preventDefault();
				$.ajax({
					url: "<?= base_url() ?>visiting_users/take_enquiry",
					method: "POST",
					data: new FormData(this),
					processData: false,
					contentType:false,
					cache:false,
					beforeSend: function(){
						$("#loading_modal").css("visibility", "visible");
					},
					success: function(data){
						if(data.status === 1){
							alert("Thank You!");
						}
					}
				});

			});


		});
	</script>
	<!--end-smooth-scrolling-->
	<!-- //for bootstrap working -->
	<script src="<?= base_url() ?>assets/user/js/1789-js-bootstrap.js"></script>
</body>
</html>