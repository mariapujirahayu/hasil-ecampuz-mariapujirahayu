<?php
include('koneksi.php');
$sql = "DELETE FROM referensi WHERE id_referensi='$_GET[id]'";
if ($koneksi->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location='referensi.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>