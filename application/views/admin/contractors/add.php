<div class="container top">

    <ul class="breadcrumb">
        <li>
            <a href="<?php echo site_url("admin"); ?>">
                <?php echo ucfirst($this->uri->segment(1)); ?>
            </a> 
            <span class="divider">/</span>
        </li>
        <li>
            <a href="<?php echo site_url("admin") . '/' . $this->uri->segment(2); ?>">
                <?php echo ucfirst($this->uri->segment(2)); ?>
            </a> 
            <span class="divider">/</span>
        </li>
        <li class="active">
            <a href="#">New</a>
        </li>
    </ul>

    <div class="page-header">
        <h2>
            Adding <?php echo ucfirst($this->uri->segment(2)); ?>
        </h2>
    </div>

    <?php
    //flash messages
    if (isset($flash_message)) {
        if ($flash_message == TRUE) {
            echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> new project created with success.';
            echo '</div>';
        } else {
            echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
            echo '</div>';
        }
    }
    ?>

    <?php
    //form data
    $attributes = array('class' => 'form-horizontal', 'id' => '');

    //form validation
    echo validation_errors();

    echo form_open('admin/contractors/add', $attributes);
    ?>
    <fieldset>
        <div class="control-group">
            <label for="inputError" class="control-label">Name</label>
            <div class="controls">
                <input type="text" id="" name="name" value="<?php echo set_value('name'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Address</label>
            <div class="controls">
                <input type="text" id="" name="address" value="<?php echo set_value('address'); ?>" >
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Phone Number</label>
            <div class="controls">
                <input type="text" id="" name="phone_number" value="<?php echo set_value('phone_number'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Email Address</label>
            <div class="controls">
                <input type="text" id="" name="email" value="<?php echo set_value('email'); ?>" >
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Work Experience</label>
            <div class="controls">
                <input type="text" id="" name="work_experience" value="<?php echo set_value('work_experience'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Staff Strength</label>
            <div class="controls">
                <input type="text" id="" name="staff_strength" value="<?php echo set_value('staff_strength'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Company Name</label>
            <div class="controls">
                <input type="text" id="" name="comapany_name" value="<?php echo set_value('comapany_name'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Billing Name</label>
            <div class="controls">
                <input type="text" id="" name="billing_name" value="<?php echo set_value('billing_name'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Billing Address</label>
            <div class="controls">
                <input type="text" id="" name="billing_address" value="<?php echo set_value('billing_address'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Location of Business</label>
            <div class="controls">
                <input type="text" id="" name="location_business" value="<?php echo set_value('location_business'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Pan-Card No.</label>
            <div class="controls">
                <input type="text" id="" name="pan_card_number" value="<?php echo set_value('pan_card_number'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Bank A/c No.</label>
            <div class="controls">
                <input type="text" id="" name="bank_account_number" value="<?php echo set_value('bank_account_number'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Tan</label>
            <div class="controls">
                <input type="text" id="" name="tan" value="<?php echo set_value('tan'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Govt.ID Card number</label>
            <div class="controls">
                <input type="text" id="" name="govt_id" value="<?php echo set_value('govt_id'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
<!--<span class="help-inline">Woohoo!</span>-->
        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <button class="btn" type="reset">Cancel</button>
        </div>
    </fieldset>

    <?php echo form_close(); ?>

</div>
