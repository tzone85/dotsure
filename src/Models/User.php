<?php

namespace App\Models;

use App\Helpers\DB;
use PDO;

/**
 * Class User
 * @package App\Model
 */
class User
{
	public $firstName;
	public $surname;
	public $email;
	public $userName;
	public $password;

	public function findOne(int $id): User {
		try {
			$query = <<<SQL
 			SELECT * FROM users WHERE id = :id;
SQL;
			$dbh = DB::getInstance();
			$stmt = $dbh->prepare($query);
			$stmt->execute([
				'id'=> $id
			]);

			return $stmt->fetchObject(User::class);
		} catch (PDOExecption $e) {
			print "Error!: " . $e->getMessage()."</br>";
		}
	}

	public function findAll(): array {
		try {
			$query = <<<SQL
 			SELECT * FROM users;
SQL;
			$dbh = DB::getInstance();
			$stmt = $dbh->query($query);



			return $stmt->fetchAll(PDO::FETCH_CLASS, static::class);
		} catch (PDOExecption $e) {
			print "Error!: " . $e->getMessage()."</br>";
		}
	}

	public function insert(array $attributes): bool
	{
		$dbh = DB::getInstance();

		try {
			$query = <<<SQL
 			INSERT INTO users (first_name, surname, email, username, password)
			VALUES (:fname, :sname, :email, :uname, :pword);
SQL;
			$stmt = $dbh->prepare($query);
			$dbh->beginTransaction();
			$stmt->execute([
				'fname' => $attributes['first_name'],
				'sname' => $attributes['surname'],
				'email' => $attributes['email'],
				'uname' => $attributes['username'],
				'pword' => $attributes['password']
			]);
			$dbh->commit();
			return true;
		} catch (PDOExecption $e) {
			$dbh->rollback();
			print "Error!: " . $e->getMessage() . "</br>";
		}
		return false;
	}

	public function update(int $id, array $attributes): bool
	{
		try {
			$query = <<<SQL
 			UPDATE users SET first_name = :fname , surname = :sname,
 			 	email = :email, username = :uname, password = :pword
			WHERE id = :id;
SQL;
			$dbh = DB::getInstance();
			$stmt = $dbh->prepare($query);
			$dbh->beginTransaction();
			$stmt->execute([
				'id'=> $id,
				'fname' => $attributes['first_name'],
				'sname' => $attributes['surname'],
				'email' => $attributes['email'],
				'uname' => $attributes['username'],
				'pword' => $attributes['password']
			]);
			$dbh->commit();


			return true;
		} catch (PDOExecption $e) {
			$dbh->rollback();
			print "Error!: " . $e->getMessage() . "</br>";
		}
		return false;
	}

	public function delete(int $id): bool
	{
		try {
			$query = <<<SQL
 			DELETE FROM users WHERE id = :id;
SQL;
			$dbh = DB::getInstance();
			$stmt = $dbh->prepare($query);
			$dbh->beginTransaction();
			$stmt->execute([
				'id'=> $id
			]);
			$dbh->commit();


			return true;
		} catch (PDOExecption $e) {
			$dbh->rollback();
			print "Error!: " . $e->getMessage() . "</br>";
		}
		return false;
	}
}