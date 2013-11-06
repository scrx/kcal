<?php
/**
 * Adding food view.
 *
 * @category FileControllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
?>
<h5> <i class='icon-list '> </i> Edit Food:<?php echo $food_item->name ?>  </h5>
<?php
echo $this->form->create();
    echo $this->form->field('name', array('label'=>false,'value'=>$food_item->name, 'placeholder'=>'Nazwa','class'=>'first-topped-border'));
    echo $this->form->hidden('_id', array('label'=>false,'value'=>$food_item->_id,  'placeholder'=>'Nazwa'));
    echo $this->form->field('kcal', array('label'=>false,'value'=>$food_item->kcal, 'placeholder'=>'Wartość energetyczna'));
    echo $this->form->field('prot', array('label'=>false,'value'=>$food_item->prot, 'placeholder'=>'Białko'));
    echo $this->form->field('carb', array('label'=>false,'value'=>$food_item->carb, 'placeholder'=>'Węglowodany'));
    echo $this->form->field('fat',  array('label'=>false,'value'=>$food_item->fat,  'placeholder'=>'Tłuszcze'));
    echo $this->form->field('fibe', array('label'=>false,'value'=>$food_item->fibe, 'placeholder'=>'Błonnik'));
    echo $this->form->field('magn', array('label'=>false,'value'=>$food_item->magn, 'placeholder'=>'Magnez'));
    echo $this->form->field('pota', array('label'=>false,'value'=>$food_item->pota, 'placeholder'=>'Potas'));
    echo $this->form->field('iron', array('label'=>false,'value'=>$food_item->iron, 'placeholder'=>'Żelazo'));
    echo $this->form->field('calc', array('label'=>false,'value'=>$food_item->calc, 'placeholder'=>'Wapń'));
    echo $this->form->submit('Zapisz');
echo $this->form->end();
