<?php
$title = 'Home';
$active = 1;
include 'inc_head.php';
?>
<div class="content-section">
    <div class="row">
        <div class="col-md-6">
            <div class="chart-wrapper">
                <h3>Pie chart</h3>
                <canvas id="pieChart"  height="200"></canvas>
            </div>
        </div>
        <div class="col-md-6">
            <div class="chart-wrapper">
                <h3>Line chart</h3>
                <canvas id="lineChart"  height="220"></canvas>
            </div>
        </div>
    </div>
</div>
<div class="content-section">
    <div class="row">
        <div class="col-md-12">
            <div class="card table-card card-default">
                <div class="card-header">
                    <h5>New Products</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li class="first-opt"><i class="fa fa-angle-left"></i></li>
                            <li class="fullscreen-btn"><i class="fa fa-expand"></i></li>
                            <li><i class="fa minimize-btn fa-minus"></i></li>
                            <li><i class="fa fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block p-b-0">
                    <div class="table-responsive">
                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Product Code</th>
                                    <th>Customer</th>
                                    <th>Status</th>
                                    <th>Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sofa</td>
                                    <td>#PHD001</td>
                                    <td>abc@gmail.com</td>
                                    <td><label class="label bg-danger">Out Stock</label></td>
                                    <td class="rating-status">
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Computer</td>
                                    <td>#PHD002</td>
                                    <td>cdc@gmail.com</td>
                                    <td><label class="label bg-success">In Stock</label></td>
                                    <td class="rating-status">
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td>#PHD003</td>
                                    <td>pqr@gmail.com</td>
                                    <td><label class="label bg-danger">Out Stock</label></td>
                                    <td class="rating-status">
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Coat</td>
                                    <td>#PHD004</td>
                                    <td>bcs@gmail.com</td>
                                    <td><label class="label bg-success">In Stock</label></td>
                                    <td class="rating-status">
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Watch</td>
                                    <td>#PHD005</td>
                                    <td>cdc@gmail.com</td>
                                    <td><label class="label bg-success">In Stock</label></td>
                                    <td class="rating-status">
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shoes</td>
                                    <td>#PHD006</td>
                                    <td>pqr@gmail.com</td>
                                    <td><label class="label bg-danger">Out Stock</label></td>
                                    <td class="rating-status">
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                        <a href="javascript:;" class="gray-color"><i class="fa fa-star"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-section">
    <div class="row">
        <div class="col-md-4">
            <div class="panel striped-bg">
                <div class="row">
                    <div class="col-md-4 col-lg-3 bg-info icon-col striped-bg">
                        <i class="fa fa-eye fa-4x"></i>
                    </div>
                    <div class="col-md-8 col-lg-9 text-col">
                        <i class="fa fa-eye fa-5x"></i>
                        <h2>71,842</h2>
                        <p>Profile Views</p>
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-md-4">
            <div class="panel striped-bg">
                <div class="row">
                    <div class="col-md-4 col-lg-3 bg-warning icon-col striped-bg">
                        <i class="fa fa-bar-chart fa-4x"></i>
                    </div>
                    <div class="col-md-8 col-lg-9 text-col">
                        <i class="fa fa-bar-chart fa-5x"></i>
                        <h2>6,123</h2>
                        <p>Total Sales this week</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel striped-bg">
                <div class="row">
                    <div class="col-md-4 col-lg-3 bg-danger icon-col striped-bg">
                        <i class="fa fa-calculator fa-4x"></i>
                    </div>
                    <div class="col-md-8 col-lg-9 text-col">
                        <i class="fa fa-calculator fa-5x"></i>
                        <h2>$12,34.00</h2>
                        <p>Net Revenue</p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="content-section latest-updated-section">
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card latest-update-card card-default">
                <div class="card-header">
                    <h5>What’s New</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li class="first-opt"><i class="fa fa-angle-left"></i></li>
                            <li class="fullscreen-btn"><i class="fa fa-expand"></i></li>
                            <li><i class="fa minimize-btn fa-minus"></i></li>
                            <li><i class="fa fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="update-container has-custom-scrollbar">
                        <div class="latest-update-box">
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <img src="public/images/profile.jpg" alt="user1 image" class="update-icon">
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Your Manager Posted.</h6></a>
                                    <p class="text-muted">Jonny michel</p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-suitcase update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>You have 3 pending Task.</h6></a>
                                    <p class="text-muted">Hemilton</p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-check update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>New Order Received.</h6></a>
                                    <p class="text-muted">Hemilton</p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <img src="public/images/profile.jpg" alt="user image" class="update-icon">
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Your Manager Posted.</h6></a>
                                    <p class="text-muted">Jonny michel</p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-suitcase update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>You have 3 pending Task.</h6></a>
                                    <p class="text-muted">Hemilton</p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-check update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>New Order Received.</h6></a>
                                    <p class="text-muted">Hemilton</p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card latest-update-card card-default">
                <div class="card-header">
                    <h5>Latest Activity</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li class="first-opt"><i class="fa fa-angle-left"></i></li>
                            <li class="fullscreen-btn"><i class="fa fa-expand"></i></li>
                            <li><i class="fa minimize-btn fa-minus"></i></li>
                            <li><i class="fa fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="update-container has-custom-scrollbar">
                        <div class="latest-update-box">
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-circle update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Devlopment &amp; Update</h6></a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, <a href="javascript:;" class="text-c-blue">More</a></p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-circle update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Miscellaneous</h6></a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, <a href="javascript:;" class="text-c-blue">More</a></p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-circle update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Miscellaneous</h6></a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, <a href="javascript:;" class="text-c-blue">More</a></p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-circle update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Devlopment &amp; Update</h6></a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, <a href="javascript:;" class="text-c-blue">More</a></p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-circle update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Miscellaneous</h6></a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, <a href="javascript:;" class="text-c-blue">More</a></p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-circle update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Miscellaneous</h6></a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, <a href="javascript:;" class="text-c-blue">More</a></p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-circle update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Miscellaneous</h6></a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, <a href="javascript:;" class="text-c-blue">More</a></p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-circle update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Devlopment &amp; Update</h6></a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, <a href="javascript:;" class="text-c-blue">More</a></p>
                                </div>
                            </div>
                            <div class="latest-update-row">
                                <div class="update-meta">
                                    <i class="fa fa-circle update-icon"></i>
                                </div>
                                <div class="update-detail">
                                    <a href="javascript:;"><h6>Miscellaneous</h6></a>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, <a href="javascript:;" class="text-c-blue">More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card card-default">
                <div class="card-header">
                    <h5>Latest Project Update</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li class="first-opt"><i class="fa fa-angle-left"></i></li>
                            <li class="fullscreen-btn"><i class="fa fa-expand"></i></li>
                            <li><i class="fa minimize-btn fa-minus"></i></li>
                            <li><i class="fa fa-trash"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="progress-container has-custom-scrollbar">
                    <div class="card-block ">                    
                        <h6>Published Project</h6>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="card-block ">
                        <h6>Completed Project</h6>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width:60%"></div>
                        </div>
                    </div>
                    <div class="card-block ">
                        <h6>Successfull Project</h6>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="card-block ">
                        <h6>Ongoing Project</h6>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"></div>
                        </div>
                    </div>
                    <div class="card-block ">
                        <h6>Incomming Project</h6>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="card-block ">
                        <h6>Typo3 Project</h6>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert bg-white alert-default">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <strong>Attention: </strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur varius lacus vitae purus tincidunt blandit. Phasellus malesuada accumsan felis venenatis mollis. Suspendisse at pharetra enim, in congue mauris. Nam sodales turpis lorem, ac semper augue congue sed. Nam id ullamcorper elit, at sodales justo. Aliquam suscipit mi nec ex tempus laoreet. Donec tincidunt risus eu rutrum sagittis. <a href="http://dashy.strapui.com/laravel/chart/c3charts"></a>
    </div>
</div>


<?php include 'inc_footer.php'; ?>

<!-- END OF MAIN PAGE WRAPPER -->

