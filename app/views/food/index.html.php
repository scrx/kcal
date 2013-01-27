<br>
	Lista zarcia 12345
<table>
	<tr><th> nazwa 			</th> 
		<th> wartosc energ. </th> 
		<th> cukry 			</th>
		<th> tluszcze 		</th> 
		<th> bialka			</th> 
	</tr>
	
<?php foreach($meals as $meal): ?>

	<tr>
		<td> <?=$meal->name ?> </td> 
		<td> <?=$meal->kcal ?> </td>
		<td> <?=$meal->carb ?> </td> 
		<td> <?=$meal->fat ?>  </td>
		<td> <?=$meal->prot ?> </td> 
		
	</tr>
    
  

<?php endforeach; ?>

</table>

<?=$this->Paginator->paginate(); ?>