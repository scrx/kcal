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
		<td> <?php echo $h($meal->name); ?> </td> 
		<td> <?php echo $h($meal->kcal); ?> </td>
		<td> <?php echo $h($meal->prote); ?> </td> 
		<td> <?php echo $h($meal->carbs); ?> </td> 
		<td> <?php echo $h($meal->fat); ?>  </td>
		
		<td> <?php echo $h($meal->fiber); ?> </td> 
		<td> <?php echo $h($meal->magne); ?> </td> 
		<td> <?php echo $h($meal->potas); ?> </td> 
		
		<td> <?php echo $h($meal->iron); ?> </td> 
		<td> <?php echo $h($meal->calci); ?> </td> 
	</tr>
    
  

<?php endforeach; ?>

</table>

<?php echo $this->Paginator->paginate(); ?>