<?php
declare(strict_types=1);

namespace App\Application\Services;

use App\Core\Entities\UserEntity;
use App\Core\Interfaces\UserRepositoryInterface;

class UserService
{
	public function __construct(
		protected UserRepositoryInterface $userRepository
	) {}
	
	public function registerUser(
		string $name,
		string $email,
		string $password
	): void {
		$user = new UserEntity($name, $email, $password);
		$this->userRepository->create($user);
	}
}