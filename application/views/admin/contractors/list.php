    <div class="container top">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <?php echo ucfirst($this->uri->segment(2));?>
        </li>
      </ul>

      <div class="page-header users-header">
        <h2>
          <?php echo ucfirst($this->uri->segment(2));?> 
          <a  href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>/add" class="btn btn-success">Add a new</a>
        </h2>
      </div>
      
      <div class="row">
        <div class="span12 columns">
          <div class="well">
           
            <?php
           
            $attributes = array('class' => 'form-inline reset-margin', 'id' => 'myform');
           
            //save the columns names in a array that we will use as filter         
            $options_contractors = array();    
            foreach ($contractors as $array) {
              foreach ($array as $key => $value) {
                $options_contractors[$key] = $key;
              }
              break;
            }

            echo form_open('admin/contractors', $attributes);
     
              echo form_label('Search:', 'search_string');
             # echo form_input('search_string', $search_string_selected);

              echo form_label('Order by:', 'order');
             # echo form_dropdown('order', $options_contractors, $order, 'class="span2"');

              $data_submit = array('name' => 'mysubmit', 'class' => 'btn btn-primary', 'value' => 'Go');

              $options_order_type = array('Asc' => 'Asc', 'Desc' => 'Desc');
             # echo form_dropdown('order_type', $options_order_type, $order_type_selected, 'class="span1"');

              echo form_submit($data_submit);

            echo form_close();
            ?>

          </div>

          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th class="header">#</th>
                <th class="yellow header headerSortDown">Name</th>
                <th class="yellow header headerSortDown">Address</th>
                <th class="yellow header headerSortDown">Phone-Number</th>
                <th class="yellow header headerSortDown">E-mail</th>
                <th class="yellow header headerSortDown">Work Experience</th>
                <th class="yellow header headerSortDown">Staff strength</th>
                <th class="yellow header headerSortDown">Company Name</th>
                <th class="yellow header headerSortDown">Billing name</th>
                <th class="yellow header headerSortDown">Billing address</th>
                <th class="yellow header headerSortDown">location of business</th>
                <th class="yellow header headerSortDown">Pan card Number</th>
                <th class="yellow header headerSortDown">Bank Account number</th>
                <th class="yellow header headerSortDown">TAN</th>
                <th class="yellow header headerSortDown">Govt.ID Number</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($contractors as $row)
              {
                echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['name'].'</td>';
                echo '<td>'.$row['address'].'</td>';
                echo '<td>'.$row['phone_number'].'</td>';
                echo '<td>'.$row['email_address'].'</td>';
                echo '<td>'.$row['work_experience'].'</td>';
                echo '<td>'.$row['staff_strength'].'</td>';
                echo '<td>'.$row['company_name'].'</td>';
                echo '<td>'.$row['billing_name'].'</td>';
                echo '<td>'.$row['billing_address'].'</td>';
                echo '<td>'.$row['location_of_business'].'</td>';
                echo '<td>'.$row['pan_card_number'].'</td>';
                echo '<td>'.$row['bank_account_number'].'</td>';
                echo '<td>'.$row['tan'].'</td>';
                echo '<td>'.$row['govt_id_card_number'].'</td>';
                echo '<td class="crud-actions">
                  <a href="'.site_url("admin").'/contractors/update/'.$row['id'].'" class="btn btn-info">view & edit</a>  
                  <a href="'.site_url("admin").'/contractors/delete/'.$row['id'].'" class="btn btn-danger">delete</a>
                </td>';
                echo '</tr>';
              }
              ?>      
            </tbody>
          </table>

          <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

      </div>
    </div>