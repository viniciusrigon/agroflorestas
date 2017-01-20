<?php
/* @var $this VendaController */
/* @var $model Venda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'venda_id'); ?>
		<?php echo $form->textField($model,'venda_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'saf_id'); ?>
		<?php echo $form->textField($model,'saf_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produto_vendido'); ?>
		<?php echo $form->textField($model,'produto_vendido',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unidade'); ?>
		<?php echo $form->textField($model,'unidade',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preco_unitario'); ?>
		<?php echo $form->textField($model,'preco_unitario',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->