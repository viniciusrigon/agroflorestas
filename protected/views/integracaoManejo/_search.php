<?php
/* @var $this IntegracaoManejoController */
/* @var $model IntegracaoManejo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'integracao_id'); ?>
		<?php echo $form->textField($model,'integracao_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manejo_id'); ?>
		<?php echo $form->textField($model,'manejo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'integracao_saf'); ?>
		<?php echo $form->textArea($model,'integracao_saf',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'material_propativo'); ?>
		<?php echo $form->textArea($model,'material_propativo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mudas_semestes'); ?>
		<?php echo $form->textArea($model,'mudas_semestes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viveitos_proximos'); ?>
		<?php echo $form->textArea($model,'viveitos_proximos',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'custos_estimados_saf'); ?>
		<?php echo $form->textArea($model,'custos_estimados_saf',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->