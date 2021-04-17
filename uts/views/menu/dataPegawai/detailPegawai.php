<?php
require_once 'models/Pegawai.php';
$pegawai = new Pegawai();
$data = $_REQUEST['id'];
$detail = $pegawai->detailPegawai($data);
?>

nip : <?= $detail['nip'];?><br>
nama : <?= $detail['nama'];?><br>
email : <?= $detail['email'];?><br>
agama : <?= $detail['agama'];?><br>
divisi : <?= $detail['divisi'];?><br>
foto : <?= $detail['foto'];?><br>

<a href="index.php?page=views/menu/dataPegawai" class="btn btn-danger">Kembali</a>