<div class="row">
    <div class="col-xs-12">
        <?php echo $this->Form->create('User', array('role' => 'form')); ?>
            <div class="form-group">
                <?php echo $this->Form->input('email', array('class' => 'form-control')); ?>
                <p class="help-block">Email used to login</p>
            </div>

            <div class="form-group">
                <label>Password</label>
                <?php echo $this->Form->password('password', array('class' => 'form-control')); ?>
                <p class="help-block">Password</p>
            </div>
            <?php echo $this->Form->button('Login', array('class' => 'btn btn-success')); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>