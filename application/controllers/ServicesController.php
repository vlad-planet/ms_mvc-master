<?php

class ServicesController extends Controller
{
	/**
     * Индексная страница
     */
	public function actionIndex()
	{
		return $this->view->generate('services_view.php', 'template_view.php');
	}
}
