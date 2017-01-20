<?php
/* @var $this RedeSociotecnicaController */
/* @var $model RedeSociotecnica */

$this->breadcrumbs=array(
	'Rede Sociotecnicas'=>array('index'),
	$model->rede_socio_id,
);

$this->menu=array(
	array('label'=>'List RedeSociotecnica', 'url'=>array('index')),
	array('label'=>'Create RedeSociotecnica', 'url'=>array('create')),
	array('label'=>'Update RedeSociotecnica', 'url'=>array('update', 'id'=>$model->rede_socio_id)),
	array('label'=>'Delete RedeSociotecnica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->rede_socio_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RedeSociotecnica', 'url'=>array('admin')),
);
?>

<h1>View RedeSociotecnica #<?php echo $model->rede_socio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rede_socio_id',
		'saf_id',
		'assistencia',
		'membro_assoc',
		'beneficio_assoc',
		'dificuldades',
		'utiliza_credito',
		'acesso_credito',
		'participa_cursos',
		'dados_brutos',
	),
)); ?>
