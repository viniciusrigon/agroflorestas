<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nome'); ?>
		<?php echo $form->textField($model,'Nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Login'); ?>
		<?php echo $form->textField($model,'Login',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'Login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Senha'); ?>
		<?php echo $form->passwordField($model,'Senha',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Senha'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Grupo'); ?>
		<?
			$list = CHtml::listData(Grupo::model()->findAll(),'Id','Nome'); 
		?>
		<?php echo $form->dropDownList($model,'IdGrupo',$list, array('empty'=>'Selecione')); ?>	
		<?php echo $form->error($model,'IdGrupo'); ?>	
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form --CHtml::listData(Grupo::model()->findAll(),'Id','Name')>
