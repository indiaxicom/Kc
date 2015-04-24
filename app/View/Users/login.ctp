<?php echo $this->Html->script('custom/users') ?>
<?php echo $this->Form->create('User', array('url' => array('action' => 'login'))); ?>
    <div>
        <div class="homemidfl">Connecting Cities<br>With People</div> 
        <div class="homemid">
            <div class="homemidin">
                <div class="loginbox">
                    <div class="lablefield">
                        <?php
                        echo $this->Form->input('email', 
                            array('placeholder' => 'User Name or Email', 'class' => 'inputbox', 'label' => FALSE, 'div' => FALSE)
                        ); 
                        ?>
                    </div>
                    <div class="lablefield">
                        <?php
                        echo $this->Form->input('password', 
                            array('placeholder' => 'Password', 'class' => 'inputbox', 'label' => FALSE, 'div' => FALSE)
                        ); 
                        ?>
                    </div>
                    <div class="remberbox">
                        <div class="fl">
                            <?php
                            echo $this->Form->checkbox('remember', 
                                array('class' => 'checkbox', 'label' => FALSE, 'div' => FALSE)
                            ); 
                            ?>
                            Remember
                        </div>
                        <div class="forgetpass"><a href="#">Forgot Password</a></div>
                        <div class="clr"></div>
                    </div>
                </div>
            </div>
            <div>
                <img src="<?php echo $this->Html->url('/images/box_shadow.png'); ?>" width="402" height="44" alt="">
            </div>
        </div>

        <div class="homemidfr">
            <?php
            echo $this->Form->button('Login', 
                array('class' => 'inputbtnone', 'label' => FALSE, 'div' => FALSE, 'value' => 'Login')
            ); 
            ?>
            <?php echo $this->Html->link('<button type="button" class="inputbtntwo">Sign Up</button>', 
                array('controller' => 'users', 'action' => 'register'), array('escape' => FALSE)) ?>
        </div>
        <div class="clr"></div>
    </div>
<?php echo $this->Form->end(); ?>
