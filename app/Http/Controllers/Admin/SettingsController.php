<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class SettingsController extends Controller
{
    // Show Settings Page
    public function index()
    {
        $admin = Auth::user();

        if (!$admin) {
            return redirect()->route('admin.login');
        }

        return view('Admin.Settings.index', compact('admin'));
    }

    // Update Email or Password
    public function update(Request $request)
    {
        /** @var \App\Models\User|null $admin */
        $admin = Auth::user();

        if (!$admin) {
            return redirect()->route('admin.login');
        }

        try {

            /*
            |--------------------------------------------------------------------------
            | EMAIL UPDATE
            |--------------------------------------------------------------------------
            */

            if ($request->has('email')) {

                $validated = $request->validate([
                    'email' => [
                        'required',
                        'email',
                        'max:255',
                        Rule::unique('users', 'email')
                            ->ignore($admin->id),
                    ],
                ]);

                $admin->email = $validated['email'];
                $admin->save();

                return back()->with(
                    'success',
                    'Email updated successfully!'
                );
            }

            /*
            |--------------------------------------------------------------------------
            | PASSWORD UPDATE
            |--------------------------------------------------------------------------
            */

            $validated = $request->validate([
                'current_password' => [
                    'required',
                    'current_password',
                ],

                'new_password' => [
                    'required',
                    'string',
                    'min:8',
                    'confirmed',
                ],
            ]);

            $admin->password = Hash::make(
                $validated['new_password']
            );

            $admin->save();

            return back()->with(
                'success',
                'Password updated successfully!'
            );
        } catch (\Illuminate\Validation\ValidationException $e) {
            throw $e;
        } catch (\Throwable $e) {

            Log::error('Settings update failed', [
                'admin_id' => $admin->id,
                'error' => $e->getMessage(),
            ]);

            return back()->with(
                'error',
                'Settings could not be saved. Please check the application log.'
            );
        }
    }
}
