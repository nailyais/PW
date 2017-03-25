<div class="container">
	<h2><span>Doctor's</span></h2>
</div>
	<div class="breadcrumb">
		<div class="container">
			<ul class="list-unstyled list-inline">
				<li><a href="index.html">Home</a></li>
				<li class="active">Help</li>
			</ul>
		</div>
	</div>	
	<br>
	<div class="container">	
		<!--<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
            	<ul class="nav" id="side-menu">
                	<li>
                    	<a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Spesialis Anak</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>  Spesialis Bedah<span class="fa arrow"></span></a>
					</li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Spesialis Penyakit Kulit dan Kelamin</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Spesialis Mata<span class="fa arrow"></span></a>
                    </li>
                    <li>
                       <a href="#"><i class="fa fa-sitemap fa-fw"></i> Spesialis Penyakit Dalam<span class="fa arrow"></span></a>
                    </li>
                </ul>
            </div>
        </div>
        -->
        <ul id="doctors-grid" class="row grid">
			<?php
            	foreach ($show_dokter as $sd) {
            ?>
			<li class="col-md-3 col-sm-6 col-xs-12 doctors-grid">
				<div class="bio-box">
					<div class="profile-img">
						<img src="<?php echo base_url().'asset/img/'. $sd['image']?>" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
					</div>
					<div class="inner">
						<h5><?php echo $sd['nm_dokter']?></h5>
						<p class="designation"></p>
						<p class="divider"><i class="fa fa-plus-square"></i></p>
					</div>							
					<a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
				</div>
			</li>
			<?php
            	}
            ?>
		</ul>
		<br>
    </div>
</div> 
