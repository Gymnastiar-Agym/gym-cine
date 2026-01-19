<?php
include 'config/db.php';

if (isset($_POST['register'])) {
  $nama   = $_POST['nama'];
  $nim    = $_POST['nim'];
  $alamat = $_POST['alamat'];
  $wa     = $_POST['wa'];
  $email  = $_POST['email'];
  $pass   = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $query = "INSERT INTO users 
            (nama, nim, alamat, no_wa, email, password)
            VALUES
            ('$nama', '$nim', '$alamat', '$wa', '$email', '$pass')";

  if (mysqli_query($conn, $query)) {
    header("Location: success.php");
  } else {
    echo "Pendaftaran gagal";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>

<h2>Form Pendaftaran</h2>

<form method="POST">
  <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
  <input type="text" name="nim" placeholder="NIM" required><br>
  <textarea name="alamat" placeholder="Alamat" required></textarea><br>
  <input type="text" name="wa" placeholder="No WhatsApp" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>

  <button type="submit" name="register">Daftar</button>
</form>

</body>
</html>
