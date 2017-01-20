<?php
/* @var $this VegetaisManejadosController */
/* @var $data VegetaisManejados */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('esp_veg_manejadas_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->esp_veg_manejadas_id), array('view', 'id'=>$data->esp_veg_manejadas_id)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('familia_botanica')); ?>:</b>
	<?php echo CHtml::encode($data->familia_botanica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('funcao_ecologica_no_saf')); ?>:</b>
	<?php echo CHtml::encode($data->funcao_ecologica_no_saf); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('origem_plantio')); ?>:</b>
	<?php echo CHtml::encode($data->origem_plantio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estrato')); ?>:</b>
	<?php echo CHtml::encode($data->estrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilidade')); ?>:</b>
	<?php echo CHtml::encode($data->utilidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('espacamento')); ?>:</b>
	<?php echo CHtml::encode($data->espacamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('habito')); ?>:</b>
	<?php echo CHtml::encode($data->habito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('informacoes_adicionais')); ?>:</b>
	<?php echo CHtml::encode($data->informacoes_adicionais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meio_implantacao')); ?>:</b>
	<?php echo CHtml::encode($data->meio_implantacao); ?>
	<br />

	*/ ?>

</div>