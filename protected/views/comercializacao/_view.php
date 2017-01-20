<?php
/* @var $this ComercializacaoController */
/* @var $data Comercializacao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('comercializacao_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->comercializacao_id), array('view', 'id'=>$data->comercializacao_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_id')); ?>:</b>
	<?php echo CHtml::encode($data->saf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produto_escoado')); ?>:</b>
	<?php echo CHtml::encode($data->produto_escoado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transporte')); ?>:</b>
	<?php echo CHtml::encode($data->transporte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_escoamento')); ?>:</b>
	<?php echo CHtml::encode($data->forma_escoamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_mercado')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_mercado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estrutura_comerc')); ?>:</b>
	<?php echo CHtml::encode($data->estrutura_comerc); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('local_comerc')); ?>:</b>
	<?php echo CHtml::encode($data->local_comerc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumidor_final')); ?>:</b>
	<?php echo CHtml::encode($data->consumidor_final); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dificuldade_comerc')); ?>:</b>
	<?php echo CHtml::encode($data->dificuldade_comerc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dificuldades_legislacao')); ?>:</b>
	<?php echo CHtml::encode($data->dificuldades_legislacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicializacao')); ?>:</b>
	<?php echo CHtml::encode($data->inicializacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('implantacao')); ?>:</b>
	<?php echo CHtml::encode($data->implantacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pontos_positivos')); ?>:</b>
	<?php echo CHtml::encode($data->pontos_positivos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dificuldade')); ?>:</b>
	<?php echo CHtml::encode($data->dificuldade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receita_total')); ?>:</b>
	<?php echo CHtml::encode($data->receita_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perc_receita_saf')); ?>:</b>
	<?php echo CHtml::encode($data->perc_receita_saf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dados_brutos')); ?>:</b>
	<?php echo CHtml::encode($data->dados_brutos); ?>
	<br />

	*/ ?>

</div>