<?php
/* @var $this GrupoController */
/* @var $model Grupo */

$this->breadcrumbs=array(
	'Grupos'=>array('index'),
	'Criar',
);

?>

<h1>Grupo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
