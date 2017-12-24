<?php 

namespace O2\Initializer;

use O2\Exceptions\ExceptionHandler;

/**
* Register Class.
*/
class Application
{	
	/**
	 *
	 * When framework load time register the initializer.
	 *
	 */
	public function init()
	{
		$this->loadComposer();

		$this->exception(new ExceptionHandler);
	}

	/**
	 *
	 * Load the exceptions when come through framework.
	 *
	 */
	public function exception(ExceptionHandler $exception)
	{
		$exception->exceptionRegister();	
	}

	/**
	 *
	 * Load the composer and require.
	 *
	 */
	public function loadComposer()
	{
		require_once __DIR__ . '/../../../vendor/autoload.php';
	}
}