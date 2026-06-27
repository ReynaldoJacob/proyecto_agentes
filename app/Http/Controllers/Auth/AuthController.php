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

    public function showChangePasswordForm()
    {
        return view('agent.password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password'         => ['required', 'min:8', 'confirmed'],
        ], [
            'current_password.required' => 'Ingresa tu contraseña actual.',
            'password.required'         => 'Ingresa una nueva contraseña.',
            'password.min'              => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed'        => 'Las contraseñas no coinciden.',
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->withErrors(['current_password' => 'La contraseña actual es incorrecta.'])->withInput();
        }

        auth()->user()->update([
            'password'         => Hash::make($request->password),
            'password_changed' => true,
        ]);

        return back()->with('success_password', 'Contraseña actualizada correctamente.');
    }

    public function changeEmail(Request $request)
    {
        $request->validate([
            'email'    => ['required', 'email', 'unique:users,email,' . auth()->id()],
            'password' => ['required'],
        ], [
            'email.required' => 'Ingresa un correo electrónico.',
            'email.email'    => 'El correo no es válido.',
            'email.unique'   => 'Este correo ya está en uso.',
            'password.required' => 'Confirma tu contraseña para cambiar el correo.',
        ]);

        if (!Hash::check($request->password, auth()->user()->password)) {
            return back()->withErrors(['email_password' => 'La contraseña es incorrecta.'])->withInput();
        }

        auth()->user()->update(['email' => $request->email]);

        return back()->with('success_email', 'Correo actualizado correctamente.');
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
