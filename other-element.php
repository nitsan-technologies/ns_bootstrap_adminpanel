<?php
$title = 'Other Elements';
$active = 1;
include 'inc_head.php';
?>
<div class="breadcrumb-section">
    <div class="pull-left">
        <h3>Other Elements</h3>
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
        <div class="col-lg-8 col-md-6">
            <div class="panel">
                <div class="panel-heading bg-warning">
                    <h3 class="panel-title">List Group</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge">14</span>
                            Cras justo odio
                        </li>
                    </ul>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item">Morbi leo risus</a>
                        <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item">Vestibulum at eros</a>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a>
                        <a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione officiis totam eos optio!</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione officiis totam eos optio!</p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione officiis totam eos optio!</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel">
                <div class="panel-heading bg-success">
                    <h3 class="panel-title">Badges</h3>
                </div>
                <div class="panel-body">                   
                    <hr/>
                    <h4>Example heading <span class="badge badge-primary">New</span></h4>
                    <h4>Example heading <span class="badge badge-secondary">New</span></h4>
                    <h4>Example heading <span class="badge badge-danger">New</span></h4>
                    <h4>Example heading <span class="badge badge-dark">New</span></h4>
                    <h4>Example heading <span class="badge badge-info">New</span></h4>
                    <h4>Example heading <span class="badge badge-warning">New</span></h4>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading bg-danger">
                    <h3 class="panel-title">Carousel</h3>
                </div>
                <div class="panel-body">
                    <div id="carousel-1" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="public/images/image-01.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="" src="public/images/image-01.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img src="public/images/image-01.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
           
            <div class="panel">
                <div class="panel-heading bg-dark">
                    <h3 class="panel-title">Tooltip & Popover</h3>
                </div>
                <div class="panel-body">
                    <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                        Tooltip on top
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                        Tooltip on right
                    </button>
                    <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
                        Tooltip on bottom
                    </button>
                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
                        Tooltip on left
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'inc_footer.php'; ?>

<!-- END OF MAIN PAGE WRAPPER -->




