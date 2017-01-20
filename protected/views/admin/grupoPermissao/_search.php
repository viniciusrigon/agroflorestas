<?php
/* @var $this GrupoPermissaoController */
/* @var $model GrupoPermissao */
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
		<?php echo $form->label($model,'IdUsuarioGrupo'); ?>
		<?php echo $form->textField($model,'IdUsuarioGrupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IdPermissao'); ?>
		<?php echo $form->textField($model,'IdPermissao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->