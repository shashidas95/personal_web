<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/resumes', [ResumeController::class, 'index'])->name('api.resumes.index');

Route::get('/resumes/preview', [ResumeController::class, 'preview'])->name('api.resumes.preview');
Route::get('/resumes/download', [ResumeController::class, 'download'])->name('api.resumes.download');

Route::get('/projects', [ProjectsController::class, 'index'])->name('api.projects.index');
// Note: Changed the route parameter syntax from {$project} to {project}
Route::get('/projects/{project}', [ProjectsController::class, 'show'])->name('api.projects.show');


// Contact Submission
Route::post('/contact', [ContactController::class, 'submit'])->name('api.contact.submit');


// Login is a POST request, usually returning a token.
Route::post('/login', [AuthController::class, 'login'])->name('api.login');


// Protected Routes (Require Authentication)
Route::middleware('auth:api')->group(function () {
    // Logout (Revoke Token)
    Route::post('/logout', [AuthController::class, 'logout'])->name('api.logout');

    // Resume Management (Resource Routes)
    Route::post('/resumes', [ResumeController::class, 'store'])->name('api.resumes.store');
    Route::get('/resumes/{resume}', [ResumeController::class, 'show'])->name('api.resumes.show');
    Route::put('/resumes/{resume}', [ResumeController::class, 'update'])->name('api.resumes.update');
    Route::delete('/resumes/{resume}', [ResumeController::class, 'destroy'])->name('api.resumes.destroy');

    // Projects Management (Resource Routes)
    Route::post('/projects', [ProjectsController::class, 'store'])->name('api.projects.store');
    Route::put('/projects/{project}', [ProjectsController::class, 'update'])->name('api.projects.update');
    Route::delete('/projects/{project}', [ProjectsController::class, 'destroy'])->name('api.projects.destroy');
});
