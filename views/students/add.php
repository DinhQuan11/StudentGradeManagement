<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thêm học sinh</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</head>

<body>
  <div class="container">
    <form action="/controllers/Student.php" method="post">
      <div class="mb-3">
        <label class="form-label" for="studentId">Mã học sinh</label>
        <input required type="text" class="form-control" name="studentId" placeholder="Nhập mã học sinh (HS000)" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentName">Tên học sinh</label>
        <input required type="text" class="form-control" name="studentName" placeholder="Nhập tên học sinh" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentGender">Giới tính</label>
        <select class="form-select" name="studentGender">
          <option selected>Chọn giới tính</option>
          <option value="Nam">Nam</option>
          <option value="Nữ">Nữ</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentDOB">Ngày sinh</label>
        <input required type="text" class="form-control" name="studentDOB" placeholder="yyyy-mm-dd" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentNation">Dân tộc</label>
        <input required type="text" class="form-control" name="studentNation" placeholder="Nhập dân tộc" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentReligion">Tôn giáo</label>
        <input required type="text" class="form-control" name="studentReligion" placeholder="Nhập tôn giáo" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentAddress">Địa chỉ</label>
        <input required type="text" class="form-control" name="studentAddress" placeholder="Nhập địa chỉ" />
      </div>
      <div class="mb-3">
        <label class="form-label" for="studentClass">Lớp</label>
        <select class="form-select" name="studentClass">
          <option selected>Chọn lớp</option>
          <?php
          $dirRoot = strstr(__DIR__, '\views', true);
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