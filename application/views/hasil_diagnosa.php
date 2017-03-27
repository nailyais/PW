   <br>
    <div class="container" >
   
   <table class="table table-hover">
    <tr>
      <th>Penyakit</th>
      <th>Gejala</th>
    </tr>
    <tr>
      <td><?php echo $show_penyakit->nm_penyakit ?></td>
      <form action="<?php echo base_url() . 'diagnosa/get_gejala/' . $show_penyakit->id_penyakit ?>" method="post"> 
      <td><input type="submit" name="submit" value="Lihat Gejala"></td>
      </form>
    </tr>
</table>
<div align="center">
<input type="submit" name="submit" value="Temukan Penyakit Anda!" class="btn btn-primary">
</div>
    </div>
</form>
<br>
</div>