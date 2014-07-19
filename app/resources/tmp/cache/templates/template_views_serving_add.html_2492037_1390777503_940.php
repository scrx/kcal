<!-- views/serving/add -->


<?php echo $this->form->create(); ?>
	<h5> <i class='icon-plus '> </i> <?php echo $t('Add Serving'); ?> <small class='pull-right'> <?php echo $this->html->link('<i class="icon-list"> </i> Back to list', 'Serving::index', array('escape' => false)) ?>   </small> </h5> 

	<?php echo $this->form->select('food_id', $meals_array, array('class'=>'enable_select')); ?>
 	<?php echo $this->form->field('weight',array('label'=>false, 'placeholder' => $t('Amount'), 'class'=>'first-topped-border')); ?>
 	<?php echo $this->form->field('cost',array('label'=>false, 'placeholder' => $t('Price') )); ?>
 	<?php echo $this->form->field('date_when',array('placeholder' => $t('Date'), 'label'=>false, 'class'=>'date', 'id'=>'date')); ?>
    <?php echo $this->form->submit('Save'); ?>
<?php echo $this->form->end(); ?>


<script>
    $(document).ready(function() { 
    	$("#date").dateinput();
    	$(".enable_select").select2({width:'100%', minimumInputLength: 3}); 
    });
</script>