<div class="insidemid">
    <div class="profiletext">Search for people or city<span>people or city</span></div>
    <div class="reginformone">
        <article class="invitetext">Invite your connections through</article>
        <article class="sociallogo">
            <a href="#">
                <i class="fa fa-facebook-official"></i>
            </a>
            <a href="#">
                <i class="fa fa-twitter-square"></i>
            </a>
            <a href="#">
                <i class="fa fa-envelope"></i>
            </a>
            <a href="#">
                <i class="fa fa-yahoo"></i>
            </a>
            <a href="#">
                <i class="fa fa-google"></i>
            </a>
        </article>
        <aside class="backbtn">
            <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/back_btn.jpg') . '"  alt="">', 
                array('#'), array('escape' => FALSE)) ?>
        </aside>
        <aside class="fonishbtn">
            <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/finish&_enjoy_btn.jpg') . '"  alt="">', 
                    array('controller' => 'users', 'action' => 'profile', $this->Session->read('Auth.User.username')), array('escape' => FALSE)) ?>
        </aside>                
        <div class="clr"></div>
    </div>
    <div align="center" class="footerbtmimg">
        <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/insite_btm_img.jpg') . '"  alt="">', 
            array('#'), array('escape' => FALSE)) ?>
    </div>
</div>