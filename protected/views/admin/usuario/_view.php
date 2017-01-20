<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nome')); ?>:</b>
	<?php echo CHtml::encode($data->Nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Login')); ?>:</b>
	<?php echo CHtml::encode($data->Login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Senha')); ?>:</b>
	<?php echo CHtml::encode($data->Senha); ?>
	<br />


</div>