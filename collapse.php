<?php
$title = 'Collapse';
$active = 1;
include 'inc_head.php';
?>
<div class="breadcrumb-section">
    <div class="pull-left">
        <h3>Collapse</h3>
        <small class="subtitle">Bootstrap UI Components
        </small>
    </div>
    <ol class="breadcrumb pull-right">     
        <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-tachometer"></i></a></li>
        <li class="breadcrumb-item active">Collapse</li>
    </ol>
</div>
<div class="content-section">
    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading bg-info">
                    <h3 class="panel-title">Collapse Variation 1</h3>
                </div>
                <div class="panel-body accordion-wrap">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h4>
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </button>
                                </h4>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h4>
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </button>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h4>
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </button>
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading bg-success">
                    <h3 class="panel-title">Collapse Variation 2</h3>
                </div>
                <div class="panel-body  accordion-wrap">
                    <div class="panel-group" id="accordion">
                        <div class="panel">
                            <div class="panel-heading bg-success">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" class="">
                                        Click here for Collapse
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse in" style="" aria-expanded="true">
                                <div class="panel-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                </div>
                            </div>
                        </div> <div class="panel">
                            <div class="panel-heading bg-success">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true">
                                        Click here for Collapse
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse in" style="" aria-expanded="true">
                                <div class="panel-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                </div>
                            </div>
                        </div> <div class="panel">
                            <div class="panel-heading bg-success">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true">
                                        Click here for Collapse
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse in" style="" aria-expanded="true">
                                <div class="panel-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                </div>
                            </div>
                        </div> </div>
                </div>
            </div>
        </div>
         <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading bg-primary">
                    <h3 class="panel-title">Tabs</h3>
                </div>
                <div class="panel-body tabs-container">
                    <div role="tabpanel" class="tabs-wrap">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a  class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-home"></i>Home</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-user"></i>Profile</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-envelope"></i>Messages</a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog"></i>Settings</a></li>
                        </ul>
                        <div class="tab-content panel-body">
                            <div role="tabpanel" class="tab-pane active" id="home">loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis laborum commodi, placeat voluptates quisquam accusantium corporis ipsa, distinctio, consequuntur explicabo aliquid illo doloremque. Ut, nam, cum saepe repellat cumque eaque... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda dolore unde, eos. Fugit aut officiis, et modi debitis, eum, qui praesentium ducimus dolores perferendis aliquam temporibus! Velit, tenetur, corporis?
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa et, suscipit non nihil voluptates, maxime ad dignissimos vitae. Quaerat nulla dolore, explicabo vero veritatis possimus deserunt ipsum rerum ad? Cumque!...
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure dignissimos earum aut consectetur amet consequuntur libero sint consequatur tempora perferendis hic, error quibusdam odit nulla officiis sit perspiciatis fuga excepturi!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis rerum veniam adipisci consectetur, perferendis quibusdam, nisi voluptate quod ipsa aliquid, nihil assumenda tenetur voluptates soluta ipsum dicta voluptatem corporis cum....
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">Random settings</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
   
</div>


<?php include 'inc_footer.php'; ?>

<!-- END OF MAIN PAGE WRAPPER -->

