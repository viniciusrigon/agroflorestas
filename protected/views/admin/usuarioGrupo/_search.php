<?php
/* @var $this UsuarioGrupoController */
/* @var $model UsuarioGrupo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdGrupo'); ?>
		<?php echo $form->textField($model,'IdGrupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdUsuario'); ?>
		<?php echo $form->textField($model,'IdUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->