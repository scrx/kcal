<?php echo $this->form->create($user); ?>
	<?php echo $this->form->field('name', array('label'=>'Name')); ?>
	<?php echo $this->form->field('username', array('label'=>'Username')); ?>
	<?php echo $this->form->field('password', array('type' => 'password', 'label'=>'Password')); ?>
	<?php echo $this->form->field('password2', array('type' => 'password', 'label'=>'Password Verification')); ?>
	<?php echo $this->form->submit('Save'); ?>
<?php echo $this->form->end(); ?>
