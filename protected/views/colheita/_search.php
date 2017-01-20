<?php
/* @var $this ColheitaController */
/* @var $model Colheita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'colheita_id'); ?>
		<?php echo $form->textField($model,'colheita_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vegetais_id'); ?>
		<?php echo $form->textField($model,'vegetais_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produto'); ?>
		<?php echo $form->textField($model,'produto',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forma_colheita'); ?>
		<?php echo $form->textField($model,'forma_colheita',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ferramentas'); ?>
		<?php echo $form->textField($model,'ferramentas',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frequencia'); ?>
		<?php echo $form->textField($model,'frequencia',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodo_do_ano'); ?>
		<?php echo $form->textField($model,'periodo_do_ano',array('size'=>50,'maxlength'=>50)); ?>
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