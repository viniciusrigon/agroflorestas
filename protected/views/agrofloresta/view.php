<?php
/* @var $this AgroflorestaController */
/* @var $model Agrofloresta */

$this->breadcrumbs=array(
	'Agroflorestas'=>array('index'),
	$model->saf_id,
);

$this->menu=array(
	array('label'=>'Familia', 'url'=>array('/familia/edit', 'saf_id'=>$model->saf_id)),
	array('label'=>'Propriedade', 'url'=>array('/propriedade/edit', 'saf_id'=>$model->saf_id)),
	array('label'=>'Beneficiamento', 'url'=>array('/beneficiamento/edit', 'saf_id'=>$model->saf_id)),
	array('label'=>'Comercialização', 'url'=>array('/comercializacao/edit', 'saf_id'=>$model->saf_id)),
	array('label'=>'Praticas de manejo', 'url'=>array('/praticasManejo/edit', 'saf_id'=>$model->saf_id)),	
	array('label'=>'Rede Sociotécnica', 'url'=>array('/RedeSociotecnica/edit', 'saf_id'=>$model->saf_id)),
	array('label'=>'Venda', 'url'=>array('/Venda/edit', 'saf_id'=>$model->saf_id)),
	array('label'=>'Perspectivas', 'url'=>array('/Perspectiva/edit', 'saf_id'=>$model->saf_id)),
	array('label'=>'Visita', 'url'=>array('/Visita/edit', 'saf_id'=>$model->saf_id)),
);
?>

<h1>Agrofloresta</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(		
		'uf:text:Estado',
		'municipio:text:Município',
		'cep:text:CEP',
		'telefone:text:Telefone',
		'email:text:Email',
		'webpage:text:Webpage',
		'lat:text:Latitude',
		'lng:text:Longitude',
	),
)); 
?>




