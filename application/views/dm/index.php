<div class="col-md-12" id="main">
    <div class="row">

        <div class="col-md-8 col-md-offset-2" id="confirm-box">
            <div class="row" id="content-box">
                <div class="col-md-10 col-md-offset-1" >
                    <p>Digital Signature of agreement of your acceptance of our End User License Agreement and our Terms and Conditions.</p>
                    <?php echo $this->session->flashdata('errors'); ?>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <?php echo form_open(current_url(),array("role" => "form" ,"id" => "form"),array("contactsID" => $contactsID)) ?>
                    <form role="form" id="form">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $this->session->flashdata('fname') ?>">
                            <div class="center-block text-danger small"><?php echo $this->session->flashdata('fname_error') ?></div>
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $this->session->flashdata('lname') ?>" >
                            <div class="center-block text-danger small"><?php echo $this->session->flashdata('lname_error') ?></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $this->session->flashdata('email') ?>" >
                            <div class="center-block text-danger small"><?php echo $this->session->flashdata('email_error') ?></div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="eula" >
                                I agree to the <a href="#" data-toggle="modal" data-target="#end-user">End User License Agreement</a>
                                <div class="center-block text-danger small"><?php echo $this->session->flashdata('eula_error') ?></div>
                            </label>

                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="terms" >
                                I agree to the <a href="#" data-toggle="modal" data-target="#terms">Terms and Conditions</a>
                                <div class="center-block text-danger small"><?php echo $this->session->flashdata('terms_error') ?></div>
                            </label>

                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block" id="continue">Continue</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="end-user" tabindex="-1" role="dialog" aria-labelledby="end-user" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <?php echo $this->load->view("dm/eula",NULL,TRUE); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="terms" tabindex="-1" role="dialog" aria-labelledby="terms" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <?php echo $this->load->view("dm/terms",NULL,TRUE); ?>
            </div>
        </div>
    </div>
</div>



