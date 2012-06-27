<?=$this->form->create($user); ?>
	<?=$this->form->field('name', array('label'=>'Name')); ?>
	<?=$this->form->field('username', array('label'=>'Username')); ?>
	<?=$this->form->field('password', array('type' => 'password', 'label'=>'Password')); ?>
	<?=$this->form->field('password2', array('type' => 'password', 'label'=>'Password Verification')); ?>
	<?=$this->form->submit('Save'); ?>
<?=$this->form->end(); ?>
