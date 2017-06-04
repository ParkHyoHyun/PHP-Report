<?php
// 수정한 부분
    session_start();        
        if(!isset($_SESSION['is_login'])) {                         // 경로 수정한 부분
            echo ('
                <form class="navbar-form navbar-right" role="search" action="./Login/login_function.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="ID" name="id">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="pwd" maxlength="10">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">&nbsp;<font style="color:white;">Remember me</font>&nbsp;
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default" style="width:120px;">Sign in</button>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#signupModal" style="width:120px;">Sign up</button>
                </form>
                    <!-- Sign up Modal -->
                    <form class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true" action="./Join/join.php" method="post">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h1 id="signupModalLabel" class="modal-title" style="font-family: Dancing Script, cursive; font-weight: bolder;">Welcome ! Please join us !</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="input-group signupForm">
                                        <span id="sizing-addon1" class="input-group-addon" style="font-weight: bold;">Name</span>
                                        <input type="text" class="form-control" placeholder="Input your Name" aria-describedby="sizing-addon1" name="joinname">
                                    </div>
                    
                                    <div class="input-group signupForm">
                                        <span id="sizing-addon3" class="input-group-addon" style="font-weight: bold;">ID</span>
                                        <input type="text" class="form-control" placeholder="Input your ID" aria-describedby="sizing-addon3" name="joinid">
                                    </div>
                                    <br/>
                                    <div class="input-group signupForm">
                                        <span id="sizing-addon4" class="input-group-addon" style="font-weight: bold;">Password</span>
                                        <input type="password" class="form-control" placeholder="Input your Password" aria-describedby="sizing-addon4" name="joinpwd">
                                    </div>
                                    <div class="input-group signupForm">
                                        <span id="sizing-addon5" class="input-group-addon" style="font-weight: bold;">Email</span>
                                        <input type="text" class="form-control" placeholder="Input your E-mail" aria-describedby="sizing-addon5" name="joinemail">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-default btn-lg">Join Us</button>
                                    <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                   
                </form>
            ');
        }
  //  이후엔 로그인 되어있으면 출력

        else {
            echo ("
                <form class='navbar-form navbar-right' role='search'>
                    <div class='form-group'>
                        <font class='w3-right' style='color:white; padding-top:8px'>$_SESSION[nickname] 님 환영합니다</font>");
                    if($_SESSION['nickname']=='관리자') {
                        echo ("&nbsp;<a href='./manager.php'><button type='button' class='btn btn-default' data-toggle='modal' data-target='#signupModal' style='width:120px;'>Manager Page</button></a>");
                    }
             echo ("</div>
                    
                    <a href='./Login/logout.php'><button type='button' class='btn btn-default' data-toggle='modal' data-target='#signupModal' style='width:120px;'>Sign Out</button></a>
                </form>
            ");             //  경로 수정한 부분
        }
    ?>