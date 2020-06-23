<?php
$title = 'Buttons';
$active = 1;
include 'inc_head.php';
?>
<div class="breadcrumb-section">
    <div class="pull-left">
        <h3>Buttons</h3>
        <small class="subtitle">Bootstrap UI Components
        </small>
    </div>
    <ol class="breadcrumb pull-right">     
        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-tachometer"></i></a></li>
        <li class="breadcrumb-item active">Buttons</li>
    </ol>
</div>
<div class="content-section">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Buttons</h3>
                </div>
                <div class="panel-body">
                    <p>
                        <button type="button" class="btn btn-default btn-rounded">Default Button</button>
                        <button type="button" class="btn btn-primary btn-rounded">Primary Button</button>
                        <button type="button" class="btn btn-success btn-rounded">Success Button</button>
                        <button type="button" class="btn btn-info btn-rounded">Info Button</button>
                        <button type="button" class="btn btn-warning btn-rounded">Warning Button</button>
                        <button type="button" class="btn btn-danger btn-rounded">Danger Button</button>
                        <button type="button" class="btn btn-light btn-rounded">Light Button</button>
                    </p>
                    <hr>
                    <p>
                        <button type="button" class="btn btn-default">Default Button</button>
                        <button type="button" class="btn btn-primary">Primary Button</button>
                        <button type="button" class="btn btn-success">Success Button</button>
                        <button type="button" class="btn btn-info">Info Button</button>
                        <button type="button" class="btn btn-warning">Warning Button</button>
                        <button type="button" class="btn btn-danger">Danger Button</button>
                        <button type="button" class="btn btn-light">Light Button</button>

                    </p>
                    <hr>
                    <p>
                        <button type="button" class="btn  btn-outline-primary btn-rounded">Primary Button</button>
                        <button type="button" class="btn btn-outline-danger btn-rounded">Danger Button</button>
                        <button type="button" class="btn btn-outline-dark btn-rounded">Dark Button</button>
                        <button type="button" class="btn btn-outline-info btn-rounded">Info Button</button>
                        <button type="button" class="btn btn-outline-success btn-rounded">Success Button</button>
                        <button type="button" class="btn btn-outline-warning btn-rounded">Warning Button</button>

                        <button type="button" class="btn btn-outline-light btn-rounded">Light Button</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-section">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Button Sizes</h3>
                </div>
                <div class="panel-body">
                    <p>
                        <button type="button" class="btn btn-danger btn-rounded   btn-xs   ">Extra Small Button</button>
                    </p><p>
                        <button type="button" class="btn btn-success btn-rounded   btn-sm   ">Small Button</button>
                    </p><p>
                        <button type="button" class="btn btn-info btn-rounded   btn-lg   ">Large Button</button>
                    </p><p>
                        <button type="button" class="btn btn-warning btn-block btn-rounded    ">Block Level Button</button>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Button Groups </h3>
                </div>
                <div class="panel-body">
                    <p>
                    </p><div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary">Primary Button</button>
                        <button type="button" class="btn btn-default">Default Button</button>
                    </div>
                    <p></p>
                    <hr>
                    <h4>Justified Button Groups</h4>
                    <p>
                    </p><div class="btn-group btn-group-justified" role="group">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary">Primary </button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-info">Info</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-warning">Warning</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-danger">Danger</button>
                        </div>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-section">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Buttons with Icons </h3>
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-primary btn-circle btn-lg"><i class="fa fa-twitter"></i></button>
                    <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-facebook"></i></button>
                    <button type="button" class="btn btn-warning btn-rounded">Download<i class="fa fa-download"></i></button>
                    <button type="button" class="btn btn-outline-success"><i class="fa fa-plus"></i>View More</button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-phone"></i>Call Us!</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'inc_footer.php'; ?>

<!-- END OF MAIN PAGE WRAPPER -->



