<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="containers">
    <div class="overlay">
      <div class="login">
        <h1>Register</h1>
        <form class="login-form" action="connectRegister.php" method="POST">
          <input type="email" id="email" name="email" placeholder="Email" />
          <input id="username" name="username" placeholder="Username" />
          <input type="password" id="password" name="password" placeholder="Password" />

          <button class="buttons" type="submit">Register</button>
        </form>

        <a href="./login.php" class="unique-link ahref">Login <i class="fas fa-user"></i></a>
      </div>
    </div>
  </div>
</body>

</html>