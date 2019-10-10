<?php

namespace App\Drivers;

/**
 * Class MySqlConnector
 * @package App\Drivers
 */
class MySqlConnector extends AbstractConnector {

	/**
	 * AbstractConnector constructor.
	 * @param string $host
	 * @param int $port
	 * @param string $databaseName
	 * @param string $user
	 * @param string $password
	 */
	public function __construct(string $host, int $port, string $databaseName, string $user, string $password)
	{
		$this->host = $host;
		$this->port = $port;
		$this->databaseName = $databaseName;
		$this->user = $user;
		$this->password = $password;
	}

	/**
	 * @return string
	 */
	protected function getDriver(): string
	{
		return "mysql";
	}
}