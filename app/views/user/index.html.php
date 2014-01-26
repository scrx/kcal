<?php
/**
 * Users index  view.
 *
 * @category Views
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
?>

<h5> <i class='icon-user '> </i> Users list </h5>
<?php if ($users->count()) { ?>

    <table>
        <thead>
            <tr>
                <th> Login </th>
                <th> Imię </th>
                <th> Nazwisko </th>
                <th> Data urodzenia</th>
                <th> Akcje </th>
            </tr>
        </thead>
        <?php
        foreach ($users as $user) {
            if(!is_object($user->dateofbirth))
                $user->dateofbirth= 0;
            ?>
        <tr>
            <td><?php echo $user->username?></td>
            <td><?php echo $user->name?></td>
            <td><?php echo $user->surname?></td>
            <td><?php echo date('d/m/Y', $user->dateofbirth->sec);  ?> </td>
            <td> <?php echo $this->html->link('<i class="icon-edit icon-red"></i>', 'edit/'.$user->_id, array('escape'=>false)); ?>
                 <?php echo $this->html->link('<i class="icon-remove"></i>', 'remove/'.$user->_id, array('escape'=>false)); ?>  </td>
                </tr>
        <?php }
        ?>
    </table>
<?=$this->Paginator->paginate(); ?>

<?php
}
