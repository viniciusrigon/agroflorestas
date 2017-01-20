<?php
/* @var $this PropriedadeController */
/* @var $model Propriedade */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'propriedade_id'); ?>
		<?php echo $form->textField($model,'propriedade_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saf_id'); ?>
		<?php echo $form->textField($model,'saf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area_total'); ?>
		<?php echo $form->textField($model,'area_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_areas_saf'); ?>
		<?php echo $form->textField($model,'num_areas_saf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'praticas_agroflorestais'); ?>
		<?php echo $form->textField($model,'praticas_agroflorestais',array('size'=>60,'maxlength'=>600)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perc_saf'); ?>
		<?php echo $form->textField($model,'perc_saf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perc_cultivo'); ?>
		<?php echo $form->textField($model,'perc_cultivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perc_hortas'); ?>
		<?php echo $form->textField($model,'perc_hortas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perc_app'); ?>
		<?php echo $form->textField($model,'perc_app'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perc_reservalegal'); ?>
		<?php echo $form->textField($model,'perc_reservalegal'); ?>
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