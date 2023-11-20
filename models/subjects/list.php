<?php
$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT ROW_NUMBER() OVER (ORDER BY `MaMH` ASC) AS `STT`, 
    `MaMH`,
    `TenMH` FROM `monhoc` ORDER BY `MaMH` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $row['STT'] ?></td>
        <td><?php echo $row['MaMH'] ?></td>
        <td><?php echo $row['TenMH'] ?></td>
    </tr>
<?php
}
?>