<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyRegistrationController;
use App\Http\Controllers\CompanySearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\MemberShipPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TeamController;
use App\Models\CompanyCategory;
use App\Models\CompanyRegistration;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Magazine;
use App\Models\Team;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

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

Route::get('/', function () {
    return view('frontend.pages.home.index');
})->name('home');

Route::get('/about', function () {
    return view('frontend.pages.about.index');
})->name('about');

Route::get('/comittee', function () {
    return view('frontend.pages.comittee.index');
})->name('comittee');

Route::get('/member', function () {
    return view('frontend.pages.member.index');
})->name('member');

Route::get('/events', function () {
    $events = Event::all();
    return view('frontend.pages.events.index', compact('events'));
})->name('events');

Route::get('/news', function () {
    return view('frontend.pages.news.index');
})->name('news');

Route::get('/magazine', function () {
    $magazines = Magazine::latest()->paginate(10);
    return view('frontend.pages.magazine.index', compact('magazines'));
})->name('magazine');

Route::get('/megazine/vol-1', function () {
    $filePath = public_path('assets/pdf/vol-1.pdf');
    if (!file_exists($filePath)) {
        abort(404, 'File not found.');
    }
    return Response::download($filePath, 'megazine-vol-1.pdf');
})->name('megazine-vol-1');


Route::get('magazines/{magazine}/download', [MagazineController::class, 'download'])->name('magazines.download');
Route::post('/magazine/upload-chunk', [MagazineController::class, 'chunkUpload'])->name('magazine.chunk_upload');

Route::get('/contact', function () {
    return view('frontend.pages.contact.index');
})->name('contact');

Route::get('/business-directories', function () {
    $companies = CompanyRegistration::where('is_approved', 1)->paginate(9);
    $company_categories = CompanyCategory::all();
    return view('frontend.pages.companies.index', compact('companies', 'company_categories'));
})->name('business_directories');

Route::get('/register-a-company', function () {
    $company_categories = CompanyCategory::all();
    return view('frontend.pages.companyRegistration.index', compact('company_categories'));
})->name('register_company');

Route::get('/search-a-company', [CompanySearchController::class, 'search'])->name('search_company');

Route::resource('company', CompanyController::class);
Route::post('company-approved', [CompanyController::class, 'makeApproved'])->name('makeApproved');
Route::resource('event', EventController::class);
Route::resource('company-registration', CompanyRegistrationController::class);
Route::resource('contact-us', ContactController::class);
Route::resource('team', TeamController::class);

Route::get('/dashboard', function () {
    $total_messages = Contact::count();
    $total_companies = CompanyRegistration::count();
    $total_memebers = Team::count();
    $total_events = Event::count();
    $total_magazines = Magazine::count();
    return view('backend.pages.dashboard.index', compact('total_messages', 'total_companies', 'total_memebers', 'total_events', 'total_magazines'));
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

       // MemberShip Page
       Route::get('/membership-page', [MemberShipPageController::class, 'index'])->name('membershipPage.index');

    Route::resource('magazines', MagazineController::class);
});

require __DIR__ . '/auth.php';
