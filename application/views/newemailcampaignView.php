<style>
    .berborder{
      border: 2px solid grey;
      padding: 20px;
      /* max-width: 60%; */
    }
    .mailborder{
      border: 2px solid grey;
      padding: 20px;
      /* max-width: 30%; */
    }
    #bodym{
      height:130px;
    }
</style>

<!-- this is for load header template -->
<?php $this->load->view('header'); ?>

<?php echo form_open('userCont/campaignregist'); ?>


  <div class="container-fluid">
    <a href="<?php echo base_url(); ?>index.php/userCont/dashboardview"><button type="button" class="btn btn-default navbar-btn">Back</button></a>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="berborder" >

                    <form action="" method="POST">
                        <div class="form-group">    
                            <label for="campaign_name">Input Campaign Title </label>
                            <input type="text" class="form-control" name="campaign_name" >
                        </div>

                        <div class="form-group">
                            <label for="sequence_qty">Sequence qty </label>
                            <input type="text" class="form-control" name="sequence_qty" >
                        </div>

                        <div class="form-group">
                            <label for="label_id">Choose Category</label>
                                <select class="form-control"  name="label_id">
                                    <option value="4">Kcp Baru</option>
                                    <option value="3">Belum Top Up</option>
                                    <option value="5">Kcp Belum Belanja</option>
                                </select>
                        </div>

                        <div class="text-right"><a href="<?php echo base_url(); ?>index.php/userCont/campaignregist">
                            <button type="button" class="btn btn-primary" name="campaignregist"><?php form_submit ('SUBMIT', '')?>next</button></a>
<<<<<<< HEAD
=======
=======
                        <div class="text-right"><a href="<?php echo base_url(); ?>index.php/userCont/emailform">
<<<<<<< HEAD
                            <button type="button" class="btn btn-primary" name="">next</button></a>
=======
                            <button type="button" class="btn btn-primary" name="login">next</button></a>
>>>>>>> 42544a80162d8a6f9a24cf750acfb5848603802d
>>>>>>> 8fd0877898ec4b1719d0e59b479e93497a8621a0
>>>>>>> 9e1f34cef1881928ff2785f5ac3e2b331e5dcdfc
                        </div><hr>             
                    </form>
                </div>
            </div>
        </div>

  </div>

  <?php echo 

form_close();
(''); ?>
<?php $this->load->view('footer'); ?>