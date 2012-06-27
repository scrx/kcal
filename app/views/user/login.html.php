<?=$this->form->create(null); ?>
	<?=$this->form->field('username', array('label'=>'Username')); ?>
	<?=$this->form->field('password', array('type' => 'password', 'label'=>'Password')); ?>
	<?=$this->form->submit('Login'); ?>
<?=$this->form->end(); ?>