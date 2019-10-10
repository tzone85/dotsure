<?php

namespace App\Helpers;
use App\Drivers\MySqlConnector;

/**
 * Class DB
 * @package App\Helpers
 */
class DB
{
	public static function getInstance()
	{
		$connector = new MySqlConnector("127.0.0.1", 3306, "dotsure", "root", "PholaMine01");

		return $connector->getConnection();
	}
}