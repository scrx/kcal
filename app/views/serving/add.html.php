<!-- views/serving/add -->
<?php
//print_r($meals_array);
?>

<?=$this->form->create(); ?>
 	<?=$this->form->label('Wybierz meal');?>
	<?=$this->form->select('food_id', $meals_array /*array(1 => 'red', 2 => 'green', 3 => 'blue'), array(
    'id' => 'Colors', 'value' => 2) */ ); ?>
 	<?=$this->form->field(array('weight' => 'Waga/ Ilość'));?>
 	<?=$this->form->field(array('cost' => 'Koszt'));?>
 	<?=$this->form->field(array('date_when' => 'Kiedy'),array('class'=>'date','id'=>'date'));?>
 
 
 
    <?=$this->form->submit('Dodaj'); ?>
<?=$this->form->end(); ?>


<script>
	$("#date").dateinput();
</script>