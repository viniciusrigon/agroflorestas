<?php

class TestController extends Controller{
	
    // no layouts here
	public $layout = '';
         
 
	public function actionExcel(){
		
		Yii::import('ext.phpexcel.XPHPExcel');      
		$phpExcel = XPHPExcel::createPHPExcel();
		

		 
		 // Turn off our amazing library autoload 
		 //spl_autoload_unregister(array('YiiBase','autoload'));        
		
		 //
		 // making use of our reference, include the main class
		 // when we do this, phpExcel has its own autoload registration
		 // procedure (PHPExcel_Autoloader::Register();)
		//$phpExcelPath = Yii::getPathOfAlias('ext.phpexcel');
		//include($phpExcelPath . DIRECTORY_SEPARATOR . 'vendors/PHPExcel.php');
	 
		 // Create new PHPExcel object
		 //$objPHPExcel = new PHPExcel();
	 
		 // Set properties
		 
	 
		   // 
		   // Once we have finished using the library, give back the 
		   // power to Yii... 
		 //  spl_autoload_register(array('YiiBase','autoload'));
		
		}

}
?>
