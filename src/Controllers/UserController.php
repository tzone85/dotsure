<?php

namespace App\Controllers;

use App\Helpers\View;
use App\Models\User;

/**
 * Class UserController
 * @package App\Controllers
 */
class UserController
{
	public $user;
	public $view;

	public function __construct()
	{
		$this->user = new User();
		$this->view = View::factory("layout/main")
			->set('header', View::factory('partials/header')->render())
			->set('footer', View::factory('partials/footer')->render());
	}

	public function index()
	{
		$users = $this->user->findAll();

		$this->view->set("body", View::factory('pages/list')
			->set('users', $users)
			->render());
		  $this->view->display();
	}

	public function showCreate() {
		$this->view->set("body", View::factory('pages/create-form')
			->render());
		$this->view->display();
	}

	public function create(array $attributes)
	{
		$result = $this->user->insert($attributes);
		echo json_encode([
			'status' => $result,
		]);
	}

	public function showUpdate(int $id)
	{

		$user = $this->user->findOne($id);

		$this->view->set("body", View::factory('pages/update-form')
			->set('user', $user)
			->render());
		$this->view->display();
	}

	public function update(int $id, array $attributes)
	{
		$result = $this->user->update($id, $attributes);

		echo json_encode([
			'status' => $result
		]);
	}

	public function delete(int $id)
	{
		$result = $this->user->delete($id);

		echo json_encode([
			'status' => $result
		]);
	}
}