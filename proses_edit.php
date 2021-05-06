<?php
include 'koneksi.php';

$semester = $_POST['semester'];
$ipk = $_POST['ipk'];

mysqli_query($koneksi, " ipk  semester  terbaru anda ='$semester', ipk='$ipk' where semester='$semester'");

header("location:ipk.php");

?>
?>