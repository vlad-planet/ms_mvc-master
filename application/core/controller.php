<?php

class Controller {
	
	public $model;
	public $view;
	
	public function __construct()
	{
		$this->view = new View();
	}

	/**
     * Действие (action), вызываемое по умолчанию
	 * 
     */
	public function actionIndex()
	{
		// todo	
	}
}
