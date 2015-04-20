<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> <?php echo $page_title; ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <?php echo $this->Form->create('User', array('role' => 'form')); ?>
            <div class="form-group">
                <label>Full Name</label>
                <?php echo $this->Form->input ?>
                <input class="form-control">
                <p class="help-block">Full Name of the user.</p>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input class="form-control" placeholder="Enter text">
                <p class="form-control-static">email@example.com</p>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Enter text">
                <p class="form-control-static">Should be minimum 8 characters</p>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input class="form-control" placeholder="Enter text">
            </div>

            <div class="form-group">
                <label>Selects</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Save User</button>
        <?php echo $this->Form->end(); ?>
    </div>
</div>
