    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">Update</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Updating <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>

 
      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> manufacturer updated with success.';
          echo '</div>';       
        }else{
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

      echo form_open('admin/contractors/update/'.$this->uri->segment(4).'', $attributes);
      ?>
        <fieldset>
        <div class="control-group">
            <label for="inputError" class="control-label">Name</label>
            <div class="controls">
                <input type="text" id="" name="name" value="<?php echo $contractor[0]['name']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Address</label>
            <div class="controls">
                <input type="text" id="" name="address" value="<?php echo $contractor[0]['address']; ?>" >
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Phone Number</label>
            <div class="controls">
                <input type="text" id="" name="phone_number" value="<?php echo $contractor[0]['phone_number']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Email Address</label>
            <div class="controls">
                <input type="text" id="" name="email" value="<?php echo $contractor[0]['email_address']; ?>" >
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Work Experience</label>
            <div class="controls">
                <input type="text" id="" name="work_experience" value="<?php echo $contractor[0]['work_experience']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Staff Strength</label>
            <div class="controls">
                <input type="text" id="" name="staff_strength" value="<?php echo $contractor[0]['staff_strength']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Company Name</label>
            <div class="controls">
                <input type="text" id="" name="comapany_name" value="<?php echo $contractor[0]['company_name']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Billing Name</label>
            <div class="controls">
                <input type="text" id="" name="billing_name" value="<?php echo $contractor[0]['billing_name']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Billing Address</label>
            <div class="controls">
                <input type="text" id="" name="billing_address" value="<?php echo $contractor[0]['billing_address']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Location of Business</label>
            <div class="controls">
                <input type="text" id="" name="location_business" value="<?php echo $contractor[0]['location_of_business']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Pan-Card No.</label>
            <div class="controls">
                <input type="text" id="" name="pan_card_number" value="<?php echo $contractor[0]['pan_card_number']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Bank A/c No.</label>
            <div class="controls">
                <input type="text" id="" name="bank_account_number" value="<?php echo $contractor[0]['bank_account_number']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
        <div class="control-group">
            <label for="inputError" class="control-label">Tan</label>
            <div class="controls">
                <input type="text" id="" name="tan" value="<?php echo $contractor[0]['tan']; ?>" >
                <!--<span class="help-inline">Woohoo!</span>-->
            </div>
        </div>
         <div class="control-group">
            <label for="inputError" class="control-label">Govt.ID Card number</label>
            <div class="controls">
                <input type="text" id="" name="govt_id" value="<?php echo $contractor[0]['govt_id_card_number']; ?>" >
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
     