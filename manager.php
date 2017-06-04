<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Manager Pages</title>
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
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h1>관리 페이지</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <div style="border: 1px dashed #9390aa; background: #aaee99; margin-bottom:10px">
                    <ul>
                        <li><h2><a href="./member_management.php" style="text-decoration: none; color:black">회원관리</a></h2></li>
                        <li><h2><a href="./register_product.php" style="text-decoration: none; color:black">상품입고관리</a></h2></li>
                        <li><h2><a href="./product_list.php" style="text-decoration: none; color:black">상품목록조회</a></h2></li>
                    </ul>
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