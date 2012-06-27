<?=$this->form->create(); ?>
 	<?=$this->form->field(array('name' => 'Podaj nazwę wesołego meala'));?>
 	<?=$this->form->field(array('kcal' => 'Wartość energetyczna'));?>
 	<?=$this->form->field(array('prot' => 'Białko'));?>
 	<?=$this->form->field(array('carb' => 'Węglowodany'));?>
 	<?=$this->form->field(array('fat' => 'Tłuszcze'));?>   
    <?=$this->form->submit('Dodaj'); ?>
<?=$this->form->end(); ?>