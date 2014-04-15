<h5> <i class='icon-list-alt '> </i> <?php echo $t('User servings list'); ?> <small class='pull-right'> <?php echo $this->html->link('<i class="icon-plus"> </i> Add', 'Serving::add', array('escape' => false)) ?>   </small> </h5> 

<table>
	<thead>
		<tr>
			<th> Food </th> 
			<th> Kcal </th>
			<th> Protein(g)		</th>
			<th> Fats(g)		</th>
			<th> Carbs(g)		</th>		
			<th> Cost(€) </th>			
			<th> Actions </th>
		</tr>
	</thead>
<?php foreach($servings_by_date as $date_when => $servings): ?>	
	
	
	
	<tr class='date-header'> <th colspan=7> <?=$date_when?></th> <tr>	
<?php foreach($servings as $serving): ?>
	<tr>
		<td> <?=$serving->food->name; ?> </td>
		<td> <?=$serving->calculated_kcal;  ?>
		<td> <?=$serving->calculated_protein ?> </td>  
		<td> <?=$serving->calculated_fats ?> </td> 
		<td> <?=$serving->calculated_carbs ?> </td> 	
		<td> <?=$serving->cost ?> </td>
		
		<td title='TO-DO'>  
			<?php echo $this->html->link('<i class="icon-edit"> </i>', $this->url(array('Serving::edit',
        'args' => array($serving->_id))), array('escape'=>false)); ?>
			<?php echo $this->html->link('<i class="icon-remove"> </i>', $this->url(array('Serving::remove',
        'args' => array($serving->_id))), array('escape'=>false)); ?>
        </td> 
	</tr>

<?php endforeach; ?>
	<tr class=''> 
		<th> Total </th>
		<th class='total-kcal' > <?=$totals[$date_when]['kcal']; ?></th>
		<th><?=$totals[$date_when]['protein']; ?></th>
		<th><?=$totals[$date_when]['fats']; ?></th>
		<th><?=$totals[$date_when]['carbs']; ?></th>
		<th><?=$totals[$date_when]['cost']; ?></th>
		<th colspan=4></th> <tr>		
	<tr class='divider'> <th colspan=7> </th> <tr>	
<?php endforeach; ?>

</table>

  <?=$this->html->link('Add serving', 'Serving::add')?>
  