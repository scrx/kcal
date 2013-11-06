<?php
/**
 * File containing user profile view
 *
 * @category ViewFiles
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
?>

<h4> User Profile <small> <?php echo $session_data['default']['name'] ?> <?php echo $session_data['default']['surname'] ?> </small></h4>

<table>

<thead>
    <tr>
        <th>
        Waga
    </th>
        <td>
        <?php echo $user_data->weight ?>
    </td>

    </tr>
    <tr>
        <th> Wzrost	</th>
        <td> <?php echo $user_data->height ?> </td>
    </tr>
    <tr>
            <th>
        Pas
    </th>
        <td>
        <?php echo $user_data->waist ?>
    </td>
    </tr>
    <tr>
            <th>
        Biodra
    </th>
            <td>
        <?php echo $user_data->hips ?>
    </td>
    </tr>
</thead>
<tbody>

</tbody>

</table>
