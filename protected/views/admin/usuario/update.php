<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

//$this->breadcrumbs=array(
	//'Usuarios'=>array('index'),
	//$model->Id=>array('view','id'=>$model->Id),
	//'Update',
//);

//$this->menu=array(
	//array('label'=>'List Usuario', 'url'=>array('index')),
	//array('label'=>'Create Usuario', 'url'=>array('create')),
	//array('label'=>'View Usuario', 'url'=>array('view', 'id'=>$model->Id)),
	//array('label'=>'Manage Usuario', 'url'=>array('admin')),
//);
?>

<h1>Usuário</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
