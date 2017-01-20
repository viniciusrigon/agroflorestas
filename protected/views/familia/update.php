<?php
/* @var $this FamiliaController */
/* @var $model Familia */
/* @var $form CActiveForm */

$this->menu=array(
	array('label'=>'Integrantes', 'url'=>array('/integrantes/edit', 'familia_id'=>$model->familia_id)),	
);

?>

<h1>Familia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'form'=>$form)); ?>
