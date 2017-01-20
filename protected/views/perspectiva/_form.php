<?php
/* @var $this PerspectivaController */
/* @var $model Perspectiva */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', $form);
 ?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'imagina'); ?>
		<?php echo $form->textArea($model,'imagina',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'imagina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rede_apoio'); ?>
		<?php echo $form->textArea($model,'rede_apoio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'rede_apoio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visitas'); ?>
		<?php echo $form->textArea($model,'visitas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'visitas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dados_brutos'); ?>
		<?php echo $form->textArea($model,'dados_brutos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dados_brutos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
