<?php
/* @var $this ColheitaController */
/* @var $data Colheita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('colheita_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->colheita_id), array('view', 'id'=>$data->colheita_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vegetais_id')); ?>:</b>
	<?php echo CHtml::encode($data->vegetais_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produto')); ?>:</b>
	<?php echo CHtml::encode($data->produto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantidade')); ?>:</b>
	<?php echo CHtml::encode($data->quantidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forma_colheita')); ?>:</b>
	<?php echo CHtml::encode($data->forma_colheita); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ferramentas')); ?>:</b>
	<?php echo CHtml::encode($data->ferramentas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frequencia')); ?>:</b>
	<?php echo CHtml::encode($data->frequencia); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('periodo_do_ano')); ?>:</b>
	<?php echo CHtml::encode($data->periodo_do_ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dados_brutos')); ?>:</b>
	<?php echo CHtml::encode($data->dados_brutos); ?>
	<br />

	*/ ?>

</div>