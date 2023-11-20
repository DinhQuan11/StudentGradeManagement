<?php
$dirRoot = strstr(__DIR__, '\views', true);
require_once $dirRoot . '/models/grades/edit.php';
require_once $dirRoot . '/controllers/Login.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="/assets/imgs/logo.svg" />
  <title>Nhập điểm học sinh</title>
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
        <h2 class="text-center">Nhập điểm học sinh</h2>
        <form action="/controllers/Grade.php" method="post">
          <div class="mb-3">
            <label class="form-label" for="classId">Lớp</label>
            <input readonly type="text" class="form-control" name="classId" value="<?php echo $row['MaLop'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentId">Mã học sinh</label>
            <input readonly type="text" class="form-control" name="studentId" value="<?php echo $row['MaHS'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="studentName">Tên học sinh</label>
            <input readonly type="text" class="form-control" name="studentName" value="<?php echo $row['TenHS'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="subjectName">Mã môn học</label>
            <input readonly type="text" class="form-control" name="subjectId" value="<?php echo $row['MaMH'] ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="subjectName">Môn học</label>
            <input readonly type="text" class="form-control" name="subjectName" value="<?php echo $row['TenMH'] ?>" />
          </div>
          <div class="row mb-3">
            <div class="col-4">
              <label class="form-label" for="grade1">Điểm 15 phút</label>
              <input type="text" class="form-control" name="grade1" value="<?php echo $row['DiemHeSo1'] ?>" />
            </div>
            <div class="col-4">
              <label class="form-label" for="grade2">Điểm giữa kỳ</label>
              <input type="text" class="form-control" name="grade2" value="<?php echo $row['DiemHeSo2'] ?>" />
            </div>
            <div class="col-4">
              <label class="form-label" for="grade3">Điểm cuối kỳ</label>
              <input type="text" class="form-control" name="grade3" value="<?php echo $row['DiemHeSo3'] ?>" />
            </div>
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