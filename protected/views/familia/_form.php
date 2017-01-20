<?php
/* @var $this FamiliaController */
/* @var $model Familia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', $form); ?>	
	
	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'local_origem'); ?>
		<?php echo $form->textField($model,'local_origem',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'local_origem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'composicao_renda'); ?>
		<?php echo $form->textArea($model,'composicao_renda',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'composicao_renda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dados_brutos'); ?>
		<?php echo $form->textArea($model,'dados_brutos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dados_brutos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php 

$this->endWidget();
 ?>

</div><!-- form -->
