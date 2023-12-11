<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="/assets/imgs/logo.svg" />
  <title>Đăng nhập</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
  <div class="app-container">
    <?php include_once '../components/background.html' ?>
    <div class="login-container">
      <h1 class="login-title">Đăng nhập</h1>
      <form action="/controllers/Home.php" method="post">
        <div class="mb-4">
          <label for="username" class="form-label">Tài khoản</label>
          <input required type="text" class="form-control" name="username" id="username" />
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Mật khẩu</label>
          <input required type="password" class="form-control" name="password" id="password" />
        </div>
        <p class="text-danger">
          <?php if (isset($_GET['error'])) {
            echo $_GET['error'];
          } ?>
        </p>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary mb-4">Đăng nhập</button>
        </div>
      </form>
      <a class="btn-back" href="../index.php">Trở lại</a>
    </div>
  </div>
</body>

</html>