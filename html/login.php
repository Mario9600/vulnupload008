<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="img/logo.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Login Page</title>
</head>
<body>
  <header>
    <div class="logo">
      <a href="index.php">
        <img src="img/logo.png" alt="Company Logo">
      </a>
    </div>
  </header>

  <div class="container">
    <h1>Login</h1>
    <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <br><br>
      <input type="submit" value="Log In">
    </form>
  </div>

  <footer>
    <p>&copy; 2023 Insurance Company</p>
  </footer>
</body>
</html>
