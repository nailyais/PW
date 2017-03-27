   <br>
    <div class="container" >
   
   <table class="table table-hover">
    <tr>
      <th>Penyakit</th>
      <th>Gejala</th>
    </tr>
    <tr>
      <td><?php echo $show_penyakitt->nm_penyakit ?></td>
      <td><?php
      foreach ($show_gejala as $sg) {
        echo $sg['nm_gejala']. ", ";
       }  
      ?></td>
      </form>
    </tr>
</table>
    </div>
</form>
<br>
</div>