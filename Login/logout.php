<?php
session_start();
ini_set("display_errors", "1");
session_destroy();  // 저장 되어있는 세션 데이터 삭제
echo '<script>alert( "로그아웃 하였습니다.");</script>';

echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
                                                // 경로 수정한 부분
?>