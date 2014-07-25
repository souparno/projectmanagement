<!DOCTYPE html> 
<html lang="en-US">
    <head>
        <title>CodeIgniter Admin Sample Project</title>
        <meta charset="utf-8">
        <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand">Project Management</a>
                    <ul class="nav">
                        <li <?php
                        if ($this->uri->segment(2) == 'roles') {
                            echo 'class="active"';
                        }
                        ?>>
                            <a href="<?php echo base_url(); ?>admin/roles">Roles</a>
                        </li>
                        <li <?php
                        if ($this->uri->segment(2) == 'projects') {
                            echo 'class="active"';
                        }
                        ?>>
                            <a href="<?php echo base_url(); ?>admin/projects">Project</a>
                        </li>
                        <li <?php
                        if ($this->uri->segment(2) == 'users') {
                            echo 'class="active"';
                        }
                        ?>>
                            <a href="<?php echo base_url(); ?>admin/users">Users</a>
                        </li>
                        <li <?php
                        if ($this->uri->segment(2) == 'departments') {
                            echo 'class="active"';
                        }
                        ?>>
                            <a href="<?php echo base_url(); ?>admin/departments">Department</a>
                        </li>
                        <li <?php
                        if ($this->uri->segment(2) == 'contractors') {
                            echo 'class="active"';
                        }
                        ?>>
                            <a href="<?php echo base_url(); ?>admin/contractors">Contractor</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>	
