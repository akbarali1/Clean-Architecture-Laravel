<?php
declare(strict_types=1);

namespace App\Core\Entities;

class UserEntity
{
	public function __construct(
		public string $name,
		public string $email,
		public string $password
	) {
		$this->password = bcrypt($this->password);
	}
}