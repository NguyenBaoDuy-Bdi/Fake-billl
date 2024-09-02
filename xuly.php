<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị của theme được chọn
    $theme = $_POST['theme'];

    // Chuyển hướng người dùng tới trang tương ứng và truyền dữ liệu form qua query string
    $queryString = http_build_query($_POST);
    header("Location: $theme?$queryString");
    exit();
}
?>
