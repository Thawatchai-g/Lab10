<?php
	$m = $_GET["m"];
    $o = $_GET["o"];
    $b = $_GET["b"];
	// echo "<br><b>ยอดขาย</b> ";
    // echo $m + $o + $b;
    // echo " <b>บาท</b>";
?>

<br><b>ยอดขาย <?=($m*30) + ($o*70) + ($b*30)?> บาท</b>