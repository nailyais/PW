<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Ayonikah.com</title> 
	<meta name="description" content="Essentia Responsive Bootstrap Theme by Bootstrap Master"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/slider1.css" rel="stylesheet">
	<link href="css/slider2.css" rel="stylesheet">
	<link href="css/slider3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
						
			<!--start: Row -->
			<div class="row-fluid">
					
				<!--start: Navigation -->
				<div class="navigation"> 
				
					<div class="navbar navbar-fixed-top">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar btnOverlay" data-toggle="collapse" data-target=".nav-collapse">
			            		menu
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
									<li><a href="#" class="home">Home</a></li>
									<li><a href="#" class="service">Service</a></li>
									<li><a href="#" class="team">Team</a></li>
									<li><a href="#" class="contact">Contact</a></li>
									<li><?php
					if(isset($this->session->username)){
						echo '<li><a href="'.base_url().'profile"><span class="glyphicon glyphicon-lock"> </span>Profile</a></li>
						<li><a href="'.base_url().'login/logout"><span class="glyphicon glyphicon-user"> </span>Logout</a></li>';
					}else{
						echo '<li><a href="'.base_url().'login"><span class="glyphicon glyphicon-lock"> </span>Login</a></li>
						<li><a href="'.base_url().'register"><span class="glyphicon glyphicon-user"> </span>Register</a></li>';
					}
					?>		</li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
				
				
				</div>	
				<!--end: Navigation -->	
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	<!-- start: 1st Page - Home -->
	<div id="home">

		<div class="demo-1">

	        <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">

					<div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="H"></div>
							<h2>A bene placito</h2>
							<blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="q"></div>
							<h2>Regula aurea</h2>
							<blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Albert Schweitzer</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="O"></div>
							<h2>Dum spiro, spero</h2>
							<blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the abattoirs.</p><cite>Dame Jane Morris Goodall</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="I"></div>
							<h2>Donna nobis pacem</h2>
							<blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="t"></div>
							<h2>Acta Non Verba</h2>
							<blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

	    </div>

	</div>
	<!-- end: 1st Page - Home -->
	
	<!-- start: 2nd Page - Services -->
	
	<!-- end: 2nd Page - Services -->
	
	<!-- start: 3rd Page - Pricing Tables -->
	
	<!-- end: 3rd Page - Pricing Tables -->
	
	<!-- start: 4th Page - Portfolio -->
	<div id="service" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">
	
							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>Service</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Flexslider -->

			<!-- end: Flexslider -->

			<div id="filters">
				<ul class="option-set" data-option-key="filter">
					<li><a href="#filter" class="selected" data-option-value="*">All</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".admin">Admin</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".dashboard">Dashboard</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".website">Website</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".html5">HTML5</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".css3">CSS3</a></li>
					<li>/</li>
					<li><a href="#filter" data-option-value=".responsive">Responsive</a></li>
				</ul>
			</div>

			<!-- start: Portfolio -->
			<div id="portfolio-wrapper" class="row-fluid">
					<?php foreach ($data as $row):?>			
				<div class="span4 portfolio-item website responsive">
					
					<div class="picture"><a href="<?php echo base_url();?>item/detail/<?php echo $row->id_post;?>" title="Smart Responsive Template"><img src="img/portfolio/smart.png" alt=""/><div class="image-overlay-link"></div></a>
					
						<div class="item-description alt">
							<h5><a href="http://smart.bootstrapmaster.com"><?php echo $row->judul;?></a></h5>
							<p>
								<?php echo $row->intro;?>
							</p>
						</div>
					</div>	
				</div>

<?php endforeach;?>

			</div>
			<!-- end: Portfolio -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 4th Page - Portfolio -->
	
	<!-- start: 5th Page - About -->
	
			<!--end: Row -->
			
			<!-- start: Row -->

			<!--end: Row -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 5th Page - About -->
	
	<!-- start: 6th Page - Team -->
	<div id="team" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span14">

				<!-- start: Page Title -->
<div id="page-title">

	<div id="page-title-inner">

			<h2><span>Team</span></h2>

	</div>	

</div>
<!-- end: Page Title -->				

<!-- start: Row -->
<div class="row">
	
	<div class ="span16">
		
		<!-- start: Team -->	
		<div id="team" align="center">
				<center>		
			<!-- start: Row -->
			<div class="row">
			
				<!-- start: About Member -->

				<!-- end: About Member -->
				
				<hr class="clean visible-phone">

				<!-- start: About Member -->
				<div class="span4">
					<div class="avatar">
						<img class="img-circle" src="img/bima.jpg" alt="team member">
					</div>	
					<div class="team-name">Bima S M</div>
					<div class="position"><b>Co-founder</b></div>


				</div>
				<!-- end: About Member -->
				
				<hr class="clean visible-phone">
				
				<!-- start: About Member -->
				<div class="span5">
					<div class="avatar">
						<img class="img-circle" src="img/erine.jpg" alt="team member">
					</div>	
					<div class="team-name">Erine Raharjo</div>
					<div class="position"><b>Manager</b></div>


				</div>
				<!-- end: About Member -->
				
				<hr class="clean visible-phone">

				<!-- start: About Member -->
				<div class="span4">
					<div class="avatar">
						<img class="img-circle" src="img/putra.jpg" alt="team member">
					</div>	
					<div class="team-name">Putra T K</div>
					<div class="position"><b>Designer</b></div>

		
				</div>
				<!-- end: About Member -->
				
				<hr class="clean visible-phone">	
			
			</div>
			<!-- end: Row -->

		</div>
		</center>
		<!-- end: Team -->
		
	</div>	
	
</div>	
<!-- end: Row -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 6th Page - Team -->
	
	<!-- start: 7th Page - Contact -->
	<div id="mapBg"></div>
	<div id="contact" class="color blue transparent">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">

				
	
			<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

						<h2><span>Contact</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Row -->
			<div class="row-fluid">		
				
				<div class="span12">
					
					<!-- start: Contact Info -->
					<b>creativeLabs</b> •
					30 South Park Avenue •
					San Francisco, CA 94108, USA •
					Phone: (123) 456-7890 •
					Fax: +08 (123) 456-7890 •
					Email: contact@companyname.com •
					Web: companyname.com	
					<!-- end: Contact Info -->
				
				</div>	
			
			</div>
			<!-- end: Row -->
			
			<hr class="clean">
			
			<!-- start: Row -->
			<div class="row-fluid">		
			
				<!-- start: Map -->
				<div class="span6">
					
					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="">
							
							<fieldset>
								
								<input tabindex="4" id="name" name="name" type="text" value="" class="span12" placeholder="Name: ..." >
								<input tabindex="2" id="email" name="email" type="text" value="" class="span12" placeholder="Email: ...">
								<input tabindex="3" id="www" name="www" type="text" value="" class="span12" placeholder="WWW: ...">
								<textarea tabindex="3" class="input-xlarge span12" id="message" name="body" rows="7" placeholder="Message: ..."></textarea>

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large">Send message</button>
								</div>
								
							</fieldset>

						</form>

					</div>
					<!-- end: Contact Form -->
					

				</div>
				<!-- end: Map -->
				
				<div class="span6">
					
					<!-- starts: Google Maps -->
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
					<div id="googlemaps">
						<div id="map" class="google-map google-map-full"></div>
					</div>
					<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
					<script src="js/jquery.gmap.min.js"></script>
					<script type="text/javascript">
						$('#map').gMap({
							controls: {
								panControl: false,
								zoomControl: false,
								mapTypeControl: false,
								scaleControl: false,
								streetViewControl: false,
								overviewMapControl: false
							},
							maptype: 'ROADMAP',
							scrollwheel: true,
							zoom: 13,
							markers: [
								{
									address: 'San Francisco, United States', // Your Adress Here
									html: '',
									popup: false,
								}

							],

						});
						
						$('#mapBg').gMap({
							controls: {
								panControl: false,
								zoomControl: false,
								mapTypeControl: false,
								scaleControl: false,
								streetViewControl: false,
								overviewMapControl: false
							},
							maptype: 'ROADMAP',
							scrollwheel: true,
							zoom: 13,
							markers: [
								{
									address: 'San Francisco, United States', // Your Adress Here
									html: '',
									popup: false,
								}

							],

						});
						
					</script>
					<!-- end: Google Maps -->
				
				</div>	
			
			</div>
			<!-- end: Row -->

			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 7th Page - Contact -->

	

	<footer>
		
		<div id="copyright">
			essentia &copy; 2013 creativeLabs. <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> Designed by BootstrapMaster in Poland <img src="img/poland.png" alt="Poland" style="margin-top:-4px">
		</div>
		<div id="social">
			<a href="http://facebook.com/BootstrapMaster" rel="tooltip" title="Facebook" class="facebook">Facebook</a>
			<a href="http://facebook.com/BootstrapMaster" rel="tooltip" title="Twitter" class="twitter">Twitter</a>
			<a href="http://BootstrapMaster.com/feed/" rel="tooltip" title="RSS" class="rss">RSS</a>
			<a href="#" rel="tooltip" title="Github" class="github">Github</a>
			<a href="#" rel="tooltip" title="LinkedIn" class="linkedin">LinkedIn</a>
			<a href="#" rel="tooltip" title="Pintrest" class="pintrest">Pintrest</a>
			<a href="#" rel="tooltip" title="Vimeo" class="vimeo">Vimeo</a>
			<a href="#" rel="tooltip" title="YouTube" class="youtube">YouTube</a>
		</div>	
		
	</footer>	

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flexslider.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/fancybox.js"></script>
<script type="text/javascript" src="js/twitter.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>

<script type="text/javascript" src="js/excanvas.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>

<script defer="defer" src="js/custom.js"></script>
<script type="text/javascript">	
	$(function() {
	
		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {
						
						slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };

		})();

		Page.init();
	
	});
</script>
<!-- end: Java Script -->

</body>
</html>