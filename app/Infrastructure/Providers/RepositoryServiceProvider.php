<?php
declare(strict_types=1);

namespace App\Infrastructure\Providers;

use App\Core\Interfaces\UserRepositoryInterface;
use App\Core\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
	public $bindings = [
		UserRepositoryInterface::class => UserRepository::class,
	];
}