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
    <?php include_once './components/background.html' ?>
    <div class="login">
      <span class="login__title">Đăng nhập</span>
      <div class="login__option">
        <a href="/views/logins/student.php" class="login__link btn btn-primary">
          Dành cho học sinh
        </a>
        <a href="/views/logins/admin.php" class="login__link btn btn-primary">
          Dành cho giáo viên
        </a>
      </div>
    </div>
  </div>
</body>

</html>