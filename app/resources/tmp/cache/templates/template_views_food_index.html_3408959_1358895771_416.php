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
		<td> <?php echo $h($meal->name); ?> </td> 
		<td> <?php echo $h($meal->kcal); ?> </td>
		<td> <?php echo $h($meal->carb); ?> </td> 
		<td> <?php echo $h($meal->fat); ?>  </td>
		<td> <?php echo $h($meal->prot); ?> </td> 
		
	</tr>
    
  

<?php endforeach; ?>

</table>