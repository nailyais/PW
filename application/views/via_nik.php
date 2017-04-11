<div class="container">
	<h2><span>Pendaftaran Melalui NIK</span></h2>
</div>
<div class="breadcrumb">
	<div class="container">
		<ul class="list-unstyled list-inline">
			<li>Home</li>
			<li class="active">Pendaftaran Melalui NIK</li>
		</ul>
	</div>
</div>		
<div class="container main-container">
	<ul class="list-unstyled list-inline">
		<li><a href="<?php echo base_url() . 'user/user_get/' . $show_dokter->id_dokter ?>" class="btn btn-primary">Daftar Baru</a></li>
		<li><a href="#NIK" class="btn btn-primary">Pendaftaran dengan NIK</a></li>
	</ul>
	<div class="contact-content">
		<div class="row">
			<form class="contact-form" name="contact-form" method="post" action="<?php echo base_url() . 'user/tanggal_re/' . $show_dokter->id_dokter ?>" role="form">
				
					<div class="row">
						<div class="form-group">
							<label for="nik">NIK </label>
							<input type="text" class="form-control" name="nik" id="nik" required="required">
						</div>
						<div align="center">
							<input type="submit" class="btn btn-black text-uppercase" value="Submit">
						</div>
					</div>
			</form> 
		</div>
	</div>
</div>
