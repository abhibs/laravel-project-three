<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\FactController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\YoutubeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/test', function () {
    echo "Abhiram";
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin-login');
    Route::post('/login', [AdminController::class, 'loginPost'])->name('admin-login-post');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
        Route::get('/logout', [Admincontroller::class, 'adminLogout'])->name('admin-logout');
        Route::get('/profile', [Admincontroller::class, 'adminProfile'])->name('admin-profile');
        Route::post('/profile/update', [AdminController::class, 'adminProfileUpdate'])->name('admin-profile-update');
        Route::get('/change/password', [Admincontroller::class, 'changePassword'])->name('admin-change-password');

        Route::post('/update/password', [AdminController::class, 'updatePassword'])->name('admin-password-update');


        Route::get('/profile/detail', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile/detail/update', [ProfileController::class, 'update'])->name('profile-update');

        Route::get('/about', [AboutController::class, 'index'])->name('about');
        Route::post('/about/update', [AboutController::class, 'update'])->name('about-update');

        Route::get('/client/create', [ClientController::class, 'create'])->name('client-create');
        Route::post('/client/store', [ClientController::class, 'store'])->name('client-store');
        Route::get('/client', [ClientController::class, 'index'])->name('client');
        Route::get('/client/edit/{id}', [ClientController::class, 'edit'])->name('client-edit');
        Route::post('/client/update', [ClientController::class, 'update'])->name('client-update');
        Route::get('/client/delete/{id}', [ClientController::class, 'delete'])->name('client-delete');
        Route::get('/client/inactive/{id}', [ClientController::class, 'inactive'])->name('client-inactive');
        Route::get('/client/active/{id}', [ClientController::class, 'active'])->name('client-active');


        Route::get('/fact', [FactController::class, 'index'])->name('fact');
        Route::post('/fact/update', [FactController::class, 'update'])->name('fact-update');


        Route::get('/youtube', [YoutubeController::class, 'index'])->name('youtube');
        Route::post('/youtube/update', [YoutubeController::class, 'update'])->name('youtube-update');


        Route::get('/certificate/create', [CertificateController::class, 'create'])->name('certificate-create');
        Route::post('/certificate/store', [CertificateController::class, 'store'])->name('certificate-store');
        Route::get('/certificate', [CertificateController::class, 'index'])->name('certificate');
        Route::get('/certificate/edit/{id}', [CertificateController::class, 'edit'])->name('certificate-edit');
        Route::post('/certificate/update', [CertificateController::class, 'update'])->name('certificate-update');
        Route::get('/certificate/delete/{id}', [CertificateController::class, 'delete'])->name('certificate-delete');
        Route::get('/certificate/inactive/{id}', [CertificateController::class, 'inactive'])->name('certificate-inactive');
        Route::get('/certificate/active/{id}', [CertificateController::class, 'active'])->name('certificate-active');


        Route::get('/review/create', [ReviewController::class, 'create'])->name('review-create');
        Route::post('/review/store', [ReviewController::class, 'store'])->name('review-store');
        Route::get('/review', [ReviewController::class, 'index'])->name('review');
        Route::get('/review/edit/{id}', [ReviewController::class, 'edit'])->name('review-edit');
        Route::post('/review/update', [ReviewController::class, 'update'])->name('review-update');
        Route::get('/review/delete/{id}', [ReviewController::class, 'delete'])->name('review-delete');
        Route::get('/review/inactive/{id}', [ReviewController::class, 'inactive'])->name('review-inactive');
        Route::get('/review/active/{id}', [ReviewController::class, 'active'])->name('review-active');


        Route::get('/category/create', [CategoryController::class, 'create'])->name('category-create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category-store');
        Route::get('/category', [CategoryController::class, 'index'])->name('category');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
        Route::post('/category/update', [CategoryController::class, 'update'])->name('category-update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category-delete');


        Route::get('/project/create', [ProjectController::class, 'create'])->name('project-create');
        Route::post('/project/store', [ProjectController::class, 'store'])->name('project-store');
        Route::get('/project', [ProjectController::class, 'index'])->name('project');
        Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project-edit');
        Route::post('/project/update', [ProjectController::class, 'update'])->name('project-update');
        Route::get('/project/delete/{id}', [ProjectController::class, 'delete'])->name('project-delete');
        Route::get('/project/inactive/{id}', [ProjectController::class, 'inactive'])->name('project-inactive');
        Route::get('/project/active/{id}', [ProjectController::class, 'active'])->name('project-active');

        Route::get('team/create', [TeamController::class, 'create'])->name('team-create');
        Route::post('team/store', [TeamController::class, 'store'])->name('team-store');
        Route::get('team', [TeamController::class, 'index'])->name('team');
        Route::get('team/edit/{id}', [TeamController::class, 'edit'])->name('team-edit');
        Route::post('team/update/{id}', [TeamController::class, 'update'])->name('team-update');
        Route::get('team/delete/{id}', [TeamController::class, 'delete'])->name('team-delete');
        Route::get('team/inactive/{id}', [TeamController::class, 'inactive'])->name('team-inactive');
        Route::get('team/active/{id}', [TeamController::class, 'active'])->name('team-active');

        Route::get('package/create', [PackageController::class, 'create'])->name('package-create');
        Route::post('package/store', [PackageController::class, 'store'])->name('package-store');
        Route::get('package', [PackageController::class, 'index'])->name('package');
        Route::get('package/edit/{id}', [PackageController::class, 'edit'])->name('package-edit');
        Route::post('package/update/{id}', [PackageController::class, 'update'])->name('package-update');
        Route::get('package/delete/{id}', [PackageController::class, 'delete'])->name('package-delete');
        Route::get('package/inactive/{id}', [PackageController::class, 'inactive'])->name('package-inactive');
        Route::get('package/active/{id}', [PackageController::class, 'active'])->name('package-active');


        Route::get('faq/create', [FaqController::class, 'create'])->name('faq-create');
        Route::post('faq/store', [FaqController::class, 'store'])->name('faq-store');
        Route::get('faq', [FaqController::class, 'index'])->name('faq');
        Route::get('faq/edit/{id}', [FaqController::class, 'edit'])->name('faq-edit');
        Route::post('faq/update', [FaqController::class, 'update'])->name('faq-update');
        Route::get('faq/delete/{id}', [FaqController::class, 'delete'])->name('faq-delete');
        Route::get('faq/inactive/{id}', [FaqController::class, 'inactive'])->name('faq-inactive');
        Route::get('faq/active/{id}', [FaqController::class, 'active'])->name('faq-active');

    });
});
