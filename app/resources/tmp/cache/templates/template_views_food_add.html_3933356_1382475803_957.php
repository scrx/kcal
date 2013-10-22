

<?php echo $this->form->create(); ?>
	<?php echo $this->form->field('name',array('label'=>false,'placeholder'=>'Nazwa','class'=>'first-topped-border')); ?>
	<?php echo $this->form->field('kcal',array('label'=>false,'placeholder'=>'Wartość energetyczna')); ?>
	<?php echo $this->form->field('prote',array('label'=>false,'placeholder'=>'Białko')); ?>
	<?php echo $this->form->field('carbs',array('label'=>false,'placeholder'=>'Węglowodany')); ?>
	<?php echo $this->form->field('fat',array('label'=>false,'placeholder'=>'Tłuszcze')); ?>
	<?php echo $this->form->field('fiber',array('label'=>false,'placeholder'=>'Błonnik')); ?>
	<?php echo $this->form->field('magne',array('label'=>false,'placeholder'=>'Magnez')); ?>		
	<?php echo $this->form->field('potas',array('label'=>false,'placeholder'=>'Potas')); ?>
	<?php echo $this->form->field('iron',array('label'=>false,'placeholder'=>'Żelazo')); ?>
	<?php echo $this->form->field('calci',array('label'=>false,'placeholder'=>'Wapń')); ?>
	<?php echo $this->form->submit('Dodaj'); ?>
<?php echo $this->form->end(); ?>