


<?php echo $this->form->create(); ?>
 	<?php echo $this->form->field(array('weight' => 'Waga')); ?>
 	<?php echo $this->form->field(array('height' => 'Wzrost')); ?>
 	<?php echo $this->form->field(array('waist' => 'Pas')); ?>
 	<?php echo $this->form->field(array('chest' => 'Klatka')); ?>
 	<?php echo $this->form->field(array('neck' => 'Szyja')); ?>   
 	<?php echo $this->form->field(array('hips' => 'Biodra')); ?>   
 	<?php echo $this->form->field(array('biceps' => 'Biceps')); ?>   
 	<?php echo $this->form->field(array('date_when' => 'Data')); ?>   
    <?php echo $this->form->submit('Dodaj'); ?>
<?php echo $this->form->end(); ?>
<?php
/*
 * Waist: 47"
Chest: 46"
Neck: 18"
Hips: 49"
Biceps: 17"
Weight: 255.6 lbs
Height: 6'2"
 * 
 */

 ?>
