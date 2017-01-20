<?php
/* @var $this PraticasManejoController */
/* @var $model PraticasManejo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', $form); ?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'area_manejada'); ?>
		<?php echo $form->textField($model,'area_manejada'); ?>
		<?php echo $form->error($model,'area_manejada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APP'); ?>
		<?php echo $form->dropDownList($model, 'APP', array('S'=>'Sim', 'N'=>'Não')); ?>
		
		<?php echo $form->error($model,'APP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reserva_legal'); ?>
		<?php echo $form->dropDownList($model, 'reserva_legal', array('S'=>'Sim', 'N'=>'Não')); ?>
		<?php echo $form->error($model,'reserva_legal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'historico'); ?>
		<?php echo $form->textArea($model,'historico',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'historico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antes_saf'); ?>
		<?php echo $form->textField($model,'antes_saf',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'antes_saf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adubacao'); ?>
		<?php echo $form->textArea($model,'adubacao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'adubacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_pessoas_manejo'); ?>
		<?php echo $form->textField($model,'num_pessoas_manejo'); ?>
		<?php echo $form->error($model,'num_pessoas_manejo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terceirizado'); ?>
		<?php echo $form->dropDownList($model, 'terceirizado', array('S'=>'Sim', 'N'=>'Não')); ?>
		<?php echo $form->error($model,'terceirizado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mutirao'); ?>
		<?php echo $form->dropDownList($model, 'mutirao', array('S'=>'Sim', 'N'=>'Não')); ?>
		<?php echo $form->error($model,'mutirao'); ?>
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
