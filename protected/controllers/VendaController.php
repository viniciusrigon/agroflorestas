<?php

class VendaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'edit'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionEdit($saf_id)
	{
		$criteria = new CDbCriteria;
		$criteria->condition = 'saf_id = :saf_id';
		$criteria->params=array(':saf_id'=>$saf_id);
		$model = Venda::model()->find($criteria);
		
		if ($model == null)
		{
			$model = new Venda;
			$form = new CActiveForm;
			
			$form->id = 'venda-form';
			$form->action = array('/venda/create', 'saf_id' => $saf_id);
			$form->enableAjaxValidation  = false;
			
			$this->render('create',array(
				'model'=>$model,
				'form'=>$form,
			));
			
		}
		else
		{
			$form = new CActiveForm;
			
			$form->id = 'venda-form';
			$form->action = array('/venda/update', 'id'=>$model->rede_socio_id);
			$form->enableAjaxValidation  = false;
			
			$this->render('update',array(
				'model'=>$model,
				'form'=>$form,
			));
		}
		
	}
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($saf_id)
	{
		$model=new Venda;

		$model->saf_id = $saf_id;
		
		$form = new CActiveForm;
		$form->id = 'venda-form';
		$form->action = array('/venda/create', 'saf_id' => $saf_id);
		$form->enableAjaxValidation  = false;
	
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Venda']))
		{
			$model->attributes=$_POST['Venda'];
			if($model->save())
				$this->redirect(array('agrofloresta/view','id'=>$model->saf_id));
		}

		$this->render('create',array(
			'model'=>$model,
			'form'=>$form,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		$form = new CActiveForm;
		
		$form->id = 'venda-form';
		$form->action = array('/venda/update', 'id'=>$model->rede_socio_id);
		$form->enableAjaxValidation  = false;
			

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Venda']))
		{
			$model->attributes=$_POST['Venda'];
			if($model->save())
				$this->redirect(array('agrofloresta/view','id'=>$model->saf_id));
		}

		$this->render('update',array(
			'model'=>$model,
			'form'=>$form,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Venda');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Venda('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Venda']))
			$model->attributes=$_GET['Venda'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Venda the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Venda::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Venda $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='venda-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
