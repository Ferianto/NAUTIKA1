<?php $variable_bulan = array ("januari", 
                               "februari",
                               "maret",
                               "april", 
                               "mei",
                               "juni",
                               "juli",
                               "agustus",
                               "september",
                               "oktober",
                               "nopember",
                               "desember"); ?>

<?php $variable_tanggal = array ("1", 
                               "2",
                               "3",
                               "4", 
                               "5",
                               "6",
                               "7",
                               "8",
                               "9",
                               "10",
                               "11",
                               "12"); ?>


<select name='tanggal'>
  <?php
    foreach ($variable_tanggal as $value_tanggal) {
  ?>
    <option value =" <?php echo $value_tanggal; ?>">
      <?php echo $value_tanggal;?>
    </option>
<?php
}
?>  
</select>


<select name='bulan'>
  <?php
    foreach ($variable_bulan as $value) {
  ?>
    <option value =" <?php echo $value; ?>">
      <?php echo $value;?>
    </option>
<?php
}
?>  
</select>
