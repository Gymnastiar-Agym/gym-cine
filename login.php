<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth">

<div class="card">
  <h1>Login</h1>
  <p>Let's get started</p>

  <form method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit" name="login">Login</button>
  </form>

  <p class="small">
    Don't have an account?
    <a href="register.php">Register here</a>
  </p>
</div>

</body>
</html>

<?php
if (isset($_POST['login'])) {
  $_SESSION['user'] = $_POST['email'];
  header("Location: theater.php");
}
?>
