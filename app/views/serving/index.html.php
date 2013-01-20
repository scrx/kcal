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
		<td> <?=$serving->user_id ?> </td> 
		<td> <?=$serving->food_id ?> </td>
		<td> <?=$serving->date_when ?> </td> 
		<td> <?=$serving->cost ?> </td>
		<td> <?=$serving->created ?>  </td>
		<td> <?=$serving->updated ?> </td>  
		
		
	</tr>
  

<?php endforeach; ?>

</table>

  <?=$this->html->link('Dodaj zjedzony posilek', 'Serving::add')?>
  