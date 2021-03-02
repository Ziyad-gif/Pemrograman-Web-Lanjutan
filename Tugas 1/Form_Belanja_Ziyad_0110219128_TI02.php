<form action="tugas.php" method="_POST">
	<p style="font-size: 87px" align="center"> Belanja Online</p>
	<label id="Customer">Customer</label>
	<input type="text" name="Customer">
	<br>
	<p> Produk Pilihan </p>
	<p> TV 1.25O.00 Kulkas 1.800.000 Mesin Cuci 3.100.000 AC 3.800.000</p>
	<select id="Barang" name="Barang">
	<option value="TV">TV</option>
	<option value="Mesin Cuci">Mesin Cuci</option>
	<option value="Kulkas">Kulkas</option>	
	<option value="AC">AC</option>


	</select>
	<br>

	<label id="jumlah">Jumlah Beli</label>
	<input type="text" name="jumlah">

	<br>
	<input type="submit" name="Simpan" value="Simpan">

</form>

<?php

$barang = $_GET['Customer'];
$nama = $_GET['jumlah'];
$harga = $_GET['Barang'];
$ziyad = 12 * 22;
$pajak = '10%';
$diskon = '15%';


switch ($harga) {
    case 'TV': $total = $nama * 18000000; break;
    case 'Kulkas': $total = $nama * 12500000; break;
    case 'Mesin Cuci': $total = $nama * 3100000; break;
    case 'AC': $total = $nama * 3800000; break;
    default: $total = ''; break;
}
switch ($harga) {
	case 'TV': $Produk = 'TV';
		# code...
		break;
		case 'Mesin Cuci': $Produk = 'Mesin cuci';
			# code...
			break;
			case 'Kulkas': $Produk = 'Kulkas';
				# code...
				break;
				case 'AC': $Produk = 'AC';
					# code...
					break;
	
	default:
	$Produk = "";
		# code...
		break;
}
switch ($harga) {
	case 'TV' : $Satuan = 1250000;
		# code...
		break;
		case 'Mesin Cuci': $Satuan = 180000;
			# code...
			break;
	case 'Kulkas ': $Satuan = 3100000;
		# code...
		break;
		case 'AC': $Satuan = 3800000;
			# code...
			break;
	default:
		# code...
		break;
} switch ($harga) {
	case 'TV':  $bayar = $total / 25;
		# code...
		break;
	case 'Kulkas': $bayar = $total /25;
		# code...
		break;
	case 'AC': $bayar = $total /25;
		# code...
		break;
	case 'Mesin Cuci': $bayar  = $total /25;
		# code...
		break;
	
	default:
		# code...
		break;
}


echo ' <br/>Nama Customer : '.$barang;
echo '<br/> Produk Pilihan : '.$Produk; 
echo '<br/> Harga Satuan  :'.$Satuan;  
echo '<br/> Jumlah Belanja  :'.$nama;
echo '<br/> Total Belanja  : '.$total; 
echo "<br/> Pajak     : " .$pajak;
echo '<br/> Potongan diskon   :'.$diskon;
echo '<br/> Yang Harus Dibayar  '.$bayar;














?>

