<!-- 수정한 부분 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Index_Test_Page</title>
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
        <div id="content" class="row">
            <div class="col-sm-12" style="padding: 0;">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="http://placehold.it/350x150" alt="Image-1">
                            <div class="carousel-caption">
                                <h3>Image 1</h3>
                                <p>Example Image 1</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/350x150" alt="Image-2">
                            <div class="carousel-caption">
                                <h3>Image 2</h3>
                                <p>Example Image 2</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://placehold.it/350x150" alt="Image-3">
                            <div class="carousel-caption">
                                <h3>Image 3</h3>
                                <p>Example Image 3</p>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Thumbnail Section -->
        <div class="row">
            <div class="col-sm-4 col-md-4" style="padding: 0;">
                <div class="thumbnail top-thumbnail">
                    <img src="http://placehold.it/350x150" alt="Example Image">
                    <div class="caption">
                        <h4>Bootstrap Example Thumbnail</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur omnis adipisci quas distinctio beatae molestias eveniet obcaecati nostrum, fuga nisi voluptas quos amet ducimus expedita, quisquam, excepturi dicta odio eligendi?</p>
                    </div>
                </div>
                <div class="thumbnail bottom-thumbnail">
                    <img src="http://placehold.it/350x150" alt="Example Image">
                    <div class="caption">
                        <h4>Bootstrap Example Thumbnail</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur omnis adipisci quas distinctio beatae molestias eveniet obcaecati nostrum, fuga nisi voluptas quos amet ducimus expedita, quisquam, excepturi dicta odio eligendi?</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="thumbnail top-thumbnail">
                    <img src="http://placehold.it/350x150" alt="Example Image">
                    <div class="caption">
                        <h4>Bootstrap Example Thumbnail</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum animi reiciendis eveniet sed esse vero eos sunt enim maiores accusantium ipsum, perspiciatis voluptatibus repellendus similique exercitationem quia ullam soluta, non!</p>
                    </div>
                </div>
                <div class="thumbnail bottom-thumbnail">
                    <img src="http://placehold.it/350x150" alt="Example Image">
                    <div class="caption">
                        <h4>Bootstrap Example Thumbnail</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum animi reiciendis eveniet sed esse vero eos sunt enim maiores accusantium ipsum, perspiciatis voluptatibus repellendus similique exercitationem quia ullam soluta, non!</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4" style="padding: 0;">
                <div class="thumbnail top-thumbnail">
                    <img src="http://placehold.it/350x150" alt="Example Image">
                    <div class="caption">
                        <h4>Bootstrap Example Thumbnail</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis aut animi incidunt eum alias nihil debitis, assumenda, doloremque suscipit quos illo perspiciatis explicabo ratione facere consectetur, cumque aperiam possimus nostrum.</p>
                    </div>
                </div>
                <div class="thumbnail bottom-thumbnail">
                    <img src="http://placehold.it/350x150" alt="Example Image">
                    <div class="caption">
                        <h4>Bootstrap Example Thumbnail</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis aut animi incidunt eum alias nihil debitis, assumenda, doloremque suscipit quos illo perspiciatis explicabo ratione facere consectetur, cumque aperiam possimus nostrum.</p>
                    </div>
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
</body>
</html>