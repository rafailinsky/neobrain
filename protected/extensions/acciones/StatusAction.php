<?php
class StatusAction extends CAction
{

	public $model=null;
	public $redirect='index';
	public $campo='Status';

	function run()
	{
		if(empty($_GET['idContratos']))
			throw new CHttpException(404);
			
		$model=CActiveRecord::model($this->model)->findByPk($_GET['idContratos']);
		if($model===null)
			throw new CHttpException(404);
		$model->{$this->campo}=$model->{$this->campo}==1?0:1;
		
		if($model->update())
			$this->controller->redirect(array($this->redirect));
			
		throw new CHttpException(500);
		
	}

}
