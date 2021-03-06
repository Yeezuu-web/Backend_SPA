<?php

use App\Http\Controllers\SpaController;

// use App\Http\Controllers\Admin\HomeController;
// use App\Http\Controllers\Admin\RolesController;
// use App\Http\Controllers\Admin\UsersController;
// use App\Http\Controllers\Admin\PermissionsController;
// use App\Http\Controllers\Auth\ChangePasswordController;
// use Spatie\ArrayToXml\ArrayToXml;

// Route::redirect('/', '/login');
// Route::get('/home', function () {
//     if (session('status')) {
//         return redirect()->route('admin.home')->with('status', session('status'));
//     }
// });

// Auth::routes(['register' => false]);

// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
//     Route::get('/', [HomeController::class, 'index'])->name('home');
//     // Permissions
//     Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
//     Route::resource('permissions', PermissionsController::class);

//     // Roles
//     Route::delete('roles/destroy', [RolesController::class , 'massDestroy'])->name('roles.massDestroy');
//     Route::resource('roles', RolesController::class);

//     // Users
//     Route::delete('users/destroy', [UsersController::class , 'massDestroy'])->name('users.massDestroy');
//     Route::resource('users', UsersController::class);
// });
// Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
//     // Change password
//     if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
//         Route::get('password', [ChangePasswordController::class , 'edit'])->name('password.edit');
//         Route::post('password', [ChangePasswordController::class , 'update'])->name('password.update');
//         Route::post('profile', [ChangePasswordController::class , 'updateProfile'])->name('password.updateProfile');
//         Route::post('profile/destroy', [ChangePasswordController::class , 'destroy'])->name('password.destroyProfile');
//     }
// });

Route::get('{path}', SpaController::class)->where('path', '(.*)');