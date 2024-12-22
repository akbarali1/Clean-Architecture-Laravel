<?php
declare(strict_types=1);

namespace App\Core\Interfaces;

use App\Core\Entities\UserEntity;

interface UserRepositoryInterface
{
	public function create(UserEntity $user): void;
}