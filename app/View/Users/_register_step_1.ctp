<?php echo $this->Form->create(); ?>
    <div class="insidemid">
        <div class="profiletext">Complete your profile</div>
        <div class="reginform">
            <div class="uploadimgbox">
                <div class="uploadimg">
                    <a href="#">
                        <img src="<?php echo $this->Html->url('/images/upload_img.jpg'); ?>"  alt="">
                    </a>
                </div>
                <span class="uploadtext">Upload your profile image</span>
            </div>
            <div class="profiletable">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="70%"><?php echo $this->Session->read('Auth.User.first_name'); ?></td>
                        <td width="30%"><?php echo $this->Session->read('Auth.User.last_name'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>Write about yourself....</label>
                            <?php echo $this->Form->textarea('UserDetail.about', array('placehoder' => 'Write about yourself..' , 'class' => 'inputbox')); ?>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <label>Gender</label>
                            <?php echo $this->Form->input('UserDetail.gender', 
                                    array('options' => array('m' => 'Male', 'f' => 'Female'), 'label' => FALSE, 'empty' => 'Select'));?>
                            <?php //echo $this->Form->radio('UserDetail.gender'); ?>
                        </td>
                        <td>Location</td>
                    </tr>
                    <tr>
                        <td>Birth Day</td>
                        <td>Profession</td>
                    </tr>
                    <tr>
                        <td>Interests</td>
                        <td>Bucket List</td>
                    </tr>
                </table>
                <div class="btnbox">
                    <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/skip_btn.jpg') . '"  alt="">', 
                        array('controller' => 'users', 'action' => 'register', '2'), array('escape' => FALSE)) ?>
                    <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/next_btn.jpg') . '"  alt="">', 
                        array('controller' => 'users', 'action' => 'register', '2'), array('escape' => FALSE)) ?>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div align="center" class="footerbtmimg">
            <img src="<?php echo $this->Html->url('/images/insite_btm_img.jpg'); ?>" alt="">
        </div>
    </div>
<?php echo $this->Form->end(); ?>