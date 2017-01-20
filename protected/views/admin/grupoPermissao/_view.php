<?php
/* @var $this GrupoPermissaoController */
/* @var $data GrupoPermissao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdUsuarioGrupo')); ?>:</b>
	<?php echo CHtml::encode($data->IdUsuarioGrupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdPermissao')); ?>:</b>
	<?php echo CHtml::encode($data->IdPermissao); ?>
	<br />


</div>