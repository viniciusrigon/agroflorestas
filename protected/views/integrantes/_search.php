<?php
/* @var $this IntegrantesController */
/* @var $model Integrantes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'integrantes_id'); ?>
		<?php echo $form->textField($model,'integrantes_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familia_id'); ?>
		<?php echo $form->textField($model,'familia_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano_nasc'); ?>
		<?php echo $form->textField($model,'ano_nasc'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentesco'); ?>
		<?php echo $form->textField($model,'parentesco',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ocupacao'); ?>
		<?php echo $form->textField($model,'ocupacao',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempo_residencia'); ?>
		<?php echo $form->textField($model,'tempo_residencia',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->