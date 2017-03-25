   <br>
    <div class="container" >
   <form>
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
      <td><input type="checkbox" name="" value="<?php echo $g['id_penyakit']?>"></td>
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