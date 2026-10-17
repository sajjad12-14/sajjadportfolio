<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HomeSectionController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\Auth\AuthController;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Admin Login
    |--------------------------------------------------------------------------
    | Login routes are PUBLIC.
    |--------------------------------------------------------------------------
    */

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');


    /*
    |--------------------------------------------------------------------------
    | Protected Admin Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware('admin')->group(function () {

        // Dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])
            ->name('dashboard');


        // Home Section
        Route::get('/home-section', [HomeSectionController::class, 'index'])
            ->name('home-section.index');

        Route::get('/home-section/edit', [HomeSectionController::class, 'edit'])
            ->name('home-section.edit');

        Route::put('/home-section/update', [HomeSectionController::class, 'update'])
            ->name('home-section.update');


        // Skills
        Route::get('/skills', [SkillController::class, 'index'])
            ->name('skills.index');

        Route::get('/skills/create', [SkillController::class, 'create'])
            ->name('skills.create');

        Route::post('/skills', [SkillController::class, 'store'])
            ->name('skills.store');

        Route::get('/skills/{skill}/edit', [SkillController::class, 'edit'])
            ->name('skills.edit');

        Route::put('/skills/{skill}', [SkillController::class, 'update'])
            ->name('skills.update');

        Route::delete('/skills/{skill}', [SkillController::class, 'destroy'])
            ->name('skills.destroy');


        // Projects
        Route::get('/projects', [ProjectController::class, 'index'])
            ->name('projects.index');

        Route::get('/projects/create', [ProjectController::class, 'create'])
            ->name('projects.create');

        Route::post('/projects', [ProjectController::class, 'store'])
            ->name('projects.store');

        Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])
            ->name('projects.edit');

        Route::put('/projects/{project}', [ProjectController::class, 'update'])
            ->name('projects.update');

        Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])
            ->name('projects.destroy');


        // Messages
        Route::get('/messages', [AdminContactController::class, 'index'])
            ->name('contacts.index');

        Route::get('/messages/{contact}', [AdminContactController::class, 'show'])
            ->name('contacts.show');

        Route::put('/messages/{contact}/read', [AdminContactController::class, 'markAsRead'])
            ->name('contacts.read');

        Route::delete('/messages/{contact}', [AdminContactController::class, 'destroy'])
            ->name('contacts.destroy');


        // Settings
        Route::get('/settings', [SettingsController::class, 'index'])
            ->name('settings.index');

        Route::put('/settings', [SettingsController::class, 'update'])
            ->name('settings.update');


        // Logout
        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');

    });

});


/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [UserController::class, 'Home'])
    ->name('home');

Route::get('/about', [UserController::class, 'about'])
    ->name('about');

Route::get('/skills', [UserController::class, 'skills'])
    ->name('skills');

Route::get('/projects', [UserController::class, 'projects'])
    ->name('projects');

Route::get('/contact', [UserController::class, 'contact'])
    ->name('contact');

Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');

