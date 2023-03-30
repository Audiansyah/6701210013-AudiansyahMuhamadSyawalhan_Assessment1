<?php
if(isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['operator'])){
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	$operator = $_POST['operator'];

	if($operator == "+"){
		$hasil = $number1 + $number2;
	}else if($operator == "-"){
		$hasil = $number1 - $number2;
	}else if($operator == "*"){
		$hasil = $number1 * $number2;
	}else if($operator == "/"){
		$hasil = $number1 / $number2;
	}

	echo "Hasil operasi ".$number1.$operator.$number2." adalah ".$hasil;
}
?>