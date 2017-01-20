<?php
/* @var $this ColheitaController */
/* @var $model Colheita */

?>

<h1>Colheita #<?php echo $model->produto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'colheita_id',
		'vegetais_id',
		'produto',
		'quantidade',
		'forma_colheita',
		'ferramentas',
		'frequencia',
		'periodo_do_ano',
		'dados_brutos',
	),
)); ?>
