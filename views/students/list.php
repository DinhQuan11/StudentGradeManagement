<?php
$dirRoot = strstr(__DIR__, '\views', true);
require_once $dirRoot . '/controllers/Login.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Danh sách học sinh</title>
  <?php require_once '../components/link.html' ?>
</head>

<body>
  <div class="container-fluid">
    <?php include_once '../components/header.html' ?>
    <div class="row mt-68">
      <div class="col-2">
        <?php include_once '../components/navbar.html' ?>
      </div>
      <div class="col-10">
        <h2 class="text-center">Danh sách học sinh</h2>
        <div class="tool-bar">
          <form action="./search.php" method="post">
            <div class="input-group mb-3 search-bar">
              <select required class="form-select" name="searchInput">
                <option selected disabled value="">Chọn lớp</option>
                <?php
                require $dirRoot . '/models/common/class_list.php';
                ?>
              </select>
              <button class="btn btn-light border-btn" type="submit" id="button-addon2">
                <img class="btn-hover w-20" src="/assets/imgs/glass.svg" alt="Tìm kiếm">
              </button>
            </div>
          </form>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">MSHS</th>
              <th scope="col">Tên học sinh</th>
              <th scope="col">Giới tính</th>
              <th scope="col">Ngày sinh</th>
              <th scope="col">Số điện thoại</th>
              <th scope="col">Địa chỉ</th>
              <th scope="col">Lớp</th>
              <th scope="col">
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#addModal">
                  <img class="btn-hover w-28" src="/assets/imgs/plus.svg" alt="Thêm">
                </button>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            require_once $dirRoot . '/models/students/list.php';
            ?>
          </tbody>
        </table>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addModalLabel">Thêm học sinh</h5>
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