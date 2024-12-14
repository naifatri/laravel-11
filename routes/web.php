<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminHomeController;
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
                            // Route untuk halaman daftar kontak
                            Route::get('contacts', [ContactsController::class, 'index'])->name('contacts.index');
                            
                            // Route untuk form tambah kontak
                            Route::get('contacts/create', [ContactsController::class, 'create'])->name('contacts.create');
                            
                            // Route untuk menyimpan kontak
                            Route::post('contacts', [ContactsController::class, 'store'])->name('contacts.store');
                            
                            // Route untuk menampilkan kontak berdasarkan ID
                            Route::get('contacts/{contact}', [ContactsController::class, 'show'])->name('contacts.show');
                            
                            // Route untuk menampilkan form edit kontak
                            Route::get('contacts/{contact}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
                            
                            // Route untuk memperbarui kontak
                            Route::put('contacts/{contact}', [ContactsController::class, 'update'])->name('contacts.update');
                            
                            // Route untuk menghapus kontak
                            Route::delete('contacts/{contact}', [ContactsController::class, 'destroy'])->name('contacts.destroy');
                        });
                        
                        
                        Route::get('/home', [HomeController::class, 'index']);


                        

Route::resource('/admin/dashboard/about', AboutController::class);






// Group untuk admin dengan prefix "admin/dashboard"
Route::prefix('admin/dashboard')->name('admin.')->group(function () {
    // Resource route untuk AdminHomeController
    Route::resource('home', AdminHomeController::class);
});





        

require __DIR__.'/auth.php';
