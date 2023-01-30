<?php

class ComponentsController extends Controller
{
	/**
     * Иницилизация класса
     */
	public function __construct()
	{
		$this->model = new Components();
		$this->view = new View();
	}
	
	/**
     * Индексная страница
     */
	public function actionIndex()
	{
		$data = $this->model->get_data();	
		
		return $this->view->generate('components_view.php', 'template_view.php', $data);
	}
}