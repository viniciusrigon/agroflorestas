<?php
/* @var $this VisitaController */
/* @var $model Visita */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'visita_id'); ?>
		<?php echo $form->textField($model,'visita_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saf_id'); ?>
		<?php echo $form->textField($model,'saf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avaliacao_produtor'); ?>
		<?php echo $form->textArea($model,'avaliacao_produtor',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacoes'); ?>
		<?php echo $form->textArea($model,'observacoes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->