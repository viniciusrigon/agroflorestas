<?php
/* @var $this UsuarioGrupoController */
/* @var $data UsuarioGrupo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdGrupo')); ?>:</b>
	<?php echo CHtml::encode($data->IdGrupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->IdUsuario); ?>
	<br />


</div>