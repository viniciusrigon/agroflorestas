<?php
/* @var $this PropriedadeController */
/* @var $model Propriedade */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	$form = $this->beginWidget('CActiveForm', $form);
 ?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'area_total'); ?>
		<?php echo $form->textField($model,'area_total'); ?>
		<?php echo $form->error($model,'area_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_areas_saf'); ?>
		<?php echo $form->textField($model,'num_areas_saf'); ?>
		<?php echo $form->error($model,'num_areas_saf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'praticas_agroflorestais'); ?>
		<?php echo $form->textField($model,'praticas_agroflorestais',array('size'=>60,'maxlength'=>600)); ?>
		<?php echo $form->error($model,'praticas_agroflorestais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perc_saf'); ?>
		<?php echo $form->textField($model,'perc_saf'); ?>
		<?php echo $form->error($model,'perc_saf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perc_cultivo'); ?>
		<?php echo $form->textField($model,'perc_cultivo'); ?>
		<?php echo $form->error($model,'perc_cultivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perc_hortas'); ?>
		<?php echo $form->textField($model,'perc_hortas'); ?>
		<?php echo $form->error($model,'perc_hortas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perc_app'); ?>
		<?php echo $form->textField($model,'perc_app'); ?>
		<?php echo $form->error($model,'perc_app'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perc_reservalegal'); ?>
		<?php echo $form->textField($model,'perc_reservalegal'); ?>
		<?php echo $form->error($model,'perc_reservalegal'); ?>
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
