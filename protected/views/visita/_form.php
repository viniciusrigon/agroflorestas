<?php
/* @var $this VisitaController */
/* @var $model Visita */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	$form = $this->beginWidget('CActiveForm', $form);
?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'avaliacao_produtor'); ?>
		<?php echo $form->textArea($model,'avaliacao_produtor',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'avaliacao_produtor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacoes'); ?>
		<?php echo $form->textArea($model,'observacoes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observacoes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
