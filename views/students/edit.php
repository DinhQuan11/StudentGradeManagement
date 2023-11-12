<?php
$dir = '/VSCode/Website/StudentGradeManagement';
require_once $dir . '/models/students/edit.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cập nhật thông tin học sinh</title>
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
        <h2>Cập nhật thông tin học sinh</h2>
        <form action="/controllers/Student.php" method="post">
          <div class="mb-3">
            <label class="form-label" for="studentId">Mã học sinh</label>
            <input readonly type="text" class="form-control" name="studentId" value="<?php echo $row['MaHS'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentName">Tên học sinh</label>
            <input type="text" class="form-control" name="studentName" value="<?php echo $row['TenHS'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentGender">Giới tính</label>
            <select class="form-select" id="inputGroupSelect01" name="studentGender">
              <option selected><?php echo $row['GioiTinh'] ?></option>
              <option value="Nam">Nam</option>
              <option value="Nữ">Nữ</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentDOB">Ngày sinh</label>
            <input type="text" class="form-control" name="studentDOB" value="<?php echo $row['NgaySinh'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentNation">Dân tộc</label>
            <input type="text" class="form-control" name="studentNation" value="<?php echo $row['DanToc'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentReligion">Tôn giáo</label>
            <input type="text" class="form-control" name="studentReligion" value="<?php echo $row['TonGiao'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentAddress">Địa chỉ</label>
            <input type="text" class="form-control" name="studentAddress" value="<?php echo $row['DiaChi'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentClass">Lớp</label>
            <select class="form-select" name="studentClass">
              <option selected><?php echo $row['MaLop'] ?></option>
              <?php
              $dir = '/VSCode/Website/StudentGradeManagement';
              require_once $dir . '/models/common/class_list.php';
              ?>
            </select>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary ">Lưu thông tin</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>