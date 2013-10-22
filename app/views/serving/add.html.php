<!-- views/serving/add -->

<?=$this->form->create(); ?>
 	<h6> Wprowadz posiłek </h6>
	<?=$this->form->select('food_id', $meals_array /*array(1 => 'red', 2 => 'green', 3 => 'blue'), array(
    'id' => 'Colors', 'value' => 2) */ ); ?>
 	<?=$this->form->field('weight',array('label'=>false,'placeholder' => 'Waga/ Ilość','class'=>'first-topped-border'));?>
 	<?=$this->form->field('cost',array('label'=>false,'placeholder' => 'Koszt'));?>
 	<?=$this->form->field('datewhen',array('placeholder' => 'Data','label'=>false,'class'=>'date','id'=>'date'));?>
    <?=$this->form->submit('Dodaj'); ?>
<?=$this->form->end(); ?>


<script>
	$("#date").dateinput();
</script>