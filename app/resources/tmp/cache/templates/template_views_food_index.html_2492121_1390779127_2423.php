<?php
/**
 * File containing UserController class
 *
 * @category FileControllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
?>
</br>

<h5> <i class='icon-list '> </i> Food list <small class='pull-right'> <?php echo $this->html->link('<i class="icon-plus"> </i> Add food', 'Food::add', array('escape' => false)) ?>   </small> </h5> 

<table>
    <thead>
        <tr><th> <?php echo $t('Name'); ?> </th>
            <th> <?php echo $t('kcal'); ?> </th>
            <th> <?php echo $t('Proteins'); ?> (g) </th>
            <th> <?php echo $t('Carbs'); ?> (g) </th>
            <th> <?php echo $t('Lipids'); ?> (g) </th>

            <th> <?php echo $t('Fiber'); ?> (mg) </th>
            <th> <?php echo $t('Magnesium'); ?> (mg)</th>
            <th> <?php echo $t('Pottasium'); ?> (mg)</th>
            <th> <?php echo $t('Iron'); ?> (mg)</th>
            <th> <?php echo $t('Calcium'); ?> (mg) </th>
            <th> <?php echo $t('Phosphorus'); ?> (mg) </th>

            <th> <?php echo $t('Action'); ?> </th>
        </tr>
    </thead>

    <?php foreach($meals as $meal): ?>

    <tr><!--<a href="<?php echo $this->url(array('Employees::view',
        'args' => array($employee->id))); ?>">
            <?php echo $h($employee->name); ?>
        </a> -->
        <td> <?php 
        echo $this->html->link($meal->name, $this->url(array('Food::view',
        'args' => array($meal->_id))), array('escape'=>false)); 
        //echo $meal->name ?> </td>
        <td> <?php echo $meal->kcal ?>  </td>
        <td> <?php echo $meal->protein ?> </td>
        <td> <?php echo $meal->carbs ?> </td>
        <td> <?php echo $meal->lipid_total  ?>  </td>
        <td> <?php echo $meal->fiber ?> </td>
        <td> <?php echo $meal->magnesium ?> </td>
        <td> <?php echo $meal->potassium ?> </td>
        <td> <?php echo $meal->iron ?> </td>
        <td> <?php echo $meal->calcium ?> </td>
        <td> <?php echo $meal->phosphorus ?> </td>
        <td> 
            <?php echo $this->html->link('<i class="icon-edit icon-red"></i>', 'edit/'.$meal->_id, array('escape'=>false)); ?>
            <?php echo $this->html->link('<i class="icon-remove"></i>', 'remove/'.$meal->_id, array('escape'=>false)); ?>
        </td>
    </tr>

    <?php endforeach; ?>

</table>

<?php echo $this->Paginator->paginate();
