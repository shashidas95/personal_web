<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectsController;

// Publicly accessible pages

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/resumes', [ResumeController::class, 'index'])->name('resumes.index');
Route::get('/resumes/preview', [ResumeController::class, 'preview'])->name('resumes.preview');

// Route::get('/resume/{id}', [ResumeController::class, 'show'])->name('resume.show');


Route::get('/resumes/download', [ResumeController::class, 'download'])->name('resumes.download');

Route::get('/projects', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/projects/{$project}/show', [ProjectsController::class, 'show'])->name('projects.show');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/confirmation', [ContactController::class, 'showConfirmation'])->name('confirmation');

// In a new section of your web.php file
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
/*
|--------------------------------------------------------------------------
| Admin-Only Routes
|--------------------------------------------------------------------------
|
| These routes are protected by the 'auth' and 'admin' middleware,
| and are only accessible to logged-in administrators.
|
*/

Route::middleware(['auth'])->group(function () {
    // Resume management routes
    Route::get('/resumes/create', [ResumeController::class, 'create'])->name('resumes.create');
    Route::post('/resumes', [ResumeController::class, 'store'])->name('resumes.store');
    Route::get('/resumes/{resume}/edit', [ResumeController::class, 'edit'])->name('resumes.edit');
    Route::put('/resumes/{resume}', [ResumeController::class, 'update'])->name('resumes.update');
    Route::delete('/resumes/{resume}', [ResumeController::class, 'destroy'])->name('resumes.destroy');


    Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectsController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [ProjectsController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
});

// Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projects.create');
// Route::post('/projects', [ProjectsController::class, 'store'])->name('projects.store');
