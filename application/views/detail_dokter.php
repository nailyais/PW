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
								<img src="<?php echo base_url() .'asset/img/' . $detail_dokter->image ?>" class="img-responsive img-center-xs">
									
								<h3 class="panel-title"><?php echo $detail_dokter->nm_dokter ?></h3>
							</div>
							<div class="panel-body">
								<ul class="list-unstyled">
									<li class="row">
										<span class="col-sm-4 col-xs-12"><strong>Hari Hadir</strong></span>
										<span class="col-sm-8 col-xs-12"><?php echo $detail_dokter->hari_hadir ?></span>
									</li>
									<li class="row">
										<span class="col-sm-4 col-xs-12"><strong>Jam buka - Jam Tutup</strong></span>
										<span class="col-sm-8 col-xs-12"><?php echo $detail_dokter->jam_buka . " - " . $detail_dokter->jam_tutup ?></span>
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
						<h3 class="main-heading2"><?php echo $detail_dokter->nm_dokter ?></h3>
						<h4>Deskripsi</h4>
						<p><?php echo $detail_dokter->deskripsi ?></p>
						<h4>Biodata</h4>
						<h6><b>Alamat: </b><?php echo $detail_dokter->alamat ?></h6>
						<h6><b>Jenis Kelamin:  </b><?php echo $detail_dokter->jk ?></h6>
						<h6><b>Tanggal Lahir: </b><?php echo $detail_dokter->tgl_lahir ?></h6>
						<h6><b>Telepon: </b><?php echo $detail_dokter->tlp ?></h6>
					</div>
				</div>
			</div>
		<!-- Doctor Profile Ends -->
		<!-- Related Best Doctors Ends -->
		</div>
	<!-- Main Container Ends -->