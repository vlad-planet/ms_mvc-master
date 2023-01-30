<?php

class View
{
	/**
	 * Генерация шаблона
	 *
	 * @param string $content_file - виды отображающие контент страниц;
	 * @param string $template_file - общий для всех страниц шаблон;
	 * @param array $data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
	 *
	 * @return void
	 */
	public function generate(string $content_view, string $template_view, array $data = null) : void
	{

		if(is_array($data)) {
			extract($data); // преобразуем элементы массива в переменные
		}

		//Динамически подключаем общий шаблон (внешний вид)
		include 'application/views/'.$template_view;
	}
}
