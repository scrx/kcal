<?php
/**
 * View selected food.
 *
 * @category FileControllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
?>
<h5> <i class='icon-info-sign '> </i> View Food:<?php echo $food->name ?> <small class='pull-right'> <?php echo $this->html->link('<i class="icon-edit"> </i> Edit food', 'edit/'.$food->_id, array('escape' => false)) ?>   </small> </h5>

<table>
    <thead>
        <tr> 
            <th> <?php echo $t('Name / Description'); ?> </th> 
            <td> <?php echo $food->name ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Energy Kcal'); ?> </th> 
            <td> <?php echo $food->kcal ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Water'); ?> </th> 
            <td> <?php echo $food->water ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Proteins'); ?> </th> 
            <td> <?php echo $food->protein ?> </td>
        </tr>   
        <tr> 
            <th> <?php echo $t('Lipid Total'); ?> </th> 
            <td> <?php echo $food->lipid_total ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $this->html->link($t('Ash').' <i class="icon-info-sign" ></i>','http://en.wikipedia.org/wiki/Ash_(analytical_chemistry)',array('escape'=>false,'title'=>'Click to see more in wikipedia')); ?> </th> 
            <td> <?php echo $food->ash ?> </td>
        </tr> 
        <tr> 
            <th> <?php echo $t('Carbs'); ?> </th> 
            <td> <?php echo $food->carbs ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Fiber'); ?> </th> 
            <td> <?php echo $food->fiber ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Sugar Total'); ?> </th> 
            <td> <?php echo $food->sugar_total ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Calcium'); ?> </th> 
            <td> <?php echo $food->calcium ?> </td>
        </tr>  
        <tr> 
            <th> <?php echo $t('Iron'); ?> </th> 
            <td> <?php echo $food->water ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Magnesium'); ?> </th> 
            <td> <?php echo $food->magnesium ?> </td>
        </tr>   
        <tr> 
            <th> <?php echo $t('Phosphorus'); ?> </th> 
            <td> <?php echo $food->phosphorus ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Potassium'); ?> </th> 
            <td> <?php echo $food->potassium ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Sodium'); ?> </th> 
            <td> <?php echo $food->sodium ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Zinc'); ?> </th> 
            <td> <?php echo $food->zinc ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Copper'); ?> </th> 
            <td> <?php echo $food->copper ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Manganese'); ?> </th> 
            <td> <?php echo $food->manganese ?> </td>
        </tr>   
        <tr> 
            <th> <?php echo $t('Selenium'); ?> </th> 
            <td> <?php echo $food->selenium ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Vit C'); ?> </th> 
            <td> <?php echo $food->vit_c ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Thiamin'); ?> </th> 
            <td> <?php echo $food->thiamin ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Riboflavin'); ?> </th> 
            <td> <?php echo $food->riboflavin ?> </td>
        </tr>    
        <tr> 
            <th> <?php echo $t('Niacin'); ?> </th> 
            <td> <?php echo $food->niacin ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Panto Acid'); ?> </th> 
            <td> <?php echo $food->panto_acid ?> </td>
        </tr>   
        <tr> 
            <th> <?php echo $t('Vit B6'); ?> </th> 
            <td> <?php echo $food->vit_b6 ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Folate Tot'); ?> </th> 
            <td> <?php echo $food->folate_tot ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Folic Acid'); ?> </th> 
            <td> <?php echo $food->folic_acid ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Food folate'); ?> </th> 
            <td> <?php echo $food->food_folate ?> </td>
        </tr>         
        <tr> 
            <th> <?php echo $t('Folate DFE'); ?> </th> 
            <td> <?php echo $food->folate_dfe ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Choline Tot'); ?> </th> 
            <td> <?php echo $food->choline_tot ?> </td>
        </tr>   
        <tr> 
            <th> <?php echo $t('Vit B12'); ?> </th> 
            <td> <?php echo $food->vit_b12 ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Vit A IU'); ?> </th> 
            <td> <?php echo $food->vit_a_iu ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Vit A REA'); ?> </th> 
            <td> <?php echo $food->vit_a_rea ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Retinol'); ?> </th> 
            <td> <?php echo $food->retinol ?> </td>
        </tr>   
        <tr> 
            <th> <?php echo $t('Alpha Caroten'); ?> </th> 
            <td> <?php echo $food->alpha_carot ?> </td>
        </tr>   
        <tr> 
            <th> <?php echo $t('Beta Caroten'); ?> </th> 
            <td> <?php echo $food->beta_carot ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Lycopene'); ?> </th> 
            <td> <?php echo $food->lycopene ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Lut+Zea'); ?> </th> 
            <td> <?php echo $food->lut_plus_zea ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Vit E'); ?> </th> 
            <td> <?php echo $food->vit_e ?> </td>
        </tr>    
        <tr> 
            <th> <?php echo $t('Vit D'); ?> </th> 
            <td> <?php echo $food->vit_d ?> </td>
        </tr>   
        <tr> 
            <th> <?php echo $t('Vid D IU'); ?> </th> 
            <td> <?php echo $food->vid_d_iu ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Vit K'); ?> </th> 
            <td> <?php echo $food->vit_k ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Fa Sat'); ?> </th> 
            <td> <?php echo $food->fa_sat ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Fa Mono'); ?> </th> 
            <td> <?php echo $food->fa_mono ?> </td>
        </tr>  
        <tr> 
            <th> <?php echo $t('Fa Poly'); ?> </th> 
            <td> <?php echo $food->fa_poly ?> </td>
        </tr>   
        <tr> 
            <th> <?php echo $t('Cholesterol'); ?> </th> 
            <td> <?php echo $food->cholestrl ?> </td>
        </tr>
      <!--  <tr> 
            <th> <?php //echo $t('Gmwt 1'); ?> </th> 
            <td> <?php //echo $food->gmwt_1 ?> </td>
        </tr>
        <tr> 
            <th> <?php //echo $t('Gmwt Desc1'); ?> </th> 
            <td> <?php //echo $food->gmwt_desc1 ?> </td>
        </tr>
        <tr> 
            <th> <?php //echo $t('Gmwt 2'); ?> </th> 
            <td> <?php //echo $food->gmwt_2 ?> </td>
        </tr>      
        <tr> 
            <th> <?php //echo $t('Gmwt Desc2'); ?> </th> 
            <td> <?php //echo $food->gmwt_desc2 ?> </td>
        </tr> -->
        <tr> 
            <th> <?php echo $t('Refuse Pct'); ?> </th> 
            <td> <?php echo $food->refuse_pct ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Created'); ?> </th> 
            <td> <?php echo date('d-m-Y H:i:s',$food->created); ?> </td>
        </tr>
        <tr> 
            <th> <?php echo $t('Modified'); ?> </th> 
            <td> <?php echo date('d-m-Y H:i:s',$food->modified); ?> </td>
        </tr>                                                          
    </thead>
        <tr>
            
        </tr>
</table>


