<?php


class Handphone
{
	var $a;
	var $b;
	var $c;

	function Handphone_a(){
		return "Handphone Iphone 11 harga Rp.25000000 ";
		echo "<br>";
	}
	function Handphone_b(){
		return "Handphone OPPO harga Rp.3500000 ";
		echo "<br>";
	}
	function Handphone_c(){
		return "Handphone Xiomi harga Rp.4200000 ";
		echo "<br>";
	}

}

$Handphone = new Handphone();
$Handphone = new Handphone();
$Handphone = new Handphone();

echo $Handphone -> Handphone_a();
echo $Handphone -> Handphone_b();
echo $Handphone -> Handphone_c();

?>