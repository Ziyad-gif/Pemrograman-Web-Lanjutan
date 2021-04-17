<?php
require_once 'models/Pegawai.php';
$model = new Pegawai();
$tampil = $model->tampil();
?>


<h2>Data Pegawai</h2>
<br>
<a href="index.php?page=views/menu/dataPegawai/formPegawai" class="btn btn-warning">Tambah</a>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Agama</th>
      <th scope="col">Divisi</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    foreach ($tampil as $tampil) {
    ?>
      <tr>
        <td><?= $no; ?></td>
        <td><?= $tampil['nip']; ?></td>
        <td><?= $tampil['nama']; ?></td>
        <td><?= $tampil['email']; ?></td>
        <td><?= $tampil['agama']; ?></td>
        <td><?= $tampil['divisi']; ?></td>
        <td><?= $tampil['foto']; ?></td>
        <td>
          <form method="POST" action="controllers/pegawaiController.php">
            <a href="index.php?page=views/menu/dataPegawai/detailPegawai&id=<?= $tampil['id']; ?>" class="btn btn-success"><i class="fa fa-info" aria-hidden="true"></i></a>
            <a href="index.php?page=views/menu/dataPegawai/formEditPegawai&id=<?= $tampil['id']; ?>" class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></a>
            <button class="btn btn-danger" name="proses" value="hapus"><i class="fa fa-trash" aria-hidden="true"></i></button>
            <input type="hidden" name="idx" id="idx" value="<?= $tampil['id']; ?>">
          </form>
        </td>
      <tr>
      <?php $no++;
    } ?>
  </tbody>
</table>