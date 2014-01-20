<?php
/**
 * Register new user view.
 *
 * @category Views
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
?>

<h5> <i class='icon-check'> </i> Register New Account</h5>
<?php echo $this->form->create($user); ?>
    <?php echo $this->form->field('username'); ?>
    <?php echo $this->form->field('name', array('type'=>'string')); ?>
    <?php echo $this->form->field('surname', array('type'=>'string')); ?>
    <?php echo $this->form->field('dateofbirth', array('type'=>'date')); ?>
    <?php echo $this->form->field('password', array('type' => 'password')); ?>
    <?php echo $this->form->submit('Create Account'); ?>
<?php echo $this->form->end();
