userhistorydata -> index.html.php


<table>
	<tr> <th> Data </th>  <th> Waga </th> <th> Wzrost </th> <th> Szyja  </th> <th> Klatka </th> <th> Biceps  </th>  <th> Pas  </th>  <th> Biodra  </th>    </tr>
	
<?php foreach($userhistorydatas as $user_data): ?>

	<tr>
		<td><?=$user_data->date_when ?> </td> 
		<td><?=$user_data->weight ?> </td> 
		<td><?=$user_data->height ?></td>
		<td><?=$user_data->neck ?> </td> 
		<td><?=$user_data->chest ?></td>
		<td><?=$user_data->biceps ?> </td> 
		<td><?=$user_data->hips ?> </td> 
		<td><?=$user_data->waist ?> </td> 
	
	</tr>
    
  

<?php endforeach; ?>

</table>