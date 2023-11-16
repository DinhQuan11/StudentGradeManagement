<?php
$dirRoot = strstr(__DIR__, '\models', true);
require_once $dirRoot . '/connection.php';

$sql = "SELECT * FROM `user` ORDER BY `Id` ASC";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['Id'] ?></td>
    <td><?php echo $row['Username'] ?></td>
    <td><?php echo $row['Password'] ?></td>
    <td><?php echo $row['Role'] ?></td>
    <td>
        <a href="edit.php?sid=<?php echo $row['Id'] ?>" class="btn btn-warning">Sửa</a>
        <a href="/controllers/Account.php?sid=<?php echo $row['Id'] ?> " class="btn btn-danger">Xóa</a>
    </td>
</tr>
<?php
}
?>