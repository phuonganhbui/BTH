<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển Thị Tệp CSV</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<h1>Danh sách tài khoản</h1>
<table>
    <thead>
    <tr>
        <th>Tên</th>
        <th>Mật khẩu</th>
        <th>Tên</th>
        <th>Họ</th>
        <th>Lớp</th>
        <th>Email</th>
        <th>Môn học</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $file = 'KTPM2.csv';
        $handle = fopen($file, 'r');
        $header = fgetcsv($handle);
        while (($row = fgetcsv($handle)) !== false) {
            echo '<tr>';
            foreach ($row as $cell) {
                echo '<td>' . htmlspecialchars($cell) . '</td>';
            }
            echo '</tr>';
        }
        fclose($handle);
    ?>
    </tbody>
</table>
</body>

</html>