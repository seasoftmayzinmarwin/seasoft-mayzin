<?php include('layout/header.php') ?>
<style type="text/css" media="screen">
  /*------pop-up---------*/
/* Outer */
.popup {
    width:100%;
    height:100%;
    display:none;
    position:fixed;
    top:0px;
    left:0px;
    background:rgba(0,0,0,0.15);
}
.popup-header{
    font-size:20px;
}

/* Inner */
.popup-inner {
    max-width:40%;
    width:40%;
    padding: 20.5px 30px 20.5px 30px;
    position:absolute;
    top:50%;
    left:50%;
    -webkit-transform:translate(-50%, -50%);
    transform:translate(-50%, -50%);
    box-shadow:0px 2px 6px rgba(0,0,0,1);
    border-radius:6px;
    background:#fff;
}
.popup-block{
    width: 90%;
    margin: 0 auto;
}
</style>
<?php include('layout/sidebar.php') ?>
<div class="content">
    <div class="form-block">
        <form class="form-horizontal" role="form" method="POST" action="/register">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="header-lg-title">Register New User</h2>
                    <hr>
                    
                </div>
            </div>
            <div class="space-sm"></div>
            <div class="row">
                <div class="col-md-2 field-label-responsive">
                    <label for="user-name">User Name</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="name" class="form-control" id="name"
                                   placeholder="User Name" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                <!-- Put name validation error messages here -->
                            </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 field-label-responsive">
                    <label for="email">E-Mail Address</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="email" class="form-control" id="email"
                                   placeholder="you@example.com" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                            <span class="text-danger align-middle">
                                <!-- Put e-mail validation error messages here -->
                            </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 field-label-responsive">
                    <label for="password">Password</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 field-label-responsive">
                    <label for="password">Confirm Password</label>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem">
                                <i class="fa fa-repeat"></i>
                            </div>
                            <input type="password" name="password-confirmation" class="form-control"
                                   id="password-confirm" placeholder="Confirm Password" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="btn-left">
                    <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-user-plus"></i> Register</button>
                </div>
            </div>
        </form>
        <div class="sw-help" data-popup-open = 'popup-20'>
            <i class="far fa-question-circle"></i>
        </div>

        <div class="popup" data-popup="popup-20">
        <div id="" class="popup-inner row new-popup no-max-width">
            <span data-popup-close = "popup-20"><img src="/img/icon/close.png" width="40px" class="new-popup-close"></span>
            <div class="helper-text">
                asdfsdfsdfsdf
            </div>
        </div>
    </div>
    </div>
  
</div><!-- .content -->
</div><!-- .body -->
<?php include('layout/footer.php') ?>