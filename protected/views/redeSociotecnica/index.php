<?php
/* @var $this RedeSociotecnicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rede Sociotecnicas',
);

$this->menu=array(
	array('label'=>'Create RedeSociotecnica', 'url'=>array('create')),
	array('label'=>'Manage RedeSociotecnica', 'url'=>array('admin')),
);
?>

<h1>Rede Sociotecnicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
