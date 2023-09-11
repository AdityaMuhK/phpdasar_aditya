<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="grad">
    <div class="card mx-auto mt-5 mb-3" style="max-width: 600px;">
      <div class="row g-0 glow-border">
        <div class="col-md-4">
          <img src="https://media.tenor.com/9DKiAQSTDucAAAAC/jin-woo-sung-jin-woo.gif" class="img-fluid rounded-start img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body bg2">
            <h2 class="card-title my-3">Register</h2>
            <form action="connect_register.php" method="POST">
              <div class="form-group input-container">
                <input type="email" class="form-control custom-input" id="email" name="email" required>
                <label for="email">Email:</label>
              </div>
              <div class="form-group input-container">
                <input type="text" class="form-control custom-input" id="username" name="username" required>
                <label for="username">Username:</label>
              </div>
              <div class="form-group input-container">
                <input type="password" class="form-control custom-input" id="password" name="password" required>
                <label for="password">Password:</label>
              </div>
              <button type="submit" class="btn btn-outline-primary">Register</button>
              <p>Sudah memiliki akun?<span><a href="login.php" class="unique-link">Login</a></span></p>
          </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
