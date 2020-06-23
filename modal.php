<?php
$title = 'Modal';
$active = 1;
include 'inc_head.php';
?>
<div class="breadcrumb-section">
    <div class="pull-left">
        <h3>Modal</h3>
        <small class="subtitle">Bootstrap UI Components
        </small>
    </div>
    <ol class="breadcrumb pull-right">     
        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-tachometer"></i></a></li>
        <li class="breadcrumb-item active">Modal</li>
    </ol>
</div>
<div class="content-section">
    <div class="panel">
        <div class="panel-heading bg-success">
            <h3 class="panel-title">Modal</h3>
        </div>
        <div class="panel-body">
            <div class="modal-wrap">
                <h6>Normal Size</h6> <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#normalModal">View Modal</button>
            </div>
            <div class="modal fade" id="normalModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">                            
                            <h4 class="modal-title" id="myModalLabel">Normal Size Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary btn-rounded">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="modal-wrap">
                <h6>Large Size</h6> <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#largeModal">View Modal</button>
            </div>
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">                            
                            <h4 class="modal-title" id="myModalLabel">Large Size Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary btn-rounded">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
             <div class="modal-wrap">
                <h6>Small Size</h6> <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#smallModal">View Modal</button>
            </div>
            <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">                            
                            <h4 class="modal-title" id="myModalLabel">Small Size Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary btn-rounded">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <p>For more information you can go <a href="https://getbootstrap.com/docs/4.1/components/modal/" target="_blank">Here</a>.</p>
        </div>
    </div> 
</div>


<?php include 'inc_footer.php'; ?>

<!-- END OF MAIN PAGE WRAPPER -->
