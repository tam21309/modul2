<?php
include "../004-baitap/baitap5.php";
$em = new EmployeeManager;
$em->add(new Employee('Trần', 'Linh', '04/10/2003', 'Quảng Trị', 'Police'));
$em->add(new Employee('Nguyễn', 'Thắng', '06/6/2002', 'Quảng Trị', 'IT'));
$em->add(new Employee('Hoàng', 'Thắng', '01/12/2002', 'Quảng Trị', 'Singer'));
$employee = $em->getEmployee();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Danh sách sinh viên</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    a.show {
        text-decoration: none;
        background-color: yellow;
        padding: 4px;
        border-radius: 10px;
    }

    a.edit {
        text-decoration: none;
        background-color: green;
        padding: 4px;
        border-radius: 10px;
    }

    a.delete {
        text-decoration: none;
        background-color: red;
        padding: 4px;
        border-radius: 10px;
    }

    a.add {
        text-decoration: none;
        background-color: blue;
        padding: 4px;
        border-radius: 10px;
    }

    a {
        color: black;
    }
</style>

<body>
    <a href="student-add.php" class="add">Add +</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>ID</td>
            <td>Họ</td>
            <td>Tên</td>
            <td>Ngày Sinh </td>
            <td>Công Việc</td>
            <td>Địa Chỉ </td>
            <td>Thao Tác</td>
        </tr>
        <?php foreach ($employee as $key => $item) { ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $item->getFirstname() ?></td>
                <td><?php echo $item->getName() ?></td>
                <td><?php echo $item->getBirthday() ?></td>
                <td><?php echo $item->getAdress() ?></td>
                <td><?php echo $item->getVtcv() ?></td>
                <td>
                    <a class="show" href="show.php?id=<?php echo $key; ?>">Show</a>
                    <a class="edit" href="edit.php?id=<?php echo $key; ?>">Edit</a>
                    <a class="delete" href="delete.php?id=<?php echo $key; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>