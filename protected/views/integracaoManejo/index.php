<?php
/* @var $this IntegracaoManejoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Integracao Manejos',
);

$this->menu=array(
	array('label'=>'Create IntegracaoManejo', 'url'=>array('create')),
	array('label'=>'Manage IntegracaoManejo', 'url'=>array('admin')),
);
?>

<h1>Integracao Manejos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
