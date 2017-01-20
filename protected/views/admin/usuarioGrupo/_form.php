<?php
/* @var $this UsuarioGrupoController */
/* @var $model UsuarioGrupo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-grupo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IdGrupo'); ?>
		<?php echo $form->textField($model,'IdGrupo'); ?>
		<?php echo $form->error($model,'IdGrupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IdUsuario'); ?>
		<?php echo $form->textField($model,'IdUsuario'); ?>
		<?php echo $form->error($model,'IdUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->