<?php

class AdvertismentController extends Controller
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
				'actions'=>array('create','update'),
				'users'=>array('@'),
				'roles'=>array('createAdvertisment'),
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
	public function actionCreate()
	{
		$advertisemnt=new Advertisment;
		$realEstate = new RealEstate;
		$realEstateProperties = new RealEstateProperties;

		$advertisemnt->id_user = Yii::app()->user->id;
		$advertisemnt->verified = 0;
		
		
		//Yii::app()->clientScript->registerScriptFile(Yii::app()->getClientScript()->getCoreScriptUrl() . '/jui/js/jquery-ui-i18n.min.js');
		
		if(isset($_POST['Advertisment']) && isset($_POST['RealEstate']) && isset( $_POST['RealEstateProperties'] )  )
		{
				
			print " real estate valid: " . print_r( $_POST['Advertisment'] );
			
			$advertisemnt->attributes = $_POST['Advertisment'];
			$realEstate->attributes = $_POST['RealEstate'];
			$realEstateProperties->attributes = $_POST['RealEstateProperties'];
			
			$advertisemnt->flags = BitUtils::set($advertisemnt->flags, Advertisment::FLAG_SALE, $advertisemnt->sale);
			$advertisemnt->flags = BitUtils::set($advertisemnt->flags, Advertisment::FLAG_RENT, $advertisemnt->rent);

			$advertisemnt->type = Advertisment::TYPE_NORMAL;
			
			// validate BOTH $a and $b
			$valid=$realEstate->validate() ;
			
			if ( $valid){
				print " real estate valid: " . $valid;
			}else{
				print " real estate invalid: " . print_r( $realEstate->getErrors() );
			}
			
			if($valid){
				$transaction = Yii::app()->db->beginTransaction();
				$success = $realEstate->save(false);
				
				$advertisemnt->id_real_estate = $realEstate->id_real_estate;
				$realEstateProperties->id_real_estate = $realEstate->id_real_estate;
				
				if ( $success )
					$realEstateProperties->save(false);
				
				$success = $success ? $advertisemnt->save() : $success;
				
				if ($success){
					$transaction->commit();
					$this->redirect(array('view','id'=>$advertisemnt->id_advertisment));
				}
				else
					$transaction->rollBack();
			}
			
		}else{
			$time = time();
			$month_later = date("Y-m-d", strtotime("+1 month", $time));
			$advertisemnt->validity_time = $month_later;
		}

		$this->render('create',array(
			'model'=>$advertisemnt,
			'realEstate'=>$realEstate,
			'realEstateProperties'=>$realEstateProperties,
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Advertisment']))
		{
			$model->attributes=$_POST['Advertisment'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_advertisment));
		}

		$this->render('update',array(
			'model'=>$model,
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
		$dataProvider=new CActiveDataProvider('Advertisment');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Advertisment('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Advertisment']))
			$model->attributes=$_GET['Advertisment'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Advertisment the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Advertisment::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Advertisment $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='advertisment-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
