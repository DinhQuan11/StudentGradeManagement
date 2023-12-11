<?php
$dirRoot = strstr(__DIR__, '\views', true);
require_once $dirRoot . '/models/students/edit.php';
require_once $dirRoot . '/controllers/Login.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cập nhật thông tin học sinh</title>
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
        <h2 class="text-center">Cập nhật thông tin học sinh</h2>
        <a href="/views/students/list.php" class="btn btn-outline-light border-btn mb-3" type="" id="button-addon2">
          <img class="btn-hover w-20" src="/assets/imgs/back.svg" alt="Quay lại" />
        </a>
        <form action="/controllers/Student.php" method="post">
          <div class="mb-3">
            <label class="form-label" for="studentId">Mã học sinh</label>
            <input readonly type="text" class="form-control" name="studentId" value="<?php echo $row['MaHS'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentName">Tên học sinh</label>
            <input required type="text" class="form-control" name="studentName" value="<?php echo $row['TenHS'] ?>" />
          </div>
          <div class="row">
            <div class="col mb-3">
              <label class="form-label" for="studentGender">Giới tính</label>
              <select required class="form-select" id="inputGroupSelect01" name="studentGender">
                <option selected><?php echo $row['GioiTinh'] ?></option>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
              </select>
            </div>
            <div class="col mb-3">
              <label class="form-label" for="studentDOB">Ngày sinh</label>
              <input required type="date" class="form-control" name="studentDOB" value="<?php echo $row['NgaySinh'] ?>" />
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentPhone">Số điện thoại</label>
            <input required type="text" class="form-control" name="studentPhone" value="<?php echo $row['SDTHS'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentAddress">Địa chỉ</label>
            <input required type="text" class="form-control" name="studentAddress" value="<?php echo $row['DiaChi'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentClass">Lớp</label>
            <select required class="form-select" name="studentClass">
              <option selected><?php echo $row['MaLop'] ?></option>
              <?php
              require_once $dirRoot . '/models/common/class_list.php';
              ?>
            </select>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary mb-3">
              Lưu thông tin
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>