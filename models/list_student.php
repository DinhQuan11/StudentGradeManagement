<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Danh sách sinh viên</h1>
        <a class="btn btn-success" href="../views/add_student.html">Thêm học sinh</a>
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
                require_once("../connection.php");

                $sql = "SELECT * FROM `hocsinh` ORDER BY `MaHS` ASC";

                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                ?>
                    <!-- echo $row['MaHS'] . $row["TenHS"] . $row['GioiTinh'] . $row["NgaySinh"] . 
                    $row['DanToc'] . $row["TonGIao"] . $row['DiaChi'] . $row["MaLop"] . $row["MaHK"]; -->
                    <tr>
                        <td><?php echo $row['MaHS'] ?></td>
                        <td><?php echo $row['TenHS'] ?></td>
                        <td><?php echo $row['GioiTinh'] ?></td>
                        <td><?php echo $row['NgaySinh'] ?></td>
                        <td><?php echo $row['DanToc'] ?></td>
                        <td><?php echo $row['TonGIao'] ?></td>
                        <td><?php echo $row['DiaChi'] ?></td>
                        <td><?php echo $row['MaLop'] ?></td>
                        <td><?php echo $row['MaHK'] ?></td>
                        <td>
                            <a href="./edit.student.php?sid=<?php echo $row['MaHS'] ?>" class="btn btn-warning">Sửa</a>
                            <a href="./delete_student.php?sid=<?php echo $row['MaHS'] ?> " class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>