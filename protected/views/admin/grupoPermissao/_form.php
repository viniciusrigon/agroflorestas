<?php
/* @var $this GrupoPermissaoController */
/* @var $model GrupoPermissao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'grupo-permissao-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IdUsuarioGrupo'); ?>
		<?php echo $form->textField($model,'IdUsuarioGrupo'); ?>
		<?php echo $form->error($model,'IdUsuarioGrupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdPermissao'); ?>
		<?php echo $form->textField($model,'IdPermissao'); ?>
		<?php echo $form->error($model,'IdPermissao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->