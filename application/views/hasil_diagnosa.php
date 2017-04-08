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
<br>
</div>
</div>