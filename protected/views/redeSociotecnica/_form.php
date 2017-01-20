<?php
/* @var $this RedeSociotecnicaController */
/* @var $model RedeSociotecnica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	$form = $this->beginWidget('CActiveForm', $form);
?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'assistencia'); ?>
		<?php echo $form->textArea($model,'assistencia',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'assistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membro_assoc'); ?>
		<?php echo $form->textArea($model,'membro_assoc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'membro_assoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beneficio_assoc'); ?>
		<?php echo $form->textArea($model,'beneficio_assoc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'beneficio_assoc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dificuldades'); ?>
		<?php echo $form->textArea($model,'dificuldades',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dificuldades'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utiliza_credito'); ?>
		<?php echo $form->textArea($model,'utiliza_credito',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'utiliza_credito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acesso_credito'); ?>
		<?php echo $form->textArea($model,'acesso_credito',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'acesso_credito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'participa_cursos'); ?>
		<?php echo $form->textArea($model,'participa_cursos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'participa_cursos'); ?>
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
