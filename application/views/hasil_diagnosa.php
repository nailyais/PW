<div class="container">
  <h2><span>Penyakit</span></h2>
</div>
  <!-- Breadcrumb Starts -->
    <div class="breadcrumb">
      <div class="container">
        <ul class="list-unstyled list-inline">
          <li>Home</li>
          <li class="active">Penyakit</li>
        </ul>
      </div>
    </div>    
  <!-- Breadcrumb Ends -->
  <br>
  <div class="container second-container" >
<div class="row">
<table class="table table-hover">
    <tr>
      <th>Penyakit</th>
      <th>Gejala</th>
      <th>Aksi</th>
    </tr>
    <tr>
      <td><?php echo $show_penyakit->nm_penyakit ?></td>
      <td><?php
      foreach ($show_gejala as $sg) {
        echo $sg['nm_gejala']. ", ";
       }  
      ?></td>
      <td><a href="<?php echo base_url() . 'diagnosa/get_dokter/' . $show_penyakit->id_penyakit ?>" class="btn btn-primary">Temukan Dokter Anda</a></td>
      </form>
    </tr>
</table>

<div class="book-appointment-box">
        <div class="row">
          <div class="text-center-sm text-center-xs">
            <h4>Untuk Mengetahui Lebih Lanjut Konsultasikan Dengan Dokter</h4>
          </div>
        </div>
      </div>
<br>
<br>
</div>
</div>