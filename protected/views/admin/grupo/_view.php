<?php
/* @var $this GrupoController */
/* @var $data Grupo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nome')); ?>:</b>
	<?php echo CHtml::encode($data->Nome); ?>
	<br />


</div>