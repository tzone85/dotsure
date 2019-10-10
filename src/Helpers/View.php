<?php

namespace App\Helpers;

/**
 * Class View
 * @package App\Helpers
 */
class View
{
	/** @var string */
	protected $filename;
	/**
	 * @var array
	 */
	protected $cache;
	/**
	 * @var array
	 */
	protected $values = [];

	public function __construct(string $filename)
	{
		$this->filename = realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR . '../views/' . $filename . ".php";
		$this->cache = [];
	}

	public static function factory(string $filename): View
	{
		return new View($filename);
	}

	public function set(string $key, $value): View
	{
		$this->values[$key] = $value;
		return $this;
	}

	public function render(): string
	{
		if (!file_exists($this->filename)) {
			return "{$this->filename} does not exist.<br />";
		}

		if (!isset($this->cache[$this->filename])) {
			$this->cache[$this->filename] = "?" . ">\n" . implode("", file($this->filename)) . "<" . "?php\n";
		}

		ob_start();
		extract($this->values);
		eval($this->cache[$this->filename]);
		$output = ob_get_contents();
		ob_end_clean();

		return $output;
	}

	public function display()
	{
		echo $this->render();
	}
}