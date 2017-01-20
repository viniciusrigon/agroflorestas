<?php
/* @var $this VisitaController */
/* @var $data Visita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('visita_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->visita_id), array('view', 'id'=>$data->visita_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_id')); ?>:</b>
	<?php echo CHtml::encode($data->saf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avaliacao_produtor')); ?>:</b>
	<?php echo CHtml::encode($data->avaliacao_produtor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacoes')); ?>:</b>
	<?php echo CHtml::encode($data->observacoes); ?>
	<br />


</div>