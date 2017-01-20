<?php
/* @var $this VegetaisManejadosController */
/* @var $model VegetaisManejados */
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
		<?php echo $form->labelEx($model,'familia_botanica'); ?>
		<?php echo $form->textField($model,'familia_botanica',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'familia_botanica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'funcao_ecologica_no_saf'); ?>
		<?php echo $form->textField($model,'funcao_ecologica_no_saf',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'funcao_ecologica_no_saf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'origem_plantio'); ?>
		<?php echo $form->textField($model,'origem_plantio',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'origem_plantio'); ?>
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
		<?php echo $form->labelEx($model,'espacamento'); ?>
		<?php echo $form->textField($model,'espacamento',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'espacamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'habito'); ?>
		<?php echo $form->textField($model,'habito',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'habito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacoes_adicionais'); ?>
		<?php echo $form->textField($model,'informacoes_adicionais',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'informacoes_adicionais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meio_implantacao'); ?>
		<?php echo $form->textField($model,'meio_implantacao',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'meio_implantacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
