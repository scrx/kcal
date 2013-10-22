<br>
	<h5> <i class='icon-list '> </i> Food list </h5>
<table>
	<tr><th> Nazwa 			</th> 
		<th> kcal </th> 
		<th> bialka			</th> 
		<th> węglowodany 			</th>
		<th> tluszcze 		</th> 
		
		<th> błonnik			</th> 
		<th> magnez			</th> 
		<th> potas			</th> 
		<th> żelazo			</th> 
		<th> wapń			</th> 
		
	</tr>
	
<?php foreach($meals as $meal): ?>

	<tr>
		<td> <?=$meal->name ?> </td> 
		<td> <?=$meal->kcal ?> </td>
		<td> <?=$meal->prote ?> </td> 
		<td> <?=$meal->carbs ?> </td> 
		<td> <?=$meal->fat ?>  </td>
		
		<td> <?=$meal->fiber ?> </td> 
		<td> <?=$meal->magne ?> </td> 
		<td> <?=$meal->potas ?> </td> 
		
		<td> <?=$meal->iron ?> </td> 
		<td> <?=$meal->calci ?> </td> 
	</tr>
    
  

<?php endforeach; ?>

</table>

<?=$this->Paginator->paginate(); ?>