<?php 
echo $this->form->create(null);
	echo $this->form->field('username');
	echo $this->form->field('password',array('type' => 'password'));
	echo $this->form->submit('Log in');
 echo $this->form->end();
?>