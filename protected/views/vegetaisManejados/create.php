<?php
/* @var $this VegetaisManejadosController */
/* @var $model VegetaisManejados */

//$this->menu=array(
//	array('label'=>'Colheita', 'url'=>array('/colheita/edit', 'vegetais_id'=>$model->esp_veg_manejadas_id)),
//	);
	
?>

<h1>Vegetais Manejados </h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
