<?php

class AdminController extends Controller
{
	/**
     * Индексная страница
     */
	public function actionIndex()
	{
		session_start();
		
		if ( $_SESSION['admin'] == "12345" )
		{
			return $this->view->generate('admin_view.php', 'template_view.php');
		}
		else
		{
			session_destroy();
			header('Location:/login/');
			//Route::ErrorPage404();
		}
	}

	public function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}

}
