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
      <?php $id_gejala = $g['id_gejala']?>
      <td><a href="<?php echo base_url() . 'diagnosa/get_penyakit/' . $id_gejala ?>"> Lihat penyakit </td>
    </tr>
  <?php
  }
  ?>
</table>
<div align="center">
<input type="submit" name="submit" value="Temukan Penyakit Anda!" class="btn btn-primary">
</div>
    </div>
</form>
<br>
</div>