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
  <title>Danh sách lớp học</title>
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
        <h1 class="text-center">Danh sách lớp học</h1>
        <div class="tool-bar">
          <div class="d-grid gap-2 d-md-flex justify-content-md">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
              Thêm lớp học
            </button>
          </div>
          <form action="./search.php" method="post">
            <div class="input-group mb-3 search-bar">
              <input type="text" class="form-control" placeholder="Tìm kiếm" aria-describedby="button-addon2">
              <button class="btn btn-info" type="submit" id="button-addon2">
                Tìm kiếm
              </button>
            </div>
          </form>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Mã lớp học</th>
              <th scope="col">Tên lớp học</th>
              <th scope="col">Sĩ số lớp</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once $dirRoot . '/models/classes/list.php';
            ?>
          </tbody>
        </table>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addModalLabel">Thêm lớp học</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <?php include './add.php' ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>