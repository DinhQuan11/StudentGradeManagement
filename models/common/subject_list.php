<?php
$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT `TenMH` FROM `monhoc` ORDER BY `TenMH` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
    <option value="<?php echo $row['TenMH'] ?>"><?php echo $row['TenMH'] ?></option>
<?php
}
?>