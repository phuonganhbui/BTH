<?php
// Khởi tạo mảng sản phẩm
$products = [
    ['id' => 1, 'name' => 'Bim Bim', 'soLuong' => 10, 'gia' => 1100],
    ['id' => 2, 'name' => 'Kẹo mút', 'soLuong' => 222, 'gia' => 1100],
    ['id' => 3, 'name' => 'Thịt Lợn', 'soLuong' => 111, 'gia' => 1150],
    ['id' => 4, 'name' => 'Thịt bò', 'soLuong' => 50, 'gia' => 1100],
    ['id' => 5, 'name' => 'Bim bim cay', 'soLuong' => 22, 'gia' => 1100],
];

// Thêm
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addProduct'])) {
    $newProduct = [
        'id' => count($products) + 1, // Tự động tăng id
        'name' => $_POST['name'],
        'soLuong' => $_POST['soLuong'],
        'gia' => $_POST['gia'],
    ];
    $products[] = $newProduct;
}



// Sửa
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['editProduct'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $soLuong = $_POST['soLuong'];
    $gia = $_POST['gia'];

    foreach ($products as &$product) {
        if ($product['id'] == $id) {
            $product['name'] = $name;
            $product['soLuong'] = $soLuong;
            $product['gia'] = $gia;
            break;
        }
    }
    $_SESSION['products'] = $products; // Cập nhật session nếu dùng session
}

// Xóa
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteProduct'])) {
    $id = $_POST['id'];
    foreach ($products as $key => $product) {
        if ($product['id'] == $id) {
            unset($products[$key]);
        }
    }
}

