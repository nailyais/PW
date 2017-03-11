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
					<li class="active">Dokter Profile</li>
				</ul>
			</div>
		</div>		
	<!-- Breadcrumb Ends -->		
	<!-- Main Container Starts -->
		<div class="container main-container">
		<!-- Doctor Profile Starts -->
			<div class="row">
				<div class="col-sm-5 col-xs-12">
					<div class="profile-block">
						<div class="panel panel-profile">
							<div class="panel-heading">
								<img src="<?php echo base_url() .'asset/img/' . $detail_dokter->Image ?>" class="img-responsive img-center-xs">
									
								<h3 class="panel-title"><?php echo $detail_dokter->Nama_dokter ?></h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled">
									<li class="row">
										<span class="col-sm-4 col-xs-12"><strong>Spesialis</strong></span>
										<span class="col-sm-8 col-xs-12"><?php echo $detail_dokter->Spesialis ?></span>
									</li>
									<li class="row">
										<span class="col-sm-4 col-xs-12"><strong>Hari Libur</strong></span>
										<span class="col-sm-8 col-xs-12"><?php echo $detail_dokter->Libur ?></span>
									</li>
									<li class="row">
										<span class="col-sm-4 col-xs-12"><strong>Work Days</strong></span>
										<span class="col-sm-8 col-xs-12"><?php echo $detail_dokter->Hari_hadir ?></span>
									</li>
								</ul>
							</div>
							<div class="panel-footer text-center-md text-center-sm text-center-xs">
								<div class="row">
									<div class="col-lg-6 col-xs-12">
										<a href="#" class="btn btn-secondary text-uppercase">Buat Jadwal</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-7 col-xs-12">
					<div class="profile-details">
						<h3 class="main-heading2"><?php echo $detail_dokter->Nama_dokter ?></h3>
						<h4>Deskripsi</h4>
						<p><?php echo $detail_dokter->deskripsi ?></p>
						<h4>Biodata</h4>
						<h6>Alamat: <?php echo $detail_dokter->Alamat ?></h6>
						<h6>Jenis Kelamin:  <?php echo $detail_dokter->JK ?></h6>
						<h6>Tanggal Lahir: <?php echo $detail_dokter->Tanggal_lahir ?></h6>
						<h6>Telepon: <?php echo $detail_dokter->Telepon ?></h6>
					</div>
				</div>
			</div>
		<!-- Doctor Profile Ends -->
		<!-- Related Best Doctors Ends -->
		</div>
	<!-- Main Container Ends -->