<div class="insidemid">
    <div class="profiletext">Follow Popular Konnectors in your City</div>
    <div class="reginformone">
        <article class="listbox">
            <aside class="imgfl">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/follow_img1.jpg') . '"  alt="">', 
                    array('#'), array('escape' => FALSE)) ?>
            </aside>
            <aside class="imgfr">
                <article class="followerN">
                    <a href="#">Jessica alba</a>
                </article>
                <article class="followbtn"><a href="#">Follow</a></article>
            </aside>
            <div class="clr"></div>
        </article>
        <article class="listbox">
            <aside class="imgfl">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/follow_img2.jpg') . '"  alt="">', 
                    array('#'), array('escape' => FALSE)) ?>
            </aside>
            <aside class="imgfr">
                <article class="followerN"><a href="#">Jessica alba</a></article>
                <article class="followbtn"><a href="#">Follow</a></article>
            </aside>
            <div class="clr"></div>
        </article>
        <article class="listbox">
            <aside class="imgfl">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/follow_img3.jpg') . '"  alt="">', 
                    array('#'), array('escape' => FALSE)) ?>
            </aside>
            <aside class="imgfr">
                <article class="followerN"><a href="#">Jessica alba</a></article>
                <article class="followbtn"><a href="#">Follow</a></article>
            </aside>
            <div class="clr"></div>
        </article>
        <article>
            <div class="backbtn">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/back_btn.jpg') . '"  alt="">', 
                    array('controller' => 'users', 'action' => 'register', '1'), array('escape' => FALSE)) ?>
            </div>
            <div class="btnbox">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/skip_btn.jpg') . '"  alt="">', 
                    array('controller' => 'users', 'action' => 'register', '3'), array('escape' => FALSE)) ?>
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/next_btn.jpg') . '"  alt="">', 
                    array('controller' => 'users', 'action' => 'register', '3'), array('escape' => FALSE)) ?>
            </div>
            <div class="clr"></div>
        </article>
    </div>
    <div align="center" class="footerbtmimg">
        <img src="<?php echo $this->Html->url('/images/insite_btm_img.jpg') ?>" alt="">
    </div>
</div>