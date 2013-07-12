<?php
class AdminRoleCommand extends CConsoleCommand
{
	private $_authManager;
	public function getHelp()
	{
		$description = "DESCRIPTION\n";
		$description .= ' '."This command adds the 'Owner' role for user with id 1.\n";
		return parent::getHelp() . $description;
	}

	/**
	 * The default action - create the RBAC structure.
	 */
	public function actionIndex()
	{
		$this->ensureAuthManagerDefined();
		//provide the oportunity for the use to abort the request
		$message = "This command will add the 'Owner'role for the user with pk 1\n";
		$message .= "Would you like to continue?";
		//check the input from the user and continue if
		//they indicated yes to the above question
		if($this->confirm($message))
		{
			$auth=Yii::app()->authManager;
			$auth->assign('owner',1);
			
			$auth->assign('member',2);
			
			$auth->assign('reader',3);
			
			//provide a message indicating success
			echo "Roles added successfully .\n";
		}
		else
			echo "Operation cancelled.\n";
	}

	public function actionDelete()
	{
		$this->ensureAuthManagerDefined();
		$message = "This command will clear all assignments.\n";
		$message .= "Would you like to continue?";
		//check the input from the user and continue if they indicated
		//yes to the above question
		if($this->confirm($message))
		{
			$this->_authManager->clearAuthAssignments();
			echo "Assignments removed.\n";
		}
		else
			echo "Delete operation cancelled.\n";
	}
	protected function ensureAuthManagerDefined()
	{
		//ensure that an authManager is defined as this is mandatory for creating an auth heirarchy
		if(($this->_authManager=Yii::app()->authManager)===null)
		{
			$message = "Error: an authorization manager, named 'authManager' must be con-figured to use this command.";
			$this->usageError($message);
		}
	}
}