<?php echo $this->Html->script(array('jquery.validate.min', 'custom/users'), array('inline' => FALSE)) ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> <?php echo $page_title; ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php echo $this->Form->create('User', array('role' => 'form')); ?>
            <div class="form-group">
                <label>First Name</label>
                <?php
                echo $this->Form->input('first_name', 
                    array(
                        'placeholder' => 'First Name', 
                        'class' => 'form-control', 
                        'label' => FALSE, 
                        'div' => FALSE,
                        'required' => TRUE
                    )
                ); 
                ?>
                <p class="help-block">First Name of the user.</p>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <?php
                echo $this->Form->input('last_name', 
                    array(
                        'placeholder' => 'Last Name', 
                        'class' => 'form-control', 
                        'label' => FALSE,
                        'div' => FALSE,
                        'required' => TRUE
                    )
                ); 
                ?>
                <p class="help-block">Last Name of the user.</p>
            </div>

            <div class="form-group">
                <label>Email</label>
                <?php
                echo $this->Form->input('email', 
                    array(
                        'placeholder' => 'Email', 
                        'class' => 'form-control', 
                        'label' => FALSE,
                        'div' => FALSE,
                        'required' => TRUE,
                        'disabled' => !empty($this->data['User']['email']) ? TRUE : FALSE
                    )
                ); 
                ?>
                <p class="form-control-static">email@example.com</p>
            </div>

            <div class="form-group">
                <label>Password</label>
                <?php
                echo $this->Form->password('password', 
                    array('placeholder' => 'Password', 'class' => 'form-control', 
                        'label' => FALSE, 'div' => FALSE, 'minlength' => 8, 'required' => FALSE)
                ); 
                ?>
                <p class="form-control-static">Should be minimum 8 characters</p>
            </div>
        
            <div class="form-group">
                <label>User Type</label>
                <?php
                echo $this->Form->select('type', array(USER_SITE => 'Site User', USER_ADMIN => 'Admin'),
                    array('class' => 'form-control', 
                        'label' => FALSE, 'div' => FALSE, 'empty' => 'Select', 'required' => TRUE)
                ); 
                ?>
            </div>

            <div class="form-group">
                <label>Status</label>
                <?php
                echo $this->Form->select('status', array(ACTIVE => 'Active', IN_ACTIVE => 'In Active'),
                    array('placeholder' => 'Status', 'class' => 'form-control', 
                        'label' => FALSE, 'empty' => 'Select', 'required' => TRUE)
                ); 
                ?>
            </div>
            
            <button type="submit" class="btn btn-success">Save User</button>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
