<?php

use App\Models\abudhabi\FAQ;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HourController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SignatureController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Site\abdudhabi\faqController;
use App\Http\Controllers\Admin\abdudhabi\BlogController;
use App\Http\Controllers\Admin\abdudhabi\CommentController;
use App\Http\Controllers\Admin\abdudhabi\contactController;
use App\Http\Controllers\Admin\abdudhabi\promocodeController;
use App\Http\Controllers\Admin\abdudhabi\storylineController;
use App\Http\Controllers\Admin\abdudhabi\photovideoController;
use App\Http\Controllers\Admin\abdudhabi\SocialmadiaController;
use App\Http\Controllers\Admin\abdudhabi\SubscribersController;
use App\Http\Controllers\Admin\abdudhabi\requestvideoController;
use App\Http\Controllers\Admin\abdudhabi\RequestFranchiseController;
use App\Http\Controllers\Admin\abdudhabi\FaqController as AbdudhabiFaqController;
use App\Http\Controllers\Admin\VideoPriceController;
use App\Http\Controllers\Admin\TripadvisorController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\HomeBannerController;
use App\Http\Controllers\Admin\products\forkliftController;
use App\Http\Controllers\Admin\products\hiyapvinController;
use App\Http\Controllers\Admin\products\kulevinController;
use App\Http\Controllers\Admin\products\mobilvinController;
use App\Http\Controllers\Admin\products\sepetlivinController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ReferansCategoryController;
use App\Http\Controllers\Admin\ReferensProjectController;

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');





Route::controller(PriceController::class)->name('prices.')->group(callback: function () {
    Route::get('prices', 'index')->name('index'); //->middleware(['permission:read room']);
    Route::post('prices', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('prices/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::post('prices/create', 'store')->name('create.store'); // Add this line to handle form submission
    Route::get('prices/{id}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('prices/{id}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('prices/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('prices/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);
});


Route::controller(RoomController::class)->name('rooms.')->group(callback: function () {
    Route::get('hizmetler', 'index')->name('index'); //->middleware(['permission:read room']);
    Route::post('hizmetler', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('hizmetler/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::get('hizmetler/{room}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('hizmetler/{room}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('hizmetler/{room}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('hizmetler/{room}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);
    Route::post('geturuns/{place_id}', 'getRooms')->name('getRooms');
});


//project done
Route::controller(ProjectController::class)->name('projects.')->group(callback: function () {
    Route::get('projeler', 'index')->name('index'); 
    Route::post('projeler', 'store')->name('store'); 
    Route::get('projeler/create', 'create')->name('create'); 
    Route::get('projeler/{room}', 'show')->name('show'); 
    Route::patch('projeler/{room}', 'update')->name('update'); 
    Route::delete('projeler/{room}', 'destroy')->name('destroy'); 
    Route::get('projeler/{room}/edit', 'edit')->name('edit');
    Route::post('getproject/{place_id}', 'getRooms')->name('getRooms');
});
// end of projects done

// referens main kategori
Route::controller(  ReferansCategoryController ::class)->name('referensmain.')->group(callback: function () {
    Route::get('anakategori', 'index')->name('index'); 
    Route::post('anakategori', 'store')->name('store'); 
    Route::get('anakategori/create', 'create')->name('create'); 
    Route::get('anakategori/{room}', 'show')->name('show'); 
    Route::patch('anakategori/{room}', 'update')->name('update'); 
    Route::delete('anakategori/{room}', 'destroy')->name('destroy'); 
    Route::get('anakategori/{room}/edit', 'edit')->name('edit');
    Route::post('getcategori/{place_id}', 'getRooms')->name('getRooms');
});
// end of main kategori

// referens Project
Route::controller(  ReferensProjectController ::class)->name('referensproject.')->group(callback: function () {
    Route::get('referensprojeleri', 'index')->name('index'); 
    Route::post('referensprojeleri', 'store')->name('store'); 
    Route::get('referensprojeleri/create', 'create')->name('create'); 
    Route::get('referensprojeleri/{room}', 'show')->name('show'); 
    Route::patch('referensprojeleri/{room}', 'update')->name('update'); 
    Route::delete('referensprojeleri/{room}', 'destroy')->name('destroy'); 
    Route::get('referensprojeleri/{room}/edit', 'edit')->name('edit');
    Route::post('getreferensproject/{place_id}', 'getRooms')->name('getRooms');
});
// end of referens Project

// home oage banner

// referens Project
Route::controller(  HomeBannerController ::class)->name('homebanner.')->group(callback: function () {
    Route::get('anasayfa-banner', 'index')->name('index'); 
    Route::post('anasayfa-banner', 'store')->name('store'); 
    Route::get('anasayfa-banner/create', 'create')->name('create'); 
    Route::get('anasayfa-banner/{id}', 'show')->name('show'); 
    Route::patch('anasayfa-banner/{id}', 'update')->name('update'); 
    Route::delete('anasayfa-banner/{id}', 'destroy')->name('destroy'); 
    Route::get('anasayfa-banner/{id}/edit', 'edit')->name('edit');
    Route::post('gethomepagebnner/{place_id}', 'getRooms')->name('getRooms');
});

// end of home page banner




// products list here
Route::controller(mobilvinController::class)->name('products.')->group(callback: function () {
    Route::get('mobilvincler', 'index')->name('index');
    Route::post('mobilvincler', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('mobilvincler/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::get('mobilvincler/{room}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('mobilvincler/{room}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('mobilvincler/{room}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('mobilvincler/{room}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);
    Route::post('geturuns/{place_id}', 'getRooms')->name('getRooms');
});

Route::controller(kulevinController::class)->name('kule.')->group(callback: function () {
    Route::get('kulevincler', 'index')->name('index'); //->middleware(['permission:read room']);
    Route::post('kulevincler', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('kulevincler/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::get('kulevincler/{room}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('kulevincler/{room}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('kulevincler/{room}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('kulevincler/{room}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);
    Route::post('geturuns/{place_id}', 'getRooms')->name('getRooms');
});


Route::controller(hiyapvinController::class)->name('hiyap.')->group(callback: function () {
    Route::get('hiyapvincler', 'index')->name('index');
    Route::post('hiyapvincler', 'store')->name('store');
    Route::get('hiyapvincler/create', 'create')->name('create');
    Route::get('hiyapvincler/{room}', 'show')->name('show');
    Route::patch('hiyapvincler/{room}', 'update')->name('update');
    Route::delete('hiyapvincler/{room}', 'destroy')->name('destroy');
    Route::get('hiyapvincler/{room}/edit', 'edit')->name('edit');
    Route::post('geturuns/{place_id}', 'getRooms')->name('getRooms');
});

Route::controller(sepetlivinController::class)->name('sepet.')->group(callback: function () {
    Route::get('sepetlivinc', 'index')->name('index');
    Route::post('sepetlivinc', 'store')->name('store');
    Route::get('sepetlivinc/create', 'create')->name('create');
    Route::get('sepetlivinc/{room}', 'show')->name('show');
    Route::patch('sepetlivinc/{room}', 'update')->name('update');
    Route::delete('sepetlivinc/{room}', 'destroy')->name('destroy');
    Route::get('sepetlivinc/{room}/edit', 'edit')->name('edit');
    Route::post('geturuns/{place_id}', 'getRooms')->name('getRooms');
});

Route::controller(forkliftController::class)->name('forklift.')->group(callback: function () {
    Route::get('forklift', 'index')->name('index');
    Route::post('forklift', 'store')->name('store');
    Route::get('forklift/create', 'create')->name('create');
    Route::get('forklift/{room}', 'show')->name('show');
    Route::patch('forklift/{room}', 'update')->name('update');
    Route::delete('forklift/{room}', 'destroy')->name('destroy');
    Route::get('forklift/{room}/edit', 'edit')->name('edit');
    Route::post('geturuns/{place_id}', 'getRooms')->name('getRooms');
});





Route::controller(HourController::class)->name('hours.')->group(callback: function () {
    Route::get('hours', 'index')->name('index'); //->middleware(['permission:read hour']);
    Route::post('hours', 'store')->name('store'); //->middleware(['permission:create hour']);
    Route::post('hours/create', 'store')->name('create.store'); // Add this line to handle form submission
    Route::get('hours/create', 'create')->name('create'); //->middleware(['permission:create hour']);
    Route::post('hours/getHours', 'getHours')->name('getHours');
    Route::get('hours/{hour}', 'show')->name('show'); //->middleware(['permission:read hour']);
    Route::patch('hours/{hour}', 'update')->name('update'); //->middleware(['permission:update hour']);
    Route::delete('hours/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete hour']);
    Route::get('hours/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update hour']);
});



Route::controller(ReservationController::class)->name('reservations.')->group(callback: function () {

    Route::get('reservations', 'index')->name('index');
    Route::get('reservations/today/list', 'index')->name('today-list');
    Route::get('kiralama/tum_urunler', 'dubai')->name('dubai');
    // Route::get('reservations/dubai/list', 'index')->name('dubai-list');
    Route::get('kiralama/tum_urunler/{id}/list', 'monthlylist')->name('monthlylist');
    Route::get('kiralama/tum_urunler/details', 'dailylist')->name('dailylist');
    Route::get('reservations/abudhabi', 'abudhabi')->name('abudhabi');
    // Route::get('reservations/abudhabi/list', 'index')->name('abudhabi-list');
    Route::get('reservations/abudhabi/{id}/list', 'monthlylist')->name('monthlylist');
    // Route::get('reservations/abudhabi/details/{id}/list', 'dailylist')->name('dailylist');
    Route::post('reservations', 'store')->name('store'); //->middleware(['permission:create reservation']);
    Route::patch('reservations/{item}/restore', 'restore')->name('restore'); //->middleware(['permission:create reservation']);
    Route::get('reservations/create', 'create')->name('create'); //->middleware(['permission:create reservation']);
    Route::get('reservations/{reservation}', 'show')->name('show'); //->middleware(['permission:read reservation']);
    Route::patch('reservations/{reservation}', 'update')->name('update'); //->middleware(['permission:update reservation']);
    Route::delete('reservations/{reservation}', 'destroy')->name('destroy');
    Route::delete('reservations/{item}/force', 'forceDelete')->name('forceDelete'); //->middleware(['permission:delete reservation']);
    Route::get('reservations/{reservation}/edit', 'edit')->name('edit');
    Route::get('/get-archives', [ReservationController::class, 'fetchArchives'])->name('get.archives');
});





Route::controller(BlogController::class)->name('blog.')->group(function () {
    Route::get('blog', 'index')->name('list');
    Route::post('blog', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('blog/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::post('blog/create', 'store')->name('create.store'); // Add this line to handle form submission
    Route::get('blog/{id}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('blog/{id}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('blog/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('blog/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);
});

//about
Route::controller(AboutController::class)->group(function () {
    Route::get('about', 'index')->name('about.list');
    Route::post('about', 'store')->name('about.store');
    Route::get('about/create', 'create')->name('about.create');
    Route::post('about/create', 'store')->name('about.create.store');
    Route::get('about/{id}', 'show')->name('about.show');
    Route::patch('about/{id}', 'update')->name('about.update');
    Route::delete('about/{id}', 'destroy')->name('about.destroy');
    Route::get('about/{id}/edit', 'edit')->name('about.edit');
});



// commentConntroller
Route::controller(CommentController::class)->name('comment.')->group(function () {
    Route::get('comments', 'index')->name('list');
    Route::post('comments', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('comments/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::post('comments/create', 'store')->name('create.store'); // Add this line to handle form submission
    Route::get('comments/{id}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('comments/{id}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('comments/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('comments/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);

});

//tripadvisor controller
Route::controller(TripadvisorController::class)->name('tripadvisor.')->group(function () {
    Route::get('tripadvisor', 'index')->name('list');
    Route::post('tripadvisor', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('tripadvisor/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::post('tripadvisor/create', 'store')->name('create.store'); // Add this line to handle form submission
    Route::get('tripadvisor/{id}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('tripadvisor/{id}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('tripadvisor/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('tripadvisor/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);

});



// FAQ Question data
Route::controller(AbdudhabiFaqController::class)->name('faq.')->group(function () {
    Route::get('faqs', 'index')->name('list');
    Route::post('faqs', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('faqs/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::post('faq/create', 'store')->name('create.store'); // Add this line to handle form submission
    Route::get('faqs/{id}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('faqs/{id}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('faqs/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('faqs/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);

});

//social media
Route::controller(SocialmadiaController::class)->name('social.')->group(function () {
    Route::get('social-media', 'index')->name('list');
    Route::post('social-media', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('social-media/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::get('social-media/{id}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('social-media/{id}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('social-media/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('social-media/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);

});

// //subscribers part
Route::controller(SubscribersController::class)->name('subscribers.')->group(function () {
    Route::get('subscribers', 'index')->name('list');
    Route::delete('subscribers/{id}', 'destroy')->name('destroy');
});


//request video
Route::controller(requestvideoController::class)->name('requestvideo.')->group(function () {
    Route::get('request-video', 'index')->name('list');
    Route::delete('request-video/{id}', 'destroy')->name('destroy');
});

//request Franchise
Route::controller(RequestFranchiseController::class)->name('requestfranchise.')->group(function () {
    Route::get('request-franchise', 'index')->name('list');
    Route::delete('request-franchise/{id}', 'destroy')->name('destroy');
});

Route::controller(VideoPriceController::class)->name('video_price.')->group(function () {
    Route::get('video-price-setting', 'index')->name('list');
    Route::post('video-price-setting', 'store')->name('store');
    Route::get('video-price-setting/create', 'create')->name('create');

    Route::patch('video-price-setting/{id}', 'update')->name('update');
    Route::get('video-price-setting/{id}/edit', 'edit')->name('edit');


    Route::delete('video-price-setting/{id}', 'destroy')->name('destroy');
});


//conatct form
Route::controller(contactController::class)->name('contact.')->group(function () {
    Route::get('contact', 'index')->name('list');
    Route::delete('contact/{id}', 'destroy')->name('destroy');
});



Route::controller(photovideoController::class)->name('photos_videos.')->group(function () {
    Route::get('referanslar', 'index')->name('list');
    Route::post('referanslar', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('referanslar/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::post('referanslar/create', 'store')->name('create.store'); // Add this line to handle form submission
    Route::get('referanslar/{id}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('referanslar/{id}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('referanslar/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('referanslar/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);
});


Route::controller(storylineController::class)->name('storyline.')->group(function () {
    Route::get('storyline', 'index')->name('list');
    Route::post('storyline', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('storyline/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::post('storyline/create', 'store')->name('create.store'); // Add this line to handle form submission
    Route::get('storyline/{id}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('storyline/{id}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('storyline/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('storyline/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);
});




Route::controller(promocodeController::class)->name('promocode.')->group(function () {
    Route::get('promocode-list', 'index')->name('list');
    Route::post('promocode-list', 'store')->name('store'); //->middleware(['permission:create room']);
    Route::get('promocode-list/create', 'create')->name('create'); //->middleware(['permission:create room']);
    Route::post('promocode-list/create', 'store')->name('create.store'); // Add this line to handle form submission
    Route::get('promocode-list/{id}', 'show')->name('show'); //->middleware(['permission:read room']);
    Route::patch('promocode-list/{id}', 'update')->name('update'); //->middleware(['permission:update room']);
    Route::delete('promocode-list/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete room']);
    Route::get('promocode-list/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update room']);
});







Route::controller(SignatureController::class)->name('signatures.')->group(callback: function () {
    Route::get('signature/list', 'list')->name('list'); //->middleware(['permission:read reservation']);
    Route::get('signature/{id}/edit', 'edit')->name('edit'); //->middleware(['permission:update reservation']);
    Route::delete('signature/{id}', 'destroy')->name('destroy'); //->middleware(['permission:delete reservation']);
    Route::patch('signature/{id}', 'update')->name('update'); //->middleware(['permission:update reservation']);

});



Route::get('/error', fn() => abort(500));
require __DIR__ . '/auth.php';
