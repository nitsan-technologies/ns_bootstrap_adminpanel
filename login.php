<?php
$title = 'Login Page';
$active = 1;
include 'inc_head.php';
?>
<div class="breadcrumb-section">
    <div class="pull-left">
        <h3>Login</h3>
        <small class="subtitle">Bootstrap UI Components
        </small>
    </div>
    <ol class="breadcrumb pull-right">     
        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-tachometer"></i></a></li>
        <li class="breadcrumb-item active">Login</li>
    </ol>
</div>

<div class="login-section">
    <div class="login-wrap">
        <h3>Log In</h3>
        <form>
            <div class="form-group row">
                <label for="username" class="col-sm-3 col-form-label">User:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" placeholder="User Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Password:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                     <input type="submit" class="btn btn-primary" value="Log In"/>
                </div>               
            </div>
        </form>
    </div>
</div>

<?php include 'inc_footer.php'; ?>

<!-- END OF MAIN PAGE WRAPPER -->


