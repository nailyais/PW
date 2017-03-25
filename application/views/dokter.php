  
	<!-- Main Banner Starts -->
			<div class="container">
				<h2><span>Doctor's</span></h2>
			</div>
		</div>
	<!-- Main Banner Ends -->
	<!-- Breadcrumb Starts -->
		<div class="breadcrumb">
			<div class="container">
				<ul class="list-unstyled list-inline">
					<li><a href="index.html">Home</a></li>
					<li class="active">Help</li>
				</ul>
			</div>
		</div>		
	<!-- Breadcrumb Ends -->		
	<!-- Main Container Starts -->
		<!-- Doctors Bio List Starts -->
		<br>
		<br>
		<div class="col-sm-3">
		<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Spesialis Anak</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>  Spesialis Bedah<span class="fa arrow"></span></a>
                            <!-- /.nav-second-level -->
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
                </div>
			<ul id="doctors-grid" class="row grid">
			<!-- Doctor Bio #1 Starts -->
            <?php
            foreach ($show_dokter as $sd) {
            ?>
			<!-- Doctor Bio #1 Starts -->
				<li class="col-md-3 col-sm-6 col-xs-12 doctors-grid">
					<div class="bio-box">
						<div class="profile-img">
							<img src="<?php echo base_url().'asset/img/'. $sd['Image']?>" alt="Doctor" class="img-responsive img-center-sm img-center-xs">
						</div>
						<div class="inner">
							<h5><?php echo $sd['Nama_dokter']?></h5>
							<p class="designation"><?php echo $sd['Spesialis']?></p>
							<p class="divider"><i class="fa fa-plus-square"></i></p>
							<p>
							</p>
						</div>							
						<a href="doctor-profile.html" class="btn btn-secondary text-uppercase">Book An Appointment</a>
					</div>
				</li>
			<!-- Doctor Bio #1 Ends -->
			<!-- Doctor Bio #1 Ends -->
            <?php
            }
            ?>
			</ul>

			</div>

	<!-- Main Container Ends -->