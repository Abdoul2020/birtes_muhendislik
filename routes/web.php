<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;


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
use App\Http\Controllers\Site\missionVision;
use App\Http\Controllers\Site\mobilkiralama;
use App\Http\Controllers\Site\mobilvincpage;
use App\Http\Controllers\Site\productspage;
use App\Http\Controllers\Site\projects;
use App\Http\Controllers\Site\referencespages;
use App\Http\Controllers\Site\satispage;
use App\Http\Controllers\Site\services;
use App\Http\Controllers\Site\spetlipage;
use App\Http\Controllers\Site\supernatural\HomeController as SupernaturalHomeController;
use App\Http\Controllers\Site\teknikpage;
use App\Http\Controllers\Site\visionmissionpage;

Route::get("/", [HomeController::class, 'index'])->name('home.index');

Route::get("/about-us", [aboutpage::class, 'index'])->name('home.about');
Route::get("/vizyon_misyon", [visionmissionpage::class, 'index'])->name('home.visionandmission');

//services
Route::get("/services", [services::class, 'index'])->name('home.services');

// projects
Route::get("/projects", [projects::class, 'index'])->name('home.projects');
Route::get("/projeler/{slug}", [projects::class, 'projectdetail'])->name('home.projectsdetail');

Route::get("/references", [referencespages::class, 'index'])->name('home.references');
Route::get("/perakende", [HomeController::class, 'perakende'])->name('home.perakende');
Route::get("/misyon-vizyon", [missionVision::class, 'index'])->name('home.mission');
Route::get("/kisisel_verilerin_korunmasi_kanunu", [kvkkpage::class, 'index'])->name('home.kvkk');




Route::get("/kule_vinc_products", [productspage::class, 'index'])->name('home.products');
Route::get("/babavinc/urunler/{slug}", [productspage::class, 'productdetail'])->name('home.productsdetail');
Route::get("/kiralama", [kiralamapage::class, 'index'])->name('home.kiralama');
Route::get("/satis", [satispage::class, 'index'])->name('home.satis');
Route::get("/teknik_servis", [teknikpage::class, 'index'])->name('home.teknik');
Route::get("/insaat_hizmeti", [insaatpage::class, 'index'])->name('home.insaat');
Route::get("/liman_hizmeti", [limanpage::class, 'index'])->name('home.liman');

Route::get("/kuyumculuk_hizmeti", [kuyumcupage::class, 'index'])->name('home.kuyumcu');
Route::get("/contact", [contactpage::class, 'index'])->name('home.contactpage');

Route::get("/mobil_vincler", [mobilvincpage::class, 'index'])->name('home.mobilvincpage');
Route::get("/hiyap_vinc", [hiyappage::class, 'index'])->name('home.hiyap');
Route::get("/sepetli_vinc", [spetlipage::class, 'index'])->name('home.sepetli');
Route::get("/forklift", [forklift::class, 'index'])->name('home.forklift');




// makine parkur details
Route::get("/babavinc/makine_parkuru/{slug}", [makineparkur::class, 'makineparkurDetails'])->name('home.makineparkudetails');

Route::get("/mobil_vinc_kiralama", [mobilkiralama::class, 'index'])->name('home.mobilkiralama');

require __DIR__ . '/auth.php';
