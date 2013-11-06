<?php
/**
 * File containing UserController class
 *
 * @category FileControllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
?>
</br>

<h5> <i class='icon-list '> </i> Food list </h5>

<table>
    <thead>
    <tr><th> Nazwa          </th>
        <th> kcal </th>
        <th> bialka         </th>
        <th> węglowodany            </th>
        <th> tluszcze       </th>

        <th> błonnik            </th>
        <th> magnez         </th>
        <th> potas          </th>
        <th> żelazo         </th>
        <th> wapń           </th>

        <th> Akcje </th>

    </tr>
    </thead>
<?php foreach($meals as $meal): ?>

    <tr>
        <td> <?php echo $h($meal->name); ?> </td>
        <td> <?php echo $h($meal->kcal); ?> </td>
        <td> <?php echo $h($meal->prot); ?> </td>
        <td> <?php echo $h($meal->carb); ?> </td>
        <td> <?php echo $h($meal->fat); ?>  </td>
        <td> <?php echo $h($meal->fibe); ?> </td>
        <td> <?php echo $h($meal->magn); ?> </td>
        <td> <?php echo $h($meal->pota); ?> </td>
        <td> <?php echo $h($meal->iron); ?> </td>
        <td> <?php echo $h($meal->calc); ?> </td>

        <td> <?php echo $this->html->link('<i class="icon-edit icon-red"></i>', 'edit/'.$meal->_id, array('escape'=>false)); ?>
            <?php echo $this->html->link('<i class="icon-remove"></i>', 'remove/'.$meal->_id, array('escape'=>false)); ?>  </td>
    </tr>

<?php endforeach; ?>

</table>

<?=$this->Paginator->paginate();
