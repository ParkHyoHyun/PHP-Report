<?php
require('./DB/dbconnect.php'); // db 연결        //  경로 수정한 부분
include('./Include/functions.php');
if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Product List Pages</title>
    <!-- 수정한 부분 타이틀 -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script');
        #grad {
                background: #405168; /* Old browsers */ /* FF3.6-15 */ /* Chrome10-25,Safari5.1-6 */
                /*
                background: -webkit-linear-gradient(bottom left, #93cede 0%, #75bdd1 57%, #49a5bf 100%);
                background: -moz-linear-gradient(bottom left, #93cede 0%, #75bdd1 57%, #49a5bf 100%);
                background: -o-linear-gradient(bottom left, #93cede 0%, #75bdd1 57%, #49a5bf 100%);
                background: linear-gradient(to top right, #93cede 0%, #75bdd1 57%, #49a5bf 100%); 
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#93cede', endColorstr='#49a5bf',GradientType=1 );
                */
        }
        #footer {
            margin: auto;
            font-size: 25px;
            font-weight: bolder;
            font-family: 'Dancing Script', cursive;
            color: white;
            text-align: right;
        }
        .carousel-inner .item > img {
            position: relative;
            top: 0;
            left: 0;
            max-width: 100%;
            height: 500px;
        }
        .top-thumbnail {
            margin-top: 10px;
        }
        .bottom-thumbnail {
            margin-bottom: 0;
        }
        .modal {
            text-align: center;
            padding: 0!important;
        }
        .modal:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
            margin-right: -4px;
        }
        .modal-dialog {
            display: inline-block;
            text-align: left;
            vertical-align: middle;
        }
        .modal-footer > button {
            font-family: 'Dancing Script', cursive;
            font-weight: bolder;
        }
        .signupForm {
            width: 100%;
            margin: 0 auto;
            margin-bottom: 25px;
        }
        a:link, a:visited, a:hover, a:active {
            color:white;
            text-decoration: none;
        }

    </style>
    <script type="text/javascript">
        $('#signupModal').on('shown.bs.modal', function() {
            $('#signupModal').focus();
        })
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div id="grad" class="col-sm-12">
                <h1 style="color:white; font-family: 'Dancing Script', cursive; font-weight:bolder; display:inline; margin: 10px;"><a href="#">Bootstrap Example Page</a></h1>
            <!-- 수정한 부분 header.php 로 파일을 불러오는 방식 -->
            <?php
                include('./Include/header.php')
            ?>
        
            </div>
        </div>
        <div class="row">
            <nav class="navbar navbar-default" style="margin: 0; background-color:#7AC7C4">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toogle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toogle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
            <!-- 수정한 부분 링크 설정 -->
                        <a class="navbar-brand" href="./index.php" style="color:white;">Home</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-right: 0;">
                        <ul class="nav navbar-nav">
                            <li class="dropbox">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Menu<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="./top.php">Top</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                </ul>
                            </li>
                            <li class="dropbox">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Menu<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                </ul>
                            </li>
                            <li class="dropbox">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Menu<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                </ul>
                            </li>
                            <li class="dropbox">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Menu<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Example</a></li>
                                </ul>
                            </li>
                            <li><a href="#" style="color:white;">Menu</a></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search Query" style="width:500px;">
                            </div>
                            <button type="sumbit" class="btn btn-default" style="width:120px;">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
                <?php
                    $query = "select count(*) from product";
                    $result = mysql_query($query) or die(mysql_error());
                    $total_rows = current(mysql_fetch_array($result));

                    $total_pages = ceil($total_rows / $product_list_page);
                    $start_row = $product_list_page * ($page - 1);
                    $pre_page = $page > 1 ? $page - 1 : NULL;
                    $next_page = $page < $total_pages ? $page + 1 : NULL;
                    $start_page = ( ceil( $page / $direct_pages ) -1 ) * $direct_pages + 1;
                    $end_page = $total_pages >= $start_page + $direct_pages ? $start_page + $direct_pages - 1 : $total_pages;
                ?>
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h2>상품 전체 목록</h2>
                <div id="product_table" class="table-responsive">
                    <table class="table table-bordered table-condensed">
                        <tr>
                            <th>번호</th>
                            <th>종류</th>
                            <th>이름</th>
                            <th>가격</th>
                            <th>등록일</th>
                        </tr>
                        <!-- 상품 목록 조회 -->
                        <?php
                        mysql_query('set names utf8');
                        $selrec="select * from product order by product_id asc limit $start_row, $product_list_page";
                        $info=mysql_query($selrec, $connect);
                        while($row=mysql_fetch_array($info)) {
                            echo "<tr>";
                                echo "<td> $row[product_id] </td>";
                                echo "<td> $row[product_code] </td>";
                                echo "<td> $row[product_name] </td>";
                                echo "<td> $row[product_price] </td>";
                                echo "<td> $row[product_date] </td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
        <!--상품 목록 페이지 번호 -->
                    <table class="table table-bordered table-condensed">
                        <tr>
                            <td align="left">
                            <?php
                                if($pre_page)
                                    echo( "<a style='color:black' href=\"".dest_url("./product_list.php", $pre_page)."\">[이전]</a>");
                                if($next_page)
                                    echo( "<a style='color:black' href=\"".dest_url("./product_list.php", $next_page)."\">[다음]</a>");
                            ?>
                            <td align="center">
                            <?php
                            if($start_page > 1) {
                                echo ( "<a style='color:black' href=\"".dest_url("./product_list.php",$start_page - 1 )."\">[pre]</a>");
                            }
                            for($dest_page = $start_page; $dest_page <= $end_page; $dest_page++ ) {
                                if($dest_page != $page ) {
                                    echo ( "<a style='color:black' href=\"".dest_url("./product_list.php", $dest_page )."\">[$dest_page]</a>");
                                }
                                else {
                                    echo ( "&nbsp;$dest_page&nbsp" );
                                }
                            }
                            if($end_page < $total_pages) {
                                echo("<a style='color:black' href=\"".dest_url("./product_list.php", $end_page + 1 )."\">[next]</a>");
                            }
                    ?>
                            </td>
                        </tr>
                    </table>
                    <h3 align="right"><a href="javascript:history.back();" style="border: 1px solid; color:black">회원현황으로 이동</a></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="grad" class="col-sm-12">
                <p id="footer">Copyright &copy; 2017 Geezer Programmer Production.</p>
                <p id="footer">Company Email Address - escapelazy@gmail.com</p>
                <p id="footer">Company Contact - +82-10-7307-1497</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>