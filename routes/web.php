<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;


use App\Http\Controllers\Site\RoomController;
use App\Http\Controllers\Site\PriceController;
use App\Http\Controllers\Site\EventsController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\PaymentController;
use App\Http\Controllers\Site\ReservationController;
use App\Http\Controllers\Site\AbuDhabi\faqController;
use App\Http\Controllers\Site\CheckPromotionDiscount;
use App\Http\Controllers\Site\VideoRequestController;
use App\Http\Controllers\Site\abdudhabi\termsController;
use App\Http\Controllers\Site\dubai\HomeIndexController;
use App\Http\Controllers\Site\abdudhabi\privacyController;
use App\Http\Controllers\Site\CheckAvailabilityController;
use App\Http\Controllers\Site\abdudhabi\blogIndexController;
use App\Http\Controllers\Site\abdudhabi\disclaimerController;
use App\Http\Controllers\Site\abdudhabi\HomeAbudhabiController;
use App\Http\Controllers\Site\abdudhabi\teambuildingController;
use App\Http\Controllers\Site\abdudhabi\rooms\roomIndexController;
use App\Http\Controllers\Site\abdudhabi\requestfranchiseController;
use App\Http\Controllers\Site\dubai\faqController as DubaiFaqController;
use App\Http\Controllers\Site\dubai\termsController as DubaiTermsController;
use App\Http\Controllers\Site\abdudhabi\faqController as AbdudhabiFaqController;
use App\Http\Controllers\Site\dubai\contactController as DubaiContactController;
use App\Http\Controllers\Site\dubai\privacyController as DubaiPrivacyController;
use App\Http\Controllers\Site\dubai\blogIndexController as DubaiBlogIndexController;
use App\Http\Controllers\Site\dubai\disclaimerController as DubaiDisclaimerController;
use App\Http\Controllers\Site\abdudhabi\contactController as AbdudhabiContactController;
use App\Http\Controllers\Site\dubai\reservationController as DubaiReservationController;
use App\Http\Controllers\Site\dubai\teambuildingController as DubaiTeambuildingController;
use App\Http\Controllers\Site\abdudhabi\reservationController as AbdudhabiReservationController;
use App\Http\Controllers\Site\aboutpage;
use App\Http\Controllers\Site\contactpage;
use App\Http\Controllers\Site\dubai\requestfranchiseController as DubaiRequestfranchiseController;
use App\Http\Controllers\Site\forklift;
use App\Http\Controllers\Site\hiyappage;
use App\Http\Controllers\Site\insaatpage;
use App\Http\Controllers\Site\kiralamapage;
use App\Http\Controllers\Site\kuyumcupage;
use App\Http\Controllers\Site\kvkkpage;
use App\Http\Controllers\Site\limanpage;
use App\Http\Controllers\Site\makineparkur;
use App\Http\Controllers\Site\mobilkiralama;
use App\Http\Controllers\Site\mobilvincpage;
use App\Http\Controllers\Site\productspage;
use App\Http\Controllers\Site\satispage;
use App\Http\Controllers\Site\spetlipage;
use App\Http\Controllers\Site\supernatural\HomeController as SupernaturalHomeController;
use App\Http\Controllers\Site\teknikpage;
use App\Http\Controllers\Site\visionmissionpage;

Route::get("/", [HomeController::class, 'index'])->name('home.index');

Route::get("/about-us", [aboutpage::class, 'index'])->name('home.about');
Route::get("/vizyon_misyon", [visionmissionpage::class, 'index'])->name('home.visionandmission');
Route::get("/kisisel_verilerin_korunmasi_kanunu", [kvkkpage::class, 'index'])->name('home.kvkk');
Route::get("/kule_vinc_products", [productspage::class, 'index'])->name('home.products');

Route::get("/babavinc/urunler/{slug}", [productspage::class, 'productdetail'])->name('home.productsdetail');
Route::get("/kiralama", [kiralamapage::class, 'index'])->name('home.kiralama');
Route::get("/satis", [satispage::class, 'index'])->name('home.satis');
Route::get("/teknik_servis", [teknikpage::class, 'index'])->name('home.teknik');
Route::get("/insaat_hizmeti", [insaatpage::class, 'index'])->name('home.insaat');
Route::get("/liman_hizmeti", [limanpage::class, 'index'])->name('home.liman');

Route::get("/kuyumculuk_hizmeti", [kuyumcupage::class, 'index'])->name('home.kuyumcu');
Route::get("/iletisim_bilgileri", [contactpage::class, 'index'])->name('home.contactpage');

Route::get("/mobil_vincler", [mobilvincpage::class, 'index'])->name('home.mobilvincpage');
Route::get("/hiyap_vinc", [hiyappage::class, 'index'])->name('home.hiyap');
Route::get("/sepetli_vinc", [spetlipage::class, 'index'])->name('home.sepetli');
Route::get("/forklift", [forklift::class, 'index'])->name('home.forklift');




// makine parkur details
Route::get("/babavinc/makine_parkuru/{slug}", [makineparkur::class, 'makineparkurDetails'])->name('home.makineparkudetails');

Route::get("/mobil_vinc_kiralama", [mobilkiralama::class, 'index'])->name('home.mobilkiralama');




Route::get("/dubai-escape-room", [HomeIndexController::class, 'index'])->name('homepage.index');
Route::get("/abudhabi-escape-room", [HomeAbudhabiController::class, 'index'])->name('homeabudhabi.index');


Route::get("/supernatural", [SupernaturalHomeController::class, 'index'])->name('supernatural.index');




Route::get("/abudhabi/faq", [AbdudhabiFaqController::class, 'faqIndex'])->name('abudhabi.faq');
Route::get("/dubai/faq", [DubaiFaqController::class, 'faqIndex'])->name('dubai.faq');


Route::get("/abudhabi/disclaimer-and-liability", [disclaimerController::class, 'index'])->name('abudhabi.disclaimer');
Route::get("/dubai/disclaimer-and-liability", [DubaiDisclaimerController::class, 'index'])->name('dubai.disclaimer');

Route::get("/abudhabi/terms-conditions", [termsController::class, 'index'])->name('abudhabi.terms');
Route::get("/dubai/terms-conditions", [DubaiTermsController::class, 'index'])->name('dubai.terms');

Route::get("/abudhabi/privacy-policy", [privacyController::class, 'index'])->name('abudhabi.privacy');
Route::get("/dubai/privacy-policy", [DubaiPrivacyController::class, 'index'])->name('dubai.privacy');

Route::get("/abudhabi/team-building", [teambuildingController::class, 'index'])->name('abudhabi.teambuilding');
Route::get("/dubai/team-building", [DubaiTeambuildingController::class, 'index'])->name('dubai.teambuilding');


Route::get("/abudhabi/franchise", [requestfranchiseController::class, 'index'])->name('abudhabi.franchise');
Route::get("/dubai/franchise", [DubaiRequestfranchiseController::class, 'index'])->name('dubai.franchise');


Route::post("abudhabi/franchise", [requestfranchiseController::class, 'store'])->name('abudhabi.franchise.store');
Route::post("dubai/franchise", [DubaiRequestfranchiseController::class, 'store'])->name('dubai.franchise.store');

Route::get('/check-availability/{room_id}', CheckAvailabilityController::class);
Route::post('/check-promotion', CheckPromotionDiscount::class)->name('check-promotion');

Route::get("/abudhabi/blog", [blogIndexController::class, 'blogIndex'])->name('abudhabi.blog');
Route::get("/dubai/blog", [DubaiBlogIndexController::class, 'blogIndex'])->name('dubai.blog');

Route::get("/abudhabi/blog/{id}/{title}", [blogIndexController::class, 'blogDetail'])->name('abudhabi.blog.blogdetails');
Route::get("/dubai/blog/{id}/{title}", [DubaiBlogIndexController::class, 'blogDetail'])->name('dubai.blog.blogdetails');

Route::get("/abudhabi/reservation", [AbdudhabiReservationController::class, 'index'])->name('abudhabi.reservation');
Route::get("/dubai/reservation", [DubaiReservationController::class, 'index'])->name('dubai.reservation');




Route::get("/abudhabi/rooms", [roomIndexController::class, 'roomsIndex'])->name('abudhabi.rooms');

Route::get("/abudhabi/contact", [AbdudhabiContactController::class, 'contactIndex'])->name('abudhabi.contact');
Route::get("/dubai/contact", [DubaiContactController::class, 'contactIndex'])->name('dubai.contact');

Route::post("/abudhabi/contact", [AbdudhabiContactController::class, 'store'])->name('abudhabi.contact.store');
Route::post("/dubai/contact", [DubaiContactController::class, 'store'])->name('dubai.contact.store');



Route::controller(RoomController::class)->name('rooms.')->group(callback: function () {
    Route::get('escape-rooms', fn () => redirect()->route('home.index'))->name('index');
    Route::get('horror-escape-rooms-dubai',       'dubai')->name('dubai');
    Route::get('horror-escape-rooms-abudhabi',    'abudhabi')->name('abudhabi');
    Route::post('escape-rooms/reservation', 'reservation')->name('reservation');
    Route::get("/rooms/form",      'form')->name('form');
    Route::post("/rooms/promotion", 'promotion')->name('promotion');
    Route::get("abudhabi/escape-rooms/{slug}",     'detail')->name('detail');
    Route::get("dubai/escape-rooms/{slug}",     'dubaidetail')->name('dubai_detail');
});



Route::controller(ReservationController::class)->name('reservations.')->group(function () {
    Route::get('abudhabi/reservation',       'index')->name('abudhabi.reservation');
    Route::post('reservations', 'store')->name('store');
});

Route::controller(VideoRequestController::class)->name('requestvideo.')->group(function () {

    Route::get('abudhabi/video-order', 'index_abudhabi')->name('abudhabi');
    Route::get('dubai/video-order', 'index_dubai')->name('dubai');

    Route::post('video', 'store')->name('store');
});

Route::get('/get-archives', [ReservationController::class, 'fetchArchives'])->name('get.archives');





Route::controller(ReservationController::class)->name("payments.")->prefix("payments")->group(function () {
    Route::get("success", "RetrieveOrderStatus")->name("success");
    Route::get("failed", "failed")->name("failed");
});

Route::get("/price",                [PriceController::class, 'index'])->name('price.index');
Route::get("/events",               [EventsController::class, 'index'])->name('events.index');
Route::get("/contact",              [ContactController::class, 'index'])->name('contact.index');

Route::get("/terms",            fn () => view('site.terms'))->name('terms');
Route::get("/privacy",          fn () => view('site.privacy'))->name('privacy');
Route::get("/refund",           fn () => view('site.refund'))->name('refund');
Route::get("/liability",        fn () => view('site.liability'))->name('liability');

require __DIR__ . '/auth.php';
