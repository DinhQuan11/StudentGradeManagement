<?php
$dirRoot = strstr(__DIR__, '\views', true);
require_once $dirRoot . '/controllers/Login.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thêm học sinh</title>
  <?php require_once '../components/link.html' ?>
</head>

<body>
  <div class="container">
    <form action="/models/students/add.php" method="post">
      <div class="mb-3">
        <label class="form-label" for="studentId">Mã học sinh</label>
        <input required type="text" class="form-control" name="studentId" placeholder="Nhập mã học sinh (HS000)" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentName">Tên học sinh</label>
        <input required type="text" class="form-control" name="studentName" placeholder="Nhập tên học sinh" />
      </div>
      <div class="row">
        <div class="col mb-3">
          <label class="form-label" for="studentGender">Giới tính</label>
          <select required class="form-select" name="studentGender">
            <option selected disabled value="">Chọn giới tính</option>
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
          </select>
        </div>
        <div class="col mb-3">
          <label class="form-label" for="studentDOB">Ngày sinh</label>
          <input required type="date" class="form-control" name="studentDOB" placeholder="yyyy-mm-dd" min="1960-01-01" max="2022-12-31" />
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentReligion">Số điện thoại</label>
        <input required type="text" class="form-control" name="studentPhone" placeholder="Nhập số điện thoại" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentAddress">Địa chỉ</label>
        <input required type="text" class="form-control" name="studentAddress" placeholder="Nhập địa chỉ" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentClass">Lớp</label>
        <select required class="form-select" name="studentClass">
          <option selected disabled value="">Chọn lớp</option>
          <?php
          require $dirRoot . '/models/common/class_list.php';
          ?>
        </select>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Thêm</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>