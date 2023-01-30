<?php
/**
 * Модель данных Components
 */
class Components extends Model
{
	
	public function get_data()
	{	
		return array(

			array(
				'Name' => 'EventDispatcher',
				'Description' => 'Компонент EventDispatcher предоставляет инструменты, которые позволяют компонентам вашего приложения общаться друг с другом, запуская события и слушая их.'
			),

			array(
				'Name' => 'Messenger',
				'Description' => 'Компонент Messenger помогает приложениям отправлять и принимать сообщения из других приложений или через очереди сообщений.'
			),

			array(
				'Name' => 'Security',
				'Description' => 'Компонент Security предоставляет полную систему безопасности для вашего веб-приложения. Он поставляется с инструментами для аутентификации, используя базовую HTTP-аутентификацию.'
			),

			array(
				'Name' => 'Workflow',
				'Description' => 'Компонент Workflow предоставляет инструменты для управления рабочим процессом или конечной машиной.'
			),

		);
	}
}
