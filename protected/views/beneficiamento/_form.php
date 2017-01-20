<?php
/* @var $this BeneficiamentoController */
/* @var $model Beneficiamento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
	
	$form = $this->beginWidget('CActiveForm', $form);
	
?>	

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'produto_beneficiado'); ?>
		<?php echo $form->textField($model,'produto_beneficiado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'produto_beneficiado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distancia'); ?>
		<?php echo $form->textField($model,'distancia'); ?>
		<?php echo $form->error($model,'distancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tecnica'); ?>
		<?php echo $form->textField($model,'tecnica',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tecnica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produto_final'); ?>
		<?php echo $form->textField($model,'produto_final',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'produto_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_producao'); ?>
		<?php echo $form->textField($model,'tipo_producao',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tipo_producao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escala_producao'); ?>
		<?php echo $form->textField($model,'escala_producao',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'escala_producao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'destino_principal'); ?>
		<?php echo $form->textField($model,'destino_principal',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'destino_principal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dificuldades_beneficiamento'); ?>
		<?php echo $form->textArea($model,'dificuldades_beneficiamento',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dificuldades_beneficiamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dificuldades_legislacao'); ?>
		<?php echo $form->textArea($model,'dificuldades_legislacao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dificuldades_legislacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'local'); ?>
		<?php echo $form->textArea($model,'local',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicio_beneficiamento'); ?>
		<?php echo $form->textArea($model,'inicio_beneficiamento',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'inicio_beneficiamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'implantacao'); ?>
		<?php echo $form->textArea($model,'implantacao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'implantacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pontos_positivos'); ?>
		<?php echo $form->textArea($model,'pontos_positivos',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'pontos_positivos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entraves'); ?>
		<?php echo $form->textArea($model,'entraves',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'entraves'); ?>
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
