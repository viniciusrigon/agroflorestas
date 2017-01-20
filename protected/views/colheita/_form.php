<?php
/* @var $this ColheitaController */
/* @var $model Colheita */
?>

<div class="form">

	<?php 
	$form=$this->beginWidget('CActiveForm', array(
	'id'=>'integrantes-form',
	'enableAjaxValidation'=>false,
)); 
	?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'produto'); ?>
		<?php echo $form->textField($model,'produto',array('size'=>50,'maxlength'=>50, 'disabled' => true)); ?>
		<?php echo $form->error($model,'produto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade'); ?>
		<?php echo $form->error($model,'quantidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_colheita'); ?>
		<?php echo $form->textField($model,'forma_colheita',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'forma_colheita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ferramentas'); ?>
		<?php echo $form->textField($model,'ferramentas',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ferramentas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frequencia'); ?>
		<?php echo $form->textField($model,'frequencia',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'frequencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodo_do_ano'); ?>
		<?php echo $form->textField($model,'periodo_do_ano',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'periodo_do_ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dados_brutos'); ?>
		<?php echo $form->textArea($model,'dados_brutos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dados_brutos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
