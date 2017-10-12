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

  <div class="container-fluid">
    <button type="button" href="<?php echo base_url(); ?>index.php/authCont/logout" class="btn btn-default navbar-btn">Back</button>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="berborder" >
                    <form action="" method="POST">
                        <div class="form-group">    
                            <label for="inputcampaign">Input Campaign Title </label>
                            <input type="text" class="form-control" name="campaign-title" id="campaign-title">
                        </div>

                        <div class="form-group">
                            <label for="sequenceqty">Sequence qty </label>
                            <input type="text" class="form-control" name="sequence-qty" id="sequence-qty">
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Choose Category</label>
                                <select class="form-control" id="exampleSelect1">
                                    <option>Premium</option>
                                    <option>Gold</option>
                                    <option>Silver</option>
                                    <option>Ahay</option>
                                    <option>aweu</option>
                                </select>
                        </div>

                        <div class="text-right">
                            <button type="button" class="btn btn-primary" name="login">next</button>
                        </div><hr>             
                    </form>
                </div>
            </div>
        </div>

  </div>


<?php $this->load->view('footer'); ?>