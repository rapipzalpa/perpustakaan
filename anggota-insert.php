<?php
//   proses insert tambah data
if(isset($_POST['save']))
{
    $nis              = $_POST['nis'];
    $nama             = $_POST['nama'];
    $tempat_lahir     = $_POST['tempat_lahir'];
    $tanggal_lahir    = $_POST['tanggal_lahir'];
    $id_kelas         = $_POST['id_kelas'];
    $id_jurusan       = $_POST['id_jurusan'];
    $no_telepon       = $_POST['no_telepon'];
    $alamat           = $_POST['alamat'];
    $jk               = $_POST['jenis_kelamin'];


    $query_insert = mysqli_query($koneksi,"INSERT INTO anggota VALUES('','$nis','$nama','$tempat_lahir','$tanggal_lahir','$id_kelas','$id_jurusan','$no_telepon','$alamat','$jk')");


if($query_insert) {
    ?>
        <div class="alert alert-success">
           Data Berhasil Disimpan !!!
        </div>
    <?php
    header('refresh:2; url=http://localhost/RAFIFZALFA_RPL2/admin.php?page=anggota');
}  else {
    ?>
        <div class="alert alert-danger">
           Data Gagal Disimpan !!!
        </div>
    <?php
}
}
?>