<?php

Yii::import('zii.widgets.CMenu', true);

class ActiveMenu extends CMenu
{
    public function init()
    {        
        $items = Menu::model()->findAll();

        foreach ($items as $item)
            $this->items[] = array('label'=>$item->nomeMenu, 'url'=>array($item->urlMenu), 'visible'=>!Yii::app()->user->isGuest);
        
        //$this->items[] = array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest);
		$this->items[] = array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest);
        
        $this->items[] = array(''=>'');
                
        parent::init();
    }
}

?>
