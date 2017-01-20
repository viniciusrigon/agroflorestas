<?php
/* @var $this IntegracaoManejoController */
/* @var $data IntegracaoManejo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('integracao_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->integracao_id), array('view', 'id'=>$data->integracao_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manejo_id')); ?>:</b>
	<?php echo CHtml::encode($data->manejo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('integracao_saf')); ?>:</b>
	<?php echo CHtml::encode($data->integracao_saf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material_propativo')); ?>:</b>
	<?php echo CHtml::encode($data->material_propativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mudas_semestes')); ?>:</b>
	<?php echo CHtml::encode($data->mudas_semestes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viveitos_proximos')); ?>:</b>
	<?php echo CHtml::encode($data->viveitos_proximos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('custos_estimados_saf')); ?>:</b>
	<?php echo CHtml::encode($data->custos_estimados_saf); ?>
	<br />


</div>