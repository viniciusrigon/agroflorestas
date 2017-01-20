<?php
/* @var $this VendaController */
/* @var $data Venda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('venda_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->venda_id), array('view', 'id'=>$data->venda_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saf_id')); ?>:</b>
	<?php echo CHtml::encode($data->saf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produto_vendido')); ?>:</b>
	<?php echo CHtml::encode($data->produto_vendido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unidade')); ?>:</b>
	<?php echo CHtml::encode($data->unidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantidade')); ?>:</b>
	<?php echo CHtml::encode($data->quantidade); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preco_unitario')); ?>:</b>
	<?php echo CHtml::encode($data->preco_unitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total')); ?>:</b>
	<?php echo CHtml::encode($data->total); ?>
	<br />


</div>