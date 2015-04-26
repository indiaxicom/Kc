<?php echo $this->element('Users/profile_banner') ?>

<div class="profilemidin">
    <?php echo $this->element('Users/profile_left_navigation'); ?>

    <aside class="profilemid">
        <input name="" value="Whatsup City..." type="text" class="searchbox" onfocus="clearText(this)" onblur="replaceText(this)">
        <div class="promidbox">
            <div class="leftproimg">
                <a href="#"><img src="<?php echo $this->Html->url('/images/profile_big1.jpg'); ?>"  alt=""></a>
            </div>
            <div class="rightpostimg">
                <div class="boxbtmtranse">	
                    <div class="likebox">
                        <a href="#"><img src="<?php echo $this->Html->url('/images/like_icon.png'); ?>"  alt="">2k</a>
                        <a href="#"><img src="<?php echo $this->Html->url('/images/comment_icon.png'); ?>" width= alt="">60</a>
                    </div>
                    <div class="hourtext"><a href="#">35 Mins</a></div>
                </div>
                <a href="#"><img src="<?php echo $this->Html->url('/images/image1.jpg'); ?>"  alt=""></a>
                <div class="text">What Life Is Like in Ukraine's Rebel-Held City of Donetsk</div>
            </div>
            <div class="clr"></div>
        </div>
        <div class="promidbox">
            <div class="leftproimg">
                <a href="#"><img src="<?php echo $this->Html->url('/images/profile_big1.jpg'); ?>"  alt=""></a>
            </div>
            <div class="rightpostimg">
                <div class="boxbtmtranse">	
                    <div class="likebox">
                        <a href="#"><img src="<?php echo $this->Html->url('/images/like_icon.png'); ?>"  alt="">2k</a>
                        <a href="#"><img src="<?php echo $this->Html->url('/images/comment_icon.png'); ?>" width= alt="">60</a>
                    </div>
                    <div class="hourtext"><a href="#">35 Mins</a></div>
                </div>
                <a href="#"><img src="<?php echo $this->Html->url('/images/image1.jpg'); ?>"  alt=""></a>
                <div class="text">What Life Is Like in Ukraine's Rebel-Held City of Donetsk</div>
            </div>
            <div class="clr"></div>
        </div>
    </aside>
    
    <aside class="profilefr">
        <h1><span>Trending</span> in City</h1>
        <div>
            <table  border="0" cellspacing="0" cellpadding="0" class="tableone">
                <tr>
                    <td>#Rio</td>
                    <td>#Degenrio</td>
                </tr>
                <tr>
                    <td>#BrazilRio</td>
                    <td>#Greate Food</td>
                </tr>
                <tr>
                    <td>#Rio</td>
                    <td>#Greate Food</td>
                </tr>
                <tr>
                    <td>#BrazilRio</td>
                    <td>#Greate Food</td>
                </tr>                 
            </table>
        </div>
        <h1><span>City</span> Alerts</h1>
        <div>
            <table  border="0" cellspacing="0" cellpadding="0" class="tabletwo">
                <tr>
                    <td>#Flood </td>
                    <td>#Volcanic </td>
                </tr>
                <tr>
                    <td>#Tornado</td>
                    <td>Eruption</td>
                </tr>
                <tr>
                    <td>#Hurricane</td>
                    <td>#Earth Quake</td>
                </tr>
                <tr>
                    <td>#Tsunami</td>
                    <td>#Terrorist Activiy</td>
                </tr>
                <tr>
                    <td>#Epidemics</td>
                    <td>#Nuclear Spill</td>
                </tr>                   
            </table>
        </div>
        <h1><span>City</span> Konnectors</h1>
        <div>
            
            <div class="connectionpeople">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/connecting_people_pic.jpg') . '" alt="" />', 
                        '#', array('escape' => FALSE)); ?>
            </div>
            <div class="connectionpeople">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/connecting_people_pic.jpg') . '" alt="" />', 
                        '#', array('escape' => FALSE)); ?>
            </div>
            <div class="connectionpeople">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/connecting_people_pic.jpg') . '" alt="" />', 
                        '#', array('escape' => FALSE)); ?>
            </div>
            <div class="connectionpeople">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/connecting_people_pic.jpg') . '" alt="" />', 
                        '#', array('escape' => FALSE)); ?>
            </div>
            <div class="connectionpeople">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/connecting_people_pic.jpg') . '" alt="" />', 
                        '#', array('escape' => FALSE)); ?>
            </div>
            <div class="connectionpeople">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/connecting_people_pic.jpg') . '" alt="" />', 
                        '#', array('escape' => FALSE)); ?>
            </div>
            <div class="connectionpeople">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/connecting_people_pic.jpg') . '" alt="" />', 
                        '#', array('escape' => FALSE)); ?>
            </div>
            <div class="connectionpeople">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/connecting_people_pic.jpg') . '" alt="" />', 
                        '#', array('escape' => FALSE)); ?>
            </div>
            <div class="connectionpeople">
                <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/connecting_people_pic.jpg') . '" alt="" />', 
                        '#', array('escape' => FALSE)); ?>
            </div>
            <div class="clr"></div>
            <div class="viewall"><a href="#">View All</a></div>
        </div>
    </aside>
    <aside class="clr"></aside>
</div>