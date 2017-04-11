<div class="container">
	<h2><span>Doctor's</span></h2>
</div>
<div class="breadcrumb">
	<div class="container">
		<ul class="list-unstyled list-inline">
			<li><a href="index.html">Home</a></li>
			<li class="active">Doctors</li>
		</ul>
	</div>
</div>		
<div class="container main-container">
<div class="contact-content">
	<div class="row">
		<form class="contact-form" name="contact-form" method="post" action="<?php echo base_url() . 'user/booking/' . $show_dokter->id_poli ?>" role="form">
			<h3>Daftar Baru</h3>
				<div class="row">
						<div class="form-group">
							<label for="nik">Tanggal Realisasi </label>
							<input type="date" class="form-control" name="tgl_realisasi" id="tgl_realisasi" required="required">
							<input type="hidden" name="id_dokter" value="<?php echo $show_dokter->id_dokter ?>">
							<input type="hidden" name="id_poli" value="<?php echo $show_dokter->id_poli ?>">
						</div>		
					<input type="submit" class="btn btn-black text-uppercase" value="Submit">
				</div>
		</form>
	</div>
</div>
</div>