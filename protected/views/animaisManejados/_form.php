<?php
/* @var $this AnimaisManejadosController */
/* @var $model AnimaisManejados */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'integrantes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_comum'); ?>
		<?php echo $form->textField($model,'nome_comum',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nome_comum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_cientifico'); ?>
		<?php echo $form->textField($model,'nome_cientifico',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nome_cientifico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familia'); ?>
		<?php echo $form->textField($model,'familia',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'familia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funcao_ecologica_no_saf'); ?>
		<?php echo $form->textField($model,'funcao_ecologica_no_saf',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'funcao_ecologica_no_saf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'origem'); ?>
		<?php echo $form->textField($model,'origem',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'origem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estrato'); ?>
		<?php echo $form->textField($model,'estrato',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'estrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utilidade'); ?>
		<?php echo $form->textField($model,'utilidade',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'utilidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'densidade'); ?>
		<?php echo $form->textField($model,'densidade',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'densidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porte'); ?>
		<?php echo $form->textField($model,'porte',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'porte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacoes_adicionais'); ?>
		<?php echo $form->textField($model,'informacoes_adicionais',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'informacoes_adicionais'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
