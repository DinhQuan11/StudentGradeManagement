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
  <title>Quản lý điểm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
  <div class="container-fluid">
    <?php include_once '../components/header.html' ?>
    <div class="row mt-68">
      <div class="col-2">
        <?php include_once '../components/navbar.html' ?>
      </div>
      <div class="col-10">
        <h1 class="text-center">Quản lý điểm</h1>
        <div class="" style="display: flex; justify-content: end">
          <form action="./search.php" method="post">
            <div class="input-group mb-3" style="width: 400px">
              <select class="form-select" name="searchClass">
                <option selected>Chọn lớp</option>
                <?php
                require $dirRoot . '/models/common/class_list.php';
                ?>
              </select>
              <select class="form-select" name="searchSubject">
                <option selected>Chọn môn học</option>
                <?php
                require $dirRoot . '/models/common/subject_list.php';
                ?>
              </select>
              <button class="btn btn-light" type="submit" id="button-addon2">
                <img class="btn-hover w-20" src="/assets/imgs/glass.svg" alt="Tìm kiếm">
              </button>
            </div>
          </form>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Mã học sinh</th>
              <th scope="col">Tên học sinh</th>
              <th scope="col">Điểm 15 phút</th>
              <th scope="col">Điểm giữa kỳ</th>
              <th scope="col">Điểm cuối kỳ</th>
              <th scope="col">Điểm trung bình</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once $dirRoot . '/models/grades/search.php';
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>