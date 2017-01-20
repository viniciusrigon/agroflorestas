<?php
/* @var $this IntegrantesController */
/* @var $data Integrantes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('integrantes_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->integrantes_id), array('view', 'id'=>$data->integrantes_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familia_id')); ?>:</b>
	<?php echo CHtml::encode($data->familia_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano_nasc')); ?>:</b>
	<?php echo CHtml::encode($data->ano_nasc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentesco')); ?>:</b>
	<?php echo CHtml::encode($data->parentesco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacao')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempo_residencia')); ?>:</b>
	<?php echo CHtml::encode($data->tempo_residencia); ?>
	<br />


</div>