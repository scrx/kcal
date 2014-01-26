<?php
/**
 * User profile view
 *
 * @category ViewFiles
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
?>

<h4> User Profile 
    <small> 
        <?php echo $session_data['default']['name'] ?> <?php echo $session_data['default']['surname'] ?> 
    </small>
</h4>
<table>
    <thead>
        <tr>
            <th> Weight </th>
            <td> <?php echo isset($user_data->weight) ? $user_data->weight : 'Missing user weight data' ?>  </td>
        </tr>
        <tr>
            <th> Height	</th>
            <td> <?php echo isset($user_data->height) ? $user_data->height : 'Missing user height data' ?> </td>
        </tr>
        <tr>
            <th> Waist </th>
            <td> <?php echo isset($user_data->waist) ? $user_data->waist : 'Missing user waist data' ?> </td>
        </tr>
        <tr> 
            <th> Hips </th>
            <td><?php echo isset($user_data->hips) ? $user_data->hips : 'Missing user hips data' ?> </td>
        </tr>
    </thead>
    <tbody>
    <!-- empty --> 
    </tbody>

</table>
<?php echo $this->html->link($t('Add user body measurements'), 'UserHistoryData::add');