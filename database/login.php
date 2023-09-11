<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body class="grad">
    <!-- -->
    <div class="card mb-3 shadow mx-auto mt-5 rounded-end" style="max-width: 600px;">
        <div class="row g-0 glow-border">
          <div class="col-md-4">
            <img src="https://i.pinimg.com/originals/b3/77/6a/b3776a0a4705db8a2aad3cbd48edd73a.gif" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body bg2">
              <h2 class="card-title my-3">Login</h2>
              <form action="connect_login.php" method="POST" >
                <div class="form-group input-container">
                  <input type="email" class="form-control custom-input" id="email" name="email" required>
                  <label for="email">Email:</label>
                </div>
                <div class="form-group input-container">
                  <input type="password" class="form-control custom-input" id="password" name="password" required>
                  <label for="password">Password:</label>
                </div>
                <button type="submit" class="btn  btn-outline-danger mt-3">Login</button>
                <br>
              <p>Belum memiliki akun?<span><a href="register.php" class="unique-link">Register</a></span></p>

            </form>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
