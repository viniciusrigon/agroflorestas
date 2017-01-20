<?php
/* @var $this IntegrantesController */
/* @var $model Integrantes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'integrantes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano_nasc'); ?>
		<?php echo $form->textField($model,'ano_nasc'); ?>
		<?php echo $form->error($model,'ano_nasc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parentesco'); ?>
		<?php echo $form->textField($model,'parentesco',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'parentesco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ocupacao'); ?>
		<?php echo $form->textField($model,'ocupacao',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ocupacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempo_residencia'); ?>
		<?php echo $form->textField($model,'tempo_residencia',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'tempo_residencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
