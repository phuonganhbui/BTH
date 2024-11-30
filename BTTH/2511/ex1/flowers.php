<?php
$strings = include 'strings.php';

$flowers = [
    ['id' => 1, 'name' => 'Hoa dạ yến thảo', 'moTa' => $strings['img1'], 'image' => 'image/img.png'],
    ['id' => 2, 'name' => 'Hoa đồng tiền', 'moTa' => $strings['img2'], 'image' => 'image/img_2.png'],
    ['id' => 3, 'name' => 'Hoa giấy', 'moTa' => $strings['img3'], 'image' => 'image/img_4.png'],
    ['id' => 4, 'name' => 'Hoa thanh tú', 'moTa' => $strings['img4'], 'image' => 'image/img_5.png'],
    ['id' => 5, 'name' => 'Hoa đèn lồng', 'moTa' => $strings['img5'], 'image' => 'image/img_6.png'],
    ['id' => 6, 'name' => 'Hoa cẩm chướng', 'moTa' => $strings['img6'], 'image' => 'image/img_7.png'],
    ['id' => 7, 'name' => ' Hoa huỳnh anh', 'moTa' => $strings['img7'], 'image' => 'image/img_8.png'],
    ['id' => 8, 'name' => ' Hoa Păng-xê', 'moTa' => $strings['img8'], 'image' => 'image/img_9.png'],
    ['id' => 9, 'name' => 'Hoa sen ', 'moTa' => $strings['img9'], 'image' => 'image/img_10.jpg'],
    ['id' => 10, 'name' => 'Hoa dừa cạn ', 'moTa' => $strings['img10'], 'image' => 'image/img_12.jpg'],
    ['id' => 11, 'name' => 'Hoa sử quân tử', 'moTa' => $strings['img11'], 'image' => 'image/img_13.jpg'],
    ['id' => 12, 'name' => ' Cúc lá nho', 'moTa' => $strings['img12'], 'image' => 'image/img_14.jpg'],
    ['id' => 13, 'name' => 'Cẩm tú cầu', 'moTa' => $strings['img13'], 'image' => 'image/img_15.png'],
    ['id' => 14, 'name' => 'Hoa cúc dại', 'moTa' => $strings['img14'], 'image' => 'image/img_16.png'],
];
// Thêm
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addProduct'])) {
    $newProduct = [
        'id' => count($flowers) + 1, // Tự động tăng id
        'name' => $_POST['name'],
        'moTa' => $_POST['moTa'],
        'image' => $_POST['image'],
    ];
    $flowers[] = $newProduct;
}



// Sửa
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editProduct'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $moTa = $_POST['moTa'];
    $image = $_POST['image'];

    foreach ($flowers as &$flower) {
        if ($flower['id'] == $id) {
            $flower['name'] = $name;
            $flower['moTa'] = $moTa;
            $flower['image'] = $image;
            break;
        }
    }
    $_SESSION['products'] = $flowers; // Cập nhật session nếu dùng session
}

// Xóa
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteProduct'])) {
    $id = $_POST['id'];
    foreach ($flowers as $key => $flower) {
        if ($flower['id'] == $id) {
            unset($flowers[$key]);
        }
    }
}


