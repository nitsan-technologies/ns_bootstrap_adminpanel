<?php
$title = 'Breadcrumbs & Paginations';
$active = 1;
include 'inc_head.php';
?>
<div class="breadcrumb-section">
    <div class="pull-left">
        <h3>Breadcrumbs & Pagination</h3>
        <small class="subtitle">Bootstrap UI Components
        </small>
    </div>
    <ol class="breadcrumb pull-right">     
        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-tachometer"></i></a></li>
        <li class="breadcrumb-item active">Other Eleements</li>
    </ol>
</div>
<div class="content-section">
    <div class="row">
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading bg-warning">
                    <h3 class="panel-title">Breadcrumbs</h3>
                </div>
                <div class="panel-body">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                    <hr/>
                    <ol class="breadcrumb bg-transparent">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading bg-success">
                    <h3 class="panel-title">Popover</h3>
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                    <hr/>
                    <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on top
                    </button><br/>

                    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on right
                    </button><br/>

                    <button type="button" class="btn btn-success" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                            sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on bottom
                    </button><br/>

                    <button type="button" class="btn btn-warning" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on left
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel">
                <div class="panel-heading bg-success">
                    <h3 class="panel-title">Pagination</h3>
                </div>
                <div class="panel-body">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                    <hr/>
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                    <hr/>
                    <ul class="pagination pull-right">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <span class="page-link">
                                2
                                <span class="sr-only">(current)</span>
                            </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading bg-info">
                    <h3 class="panel-title">Disable Pagination</h3>
                </div>
                <div class="panel-body">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading bg-danger">
                    <h3 class="panel-title">Various Size of Pagination</h3>
                </div>
                <div class="panel-body">
                    <h4>Large Pagination</h4>
                    <ul class="pagination pagination-lg">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                    <hr/>
                     <h4>Small Pagination</h4>
                    <ul class="pagination pagination-sm">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                           <a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-right"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'inc_footer.php'; ?>

<!-- END OF MAIN PAGE WRAPPER -->




