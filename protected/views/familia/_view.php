<?php
/* @var $this FamiliaController */
/* @var $data Familia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('familia_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->familia_id), array('view', 'id'=>$data->familia_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_id')); ?>:</b>
	<?php echo CHtml::encode($data->saf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('local_origem')); ?>:</b>
	<?php echo CHtml::encode($data->local_origem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('composicao_renda')); ?>:</b>
	<?php echo CHtml::encode($data->composicao_renda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dados_brutos')); ?>:</b>
	<?php echo CHtml::encode($data->dados_brutos); ?>
	<br />


</div>