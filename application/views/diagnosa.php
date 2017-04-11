<div class="container">
  <h2><span>Diagnosa</span></h2>
</div>
  <!-- Breadcrumb Starts -->
    <div class="breadcrumb">
      <div class="container">
        <ul class="list-unstyled list-inline">
          <li>Home</li>
          <li class="active">Diagnosa</li>
        </ul>
      </div>
    </div>    
  <!-- Breadcrumb Ends -->
  <br>
    <div class="container" >
   <form action="" method="post">
   <table class="table table-hover">
    <tr>
      <th>ID Gejala</th>
      <th>Gejala</th>
      <th>Pilih</th>
    </tr>
    <?php
      foreach ($gejala as $g) {
    ?>
    <tr>
      <th scope="row"><?php echo $g['id_gejala'] ?></th>
      <td><?php echo $g['nm_gejala'] ?></td>
      <?php $id_gejala = $g['id_gejala'];
            $id_penyakit = $g['id_penyakit'];
      ?>
      <td><a href="<?php echo base_url() . 'diagnosa/get_penyakit/' . $id_gejala . '/' . $id_penyakit ?>"> Lihat penyakit </td>
    </tr>
  <?php
  }
  ?>
</table>
    </div>
</form>
<br>
