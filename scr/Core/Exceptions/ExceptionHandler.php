<?php 

namespace O2\Exceptions;

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Handler\PlainTextHandler;
use Whoops\Handler\CallbackHandler;
use Whoops\Handler\JsonResponseHandler;
use Whoops\Handler\XmlResponseHandler;


/**
 *
 * Handle all exception when come throught framework.
 *
 */
class ExceptionHandler
{
	/**
	 *
	 * Check if enable the debug.
	 *
	 */
	public function debugTrue()
	{
		return true;
	}

	/**
	 *
	 * Register exeption handler.
	 *
	 */
	public function exceptionRegister()
	{
		$whoops = new Run;

		$this->enableError();

		if ($this->debugTrue()) {
			
			$whoops->pushHandler(new PrettyPageHandler());
		}

		$whoops->register();
	}

	/**
	 *
	 * Enable error reporting.
	 *
	 */
	public function enableError()
	{
		error_reporting(E_ALL ^ E_WARNING ^ E_USER_WARNING ^ E_NOTICE ^ E_DEPRECATED );
	}
}