<?php
$title = 'SignUp Page';
$active = 1;
include 'inc_head.php';
?>
<div class="breadcrumb-section">
    <div class="pull-left">
        <h3>SignUp</h3>
        <small class="subtitle">Bootstrap UI Components
        </small>
    </div>
    <ol class="breadcrumb pull-right">     
        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-tachometer"></i></a></li>
        <li class="breadcrumb-item active">SignUp</li>
    </ol>
</div>

<div class="login-section">
    <div class="login-wrap">
        <h3>Sign Up</h3>
        <form>
            <div class="form-group row">
                <label for="fname" class="col-sm-4 col-form-label">First Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="fname" placeholder="First Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="lname" class="col-sm-4 col-form-label">Last Name:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                </div> 
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email:</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-4 col-form-label">Phone:</label>
                <div class="col-sm-8">
                    <input type="tel" class="form-control" id="phone" placeholder="Phone">
                </div>
            </div>
            <div class="form-group row">
                <label for="user-name" class="col-sm-4 col-form-label">User:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="user-name" placeholder="User">
                </div>
            </div>
            <div class="form-group row">
                <label for="newpass" class="col-sm-4 col-form-label">Password:</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="newpas" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="confpas" class="col-sm-4 col-form-label">Confirm Password:</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="confpass" placeholder="Confirm Password">
                </div>
                 
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="submit" class="btn btn-primary" value="Sign Up"/>
                </div>               
            </div>
        </form>
    </div>
</div>

<?php include 'inc_footer.php'; ?>

<!-- END OF MAIN PAGE WRAPPER -->


