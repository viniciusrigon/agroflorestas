<?php
/* @var $this PermissaoController */
/* @var $model Permissao */

$this->breadcrumbs=array(
	'Permissaos'=>array('index'),
	'Criar',
);

?>

<h1>Permissão</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
