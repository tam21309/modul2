<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $error = [];
        if ($username == "") {
            $error['username'] = 'Vui lòng nhập tên đăng nhập!!';
        }
        if ($email == "") {
            $error['email'] = 'Vui lòng nhập email!!';
        }
        if ($phone == "") {
            $error['phone'] = 'Vui lòng nhập số điện thoại!!';
        }
    }
    ?>
    <form action="" method="post">
        <label for="">Username:</label><br>
        <input type="text" name="username" placeholder="Nhập tên người dùng"><br>
        <span style="color: red;">
            <?php
            if (isset($error['username'])) {
                echo $error['username'];
            } ?>
        </span><br>
        <label for="">Email:</label><br>
        <input type="text" name="email" placeholder="Nhập tên người dùng"><br>
        <span style="color: red;">
            <?php
            if (isset($error['email'])) {
                echo $error['email'];
            } ?>
        </span><br>
        <label for="">Phone:</label><br>
        <input type="text" name="phone" placeholder="Nhập tên người dùng"><br>
        <span style="color: red;">
            <?php
            if (isset($error['phone'])) {
                echo $error['phone'];
            } ?>
        </span><br>
        <button>Đăng Ký</button>
    </form>

</body>

</html>