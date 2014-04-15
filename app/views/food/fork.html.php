<?php
/**
 * Forking food view.
 *
 * @category FileControllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
?>
<h5> <i class='icon-list '> </i> Edit Food:<?php echo $food->name ?>  </h5>
<?php

echo $this->form->create(null, array('class'=>'edit_form'));
    echo $this->form->hidden('_id', array('value'=>$food->_id)); ?>
<table>
    <thead>
        <tr>
            <th> <?php echo $t('Name / Description'); ?> </th>
            <td>
                <?php echo $this->form->field('name', array('label'=>false,'div'=>false, 'value'=>$food->name, 'placeholder'=>$t('Name / Description'),'class'=>'first-topped-border'));
    ?>      </td>
        </tr>
        <tr>
            <th> <?php echo $t('Energy Kcal'); ?> </th>
            <td> <?php echo $this->form->field('kcal', array('label'=>false,'div'=>false, 'value'=>$food->kcal, 'placeholder'=>$t('Energy Kcal'))); ?> </td>
        </tr>
        <tr>
            <th> <?php echo $t('Water'); ?> </th>
            <td> <?php echo $this->form->field('water', array('label'=>false, 'value'=>$food->water, 'placeholder'=>$t('Ash'))); ?> </td>
        </tr>
        <tr>
            <th> <?php echo $t('Proteins'); ?> </th>
            <td> <?php echo $this->form->field('protein', array('label'=>false,'value'=>$food->protein, 'placeholder'=>$t('Proteins'))); ?> </td>
        </tr>
        <tr>
            <th> <?php echo $t('Lipid Total'); ?> </th>
            <td> <?php echo $this->form->field('lipid_total',  array('label'=>false,'value'=>$food->lipid_total, 'placeholder'=>$t('Lipid Total'))); ?> </td>
        </tr>
        <tr>
            <th> <?php echo $t('Ash'); ?> </th>
            <td> <?php echo $this->form->field('ash',  array('label'=>false,'value'=>$food->ash, 'placeholder'=>$t('Ash')));  ?> </td>
        </tr>
        <tr>
            <th> <?php echo $t('Carbs'); ?> </th>
            <td> <?php echo $this->form->field('carbs',  array('label'=>false,'value'=>$food->carbs, 'placeholder'=>$t('Carbs'))); ?> </td>
        </tr>
        <tr>
            <th> <?php echo $t('Fiber'); ?> </th>
            <td> <?php echo $this->form->field('fiber',  array('label'=>false,'value'=>$food->fiber, 'placeholder'=>$t('Fiber'))); ?> </td>
        </tr>
        <tr>
            <th> <?php echo $t('Sugar Total'); ?> </th>
            <td> <?php echo $this->form->field('sugar_total',  array('label'=>false,'value'=>$food->sugar_total, 'placeholder'=>$t('Sugar Total'))); ?> </td>

        </tr>
        <tr>
            <th> <?php echo $t('Calcium'); ?> </th>
            <td> <?php echo $this->form->field('calcium',  array('label'=>false,'value'=>$food->calcium, 'placeholder'=>$t('Calcium'))); ?> </td>

        </tr>
        <tr>
            <th> <?php echo $t('Iron'); ?> </th>
            <td> <?php echo $this->form->field('iron',  array('label'=>false,'value'=>$food->iron, 'placeholder'=>$t('Iron'))); ?> </td>

        </tr>
        <tr>
            <th> <?php echo $t('Magnesium'); ?> </th>
            <td> <?php echo $this->form->field('magnesium', array('label'=>false, 'value'=>$food->magnesium, 'placeholder'=>$t('Magnesium'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Phosphorus'); ?> </th>
            <td> <?php echo $this->form->field('phosphorus', array('label'=>false,'value'=>$food->phosphorus,'placeholder'=>$t('Phosphorus'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Potassium'); ?> </th>
            <td>
                <?php echo $this->form->field('potassium', array('label'=>false, 'value'=>$food->potassium, 'placeholder'=>$t('Potassium'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Sodium'); ?> </th>
            <td>
                <?php echo $this->form->field('sodium', array('label'=>false, 'value'=>$food->sodium, 'placeholder'=>$t('Sodium'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Zinc'); ?> </th>
            <td>
                <?php echo $this->form->field('zinc', array('label'=>false, 'value'=>$food->zinc, 'placeholder'=>$t('Zinc'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Copper'); ?> </th>
            <td>
                <?php echo $this->form->field('copper', array('label'=>false, 'value'=>$food->copper, 'placeholder'=>$t('Copper'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Manganese'); ?> </th>  
            <td>
                <?php echo $this->form->field('manganese', array('label'=>false, 'value'=>$food->manganese, 'placeholder'=>$t('Manganese'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Selenium'); ?> </th>
            <td>
                <?php echo $this->form->field('selenium', array('label'=>false, 'value'=>$food->selenium, 'placeholder'=>$t('Selenium'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Vitamin C'); ?> </th>
            <td>
                <?php echo $this->form->field('vit_c', array('label'=>false, 'value'=>$food->vit_c, 'placeholder'=>$t('Vitamin C'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Thiamin'); ?> </th>
            <td>
                <?php echo $this->form->field('thiamin', array('label'=>false, 'value'=>$food->thiamin, 'placeholder'=>$t('Thiamin'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Riboflavin'); ?> </th>
            <td>
                <?php echo $this->form->field('riboflavin', array('label'=>false,'value'=>$food->riboflavin,'placeholder'=>$t('Riboflavin'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Niacin'); ?> </th>
            <td>
                <?php echo $this->form->field('niacin', array('label'=>false, 'value'=>$food->niacin, 'placeholder'=>$t('Niacin'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Panto Acid'); ?> </th>
            <td>
                <?php echo $this->form->field('panto_acid',array('label'=>false,'value'=>$food->panto_acid,'placeholder'=>$t('Panto Acid'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Vitamin B6'); ?> </th>
            <td>
                <?php echo $this->form->field('vit_b6', array('label'=>false, 'value'=>$food->vit_b6, 'placeholder'=>$t('Vitamin B6'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Folate Total'); ?> </th>
            <td> 
                <?php echo $this->form->field('folate_tot',array('label'=>false,'value'=>$food->folate_tot,'placeholder'=>$t('Folate Total'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Folic Acid (Syntetic for of B9)'); ?> </th>
            <td>
                <?php echo $this->form->field('folic_acid', array('label'=>false, 'value'=>$food->folic_acid,'placeholder'=>$t('Folic Acid (Syntetic for of B9)')                            )); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Food folate'); ?> </th>
            <td>
                <?php echo $this->form->field('food_folate', array('label'=>false, 'value'=>$food->food_folate, 'placeholder'=>$t('Food folate')) ); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Folate DFE'); ?> </th>
            <td>
            <?php echo $this->form->field('folate_dfe', array('label'=>false, 'value'=>$food->folate_dfe, 'placeholder'=>$t('Folate DFE'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Choline Tot'); ?> </th>
            <td> 
                <?php echo $this->form->field('choline_tot', array('label'=>false, 'value'=>$food->choline_tot, 'placeholder'=>$t('Choline Tot'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Vitamin B12'); ?> </th>
            <td>
                <?php echo $this->form->field('vit_b12', array('label'=>false, 'value'=>$food->vit_b12, 'placeholder'=>$t('Vitamin B12'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Vitamin A IU'); ?> </th>
            <td> 
                <?php echo $this->form->field('vit_a_iu',array('label'=>false,'value'=>$food->vit_a_iu,'placeholder'=>$t('Vitamin A IU'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Vitamin A REA'); ?> </th>
            <td> 
                <?php echo $this->form->field('vit_a_rea', array('label'=>false, 'value'=>$food->vit_a_rea, 'placeholder'=>$t('Vitamin A REA'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Retinol'); ?> </th>
            <td> <?php echo $this->form->field('retinol', array('label'=>false, 'value'=>$food->retinol, 'placeholder'=>$t('Retinol'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Alpha Caroten'); ?> </th>
            <td> 
                <?php echo $this->form->field('alpha_carot', array('label'=>false, 'value'=>$food->alpha_carot, 'placeholder'=>$t('Alpha Caroten'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Beta Caroten'); ?> </th>
            <td> 
                <?php echo $this->form->field('beta_carot', array('label'=>false, 'value'=>$food->beta_carot, 'placeholder'=>$t('Beta Caroten'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Lycopene'); ?> </th>
            <td> 
                <?php echo $this->form->field('lycopene',array('label'=>false,'value'=>$food->lycopene,'placeholder'=>$t('Lycopene'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Lut+Zea'); ?> </th>
            <td> 
                <?php echo $this->form->field('lut_plus_zea',array('label'=>false,'value'=>$food->lut_plus_zea,'placeholder'=>$t('Lut+Zea'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Vitamin E'); ?> </th>
            <td> 
                <?php echo $this->form->field('vit_e',array('label'=>false,'value'=>$food->vit_e,'placeholder'=>$t('Vitamin E'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Vitamin D'); ?> </th>
            <td> 
                <?php echo $this->form->field('vit_d',array('label'=>false,'value'=>$food->vit_d,'placeholder'=>$t('Vitamin D'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Vitamin D IU'); ?> </th>
            <td> 
                <?php echo $this->form->field('vid_d_iu',array('label'=>false,'value'=>$food->vid_d_iu,'placeholder'=>$t('Vitamin D IU'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Vitamin K'); ?> </th>
            <td> 
                <?php echo $this->form->field('vit_k',array('label'=>false,'value'=>$food->vit_k,'placeholder'=>$t('Vitamin K'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Fa Sat'); ?> </th>
            <td> 
                <?php echo $this->form->field('fa_sat',array('label'=>false,'value'=>$food->fa_sat,'placeholder'=>$t('Fa Sat'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Fa Mono'); ?> </th>
            <td> 
                <?php echo $this->form->field('fa_mono',array('label'=>false,'value'=>$food->fa_mono,'placeholder'=>$t('Fa Mono'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Fa Poly'); ?> </th>
            <td> 
                <?php echo $this->form->field('fa_poly',array('label'=>false,'value'=>$food->fa_poly,'placeholder'=>$t('Fa Poly'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Cholestrl'); ?> </th>
            <td> 
                <?php echo $this->form->field('cholestrl',array('label'=>false,'value'=>$food->cholestrl,'placeholder'=>$t('Cholestrl'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Gmwt 1'); ?> </th>
            <td> 
                <?php echo $this->form->field('gmwt_1',array('label'=>false,'value'=>$food->gmwt_1,'placeholder'=>$t('Gmwt 1'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Gmwt Desc1'); ?> </th>
            <td> <?php echo $this->form->field(
                        'gmwt_desc1',
                        array('label'=>false, 'value'=>$food->gmwt_desc1,'placeholder'=>$t('Gmwt Desc1'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Gmwt 2'); ?> </th>
            <td> 
                <?php echo $this->form->field('gmwt_2', array('label'=>false, 'value'=>$food->gmwt_2,'placeholder'=>$t('Gmwt 2'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Gmwt Desc2'); ?> </th>
            <td> 
                <?php echo $this->form->field('gmwt_desc2', array('label'=>false, 'value'=>$food->gmwt_desc2, 'placeholder'=>$t('Gmwt Desc2'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php echo $t('Refuse Pct'); ?> </th>
            <td> 
                <?php echo $this->form->field('refuse_pct',array('label'=>false, 'value'=>$food->refuse_pct, 'placeholder'=>$t('Refuse Pct'))); ?>
            </td>
        </tr>
        <!--<tr>
            <th> <?php //echo $t('Created'); ?> </th>
            <td>
                <?php //echo $this->form->field('created', array('label'=>false, 'value'=>$food->created, 'placeholder'=>$t('Created'))); ?>
            </td>
        </tr>
        <tr>
            <th> <?php //echo $t('Modified'); ?> </th>
            <td>
                <?php //echo $this->form->field('modified', array('label'=>false, 'value'=>$food->modified, 'placeholder'=>$t('Modified') )); ?>
            </td>
        </tr>-->
    </thead>
        <tr>

        </tr>
</table>
<?php
    echo $this->form->submit('Save');
echo $this->form->end(); ?>
