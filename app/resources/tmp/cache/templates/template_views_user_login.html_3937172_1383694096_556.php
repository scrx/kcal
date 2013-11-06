<?php
/**
 * User login view.
 *
 * @category View
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
?>
<h5> <i class='icon-key '> </i> Zaloguj się... </h5>
<?php echo $this->form->create(null); ?>
    <?php echo $this->form->field('username', array('label'=>'Username')); ?>
    <?php echo $this->form->field('password', array('type' => 'password', 'label'=>'Password')); ?>
    <?php echo $this->form->submit('Login'); ?>
<?php echo $this->form->end();
