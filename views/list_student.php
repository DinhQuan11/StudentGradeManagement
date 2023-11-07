<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Danh sách sinh viên</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Thêm học sinh
            </button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã học sinh</th>
                    <th scope="col">Tên học sinh</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Ngày sinh</th>
                    <th scope="col">Dân tộc</th>
                    <th scope="col">Tôn giáo</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Lớp</th>
                    <th scope="col">Hạnh kiểm</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                // connect db
                require_once '../connection.php';

                $sql = "SELECT * FROM `hocsinh` ORDER BY `MaHS` ASC";

                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                ?>
                    <!-- echo $row['MaHS'] . $row["TenHS"] . $row['GioiTinh'] . $row["NgaySinh"] . 
                    $row['DanToc'] . $row["TonGiao"] . $row['DiaChi'] . $row["MaLop"] . $row["MaHK"]; -->
                    <tr>
                        <td><?php echo $row['MaHS'] ?></td>
                        <td><?php echo $row['TenHS'] ?></td>
                        <td><?php echo $row['GioiTinh'] ?></td>
                        <td><?php echo $row['NgaySinh'] ?></td>
                        <td><?php echo $row['DanToc'] ?></td>
                        <td><?php echo $row['TonGiao'] ?></td>
                        <td><?php echo $row['DiaChi'] ?></td>
                        <td><?php echo $row['MaLop'] ?></td>
                        <td><?php echo $row['MaHK'] ?></td>
                        <td>
                            <a href="../models/edit.student.php?sid=<?php echo $row['MaHS'] ?>" class="btn btn-info">Sửa</a>
                            <a href="../models/delete_student.php?sid=<?php echo $row['MaHS'] ?> " class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm học sinh</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include './add_student.html' ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>