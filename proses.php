<?php
if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operator'])) {
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$operator = $_POST['operator'];
	switch($operator) {
		case '+':
			$hasil = $number1 + $number2;
			break;
		case '-':
			$hasil = $number1 - $number2;
			break;
		case '*':
			$hasil = $number1 * $number2;
			break;
		case '/':
			if($number2 != 0) {
				$hasil = $number1 / $number2;
			} else {
				$hasil = "Tidak bisa dibagi dengan 0";
			}
			break;
		default:
			$hasil = "Operasi tidak valid";
			break;
	}
	echo "Hasil perhitungan: " . $hasil;
} else {
	echo "Tidak ada yang di hitung";
}
?>