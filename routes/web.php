<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/application', function () {
    return view('application-form');
});

Auth::routes();



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/citizen/application', [App\Http\Controllers\CitizensController::class, 'application'])->name('citizen/application');
Route::post('/citizen/application/register', [App\Http\Controllers\CitizensController::class, 'register'])->name('citizen/register');
Route::post('/citizen/login', [App\Http\Controllers\CitizensController::class, 'login'])->name('citizen/login');



Route::middleware('auth')->group(function(){


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/register', [App\Http\Controllers\AdminController::class, 'applicationForm'])->name('admin.applicationForm');
Route::post('/admin/register/citizen', [App\Http\Controllers\AdminController::class, 'register'])->name('admin.register');
Route::get('/admin/records/request', [App\Http\Controllers\AdminController::class, 'pendingRequest'])->name('admin.request');
Route::get('/admin/records', [App\Http\Controllers\AdminController::class, 'records'])->name('admin.records');
Route::get('/admin/records/{citizens}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
Route::patch('/admin/records/{citizens}/update', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
Route::delete('/admin/records/{citizens}/destroy', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');


//User
Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('admin/user/index');
Route::get('/admin/user/register/form', [App\Http\Controllers\UserController::class, 'create'])->name('admin/user/form');
Route::post('/admin/user/register/register', [App\Http\Controllers\UserController::class, 'register'])->name('admin/user/register');
Route::get('/admin/user/info/{user}', [App\Http\Controllers\UserController::class, 'info'])->name('admin/user/info');
Route::patch('/admin/user/info/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('admin/user/info/update');
Route::delete('/admin/user/delete/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('admin/user/delete');



// subsidies
Route::get('/admin/subsidy/record', [App\Http\Controllers\SubsidyController::class, 'show'])->name('admin.subsidy.record');
Route::get('/admin/subsidy/assignment', [App\Http\Controllers\SubsidyController::class, 'assignCitizenSubsidies'])->name('admin.subsidy.assignCitizenSubsidies');
Route::get('/admin/subsidy/record/{subsidies}', [App\Http\Controllers\SubsidyController::class, 'citizenSubsidiesStatus'])->name('admin.subsidy.citizenSubsidiesStatus');
Route::post('/admin/subsidy/assignment/assigned', [App\Http\Controllers\SubsidyController::class, 'assignedCitizenSubsidies'])->name('admin.subsidy.assignedCitizenSubsidies');

// subsidy Status
Route::patch('/admin/subsidyStutus/assignment/assigned/release/{status}', [App\Http\Controllers\SubsidyStatusController::class, 'AssignedStatus'])->name('admin/SubsidyStatus/AssignedRelease');


// subsidy type
Route::get('/admin/subsidyType/record', [App\Http\Controllers\SubsidyTypeController::class, 'show'])->name('admin.subsidyType.record');
Route::post('/admin/subsidyType/register', [App\Http\Controllers\SubsidyTypeController::class, 'create'])->name('admin/subsidyType/register');
Route::delete('/admin/subsidyType/delete/{subsidyType}', [App\Http\Controllers\SubsidyTypeController::class, 'destroy'])->name('admin/subsidyType/delete');

});
