<br>
	Lista wprowadzonych posilkow
<table>
	<tr><th> user_id			</th> 
		<th> meal_id </th> 
		<th> date_when		</th>
		<th> cost </th>
		<th> created		</th> 
		<th> updated			</th> 
	</tr>
	
<?php foreach($servings as $serving): ?>

	<tr>
		<td> <?php echo $h($serving->user_id); ?> </td> 
		<td> <?php echo $h($serving->food_id); ?> </td>
		<td> <?php echo $h($serving->date_when); ?> </td> 
		<td> <?php echo $h($serving->cost); ?> </td>
		<td> <?php echo $h($serving->created); ?>  </td>
		<td> <?php echo $h($serving->updated); ?> </td>  
		
		
	</tr>
  

<?php endforeach; ?>

</table>

  <?php echo $this->html->link('Dodaj zjedzony posilek', 'Serving::add'); ?>
  