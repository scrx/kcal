<!-- Adding food user data history view -->


<h5> <i class='icon-plus '> </i> <?php echo $t('User body measurements'); ?> <small class='pull-right'> <?php echo $this->html->link('<i class="icon-list"> </i> Back to list', 'UserHistoryData::index', array('escape' => false)) ?>   </small> </h5> 


<?php echo $this->form->create(); ?>
	<h6> <?php echo $t('Enter your data'); ?> </h6>
 	<?php echo $this->form->field('weight',array('label'=>false,'div' => false,'placeholder'=>$t('Weight'),'class'=>'first-topped-border')); ?>
 	<?php echo $this->form->field('height',array('label'=>false,'div' => false,'placeholder'=>$t('Height'))); ?>
 	<?php echo $this->form->field('waist',array('label'=>false,'div' => false,'placeholder'=>$t('Waist'))); ?>
 	<?php echo $this->form->field('chest',array('label'=>false,'div' => false,'placeholder'=>$t('Chest'))); ?>
 	<?php echo $this->form->field('neck',array('label'=>false,'div' => false,'placeholder'=>$t('Neck'))); ?>  
 	<?php echo $this->form->field('hips',array('label'=>false,'div' => false,'placeholder'=>$t('Hips'))); ?>   
 	<?php echo $this->form->field('biceps',array('label'=>false,'div' => false,'placeholder'=>$t('Biceps'))); ?>   
 	<?php echo $this->form->field('date_when',array('label'=>false,'div' => false,'placeholder'=>$t('Date'),'class'=>'date_input')); ?>   
    <?php echo $this->form->submit($t('Save')); ?>
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
<script>
	$(".date_input").dateinput();
</script>