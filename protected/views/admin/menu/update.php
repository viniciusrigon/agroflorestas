<?php
/* @var $this MenuController */
/* @var $model Menu */

?>

<h1>Menu <?php echo $model->nomeMenu; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
