<?php
/* @var $this ComercializacaoController */
/* @var $model Comercializacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 

$form = $this->beginWidget('CActiveForm', $form);

?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'produto_escoado'); ?>
		<?php echo $form->textField($model,'produto_escoado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'produto_escoado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transporte'); ?>
		<?php echo $form->textField($model,'transporte',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'transporte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forma_escoamento'); ?>
		<?php echo $form->textField($model,'forma_escoamento',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'forma_escoamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_mercado'); ?>
		<?php echo $form->textField($model,'tipo_mercado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tipo_mercado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estrutura_comerc'); ?>
		<?php echo $form->textField($model,'estrutura_comerc',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'estrutura_comerc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'local_comerc'); ?>
		<?php echo $form->textField($model,'local_comerc',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'local_comerc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consumidor_final'); ?>
		<?php echo $form->textField($model,'consumidor_final',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'consumidor_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dificuldade_comerc'); ?>
		<?php echo $form->textField($model,'dificuldade_comerc',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dificuldade_comerc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dificuldades_legislacao'); ?>
		<?php echo $form->textArea($model,'dificuldades_legislacao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dificuldades_legislacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inicializacao'); ?>
		<?php echo $form->textArea($model,'inicializacao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'inicializacao'); ?>
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
		<?php echo $form->labelEx($model,'dificuldade'); ?>
		<?php echo $form->textArea($model,'dificuldade',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dificuldade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receita_total'); ?>
		<?php echo $form->textField($model,'receita_total'); ?>
		<?php echo $form->error($model,'receita_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perc_receita_saf'); ?>
		<?php echo $form->textField($model,'perc_receita_saf'); ?>
		<?php echo $form->error($model,'perc_receita_saf'); ?>
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
