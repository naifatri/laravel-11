<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;

                        Route::get('/', function () {
                            return view('welcome');
                        });

                        Route::get('/dashboard', function () {
                            return view('dashboard');
                        })->middleware(['auth', 'verified'])->name('dashboard');

                        Route::middleware('auth')->group(function () {
                            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
                            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
                            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
                        });

                        Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('auth', 'admin');

                        Route::resource('/admin/dashboard/konten', KontenController::class);

                        Route::resource('/admin/dashboard/skill',
                                AdminSkillController::class);
                        

                        Route::resource('/admin/dashboard/certificates',
                                   CertificatesController::class);
                       

                        // Rute resource untuk project
                        Route::prefix('admin/dashboard')->name('admin.project.')->group(function () {
                            Route::resource('project', AdminProjectController::class)->names([
                                'index' => 'index',
                                'create' => 'create',
                                'store' => 'store',
                                'show' => 'show',
                                'edit' => 'edit',
                                'update' => 'update',
                                'destroy' => 'destroy',
                            ]);
                        });
                       
                        Route::prefix('admin/dashboard')->name('admin.dashboard.')->group(function () {
                            Route::get('contacts', [ContactsController::class, 'index'])->name('contacts.index');
                            Route::get('contacts/create', [ContactsController::class, 'create'])->name('contacts.create');
                            Route::post('contacts', [ContactsController::class, 'store'])->name('contacts.store');
                            Route::get('contacts/{id}', [ContactsController::class, 'show'])->name('contacts.show');
                            Route::get('contacts/{contacts}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
                            Route::put('contacts/{contacts}', [ContactsController::class, 'update'])->name('contacts.update');                            
                            Route::delete('contacts/{contacts}', [ContactsController::class, 'destroy'])->name('contacts.destroy');
                        });
                        
                        Route::get('/home', [HomeController::class, 'index']);


        

require __DIR__.'/auth.php';
