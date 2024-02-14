<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Events\RegisterUserEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

final class RegisterUserController extends Controller
{
    public function __invoke(RegisterUserRequest $request): RedirectResponse
    {
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make(strval($request->get('password'))),
        ]);

        RegisterUserEvent::dispatch($user);

        return redirect()->back();
    }
}
