<?php
/* @var $this PraticasManejoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Praticas Manejos',
);

$this->menu=array(
	array('label'=>'Create PraticasManejo', 'url'=>array('create')),
	array('label'=>'Manage PraticasManejo', 'url'=>array('admin')),
);
?>

<h1>Praticas Manejos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
