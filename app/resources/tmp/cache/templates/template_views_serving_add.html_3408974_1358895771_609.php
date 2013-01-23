<!-- views/serving/add -->
<?php
//print_r($meals_array);
?>

<?php echo $this->form->create(); ?>
 	<?php echo $this->form->label('Wybierz meal'); ?>
	<?php echo $this->form->select('food_id', $meals_array /*array(1 => 'red', 2 => 'green', 3 => 'blue'), array(
    'id' => 'Colors', 'value' => 2) */ ); ?>
 	<?php echo $this->form->field(array('weight' => 'Waga/ Ilość')); ?>
 	<?php echo $this->form->field(array('cost' => 'Koszt')); ?>
 	<?php echo $this->form->field(array('date_when' => 'Kiedy'),array('class'=>'date','id'=>'date')); ?>
 
 
 
    <?php echo $this->form->submit('Dodaj'); ?>
<?php echo $this->form->end(); ?>


<script>
	$("#date").dateinput();
</script>