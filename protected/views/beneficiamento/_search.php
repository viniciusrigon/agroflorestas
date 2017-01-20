<?php
/* @var $this BeneficiamentoController */
/* @var $model Beneficiamento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'beneficiamento_id'); ?>
		<?php echo $form->textField($model,'beneficiamento_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saf_id'); ?>
		<?php echo $form->textField($model,'saf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produto_beneficiado'); ?>
		<?php echo $form->textField($model,'produto_beneficiado',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'distancia'); ?>
		<?php echo $form->textField($model,'distancia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tecnica'); ?>
		<?php echo $form->textField($model,'tecnica',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produto_final'); ?>
		<?php echo $form->textField($model,'produto_final',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_producao'); ?>
		<?php echo $form->textField($model,'tipo_producao',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'escala_producao'); ?>
		<?php echo $form->textField($model,'escala_producao',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'destino_principal'); ?>
		<?php echo $form->textField($model,'destino_principal',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dificuldades_beneficiamento'); ?>
		<?php echo $form->textArea($model,'dificuldades_beneficiamento',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dificuldades_legislacao'); ?>
		<?php echo $form->textArea($model,'dificuldades_legislacao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'local'); ?>
		<?php echo $form->textArea($model,'local',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicio_beneficiamento'); ?>
		<?php echo $form->textArea($model,'inicio_beneficiamento',array('rows'=>6, 'cols'=>50)); ?>
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
		<?php echo $form->label($model,'entraves'); ?>
		<?php echo $form->textArea($model,'entraves',array('rows'=>6, 'cols'=>50)); ?>
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