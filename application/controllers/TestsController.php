<?php

class TestsController extends Controller
{
	/**
     * Индексная страница
	 * 
     */
	public function actionIndex()
	{
		return $this->view->generate('tests_view.php', 'template_view.php');
	}
}