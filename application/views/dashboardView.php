<style media="screen">


.email-view
{
    border: 1px solid black;
}

.btn-status
{
    display: inline;
    float: right;
}

.campaign-title
{
    border: 1px solid #666;
}


</style>


<?php $this->load->view('header'); ?>

<div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><button type="button" class="btn btn-status btn-primary">New Email Campaign</button>Email</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h3><button type="button" class="btn btn-status btn-primary">New SMS Campaign</button>SMS</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- bagian email -->
                <div class="col-md-6">
                    <div class="row">
<<<<<<< HEAD
                        
                        <?php
                            foreach ($campaigns as $b){
                             ?>
                        <div class="col-md-6 email-view">
                            <h3><button type="button" class="btn btn-status btn-xs btn-success">on</button><button type="button" class="btn btn-status btn-xs btn-danger">off</button>$b->campaign_name</h3>
                            <p class="campaign-title">Title Campaign</p>
                            <button type="button" class="btn btn-warning">Edit Campaign</button>
                        </div>
                        <?php }
                        ?>
=======

                    <!-- kotak-kotak email -->
                        <?php foreach( $dashboard_content as $e) {?>
                            <div class="col-md-6 email-view">
                                <h3>
                                    <?php echo $e->campaign_name ?>

                                    <?php if($e->status==0){ ?>
                                    <?php anchor (function asd($e->id) , tukangon) ?>
                                        <button type="button" class="btn btn-status btn-xs btn-success" name="tukangon">on</button>
                                        <button type="button" class="btn btn-status btn-xs btn-danger">off</button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-status btn-xs btn-success" disabled>on</button>
                                        <button type="button" class="btn btn-status btn-xs btn-danger"> off</button>
                                    <?php } ?>
                                </h3>
                                <p class="campaign-title"><?php echo $e->label_name ?></p>
                                <button type="button" class="btn btn-warning">Edit Campaign</button>
                            </div>
                        <?php } ?>
>>>>>>> 41368e4bd9d19c09397f1a75b834c0af523ef755

                    </div>
                </div>

                


                <!-- <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 email-view">
                            <h3><button type="button" class="btn btn-status btn-xs btn-success">on</button><button type="button" class="btn btn-status btn-xs btn-danger">off</button>New Kcp</h3>
                            <p class="campaign-title">Title Campaign</p>
                            <button type="button" class="btn btn-warning">Edit Campaign</button>
                        </div>
                        <div class="col-md-6 email-view">
                            <h3><button type="button" class="btn btn-status btn-xs btn-success">on</button><button type="button" class="btn btn-status btn-xs btn-danger">of</button>New Kcp</h3>
                            <p class="campaign-title">Title Campign</p>
                            <button type="button" class="btn btn-warning">Edit Campaign</button>
                        </div>
                    </div>
                </div> -->



            </div>
        </div>

<?php $this->load->view('footer'); ?>