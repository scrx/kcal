<br>
	Lista wprowadzonych posilkow
<table>
	<tr><th> user_id			</th> 
		<th> food_id </th> 
		<th> date_when		</th>
		<th> cost </th>
		<th> created		</th> 
		<th> updated			</th> 
	</tr>
	
<?php foreach($meals as $meal): ?>

	<tr>
		<td> <?php echo $h($meal->user_id); ?> </td> 
		<td> <?php echo $h($meal->food_id); ?> </td>
		<td> <?php echo $h($meal->date_when); ?> </td> 
		<td> <?php echo $h($meal->cost); ?> </td>
		<td> <?php echo $h($meal->created); ?>  </td>
		<td> <?php echo $h($meal->updated); ?> </td>  
		
		
	</tr>

<?php endforeach; ?>

</table>

  <?php echo $this->html->link('Dodaj zjedzony posilek', 'Meal::add'); ?>
  