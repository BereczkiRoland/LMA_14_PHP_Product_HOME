<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Termékek</title>
<?php
	include("product.php");
	include("hdd.php");
	include("pendrive.php");
	include("dictaphone.php");
?>
</head>

<body>
<?php
	$t1=new Product("Billenytűzet", "52000", "Logitec", "Fekete színű, angol nyelvű, nem vezeték nélküli billenytűzet", true, "Az LCD kijelzővel ellátott billentyűzet...", "2 év");
	$t2=new Product("Billenyűzet", "25000", "Razer", "Fekete színű, angol nyelvű, nem vezeték nélküli billenyűzet", true, "Az első, speciálisan az MMO játékosok kívánalmai alapján...", "2 év");

	echo $t1 ."<br />\n";
	echo $t2 ."<br />\n";
	echo "A drágább termék ára: " .$t1->PriceEqual($t2, 'Price') ."<br />\n";
	echo "Van-e raktáron: " .$t1->StoreEqual($t2, 'Store') ."<br />\n";
	echo "Garancia időtartama: ".$t1->GuaranteeEqual($t2, 'Guarantee') ."<br />\n";
	
	$h1=new HDD("Merevlemez", "20000", "Seagate", "Belső merevlemez", true, "SEAGATE 1000GB 7200rpm 32Mb SATA3 ST31000524AS merevlemez", "2 év", "1000", "7200rpm", true, "3.5", "SATA3");
	$h2=new HDD("Merevlemez", "22000", "Samsung", "Külső merevlemez", true, "SAMSUNG S2 Portable 500GB Fekete HX-MU050DA/G2 merevlemez", "3 év", "500", "5400rpm", false, "2.5", "USB2.0");
	echo $h1 ."<br />\n";
	echo $h2 ."<br />\n";
	echo "A drágább merevlemez ára: " .$h1->PriceEqual($h2, 'Price')."<br />\n";
	echo "A nagyobb merevlemez kapacitása: " .$h1->CapacityEqual($h2, 'Capacity')."<br />\n";
	echo "A gyorsabb merevlemez fordulatszáma: " .$h1->RPMEqual($h2, 'RPM')."<br />\n";
	echo "A nagyobb merevlemez fizikai mérete: ". $h1->SizeEqual($h2, 'Size')."<br />\n";
	
	$p1=new Pendrive("Pendrive", "8400", "Kingston", "Tárló kapacitás 32GB, csatlakozó típusa USB 2.0", true, "32 GB tárkapacitású G2 Memory Pen drive a Kingstontól", "5 év", "32", "USB2.0");
	$p2=new Pendrive("Pendrive", "27000", "Corsair", "Tárló kapacitás 64GB, csatlakozó típusa USB 3.0", true, "CORSAIR Flash Survivor Stealth USB3 64GB pendrive", "5 év", "64", "USB3.0");
	echo $p1 ."<br />\n";
	echo $p2 ."<br />\n";
	echo "A drágább pendrive ára: " .$p1->PriceEqual($p2, 'Price')."<br />\n";
	echo "A nagyobb pendrive kapacitása: " .$p1->PendriveCapacityEqual($p2, 'PendriveCapacity')."<br />\n";
	echo "A pendrive csatlakozó típusa: " .$p1->PendriveConnectEqual($p2, 'PendriveConnect') ."<br />\n";
	
	$d1=new Dictaphone("Diktafon", "15000", "Sony", "Csatlakozó USB 2.0, 2GB memória, bővíthető a memória", true, "MP3 felvétel/lejátszás - Kiváló minőségű...", "1 év", "2", true, "USB2.0");
	$d2=new Dictaphone("Diktafon", "192000", "Olympus", "Csatlakozó USB 2.0, 2GB memória, bővíthető a memória", true, "Professzionális diktálás sosem látott teljesítménnyel ...", "2 év", "2", true, "USB2.0");
	echo $d1 ."<br />\n";
	echo $d2 ."<br />\n";
	echo "A drágább diktafon ára: " .$d1->PriceEqual($d2, 'Price')."<br />\n";
	echo "A nagyobb diktafon kapacitása: ".$d1->DictaphoneCapacityEqual($d2, 'DictaphoneCapacity')."<br />\n";
	echo "A diktafon csatlakozó típusa: ".$d1->DictaphoneConnectEqual($d2, 'DictaphoneConnect')."<br />\n";
	
?>
</body>
</html>