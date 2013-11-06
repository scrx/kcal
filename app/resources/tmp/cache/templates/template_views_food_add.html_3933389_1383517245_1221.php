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
<?php
echo $this->form->create();
    echo $this->form->field('name', array('label'=>false, 'placeholder'=>'Nazwa','class'=>'first-topped-border'));
    echo $this->form->field('kcal', array('label'=>false, 'placeholder'=>'Wartość energetyczna'));
    echo $this->form->field('prot', array('label'=>false, 'placeholder'=>'Białko'));
    echo $this->form->field('carb', array('label'=>false, 'placeholder'=>'Węglowodany'));
    echo $this->form->field('fat',  array('label'=>false, 'placeholder'=>'Tłuszcze'));
    echo $this->form->field('fibe', array('label'=>false, 'placeholder'=>'Błonnik'));
    echo $this->form->field('magn', array('label'=>false, 'placeholder'=>'Magnez'));
    echo $this->form->field('pota', array('label'=>false, 'placeholder'=>'Potas'));
    echo $this->form->field('iron', array('label'=>false, 'placeholder'=>'Żelazo'));
    echo $this->form->field('calc', array('label'=>false, 'placeholder'=>'Wapń'));
    echo $this->form->submit('Dodaj');
echo $this->form->end();
