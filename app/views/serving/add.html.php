<!-- views/serving/add -->


<?=$this->form->create(); ?>
	<h5> <i class='icon-plus '> </i> <?php echo $t('Add Serving'); ?> <small class='pull-right'> <?php echo $this->html->link('<i class="icon-list"> </i> Back to list', 'Serving::index', array('escape' => false)) ?>   </small> </h5> 

	<?=$this->form->select('food_id', $meals_array, array('class'=>'enable_select')); ?>
 	<?=$this->form->field('weight',array('label'=>false, 'placeholder' => $t('Amount'), 'class'=>'first-topped-border'));?>
 	<?=$this->form->field('cost',array('label'=>false, 'placeholder' => $t('Price') ));?>
 	<?=$this->form->field('date_when',array('placeholder' => $t('Date'), 'label'=>false, 'class'=>'date', 'id'=>'date'));?>
    <?=$this->form->submit('Save'); ?>
<?=$this->form->end(); ?>


<script>
    $(document).ready(function() { 
    	$("#date").dateinput();
    	$(".enable_select").select2({width:'100%', minimumInputLength: 3}); 
    });
</script>