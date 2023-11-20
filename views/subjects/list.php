<?php
$dirRoot = strstr(__DIR__, '\views', true);
require_once $dirRoot . '/controllers/Login.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="/assets/imgs/logo.svg" />
  <title>Danh sách môn học</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
  <div class="container-fluid">
    <?php include_once '../components/header.html' ?>
    <div class="row mt-68">
      <div class="col-2">
        <?php include_once '../components/navbar.html' ?>
      </div>
      <div class="col-10">
        <h1 class="text-center">Danh sách môn học</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Mã môn học</th>
              <th scope="col">Tên môn học</th>
            </tr>
          </thead>
          <tbody>
            <?php require_once $dirRoot . '/models/subjects/list.php'; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>