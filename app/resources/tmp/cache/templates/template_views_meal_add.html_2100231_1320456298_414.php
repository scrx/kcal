<?php echo $this->form->create(); ?>
 	<?php echo $this->form->field(array('name' => 'Podaj nazwę wesołego meala')); ?>
 	<?php echo $this->form->field(array('kcal' => 'Wartość energetyczna')); ?>
 	<?php echo $this->form->field(array('prot' => 'Białko')); ?>
 	<?php echo $this->form->field(array('carb' => 'Węglowodany')); ?>
 	<?php echo $this->form->field(array('fat' => 'Tłuszcze')); ?>   
    <?php echo $this->form->submit('Dodaj'); ?>
<?php echo $this->form->end(); ?>