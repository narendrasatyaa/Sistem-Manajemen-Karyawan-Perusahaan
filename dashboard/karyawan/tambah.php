<?php
include '../../config/koneksi.php';
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $divisi = $_POST['divisi'];

    $query = mysqli_query($koneksi, "INSERT INTO karyawan (nama, email, id_divisi) VALUES ('$nama', '$email', '$divisi')");
    if ($query) {
        header("Location: index.php");
    }
}
?>

<form method="POST">
  <input type="text" name="nama" placeholder="Nama">
  <input type="email" name="email" placeholder="Email">
  <select name="divisi">
    <?php
    $data = mysqli_query($koneksi, "SELECT * FROM divisi");
    while ($row = mysqli_fetch_array($data)) {
        echo "<option value='$row[id_divisi]'>$row[nama_divisi]</option>";
    }
    ?>
  </select>
  <button name="simpan">Simpan</button>
</form>
