<!-- views/serving/add -->

<?php echo $this->form->create(); ?>
 	<h6> Wprowadz posiłek </h6>
	<?php echo $this->form->select('food_id', $meals_array /*array(1 => 'red', 2 => 'green', 3 => 'blue'), array(
    'id' => 'Colors', 'value' => 2) */ ); ?>
 	<?php echo $this->form->field('weight',array('label'=>false,'placeholder' => 'Waga/ Ilość','class'=>'first-topped-border')); ?>
 	<?php echo $this->form->field('cost',array('label'=>false,'placeholder' => 'Koszt')); ?>
 	<?php echo $this->form->field('datewhen',array('placeholder' => 'Data','label'=>false,'class'=>'date','id'=>'date')); ?>
    <?php echo $this->form->submit('Dodaj'); ?>
<?php echo $this->form->end(); ?>


<script>
	$("#date").dateinput();
</script>