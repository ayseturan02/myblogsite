<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\DashboardController;
use App\Http\Controllers\back\AuthController;
use App\Http\Controllers\back\ArticleController;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Back\PhotoController;
use App\Http\Controllers\Back\AboutController;
use App\Http\Controllers\Back\AbilityController;
use App\Http\Controllers\ContactMail;


//------back routes----//
;
Route::prefix("admin")->group(function (){

    Route::get("panel", [DashboardController::class, "index"])->name("admin.dashboard");
    Route::get("giris", [AuthController::class, "login"])->name("admin.login");
    Route::get("cıkıs", [AuthController::class, "logout"])->name("admin.logout");
    Route::post("giris1",[AuthController::class, "loginPost"])->name("admin.login.post");
    Route::get("makaleler",[ArticleController::class, "index"])->name("admin.makaleler.index");
    Route::get("makaleolustur",[ArticleController::class, "create"])->name("admin.makaleler.create");
    Route::post("store",[ArticleController::class, "store"])->name("admin.makaleler.store");
    Route::post("update",[ArticleController::class, "update"])->name("admin.makaleler.update");
    Route::get("destroy/{id}",[ArticleController::class,"destroy"])->name("admin.makaleler.destroy");
    Route::get("edit/{id}",[ArticleController::class,"edit"])->name("admin.makaleler.edit");
    Route::get("galeri",[PhotoController::class,"index"])->name("admin.fotograflar.index");
    Route::get("galeriolustur",[PhotoController::class,"create"])->name("admin.fotograflar.create");
    Route::get("anasayfa/edit/{id}",[PhotoController::class,"edit"])->name("admin.fotograflar.edit");
    Route::get("galeri/destroy/{id}",[PhotoController::class,"destroy"])->name("admin.fotograflar.destroy");
    Route::post("anasayfa/store",[PhotoController::class,"store"])->name("admin.fotograflar.store");
    Route::get("anasayfa/destroy/{id}",[PhotoController::class,"destroy"])->name("admin.fotograflar.destroy");
    Route::get("hakkında",[AboutController::class, "index"])->name("admin.hakkında.index");
    Route::get("hakkında/edit/{id}",[AboutController::class,"edit"])->name("admin.hakkında.edit");
    Route::post("hakkında/store",[AboutController::class, "store"])->name("admin.hakkında.store");
    Route::post("hakkında/update",[AboutController::class, "update"])->name("admin.hakkında.update");
    Route::get("hakkında/destroy/{id}",[AboutController::class,"destroy"])->name("admin.hakkında.destroy");
    Route::get("yetenekler",[AbilityController::class, "index"])->name("admin.yetenekler.index");
    Route::get("yetenekler/create",[AbilityController::class,"create"])->name("admin.yetenekler.create");
    Route::get("yetenekler/edit/{id}",[AbilityController::class,"edit"])->name("admin.yetenekler.edit");
    Route::post("yetenekler/store",[AbilityController::class, "store"])->name("admin.yetenekler.store");
    Route::post("yetenekler/update",[AbilityController::class, "update"])->name("admin.yetenekler.update");
    Route::get("yetenekler/destroy/{id}",[AbilityController::class, "destroy"])->name("admin.yetenekler.destroy");
});


//----front routes----//

Route::get("/", [HomepageController::class, "anasayfa"])->name("anasayfa");
Route::get("/egitım", [HomepageController::class, "egıtım"])->name("egıtım");
Route::get("/deneyim", [HomepageController::class, "deneyim"])->name("deneyim");
Route::get("/galeri", [HomepageController::class, "galeri"])->name("galeri");
Route::get("/hakkında", [HomepageController::class, "hakkında"])->name("hakkında");
Route::get("/iletisim", [HomepageController::class, "iletisim"])->name("iletisim");
Route::get("/sosyalmedya", [HomepageController::class, "sosyalmedya"])->name("sosyalmedya");
Route::get("/yetenekler",[HomepageController::class,"yetenekler"])->name("yetenekler");
Route::get("/makaleler",[HomepageController::class,"makaleler"])->name("makaleler");


Route::post("/mailyolla",[ContactMail::class,"sendEmail"])->name("mailyolla");

