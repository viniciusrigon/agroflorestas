<?php
/* @var $this AnimaisManejadosController */
/* @var $data AnimaisManejados */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('esp_ani_manejadas_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->esp_ani_manejadas_id), array('view', 'id'=>$data->esp_ani_manejadas_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_id')); ?>:</b>
	<?php echo CHtml::encode($data->saf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manejo_id')); ?>:</b>
	<?php echo CHtml::encode($data->manejo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_comum')); ?>:</b>
	<?php echo CHtml::encode($data->nome_comum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_cientifico')); ?>:</b>
	<?php echo CHtml::encode($data->nome_cientifico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('familia')); ?>:</b>
	<?php echo CHtml::encode($data->familia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcao_ecologica_no_saf')); ?>:</b>
	<?php echo CHtml::encode($data->funcao_ecologica_no_saf); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('origem')); ?>:</b>
	<?php echo CHtml::encode($data->origem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estrato')); ?>:</b>
	<?php echo CHtml::encode($data->estrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilidade')); ?>:</b>
	<?php echo CHtml::encode($data->utilidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('densidade')); ?>:</b>
	<?php echo CHtml::encode($data->densidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porte')); ?>:</b>
	<?php echo CHtml::encode($data->porte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacoes_adicionais')); ?>:</b>
	<?php echo CHtml::encode($data->informacoes_adicionais); ?>
	<br />

	*/ ?>

</div>