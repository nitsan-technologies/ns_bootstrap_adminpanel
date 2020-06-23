<?php
$title = 'Progress Bar';
$active = 1;
include 'inc_head.php';
?>
<div class="breadcrumb-section">
    <div class="pull-left">
        <h3>Progressbar</h3>
        <small class="subtitle">Bootstrap UI Components
        </small>
    </div>
    <ol class="breadcrumb pull-right">     
        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-tachometer"></i></a></li>
        <li class="breadcrumb-item active">Progressbar</li>
    </ol>
</div>
<div class="content-section">
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading bg-success">
                    <h3 class="panel-title">Progress Bars</h3>
                </div>
                <div class="panel-body">
                    <h4>Regular</h4>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%;">
                        </div>
                    </div>
                    <h4>With label</h4>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;">63
                        </div>
                    </div> 
                    <h4>Stacked</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" style="width:35%"></div>
                        <div class="progress-bar bg-warning" style="width: 23%"></div>
                        <div class="progress-bar bg-danger" style="width: 30%"></div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading bg-info">
                    <h3 class="panel-title">Contextual Progressbars</h3>
                </div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 52%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%;">
                        </div>
                    </div> </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading bg-warning">
                    <h3 class="panel-title">Striped Progresbars</h3>
                </div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped " role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width:25%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-brand progress-bar-striped " role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-info progress-bar-striped " role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-warning progress-bar-striped " role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-danger progress-bar-striped " role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width:90%;">
                        </div>
                    </div> </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading bg-danger">
                    <h3 class="panel-title">Animated Progresbars</h3>
                </div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar bg-danger  progress-bar-striped  progress-bar-animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-success  progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-info  progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-warning  progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;">
                        </div>
                    </div> <div class="progress">
                        <div class="progress-bar bg-brand  progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'inc_footer.php'; ?>

<!-- END OF MAIN PAGE WRAPPER -->

