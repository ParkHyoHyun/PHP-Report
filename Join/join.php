<?php
require('../DB/dbconnect.php'); // 디비 연결
$name=$_POST['joinname'];
$id=$_POST['joinid'];
$pwd=$_POST['joinpwd'];
$email=$_POST['joinemail'];

mysql_query('set names utf8');

$inrec = "insert into goods values('$id','$pwd','$name','$email')";

$info=mysql_query($inrec,$connect);
if(!$info) {
    echo '<script>alert( "가입에 실패하였습니다.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
    die();
} else {
    echo '<script>alert( "회원가입 완료!");</script>';
    echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
    // 홈 페이지로 이동
}