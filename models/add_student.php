<?php
// nhận dữ liệu từ form
if (
    isset($_POST["studentId"]) && $_POST["studentName"] && $_POST["studentGender"]
    && $_POST["studentDOB"] && $_POST["studentNation"] && $_POST["studentReligion"]
    && $_POST["studentAddress"] && $_POST["studentClass"]
) {
    $stdId = $_POST["studentId"];
    $stdName = $_POST["studentName"];
    $stdGender = $_POST["studentGender"];
    $stdDOB = $_POST["studentDOB"];
    $stdNation = $_POST["studentNation"];
    $stdReligion = $_POST["studentReligion"];
    $stdAddress = $_POST["studentAddress"];
    $stdClass = $_POST["studentClass"];
}

// connect db
require_once "../connection.php";

$sql = "INSERT INTO `hocsinh` (`MaHS`, `TenHS`, `GioiTinh`, `NgaySinh`, `DanToc`, `TonGIao`, `DiaChi`, `MaLop`) VALUES
('$stdId', '$stdName', '$stdGender', '$stdDOB', '$stdNation', '$stdReligion', '$stdAddress', '$stdClass');";
// echo $sql;
// exit;

// thực thi sql
$result = $conn->query($sql);
// if ($result) {
//     echo "<h1>Thêm thành công</h1>";
// } else {
//     echo "<h1>Thêm thất bại</h1>";
// }
// $conn->close();
