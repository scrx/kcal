<!-- Adding food user data history view -->

<h5> Wprowadzanie danych użytkownika </h5>
<?=$this->form->create(); ?>
	<h6> Wprowadź swoje dane </h6>
 	<?=$this->form->field('weight',array('label'=>false,'div' => false,'placeholder'=>'Waga','class'=>'first-topped-border'));?>
 	<?=$this->form->field('height',array('label'=>false,'div' => false,'placeholder'=>'Wzrost'));?>
 	<?=$this->form->field('waist',array('label'=>false,'div' => false,'placeholder'=>'Pas'));?>
 	<?=$this->form->field('chest',array('label'=>false,'div' => false,'placeholder'=>'Klatka'));?>
 	<?=$this->form->field('neck',array('label'=>false,'div' => false,'placeholder'=>'Szyja'));?>  
 	<?=$this->form->field('hips',array('label'=>false,'div' => false,'placeholder'=>'Biodra'));?>   
 	<?=$this->form->field('biceps',array('label'=>false,'div' => false,'placeholder'=>'Biceps'));?>   
 	<?=$this->form->field('date_when',array('label'=>false,'div' => false,'placeholder'=>'Data','class'=>'date_input'));?>   
    <?=$this->form->submit('Zapisz'); ?>
<?=$this->form->end(); ?>
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
<script>
	$(".date_input").dateinput();
</script>