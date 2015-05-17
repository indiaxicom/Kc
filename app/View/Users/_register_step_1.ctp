<?php echo $this->Html->script(array('jquery.validate.min', 'custom/users'), array('inline' => FALSE)) ?>
<?php echo $this->Form->create(); ?>
    <div class="insidemid registration-section">
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
                        </td>
                        <td>
                            <label>Interests</label>
                            <?php echo $this->Form->text('UserDetail.interests', 
                                array('label' => FALSE, 'placeholder' => 'Type your hobbies'));?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Country</label>
                            <?php echo $this->Form->input('UserDetail.country_code', 
                                    array('options' => $countries, 'label' => FALSE, 'empty' => FALSE, 'value' => 'IN'));?>
                        </td>
                        <td>
                            <label>City</label>
                            <?php echo $this->Form->text('city_name', 
                                    array('label' => FALSE, 'placeholder' => 'Type your city name', 'id' => 'city_name', 'name' => 'city_name'));?>
                            <?php echo $this->Form->hidden('UserDetail.city_id');?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Birth Day</label>
                            <?php echo $this->Form->text('UserDetail.birth_date', 
                                array('label' => FALSE, 'placeholder' => 'dd/mm/yyyy', 'class' => "datepicker"));?>
                        </td>
                        <td>
                            <label>Profession</label>
                            <?php echo $this->Form->text('UserDetail.profession', 
                                array('label' => FALSE));?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label>Bucket List</label>
                            <?php echo $this->Form->textarea('UserDetail.bucket', 
                                array('label' => FALSE));?>
                        </td>
                    </tr>
                </table>
                <div class="btnbox">
                    <?php echo $this->Html->link('<img src="' . $this->Html->url('/images/skip_btn.jpg') . '"  alt="">', 
                        array('controller' => 'users', 'action' => 'register', '2'), array('escape' => FALSE)) ?>

                    <img class="next-register cursor-pointer" src="<?php echo $this->Html->url('/images/next_btn.jpg'); ?>">
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div align="center" class="footerbtmimg">
            <img src="<?php echo $this->Html->url('/images/insite_btm_img.jpg'); ?>" alt="">
        </div>
    </div>
<?php echo $this->Form->end(); ?>
<style>
    .registration-section textarea {width: 100%; padding: 10px}
    .registration-section select {padding: 5px; width: 50%}
    .registration-section input {padding: 5px; width: 100%}
    .cursor-pointer {cursor: pointer}
</style>