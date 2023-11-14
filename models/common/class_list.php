<?php
$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT `MaLop` FROM `lophoc` ORDER BY `MaLop` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
    <option value="<?php echo $row['MaLop'] ?>"><?php echo $row['MaLop'] ?></option>
<?php
}
?>