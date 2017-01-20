<?php
/* @var $this PraticasManejoController */
/* @var $model PraticasManejo */
/* @var $form CActiveForm */

$this->menu=array(
	array('label'=>'Integração', 'url'=>array('/IntegracaoManejo/edit', 'manejo_id'=>$model->manejo_id)),
	array('label'=>'Animais Manejados', 'url'=>array('/AnimaisManejados/edit', 'manejo_id'=>$model->manejo_id)),
	array('label'=>'Vegetais Manejados', 'url'=>array('/VegetaisManejados/edit', 'manejo_id'=>$model->manejo_id)),	
);
?>

<h1>Práticas de manejo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'form'=>$form)); ?>
