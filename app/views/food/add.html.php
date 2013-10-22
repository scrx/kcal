

<?=$this->form->create(); ?>
	<?=$this->form->field('name',array('label'=>false,'placeholder'=>'Nazwa','class'=>'first-topped-border'));?>
	<?=$this->form->field('kcal',array('label'=>false,'placeholder'=>'Wartość energetyczna'));?>
	<?=$this->form->field('prote',array('label'=>false,'placeholder'=>'Białko'));?>
	<?=$this->form->field('carbs',array('label'=>false,'placeholder'=>'Węglowodany'));?>
	<?=$this->form->field('fat',array('label'=>false,'placeholder'=>'Tłuszcze'));?>
	<?=$this->form->field('fiber',array('label'=>false,'placeholder'=>'Błonnik'));?>
	<?=$this->form->field('magne',array('label'=>false,'placeholder'=>'Magnez'));?>		
	<?=$this->form->field('potas',array('label'=>false,'placeholder'=>'Potas'));?>
	<?=$this->form->field('iron',array('label'=>false,'placeholder'=>'Żelazo'));?>
	<?=$this->form->field('calci',array('label'=>false,'placeholder'=>'Wapń'));?>
	<?=$this->form->submit('Dodaj'); ?>
<?=$this->form->end(); ?>