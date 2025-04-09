<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Models\Contact;
use App\Models\Faq;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    $faqs = Faq::latest()->get();
    return view('frontend.pages.home.index', compact('faqs'));
})->name('home');

Route::get('/features', function () {
    return view('frontend.pages.features.index');
})->name('features');

Route::get('/faq', function () {
    $faqs = Faq::latest()->get();
    return view('frontend.pages.faq.index', compact('faqs'));
})->name('faq');

Route::get('/join_waitlist', function () {
    return view('frontend.pages.join_waitlist.index');
})->name('join_waitlist');

Route::get('/contact', function () {
    return view('frontend.pages.contact.index');
})->name('contact');

Route::resource('contact-us', ContactController::class);

Route::resource('team', TeamController::class);

Route::get('/dashboard', function () {
    $total_messages = Contact::count();
    return view('backend.pages.dashboard.index', compact('total_messages'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings', [SettingController::class, 'store'])->name('settings.store');

    // Home Page
    Route::get('/home-page', [HomePageController::class, 'index'])->name('homepage.index');

    // About Page
    Route::get('/about-page', [AboutPageController::class, 'index'])->name('aboutPage.index');

    // faq Page
    Route::get('/faq-page', [FaqController::class, 'index'])->name('faqPage.index');
    // Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
    Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
    Route::delete('/faq/{faq}', [FaqController::class, 'destroy'])->name('faq.destroy');

    Route::get('/contacts/export', [ContactController::class, 'export'])->name('contacts.export');
});

require __DIR__ . '/auth.php';
