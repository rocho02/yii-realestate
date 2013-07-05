<?php

class FileController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	public $_folder;
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
			'folderContext + create index admin ', //perform a check to ensure valid project context
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
		$model=new File;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		
		$model->id_folder = $this->_folder->id_folder;
		
		if(isset($_POST['File']))
		{
			$model->attributes=$_POST['File'];
			
			$model->image=CUploadedFile::getInstance($model,'image');
			$extension = $model->image->getExtensionName();
			$filename = time()."_".rand(1,10 ).$extension;
			
			$model->name = $filename;
			$model->original_name = $model->image->getName();
			
			if($model->save())
			{
				$path = $this->_folder->path . "/" . $this->_folder->name ;
				if ( !file_exists($path) )
					mkdir($path,0777,true);
				
				$file = $path ."/". $filename;
				$model->image->saveAs( $file );
				// redirect to success page
				$this->redirect(array('view','id'=>$model->id_file));
			}
			
// 			if($mode+l->save())
		}

		$this->render('create',array(
			'model'=>$model,
			'folder'=>$this->_folder,
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

		if(isset($_POST['File']))
		{
			$model->attributes=$_POST['File'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_file));
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
		$file = $this->loadModel($id);
		$this->loadFolder($file->id_folder);
		$path = $this->_folder->path . "/" . $this->_folder->name ;
		$filename = $path . "/" .$file->name;
		$file->delete();
		
		if ( file_exists($filename))
			unlink($filename);
		

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin','folder'=>$this->_folder->id_folder));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		
		$dataProvider=new CActiveDataProvider('File', array(
				'criteria'=>array(
						'condition'=>'id_folder=:id_folder',
						'params'=>array(':id_folder'=>$this->_folder->id_folder),
				),
		));
		
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
				'pid'=>$this->_folder->id_folder
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new File('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['File']))
			$model->attributes=$_GET['File'];

		$this->render('admin',array(
			'model'=>$model,
			'folder'=>$this->_folder,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return File the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=File::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param File $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='file-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
	public function filterFolderContext($filterChain)
	{
		//set the project identifier based on either the GET or POST input
		//request variables, since we allow both types for our actions
		$folder = null;
		if(isset($_GET['folder']))
			$folder = $_GET['folder'];
		else
			if(isset($_POST['folder']))
			$folder = $_POST['folder'];
		$this->loadFolder($folder);
		//complete the running of other filters and execute the	requested action
		$filterChain->run();
	}
	
	
	/**
	 * Protected method to load the associated Project model class
	 * @project_id the primary identifier of the associated Project
	 * @return object the Project data model based on the primary key
	 */
	protected function loadFolder($id_folder)
	{
		//if the project property is null, create it based on input id
		if($this->_folder === null)
		{
			$this->_folder=Folder::model()->findbyPk($id_folder);
			if($this->_folder===null)
			{
				throw new CHttpException(404,'The requested folder does not exist.');
			}
		}
		return $this->_folder;
	}
	
}
