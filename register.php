<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth">

<div class="card">
  <h1>Sign-up</h1>
  <p>Let's get started</p>

  <form method="POST">
    <input type="text" name="name" placeholder="Your Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm" placeholder="Confirm Password" required>

    <button type="submit">Register</button>
  </form>

  <p class="small">
    Already have an account?
    <a href="login.php">Login here</a>
  </p>
</div>

</body>
</html>
