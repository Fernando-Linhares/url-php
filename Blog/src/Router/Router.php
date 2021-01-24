<?php
namespace Router;

use Http\Controller;

class Router implements RouterInterface
{
	private static string $uri;

	final function __construct(){}

	final function __wakeup(){}

	public static function setRoute()
	{

		self::catchUri();

		if(isset(self::$uri)){

			switch (self::$uri) {
				case '/':
					self::_controller()->action();
					break;

				case '/example':
					self::_controller()->example();
					break;
				case '/example/post':
					self::_controller()->post($_POST);
					break;
			}
		}elseif(self::$uri){

		}
	}

	public static function catchUri()
	{
		self::$uri = $_SERVER['REQUEST_URI'];
	}
	public static function _controller()
	{
		return new Controller();

	}
	
}