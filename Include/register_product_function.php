<?php
require('../DB/dbconnect.php'); // db 연결        //  경로 수정한 부분

$product_name = $_POST['product_name'];
$product_code = $_POST['product_code'];
$product_price = $_POST['product_price'];
$product_image = $_POST['product_image'];
$product_explain = $_POST['product_explain'];
$product_date = date("Y-m-d");

$query = "insert into product values (NULL, '$product_code', '$product_name', '$product_price', '$product_image', '$product_explain', '$product_date')";
$result = mysql_query($query, $connect);

if(!$result) {
    die("상품 등록 실패");
    echo "<meta http-equiv='refresh' content='0; url=../register_product.php'>";
}
else {
    echo ("<script>alert('상품 등록 완료');</script>");
    echo "<meta http-equiv='refresh' content='0; url=../register_product.php'>";
}

?>