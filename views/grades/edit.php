<?php
$dir = '/VSCode/Website/StudentGradeManagement';
require_once $dir . '/models/grades/edit.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nhập điểm học sinh</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>

  <body>
    <div class="container">
      <?php include_once '../components/header.html' ?>
      <div class="row">
        <div class="col-2">
          <?php include_once '../components/navbar.html' ?>
        </div>
        <div class="col-10">
          <h1>Nhập điểm học sinh</h1>
          <form action="/controllers/Grade.php" method="post">
            <div class="mb-3">
              <label class="form-label" for="classId">Lớp</label>
              <input
                type="text"
                class="form-control"
                name="classId"
                value="<?php echo $row['MaLop'] ?>"
              />
            </div>
            <div class="mb-3">
              <label class="form-label" for="studentId">Mã học sinh</label>
              <input
                type="text"
                class="form-control"
                name="studentId"
                value="<?php echo $row['MaHS'] ?>"
              />
            </div>
            <div class="mb-3">
              <label class="form-label" for="studentName">Tên học sinh</label>
              <input
                type="text"
                class="form-control"
                name="studentName"
                value="<?php echo $row['TenHS'] ?>"
              />
            </div>
            <div class="mb-3">
              <label class="form-label" for="subjectName">Môn học</label>
              <input
                type="text"
                class="form-control"
                name="subjectName"
                value="<?php echo $row['TenMH'] ?>"
              />
            </div>
            <div class="mb-3">
              <label class="form-label" for="grade1">Điểm 15 phút</label>
              <input
                type="text"
                class="form-control"
                name="grade1"
                value="<?php echo $row['DiemHeSo1'] ?>"
              />
            </div>
            <div class="mb-3">
              <label class="form-label" for="grade2">Điểm giữa kỳ</label>
              <input
                type="text"
                class="form-control"
                name="grade2"
                value="<?php echo $row['DiemHeSo2'] ?>"
              />
            </div>
            <div class="mb-3">
              <label class="form-label" for="grade3">Điểm cuối kỳ</label>
              <input
                type="text"
                class="form-control"
                name="grade3"
                value="<?php echo $row['DiemHeSo3'] ?>"
              />
            </div>
            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
