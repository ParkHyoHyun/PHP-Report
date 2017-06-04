<?php
require('../DB/dbconnect.php'); // db 연결        //  경로 수정한 부분
session_start();

$query="select * from goods";  // 전부 검색
$result=mysql_query($query,$connect);  // result 변수에 값 저장


if(!empty($_POST['id']) && !empty($_POST['pwd'])) {
    while ($row=mysql_fetch_array($result)) {   // result변수에 있는 값을 배열로 바꿈
        if($_POST['id'] == $row['id'] && $_POST['pwd'] == $row['pwd']) { //while문을 통해 id랑 pwd 맞는거 찾기
            
            $_SESSION['is_login'] = true;
            $_SESSION['nickname'] = $row['name'];
            header('Location: ./session.php');  //session.php  로 이동
            exit;
        }
    }
}// 실패시 실행
    echo '<script>alert( "아이디나 비밀번호가 틀렸습니다.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
                                                    // 경로 수정한 부분
?>