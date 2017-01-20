<?php
/* @var $this AnimaisManejadosController */
/* @var $model AnimaisManejados */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'esp_ani_manejadas_id'); ?>
		<?php echo $form->textField($model,'esp_ani_manejadas_id'); ?>
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
		<?php echo $form->label($model,'familia'); ?>
		<?php echo $form->textField($model,'familia',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'funcao_ecologica_no_saf'); ?>
		<?php echo $form->textField($model,'funcao_ecologica_no_saf',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'origem'); ?>
		<?php echo $form->textField($model,'origem',array('size'=>50,'maxlength'=>50)); ?>
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
		<?php echo $form->label($model,'densidade'); ?>
		<?php echo $form->textField($model,'densidade',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porte'); ?>
		<?php echo $form->textField($model,'porte',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'informacoes_adicionais'); ?>
		<?php echo $form->textField($model,'informacoes_adicionais',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->