<?php
declare(strict_types=1);

namespace App\Infrastructure\Controllers;

use App\Application\Services\UserService;
use App\Http\Controllers\Controller;
use App\Infrastructure\Requests\UserRegisterRequest;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
	
	public function __construct(
		protected UserService $userService
	) {}
	
	public function register(UserRegisterRequest $request): JsonResponse
	{
		$this->userService->registerUser(
			$request->input('name'),
			$request->input('email'),
			$request->input('password')
		);
		
		return response()->json(['message' => 'UserEntity registered successfully'], 201);
	}
}