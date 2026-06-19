<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle login request.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'role' => ['required', 'in:agente,admin'],
        ], [
            'email.required' => 'El correo electrónico es requerido.',
            'email.email' => 'El correo electrónico debe ser válido.',
            'password.required' => 'La contraseña es requerida.',
            'role.required' => 'El rol es requerido.',
        ]);

        // Check if user exists and has the correct role
        $user = User::where('email', $credentials['email'])
                    ->where('role', $credentials['role'])
                    ->first();

        if (!$user) {
            return back()
                ->withErrors(['email' => 'Las credenciales no coinciden con nuestros registros.'])
                ->withInput($request->only('email', 'role'));
        }

        // Check if user is active
        if (!$user->is_active) {
            return back()
                ->withErrors(['email' => 'Esta cuenta ha sido desactivada. Contacta con soporte.'])
                ->withInput($request->only('email', 'role'));
        }

        // Verify password
        if (!Hash::check($credentials['password'], $user->password)) {
            return back()
                ->withErrors(['password' => 'La contraseña es incorrecta.'])
                ->withInput($request->only('email', 'role'));
        }

        // Login user
        Auth::login($user, $request->filled('remember'));

        $request->session()->regenerate();

        // Redirect based on role
        if ($user->role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->intended('/agent/dashboard');
    }

    /**
     * Handle logout.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
