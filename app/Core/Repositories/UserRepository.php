<?php
declare(strict_types=1);

namespace App\Core\Repositories;

use App\Core\Entities\UserEntity;
use App\Core\Interfaces\UserRepositoryInterface;
use App\Models\User as UserModel;

class UserRepository implements UserRepositoryInterface
{
	public function create(UserEntity $user): void
	{
		UserModel::query()->create([
			'name'     => $user->name,
			'email'    => $user->email,
			'password' => $user->password,
		]);
	}
}