<h5> <i class='icon-list-alt '> </i> <?php echo $t('User servings list'); ?> <small class='pull-right'> <?php echo $this->html->link('<i class="icon-plus"> </i> Add', 'Serving::add', array('escape' => false)) ?>   </small> </h5> 

<table>
	<thead>
		<tr>
			<th> Food </th> 
			<th> kcal / 100(g) </th>
			<th> Amount	</th>
			<th> Total Cost </th>
			<th> Date_when		</th>
			<th> Actions </th>
		</tr>
	</thead>
<?php foreach($servings as $serving): ?>
	<tr>
		<td> <?php echo $foods[$serving->food_id->{'$id'}]; ?> </td>
		<td> <?php echo $foods[$serving->food_id->{'$id'}]->{'kcal'};
		// (($foods[$serving->food_id->{'$id'}]->{'kcal'})*$serving->weight / 100); ?>
		<td> <?php echo $h($serving->weight); ?> </td>
		<td> <?php echo $h($serving->cost); ?> </td>
		<td> <?php echo $h($serving->date_when); ?> </td> 

		<td title='TO-DO'>  
			<?php echo $this->html->link('<i class="icon-edit"> </i>', $this->url(array('Serving::edit',
        'args' => array($serving->_id))), array('escape'=>false)); ?>
			<?php echo $this->html->link('<i class="icon-remove"> </i>', $this->url(array('Serving::remove',
        'args' => array($serving->_id))), array('escape'=>false)); ?>
        </td> 
	</tr>

<?php endforeach; ?>

</table>

  <?php echo $this->html->link('Add serving', 'Serving::add'); ?>
  