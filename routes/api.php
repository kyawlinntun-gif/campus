<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\Dashboard\TeacherController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\EventController;
use App\Http\Controllers\Dashboard\ResourceController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Faculty\CourseController;
use App\Http\Controllers\Faculty\ProjectController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

// For Admin
Route::prefix('dashboards')->name('dashboards.')->group(function() {

    // User Crud
    Route::prefix('users')->name('users.')->group(function() {
        Route::post('/', [UserController::class, 'store'])->name('store');
    });

    // Teacher ru
    Route::prefix('teachers')->name('teachers.')->group(function() {
        Route::get('/', [TeacherController::class, 'index'])->name('index');
    });

    // Student ru
    Route::prefix('students')->name('students.')->group(function() {
        Route::get('/', [StudentController::class, 'index'])->name('index');
    });

    // Category Crud
    Route::prefix('categories')->name('categories.')->group(function() {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
    });

    // Post Crud
    Route::prefix('posts')->name('posts.')->group(function() {
        Route::get('/', [PostController::class, 'index'])->name('index');
    });

    // Project User Crud


    // Resource Crud
    Route::prefix('resources')->name('resources.')->group(function() {
        Route::get('/', [ResourceController::class, 'index'])->name('index');
    });

    // Event Crud
    Route::prefix('events')->name('events.')->group(function() {
        Route::get('/', [EventController::class, 'index'])->name('index');
    });
});

// For Teacher
Route::prefix('faculties')->name('faculties.')->group(function() {

    // Course Crud
    Route::prefix('courses')->name('courses.')->group(function() {
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('/{id}', [CourseController::class, 'show'])->name('show');
        Route::get('/category/{id}', [CourseController::class, 'showCourseWithCategory'])->name('showCourseWithCategory');
    });

    // Project Crud
    Route::prefix('projects')->name('projects.')->group(function() {
        Route::get('/', [ProjectController::class, 'index'])->name('index');
    });
});

// Comment Crud
Route::prefix('comments')->name('comments.')->group(function() {
    Route::get('/', [CommentController::class, 'index'])->name('index');
});

// Teacher Crud
// Student Crud
// Category Crud
// Post Crud
// Course Crud
// Project Crud
// Project User Crud
// Resource Crud
// Event Crud
// Comment Crud