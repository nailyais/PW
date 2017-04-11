
<style>
.bodyy {
		font-family: sans-serif;
		font-size: 16px;
		padding-left: 350px;
		padding-right: 350px;
	}
	.table {
    margin: auto;
    width: 50%;
    padding: 5px;
	font-size: 13px;}
	.tbl {
    padding-left: 343px;
	font-size: 13px;
	}
	.border {
		border-top: solid;
		border-left: solid;
		border-right: solid;
		border-bottom: solid; 
	}
	p {
	padding-right:  335px; 
	font-size: 13px;
	}
</style>
<br>
	<div class="bodyy">
		<div class="border">
			<h1 align="center">RUMAH SAKIT MOKLET</h1>
			<hr>
			<h3 align="center"><?php echo $show_book->nm_poli ?></h3>
			<h4 align="center"><?php echo $show_book->nm_dokter ?></h4>
			<h1 align="center"><?php echo $show_book->no_antrian; ?></h1>
			<h4 align="center"><?php echo $show_book->nik ?></h4>
			<h3 align="center"><?php echo $show_book->nm_user ?></h3>
			<h5 align="center">Tanggal Realisasi: <?php echo $show_book->tgl_realisasi ?></h5>
		</div>
	</div>
	<br>
	<div align="center">
	<button onclick="print_d()" class="btn btn-primary">Print</a>
	</div>
	<script>
 	 function print_d(){
   	  window.print();
  	}
 </script>
 <br>