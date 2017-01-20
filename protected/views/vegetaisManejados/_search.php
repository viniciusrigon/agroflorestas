<?php
/* @var $this VegetaisManejadosController */
/* @var $model VegetaisManejados */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'esp_veg_manejadas_id'); ?>
		<?php echo $form->textField($model,'esp_veg_manejadas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saf_id'); ?>
		<?php echo $form->textField($model,'saf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manejo_id'); ?>
		<?php echo $form->textField($model,'manejo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_comum'); ?>
		<?php echo $form->textField($model,'nome_comum',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nome_cientifico'); ?>
		<?php echo $form->textField($model,'nome_cientifico',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'familia_botanica'); ?>
		<?php echo $form->textField($model,'familia_botanica',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funcao_ecologica_no_saf'); ?>
		<?php echo $form->textField($model,'funcao_ecologica_no_saf',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'origem_plantio'); ?>
		<?php echo $form->textField($model,'origem_plantio',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estrato'); ?>
		<?php echo $form->textField($model,'estrato',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utilidade'); ?>
		<?php echo $form->textField($model,'utilidade',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'espacamento'); ?>
		<?php echo $form->textField($model,'espacamento',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'habito'); ?>
		<?php echo $form->textField($model,'habito',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacoes_adicionais'); ?>
		<?php echo $form->textField($model,'informacoes_adicionais',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meio_implantacao'); ?>
		<?php echo $form->textField($model,'meio_implantacao',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->