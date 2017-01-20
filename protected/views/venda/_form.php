<?php
/* @var $this VendaController */
/* @var $model Venda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	$form = $this->beginWidget('CActiveForm', $form);
?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'produto_vendido'); ?>
		<?php echo $form->textField($model,'produto_vendido',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'produto_vendido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidade'); ?>
		<?php echo $form->textField($model,'unidade',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'unidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade'); ?>
		<?php echo $form->error($model,'quantidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'preco_unitario'); ?>
		<?php echo $form->textField($model,'preco_unitario',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'preco_unitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
