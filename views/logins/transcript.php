<?php $dirRoot = strstr(__DIR__, '\views', true); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="/assets/imgs/logo.svg" />
  <title>Tra cứu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-end">
      <a href="./student.php">
        <img class="student-logout-btn" src="/assets/imgs/logout.svg" alt="Logout">
      </a>
    </div>
    <h2 class="text-center mb-2">Kết quả học tập</h2>
    <div class="d-flex justify-content-between mb-2">
      <?php require_once $dirRoot . '/models/logins/info.php' ?>
      <span>Họ và tên: <?php echo $row['TenHS'] ?></span>
      <span>Mã số học sinh: <?php echo $row['MaHS'] ?></span>
      <span>Giới tính: <?php echo $row['GioiTinh'] ?></span>
      <span>Ngày sinh: <?php echo $row['NgaySinh'] ?></span>
      <span>Lớp: <?php echo $row['MaLop'] ?></span>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Môn học</th>
          <th scope="col">Điểm 15 phút</th>
          <th scope="col">Điểm giữa kỳ</th>
          <th scope="col">Điểm cuổi kỳ</th>
          <th scope="col">Điểm trung bình</th>
        </tr>
      </thead>
      <tbody>
        <?php require_once $dirRoot . '/models/logins/student.php' ?>
      </tbody>
    </table>
  </div>
</body>

</html>