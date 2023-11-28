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
        <a href="edit.php?sid=<?php echo $row['Id'] ?>" class="mr-8 text-decoration-none">
            <img class="btn-hover w-20" src="/assets/imgs/pen.svg" alt="Sửa">
        </a>
        <a href="/controllers/Account.php?sid=<?php echo $row['Id'] ?> " class="text-decoration-none">
            <img class="btn-hover w-20" src="/assets/imgs/trash.svg" alt="Xóa">
        </a>
    </td>
</tr>
<?php
}
?>