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

    echo form_open('admin/departments/add', $attributes);
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
            <label for="inputError" class="control-label">Location</label>
            <div class="controls">
                <input type="text" id="" name="location" value="<?php echo set_value('location'); ?>" >
                  <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Head of department</label>
            <div class="controls">
                <input type="text" id="" name="head_department" value="<?php echo set_value('head_department'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Contact Number</label>
            <div class="controls">
                <input type="text" id="" name="contact_number" value="<?php echo set_value('contact_number'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
<!--<span class="help-inline">Woohoo!</span>-->
        <div class="control-group">
            <label for="inputError" class="control-label">Office Number</label>
            <div class="controls">
                <input type="text" id="" name="office_number" value="<?php echo set_value('office_number'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
<!--<span class="help-inline">Woohoo!</span>-->
        <div class="control-group">
            <label for="inputError" class="control-label">Email Address</label>
            <div class="controls">
                <input type="text" id="" name="email" value="<?php echo set_value('email'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
<!--<span class="help-inline">Woohoo!</span>-->
        <div class="control-group">
            <label for="inputError" class="control-label">Number of staff</label>
            <div class="controls">
                <input type="text" id="" name="number_of_staff" value="<?php echo set_value('number_of_staff'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
<!--<span class="help-inline">Woohoo!</span>-->
        <div class="control-group">
            <label for="inputError" class="control-label">Role</label>
            <div class="controls">
<!--                            <select id="" name="role" value="<?php echo set_value('role'); ?>">
                    <option value="1">Author</option>
                    <option value="2">Editor</option>
                    <option value="3">Publisher</option>
                    <option value="4">Admin</option>
                </select>-->
              <!--<span class="help-inline">Woohoo!</span>-->
                <input type="text" id="" name="role" value="<?php echo set_value('role'); ?>" >
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Description</label>
            <div class="controls">
                <textarea id="" name="description" value="" rows="4" >
                    <?php echo set_value('description'); ?>
                </textarea>    
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Remarks</label>
            <div class="controls">
                <input type="text" id="" name="remarks" value="<?php echo set_value('remarks'); ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>

        <div class="form-actions">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <button class="btn" type="reset">Cancel</button>
        </div>
    </fieldset>

    <?php echo form_close(); ?>

</div>
