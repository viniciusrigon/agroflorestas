<?php
/* @var $this ComercializacaoController */
/* @var $model Comercializacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'comercializacao_id'); ?>
		<?php echo $form->textField($model,'comercializacao_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saf_id'); ?>
		<?php echo $form->textField($model,'saf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produto_escoado'); ?>
		<?php echo $form->textField($model,'produto_escoado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transporte'); ?>
		<?php echo $form->textField($model,'transporte',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forma_escoamento'); ?>
		<?php echo $form->textField($model,'forma_escoamento',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_mercado'); ?>
		<?php echo $form->textField($model,'tipo_mercado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estrutura_comerc'); ?>
		<?php echo $form->textField($model,'estrutura_comerc',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'local_comerc'); ?>
		<?php echo $form->textField($model,'local_comerc',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumidor_final'); ?>
		<?php echo $form->textField($model,'consumidor_final',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dificuldade_comerc'); ?>
		<?php echo $form->textField($model,'dificuldade_comerc',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dificuldades_legislacao'); ?>
		<?php echo $form->textArea($model,'dificuldades_legislacao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicializacao'); ?>
		<?php echo $form->textArea($model,'inicializacao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'implantacao'); ?>
		<?php echo $form->textArea($model,'implantacao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pontos_positivos'); ?>
		<?php echo $form->textArea($model,'pontos_positivos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dificuldade'); ?>
		<?php echo $form->textArea($model,'dificuldade',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'receita_total'); ?>
		<?php echo $form->textField($model,'receita_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perc_receita_saf'); ?>
		<?php echo $form->textField($model,'perc_receita_saf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dados_brutos'); ?>
		<?php echo $form->textArea($model,'dados_brutos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->