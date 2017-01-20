<?php
/* @var $this PerspectivaController */
/* @var $model Perspectiva */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'perspectiva_id'); ?>
		<?php echo $form->textField($model,'perspectiva_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saf_id'); ?>
		<?php echo $form->textField($model,'saf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imagina'); ?>
		<?php echo $form->textArea($model,'imagina',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rede_apoio'); ?>
		<?php echo $form->textArea($model,'rede_apoio',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visitas'); ?>
		<?php echo $form->textArea($model,'visitas',array('rows'=>6, 'cols'=>50)); ?>
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