<?php
/**
 * Класс-маршрутизатор для определения запрашиваемой страницы.
 * Подключение контроллеров и моделей;
 */
class Route
{
	public static function start()
	{
		//контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name = 'Index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		//присвоиения имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		//присвоиения имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

		//сформирование префиксы
		$model_name = $controller_name;
		$controller_name = $controller_name.'Controller';
		$action_name = 'action'.$action_name;

		/*
		echo "Model: $model_name <br>";
		echo "Controller: $controller_name <br>";
		echo "Action: $action_name <br>";
		*/

		//подключение файла с классом модели (файла модели может и не быть)
		$model_file = strtolower($model_name).'.php';
		$model_path = "application/models/".$model_file;
		
		if(file_exists($model_path))
		{
			include "application/models/".$model_file;
		}

		//подключение файла с классом контроллера
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "application/controllers/".$controller_file;
		
		if(file_exists($controller_path))
		{
			include "application/controllers/".$controller_file;
		}
		else
		{
			//вызывать действие исключения
			Route::ErrorPage404();
		}
		
		//создать контроллер
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			//вызывать действие контроллера
			$controller->$action();
		}
		else
		{
			//вызывать действие исключения
			Route::ErrorPage404();
		}
	}

	public function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'main/error');
    }
    
}
