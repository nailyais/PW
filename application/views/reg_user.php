<div class="container">
	<h2><span>Daftar Baru</span></h2>
</div>
<div class="breadcrumb">
	<div class="container">
		<ul class="list-unstyled list-inline">
			<li><a href="index.html">Home</a></li>
			<li class="active">Daftar Baru</li>
		</ul>
	</div>
</div>		
<div class="container main-container">
	<ul class="list-unstyled list-inline">
		<li><a href="#" class="btn btn-primary">Daftar Baru</a></li>
		<li><a href="<?php echo base_url() . 'user/viaNIK/' . $show_dokter->id_dokter ?>" class="btn btn-primary">Pendaftaran dengan NIK</a></li>
	</ul>
<div class="contact-content">
	<div class="row">
		<form class="contact-form" name="contact-form" method="post" action="<?php echo base_url() . 'user/add_user/' . $show_dokter->id_dokter ?>" role="form">
			<h3>Daftar Baru</h3>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="nik">NIK </label>
							<input type="text" class="form-control" name="nik" id="nik" required="required">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text" class="form-control" name="nm_user" id="nm_user" required="required">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="status">Status</label>
							<input type="text" class="form-control" name="status" id="status" required="required">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="status">Jenis Kelamin</label>
							<input type="text" class="form-control" name="jk" id="jk" required="required">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="subject">Tanggal Lahir </label>
							<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required="required">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="subject">Alamat</label>
							<input type="text" class="form-control" name="alamat" id="alamat" required="required">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="subject">No. Telepon</label>
							<input type="text" class="form-control" name="hp" id="hp" required="required">
						</div>
					</div>
					<div class="col-md-6">
					<br>
					<input type="submit" class="btn btn-black text-uppercase" value="Submit">
					</div>
				</div>
		</form>
	</div>
</div>
</div>
		</div>