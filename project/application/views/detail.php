<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<?php foreach ($data as $row):?><title><?php echo $row->judul;?></title><?php endforeach;?>
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
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/slider1.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/slider2.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/slider3.css" rel="stylesheet">
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
									<li><a href="http://localhost/project/" class="home">Home</a></li>
									<li><a href="http://localhost/project/#service">service</a></li>
									<li><a href="http://localhost/project/#team" class="team">Team</a></li>
									<li><a href="http://localhost/project/#contact" class="contact">Contact</a></li>
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

	<!-- end: 3rd Page - Pricing Tables -->
	
	<!-- start: 4th Page - Portfolio -->
	<div id="portfolio" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">
	
							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span><?php echo $row->judul;?></span></h2>
					<center><h3>Rp.<?php echo $row->harga;?></h3></center>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Flexslider -->

			<!-- end: Flexslider -->



			<!-- start: Portfolio -->
					<div class="span11">
						
							

								<p><?php echo $row->isi;?></p>
								
							
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

	<!-- end: 6th Page - Team -->
	
	<!-- start: 7th Page - Contact -->
	

	<!-- end: 7th Page - Contact -->

	
<br><br><br><br><br><br><br><br><br><br><br><br>
	<footer>
		
		<div id="copyright">
			essentia &copy; 2013 creativeLabs. <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> Designed by BootstrapMaster in Poland <img src="<?php echo base_url();?>img/poland.png" alt="Poland" style="margin-top:-4px">
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
<script type="text/javascript" src="<?php echo base_url();?>js/isotope.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/flexslider.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/carousel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/fancybox.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/twitter.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.slitslider.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>js/excanvas.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.flot.resize.min.js"></script>

<script defer="defer" src="<?php echo base_url();?>js/custom.js"></script>
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