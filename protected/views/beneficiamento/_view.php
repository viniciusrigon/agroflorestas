<?php
/* @var $this BeneficiamentoController */
/* @var $data Beneficiamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficiamento_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->beneficiamento_id), array('view', 'id'=>$data->beneficiamento_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_id')); ?>:</b>
	<?php echo CHtml::encode($data->saf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produto_beneficiado')); ?>:</b>
	<?php echo CHtml::encode($data->produto_beneficiado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distancia')); ?>:</b>
	<?php echo CHtml::encode($data->distancia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tecnica')); ?>:</b>
	<?php echo CHtml::encode($data->tecnica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produto_final')); ?>:</b>
	<?php echo CHtml::encode($data->produto_final); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_producao')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_producao); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('escala_producao')); ?>:</b>
	<?php echo CHtml::encode($data->escala_producao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destino_principal')); ?>:</b>
	<?php echo CHtml::encode($data->destino_principal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dificuldades_beneficiamento')); ?>:</b>
	<?php echo CHtml::encode($data->dificuldades_beneficiamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dificuldades_legislacao')); ?>:</b>
	<?php echo CHtml::encode($data->dificuldades_legislacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('local')); ?>:</b>
	<?php echo CHtml::encode($data->local); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio_beneficiamento')); ?>:</b>
	<?php echo CHtml::encode($data->inicio_beneficiamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('implantacao')); ?>:</b>
	<?php echo CHtml::encode($data->implantacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pontos_positivos')); ?>:</b>
	<?php echo CHtml::encode($data->pontos_positivos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('entraves')); ?>:</b>
	<?php echo CHtml::encode($data->entraves); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dados_brutos')); ?>:</b>
	<?php echo CHtml::encode($data->dados_brutos); ?>
	<br />

	*/ ?>

</div>