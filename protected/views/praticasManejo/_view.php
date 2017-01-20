<?php
/* @var $this PraticasManejoController */
/* @var $data PraticasManejo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('manejo_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->manejo_id), array('view', 'id'=>$data->manejo_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_id')); ?>:</b>
	<?php echo CHtml::encode($data->saf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propriedade_id')); ?>:</b>
	<?php echo CHtml::encode($data->propriedade_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_manejada')); ?>:</b>
	<?php echo CHtml::encode($data->area_manejada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APP')); ?>:</b>
	<?php echo CHtml::encode($data->APP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserva_legal')); ?>:</b>
	<?php echo CHtml::encode($data->reserva_legal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('historico')); ?>:</b>
	<?php echo CHtml::encode($data->historico); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('antes_saf')); ?>:</b>
	<?php echo CHtml::encode($data->antes_saf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adubacao')); ?>:</b>
	<?php echo CHtml::encode($data->adubacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_pessoas_manejo')); ?>:</b>
	<?php echo CHtml::encode($data->num_pessoas_manejo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terceirizado')); ?>:</b>
	<?php echo CHtml::encode($data->terceirizado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mutirao')); ?>:</b>
	<?php echo CHtml::encode($data->mutirao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dados_brutos')); ?>:</b>
	<?php echo CHtml::encode($data->dados_brutos); ?>
	<br />

	*/ ?>

</div>