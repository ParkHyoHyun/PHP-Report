<?php
session_start();
if(!isset($_SESSION['is_login'])) {
  header('Location: ../index.php');
} // 로그인 실패시 로그인 html 로 돌려보냄
else {
  header('Location: ../index.php');
}               // 경로 수정한 부분
?>    