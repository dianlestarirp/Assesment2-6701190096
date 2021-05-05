<?php
$email1 = $_POST['email'];
$pass = $_POST['pass'];
$passw2 = $_POST['passw2'];

if ($pass == $passw2) {
    echo "
        <script>
        alert('Berhasil Login');
        document.location.href = 'login.php';
        </script>";
} elseif ($pass != $passw2) {
    echo "
        <script>
        alert('Password tidak dikenali');
        document.location.href = 'regis.php';
        </script>";
}
