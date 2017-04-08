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
					<?php $id_dokter = $sd['id_dokter'] ?>			
					<a href="<?php echo base_url() . 'detail_dokter/detail/' . $id_dokter ?>" class="btn btn-secondary text-uppercase">Lihat Detail</a>
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
