<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="/assets/imgs/logo.svg" />
  <title>Tra cứu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</head>

<body>
  <div class="app-container">
    <?php include_once '../components/background.html' ?>
    <div class="login-container">
      <h1 class="login-title">Tra cứu</h1>
      <form action="./transcript.php" method="post">
        <div class="mb-4">
          <label for="studentId" class="form-label">Mã số học sinh</label>
          <input required type="text" class="form-control" name="studentId" id="studentId" />
        </div>
        <?php if (isset($_GET['error'])) { ?>
          <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
            <?= $_GET['error'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php } ?>
        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary mb-4">Tra cứu</button>
        </div>
      </form>
      <a class="btn-back" href="../index.php">Trở lại</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>