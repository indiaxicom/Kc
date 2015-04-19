<?php echo $this->Html->script(array('jquery.validate.min', 'custom/users'), array('inline' => FALSE)) ?>
<?php echo $this->Form->create('User', array('url' => array('action' => 'register'))); ?>
    <div>
        <div class="homemidfl">Connecting Cities<br>With People</div> 
        <div class="homemid">
            <div class="homemidin">
                <div class="loginbox">
                    <div class="lablefield">
                        <?php
                        echo $this->Form->input('first_name', 
                            array(
                                'placeholder' => 'First Name', 
                                'class' => 'inputbox', 
                                'label' => FALSE, 
                                'div' => FALSE,
                                'required' => TRUE
                            )
                        ); 
                        ?>
                    </div>
                    <div class="lablefield">
                        <?php
                        echo $this->Form->input('last_name', 
                            array('placeholder' => 'Last Name', 'class' => 'inputbox', 'label' => FALSE, 'div' => FALSE, 'required' => TRUE)
                        ); 
                        ?>
                    </div>
                    <div class="lablefield">
                        <?php
                        echo $this->Form->email('email', 
                            array('placeholder' => 'Email', 'class' => 'inputbox', 
                                'label' => FALSE, 'div' => FALSE, 'required' => TRUE,
                                //'remote' => $this->Html->url(array('controller' => 'users', 'action' => 'check_existing_email'))
                            )
                        ); 
                        ?>
                    </div>
                    <div class="lablefield">
                        <?php
                        echo $this->Form->input('phone', 
                            array('placeholder' => 'Phone', 'class' => 'inputbox', 'label' => FALSE, 'div' => FALSE, 'required' => TRUE, 'digits' => TRUE)
                        ); 
                        ?>
                    </div>                       
                    <div class="lablefield" style="border-bottom:none;">
                        <?php
                        echo $this->Form->password('password', 
                            array('placeholder' => 'Password', 'class' => 'inputbox', 'label' => FALSE, 'div' => FALSE, 'required' => TRUE, 'minlength' => 8)
                        ); 
                        ?>
                    </div>
                    <div class="iagree">
                        <div>
                            <?php
                            echo $this->Form->checkbox('agree', 
                                array('placeholder' => 'Phone', 'class' => 'checkbox', 'label' => FALSE, 'div' => FALSE, 'required' => TRUE)
                            ); 
                            ?>
                            Agree to 
                            <a href="#">Terms</a> &amp; 
                            <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                    <div align="center">
                        <?php
                        echo $this->Form->button('Sign Up', 
                            array('class' => 'inputbtntwo', 'label' => FALSE, 'div' => FALSE)
                        ); 
                        ?>
                    </div>
                </div>
            </div>
            <div><img src="images/box_shadow.png" width="402" height="44" alt=""></div>
        </div>            
        <div class="homemidfr">
            <?php echo $this->Html->link('<button class="inputbtnone">Login</button>', 
                array('controller' => 'users', 'action' => 'login'), array('escape' => FALSE)) ?>
        </div>
        <div class="clr"></div>
    </div>
<?php echo $this->Form->end(); ?>