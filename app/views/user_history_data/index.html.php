<?php
/**
 * Adding User body measurements  view 
 *
 * @category Views
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
?>

<span class="label label-info"><?php echo $t('User body measurements.'); ?> </span>
<table>
	<tr><th><?php echo $t('Date'); ?> </th>  
		<th><?php echo $t('Weight'); ?> </th> 
		<th><?php echo $t('BF%'); ?> <i class='icon-info-sign tip-top' title='Body Fat %'> </i> </th> 
		<th><?php echo $t('Height'); ?> </th> 
		<th><?php echo $t('Neck'); ?>  </th> 
		<th><?php echo $t('Chest'); ?> </th> 
		<th><?php echo $t('Biceps'); ?>  </th>  
		<th><?php echo $t('Hips'); ?> </th>  
		<th><?php echo $t('Waist'); ?> </th>    
	</tr>
	
<?php foreach($userhistorydatas as $user_data): ?>
	
	<tr>
		<td><?= date('d/m/Y h:m', $user_data->date_when->sec);  ?> </td> 
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

<?=$this->html->link($t('Add user body measurements'), 'UserHistoryData::add') ?>