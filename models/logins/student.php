<?php
if (isset($_POST['studentId'])) {
    $stdId = $_POST['studentId'];
}

$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sqlGrade = "SELECT `hocsinh`.`MaHS`,
    `monhoc`.`MaMH`, 
    `monhoc`.`TenMH`, 
    `diem`.`DiemHeSo1`, 
    `diem`.`DiemHeSo2`, 
    `diem`.`DiemHeSo3`,
    ROUND((`diem`.`DiemHeSo1` + ((`diem`.`DiemHeSo2`)*2) + ((`diem`.`DiemHeSo3`)*3)) / 6, 1) AS `DiemTrungBinh`
FROM `diem`
INNER JOIN `hocsinh` ON `diem`.`MaHS` = `hocsinh`.`MaHS`
INNER JOIN `monhoc` ON `diem`.`MaMH` = `monhoc`.`MaMH`
WHERE `hocsinh`.`MaHS` = '$stdId'";

$resultGrade = $conn->query($sqlGrade);

$totalGrade = 0;

while ($rowGrade = $resultGrade->fetch_assoc()) {
?>
    <tr>
        <td class="text-center"><?php echo $rowGrade['TenMH'] ?></td>
        <td class="text-center"><?php echo $rowGrade['DiemHeSo1'] ?></td>
        <td class="text-center"><?php echo $rowGrade['DiemHeSo2'] ?></td>
        <td class="text-center"><?php echo $rowGrade['DiemHeSo3'] ?></td>
        <td class="text-center"><?php echo $rowGrade['DiemTrungBinh'] ?></td>
    </tr>
<?php
    $totalGrade += $rowGrade['DiemTrungBinh'];
}

$averageGrade = $totalGrade / $resultGrade->num_rows;
$averageGrade = number_format($averageGrade, 1);

$rankedGrade = '';
if ($averageGrade >= 8) {
    $rankedGrade = "Giỏi";
} else if ($averageGrade >= 6.5) {
    $rankedGrade = "Khá";
} else if ($averageGrade >= 5) {
    $rankedGrade = "Trung bình";
} else {
    $rankedGrade = "Yếu";
}

$sqlConduct = "SELECT `hanhkiem`.`TenHK` FROM `hocsinhhanhkiem` 
INNER JOIN `hanhkiem` ON `hocsinhhanhkiem`.`MaHK` = `hanhkiem`.`MaHK`
WHERE `hocsinhhanhkiem`.`MaHS` = '$stdId'";

$resultConduct = $conn->query($sqlConduct);

$rowConduct = $resultConduct->fetch_assoc();

$conduct = $rowConduct['TenHK'];

function classification($rankedGrade, $conduct)
{
    if ($rankedGrade == 'Giỏi' && $conduct == 'Tốt') {
        return 'Học sinh giỏi';
    } elseif ($rankedGrade == 'Giỏi' && $conduct == 'Khá') {
        return 'Học sinh khá';
    } elseif ($rankedGrade == 'Giỏi' && $conduct == 'Trung bình') {
        return 'Học sinh trung bình';
    } elseif ($rankedGrade == 'Giỏi' && $conduct == 'Yếu') {
        return 'Học sinh yếu';
    } elseif ($rankedGrade == 'Khá' && $conduct == 'Tốt') {
        return 'Học sinh khá';
    } elseif ($rankedGrade == 'Khá' && $conduct == 'Khá') {
        return 'Học sinh khá';
    } elseif ($rankedGrade == 'Khá' && $conduct == 'Trung bình') {
        return 'Học sinh trung bình';
    } elseif ($rankedGrade == 'Khá' && $conduct == 'Yếu') {
        return 'Học sinh yếu';
    } elseif ($rankedGrade == 'Trung bình' && $conduct == 'Tốt') {
        return 'Học sinh trung bình';
    } elseif ($rankedGrade == 'Trung bình' && $conduct == 'Khá') {
        return 'Học sinh trung bình';
    } elseif ($rankedGrade == 'Trung bình' && $conduct == 'Trung bình') {
        return 'Học sinh trung bình';
    } elseif ($rankedGrade == 'Trung bình' && $conduct == 'Yếu') {
        return 'Học sinh yếu';
    } elseif ($rankedGrade == 'Yếu' && $conduct == 'Tốt') {
        return 'Học sinh yếu';
    } elseif ($rankedGrade == 'Yếu' && $conduct == 'Khá') {
        return 'Học sinh yếu';
    } elseif ($rankedGrade == 'Yếu' && $conduct == 'Trung bình') {
        return 'Học sinh yếu';
    } elseif ($rankedGrade == 'Yếu' && $conduct == 'Yếu') {
        return 'Học sinh yếu';
    } else {
        return 'Không xác định';
    }
}

$ranked = classification($rankedGrade, $conduct);
?>