<?php
$title = 'Alerts';
$active = 1;
include 'inc_head.php';
?>
<div class="breadcrumb-section">
    <div class="pull-left">
        <h3>Alerts</h3>
        <small class="subtitle">Bootstrap UI Components
        </small>
    </div>
    <ol class="breadcrumb pull-right">     
        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-tachometer"></i></a></li>
        <li class="breadcrumb-item active">Alerts</li>
    </ol>
</div>
<div class="content-section">
    <div class="panel">
        <div class="panel-heading bg-success">
            <h3 class="panel-title">Dismissable Alerts</h3>
        </div>
        <div class="panel-body">
            <div class="alert alert-success  alert-dismissable " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <i class="fa fa-check"></i>My message.
            </div>
            <div class="alert alert-info  alert-dismissable " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <i class="fa fa-info"></i>My message.
            </div> 
            <div class="alert alert-warning  alert-dismissable " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <i class="fa fa-warning"></i>My message.
            </div>
            <div class="alert alert-danger  alert-dismissable " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <i class="fa fa-remove"></i>My message.
            </div> 
            <p>For more information you can go <a href="https://getbootstrap.com/docs/4.1/components/alerts/" target="_blank">Here</a>.</p>
        </div>
    </div> 
</div>


<?php include 'inc_footer.php'; ?>

<!-- END OF MAIN PAGE WRAPPER -->

