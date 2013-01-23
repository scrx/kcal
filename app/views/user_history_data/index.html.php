
<span class="label label-info"> Piękna tabela histori użytkownika </span>
<table>
	<tr> <th> Data </th>  
		<th> Waga </th> 
		<th> Poziom tłuszczu </th> 
		<th> Wzrost </th> 
		<th> Szyja  </th> 
		<th> Klatka </th> 
		<th> Biceps  </th>  
		<th> Pas  </th>  
		<th> Biodra  </th>    
	</tr>
	
<?php foreach($userhistorydatas as $user_data): ?>

	<tr>
		<td><?=$user_data->date_when ?> </td> 
		<td><?=$user_data->weight ?> </td> 
		<td><?=$user_data->body_fat ?></td>
		<td><?=$user_data->height ?></td>
		<td><?=$user_data->neck ?> </td> 
		<td><?=$user_data->chest ?></td>
		<td><?=$user_data->biceps ?> </td> 
		<td><?=$user_data->hips ?> </td> 
		<td><?=$user_data->waist ?> </td> 
	
	</tr>
    
  

<?php endforeach; ?>

</table>

<?=$this->html->link('Dodaj dane użytkowika', 'UserHistoryData::add') ?>