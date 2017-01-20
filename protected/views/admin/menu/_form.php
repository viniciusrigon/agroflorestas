<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são necessários.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IdGrupo'); ?>
		<?php
                
                echo $form->dropDownList($model, 'IdGrupo', 
                CHtml::listData(Grupo::model()->findAll(), 'Id', 'Nome'), array('empty'=>'Escolha um grupo'));
                ?>
                
		<?php echo $form->error($model,'IdGrupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomeMenu'); ?>
		<?php echo $form->textField($model,'nomeMenu',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nomeMenu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'urlMenu'); ?>
		<?php echo $form->textField($model,'urlMenu',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'urlMenu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
