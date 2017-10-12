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

                    <!-- kotak-kotak email -->
                        <?php foreach( $dashboard_content as $e) {?>
                            <?php if($e->type == 0){ ?>
                            <div class="col-md-6 email-view">
                                <h3>
                                    <?php echo $e->campaign_name ?>

                                   
                                    <?php if($e->status==0){ ?>
                                        <a href="<?php echo base_url(); ?>index.php/usercont/toggle/<?php $e->id ?>/<?php $e->status ?>">
                                        <button type="button" class="btn btn-status btn-xs btn-success" name="tukangon">on</button>
                                        </a>
                                        <button type="button" class="btn btn-status btn-xs btn-danger"  disabled>off</button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-status btn-xs btn-success" disabled>on</button>
                                        <button type="button" class="btn btn-status btn-xs btn-danger"> off</button>
                                    <?php } ?>
                                    
                                </h3>
                                <p class="campaign-title"><?php echo $e->label_name ?></p>
                                <button type="button" class="btn btn-warning">Edit Campaign</button>
                            </div>
                            <?php } ?>
                            <!-- akhir if -->
                        <?php } ?>
                    </div>
                </div>

                <!-- bagian SMS -->
                <div class="col-md-6">
                    <div class="row">

                    <!-- kotak-kotak sms -->
                        <?php foreach( $dashboard_content as $e) {?>
                            <?php if($e->type == 1){ ?>
                            <div class="col-md-6 email-view">
                                <h3>
                                    <?php echo $e->campaign_name ?>

                                    <?php if($e->status==0){ ?>
                                        <a href="<?php echo base_url(); ?>index.php/usercont/toggle/<?php $e->id ?>/<?php $e->status ?>">
                                        <button type="button" class="btn btn-status btn-xs btn-success" name="tukangon">on</button>
                                        </a>
                                        <button type="button" class="btn btn-status btn-xs btn-danger"  disabled>off</button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-status btn-xs btn-success" disabled>on</button>
                                        <button type="button" class="btn btn-status btn-xs btn-danger"> off</button>
                                    <?php } ?>
                                    
                                </h3>
                                <p class="campaign-title"><?php echo $e->label_name ?></p>
                                <button type="button" class="btn btn-warning">Edit Campaign</button>
                            </div>
                            <?php } ?>
                            <!-- akhir if -->
                        <?php } ?>                        
                    </div>
                </div>

                





            </div>
        </div>

<?php $this->load->view('footer'); ?>