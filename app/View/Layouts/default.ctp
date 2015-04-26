<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'konnectcity');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css(array('style', 'custom', 'font-awesome/css/font-awesome.min'));
        echo $this->Html->script(array('jquery', 'jquery-ui.min'));
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
        <script> var SITE_URL = "<?php echo $this->Html->url('/') ?>"</script>
    </head>
    <body class="bginside">
        <section id="maincontainer">
            <?php echo $this->element('login_header'); ?>
            <?php echo $this->fetch('content'); ?>
            <?php echo $this->element('default_footer') ?>
        </section>
        <?php //echo $this->element('sql_dump'); ?>
    </body>
</html>
