<?php
declare(strict_types=1);

namespace App\Infrastructure\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
	public function rules(): array
	{
		return [
			'name'     => 'required|string|max:255',
			'email'    => 'required|email|unique:users',
			'password' => 'required|min:6',
		];
	}
}