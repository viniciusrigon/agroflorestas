<?php
/* @var $this IntegracaoManejoController */
/* @var $model IntegracaoManejo */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', $form); ?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'integracao_saf'); ?>
		<?php echo $form->textArea($model,'integracao_saf',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'integracao_saf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material_propativo'); ?>
		<?php echo $form->textArea($model,'material_propativo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'material_propativo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mudas_semestes'); ?>
		<?php echo $form->textArea($model,'mudas_semestes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mudas_semestes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viveitos_proximos'); ?>
		<?php echo $form->textArea($model,'viveitos_proximos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'viveitos_proximos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'custos_estimados_saf'); ?>
		<?php echo $form->textArea($model,'custos_estimados_saf',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'custos_estimados_saf'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
