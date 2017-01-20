<?php
/* @var $this PraticasManejoController */
/* @var $model PraticasManejo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'manejo_id'); ?>
		<?php echo $form->textField($model,'manejo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saf_id'); ?>
		<?php echo $form->textField($model,'saf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'propriedade_id'); ?>
		<?php echo $form->textField($model,'propriedade_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area_manejada'); ?>
		<?php echo $form->textField($model,'area_manejada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APP'); ?>
		<?php echo $form->textField($model,'APP',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserva_legal'); ?>
		<?php echo $form->textField($model,'reserva_legal',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'historico'); ?>
		<?php echo $form->textArea($model,'historico',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antes_saf'); ?>
		<?php echo $form->textField($model,'antes_saf',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adubacao'); ?>
		<?php echo $form->textArea($model,'adubacao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_pessoas_manejo'); ?>
		<?php echo $form->textField($model,'num_pessoas_manejo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terceirizado'); ?>
		<?php echo $form->textField($model,'terceirizado',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mutirao'); ?>
		<?php echo $form->textField($model,'mutirao',array('size'=>1,'maxlength'=>1)); ?>
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