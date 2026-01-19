<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Theater</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="header">
  📍 Lokasi: <span id="city">Mendeteksi...</span>
</div>

<ul class="theater-list">
  <li>XI Cinema</li>
  <li>Pondok Kelapa 21</li>
  <li>CGV</li>
  <li>Cinepolis</li>
  <li>CP Mall</li>
  <li>Hermes</li>
</ul>

<script src="js/location.js"></script>
</body>
</html>
