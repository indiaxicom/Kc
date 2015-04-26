<div class="profilebanner">
    <div class="profilebannerin">
        <div class="profilepic">
            <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/profile_pic.jpg') . '" alt="">', 
                    '#', array('escape' => FALSE)) ?>
        </div>
        <div class="profiletextone">
            <?php echo $this->Session->read('Auth.User.full_name'); ?>
            <span>
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/address_icon.png') . '" alt="">', 
                    '#', array('escape' => FALSE)) ?>
                Sanjose, CA
            </span>
        </div>
    </div>
</div>

<nav class="tab">
    <article class="tabinside">
        <ul>
            <li><a href="#">18 Following</a></li>
            <li><a href="#">8 Followers</a></li>
            <li><a href="#">15 Cities</a></li>
            <li><a href="#">80 post</a></li>
        </ul>
        <div class="clr"></div>
    </article>
</nav>