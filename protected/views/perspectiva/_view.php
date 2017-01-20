<?php
/* @var $this PerspectivaController */
/* @var $data Perspectiva */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('perspectiva_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->perspectiva_id), array('view', 'id'=>$data->perspectiva_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_id')); ?>:</b>
	<?php echo CHtml::encode($data->saf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagina')); ?>:</b>
	<?php echo CHtml::encode($data->imagina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rede_apoio')); ?>:</b>
	<?php echo CHtml::encode($data->rede_apoio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitas')); ?>:</b>
	<?php echo CHtml::encode($data->visitas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dados_brutos')); ?>:</b>
	<?php echo CHtml::encode($data->dados_brutos); ?>
	<br />


</div>