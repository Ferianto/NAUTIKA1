<?php
 		if(isset($_POST['submit'])){
	    $alas = $_POST['alas'];
		$tinggi = $_POST['tinggi'];
		$luas_segitiga = 1/2 * $alas *$tinggi; //menghitung luas segitiga
		echo "<div class='wrap-input100 validate-input'>
		<input class='input100' type='text' value='$luas_segitiga' disabled>
		</div>";
	}
	?>	
