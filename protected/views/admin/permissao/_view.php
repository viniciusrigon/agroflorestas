<?php
/* @var $this PermissaoController */
/* @var $data Permissao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Permissao')); ?>:</b>
	<?php echo CHtml::encode($data->Permissao); ?>
	<br />


</div>