<?php

namespace App\Drivers;
use PDO;

/**
 * Class AbstractConnector
 * @package App\Drivers
 */
abstract class AbstractConnector
{

	/** @var string */
	protected $host;

	/** @var int */
	protected $port;

	/** @var string */
	protected $databaseName;

	/** @var string */
	protected $user;

	/** @var string */
	protected $password;

	/** @var PDO */
	public $connection;

	/**
	 * AbstractConnector constructor.
	 * @param string $host
	 * @param int $port
	 * @param string $databaseName
	 * @param string $user
	 * @param string $password
	 */

	public abstract function __construct(string $host, int $port, string $databaseName, string $user, string $password);

	protected abstract function getDriver(): string;

	/**
	 * @return PDO
	 */
	public function getConnection(): PDO
	{

		if (!$this->connection) {
			$dbOptions = [
				//PDO::ATTR_DEFAULT_FECTH_MODE => PDO::FETCH_OBJ,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

			];

			$dsn = sprintf( '%s:dbname=%s;host=%s', $this->getDriver(),$this->databaseName, $this->host);

			$this->connection = new PDO( $dsn, $this->user, $this->password, $dbOptions);
		}

		return $this->connection;
	}


}