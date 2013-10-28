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
		<td> <?=$meal->user_id ?> </td> 
		<td> <?=$meal->food_id ?> </td>
		<td> <?=$meal->date_when ?> </td> 
		<td> <?=$meal->cost ?> </td>
		<td> <?=$meal->created ?>  </td>
		<td> <?=$meal->updated ?> </td>  
		
		
	</tr>

<?php endforeach; ?>

</table>

  <?=$this->html->link('Dodaj zjedzony posilek', 'Meal::add')?>
  