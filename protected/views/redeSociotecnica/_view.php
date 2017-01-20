<?php
/* @var $this RedeSociotecnicaController */
/* @var $data RedeSociotecnica */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rede_socio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rede_socio_id), array('view', 'id'=>$data->rede_socio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_id')); ?>:</b>
	<?php echo CHtml::encode($data->saf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assistencia')); ?>:</b>
	<?php echo CHtml::encode($data->assistencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('membro_assoc')); ?>:</b>
	<?php echo CHtml::encode($data->membro_assoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficio_assoc')); ?>:</b>
	<?php echo CHtml::encode($data->beneficio_assoc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dificuldades')); ?>:</b>
	<?php echo CHtml::encode($data->dificuldades); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utiliza_credito')); ?>:</b>
	<?php echo CHtml::encode($data->utiliza_credito); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('acesso_credito')); ?>:</b>
	<?php echo CHtml::encode($data->acesso_credito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('participa_cursos')); ?>:</b>
	<?php echo CHtml::encode($data->participa_cursos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dados_brutos')); ?>:</b>
	<?php echo CHtml::encode($data->dados_brutos); ?>
	<br />

	*/ ?>

</div>