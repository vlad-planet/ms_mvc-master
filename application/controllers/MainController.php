<?php

class MainController extends Controller
{

	/**
     * Индексная страница
     */
	public function actionIndex()
	{
		return $this->view->generate('main_view.php', 'template_view.php');
	}
	
	/**
     * Страница об ошибке
     */
	public function actionError()
	{
		return $this->view->generate('404_view.php', 'template_view.php');
	}
}