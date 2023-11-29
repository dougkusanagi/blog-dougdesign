<?php

use App\Livewire\HomePageComponent;
use App\Livewire\PostPageComponent;
use App\Livewire\PrivacyPolicyComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomePageComponent::class)->name('home');

Route::get('/privacy-policy', PrivacyPolicyComponent::class)->name('privacy-policy');

Route::get('/{slug}', PostPageComponent::class)->name('post');
