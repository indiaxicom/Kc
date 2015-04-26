<div class="insideheader">
    <div class="headerin">
        <div class="searchbox">
            <input name="" type="text" class="searchinput" placeholder="Explore">
            <input type="image" src="<?php echo $this->Html->url('/images/search_icon.jpg'); ?>">
        </div>
        <div class="logo">
            <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/logo-inline.png') . '"  alt="">', 
                    array('controller' => 'users', 'action' => 'profile', $this->Session->read('Auth.User.username')), 
                    array('escape' => FALSE)) ?>
        </div>
        <div class="userbox">
            <span class="worldicon">
                <a href="#">
                    <span class="review">5</span>
                    <img src="<?php echo $this->Html->url('/images/world_icon.jpg'); ?>"  alt="">
                </a>
            </span>
            <span class="user">
                <a href="#">
                    <img src="<?php echo $this->Html->url('/images/user_icon.jpg'); ?>" alt="">
                </a>
            </span>
            <span class="username">
                <a href="#">
                    <?php echo $this->Session->read('Auth.User.first_name'); ?>
                </a>
            </span>
            <span class="settingicon">
                <?php echo $this->Html->link('<i class="fa fa-cog"></i>', 
                    array('#'), array('escape' => FALSE)) ?>
                
                <?php echo $this->Html->link('<i title="Logout" class="fa fa-sign-out"></i>', 
                    array('controller' => 'users', 'action' => 'logout'), array('escape' => FALSE)) ?>
            </span>
        </div>
        <div class="clr"></div>
    </div>	
</div>