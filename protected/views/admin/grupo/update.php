<?php
/* @var $this GrupoController */
/* @var $model Grupo */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Editar',
);

?>

<h1>Grupo <?php echo $model->Nome; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
