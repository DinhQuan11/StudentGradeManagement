<?php
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

require_once '../connection.php';

$sql = "UPDATE `hocsinh` SET `TenHS` = '$stdName', `GioiTinh` = '$stdGender', `NgaySinh` = '$stdDOB', 
`DanToc` = '$stdNation', `TonGiao` = '$stdAddress', `DiaChi` = '$stdAddress', `MaLop` = '$stdClass'
WHERE `MaHS` = '$stdId';";

$result = $conn->query($sql);
