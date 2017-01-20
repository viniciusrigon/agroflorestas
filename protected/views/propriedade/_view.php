<?php
/* @var $this PropriedadeController */
/* @var $data Propriedade */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('propriedade_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->propriedade_id), array('view', 'id'=>$data->propriedade_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_id')); ?>:</b>
	<?php echo CHtml::encode($data->saf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_total')); ?>:</b>
	<?php echo CHtml::encode($data->area_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_areas_saf')); ?>:</b>
	<?php echo CHtml::encode($data->num_areas_saf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('praticas_agroflorestais')); ?>:</b>
	<?php echo CHtml::encode($data->praticas_agroflorestais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perc_saf')); ?>:</b>
	<?php echo CHtml::encode($data->perc_saf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perc_cultivo')); ?>:</b>
	<?php echo CHtml::encode($data->perc_cultivo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('perc_hortas')); ?>:</b>
	<?php echo CHtml::encode($data->perc_hortas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perc_app')); ?>:</b>
	<?php echo CHtml::encode($data->perc_app); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perc_reservalegal')); ?>:</b>
	<?php echo CHtml::encode($data->perc_reservalegal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dados_brutos')); ?>:</b>
	<?php echo CHtml::encode($data->dados_brutos); ?>
	<br />

	*/ ?>

</div>