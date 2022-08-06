<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RESController;
use App\Http\Controllers\Haqqimizda;
use App\Http\Controllers\Pagepartnyor;
use App\Http\Controllers\Sifarisler;
use App\Http\Controllers\Contact_cont;
use App\Http\Controllers\Sosial;





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

//  Route::get('/', function () {
//      return view('welcome');
//  });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//RES
Route::get('/',[RESController::class,"index"])->name('index');

Route::get('/haqqimizda',[RESController::class,"haqqimizda"])->name('Mainhaqqimizda');

Route::get('/partnyorlar',[RESController::class,"partnyorlar"])->name('Mainpartnyrolar');

Route::get('/sifarisler',[RESController::class,"sifarisler"])->name('Mainsifarisler');

Route::get('/contact',[RESController::class,"contact"])->name('Maincontact');

Route::get('/footer',[RESController::class,"footer"])->name('Mainfooter');





//Admin
Route::get('/redirects',[AdminController::class,"redirect"]);

Route::get('/user',[AdminController::class,"user"]);

//Esas->slide

Route::get("/slide",[AdminController::class,'slide'])->name('slide');

Route::post("/Slide",[AdminController::class,'sslide'])->name('Storeslide');

Route::get("editslide/{id}",[AdminController::class,'editSlide']);

Route::post("/Uslide",[AdminController::class,'updateslide'])->name('Updateslide');

Route::get("deleteslide/{id}",[AdminController::class,'deleteSlide']);

//Esas->emlaksifaris

Route::get("/Emlaksifaris",[AdminController::class,'emlaksifarisi'])->name('emlaksifarisi');

Route::post("/Emlaksifaris",[AdminController::class,'semlaksifaris'])->name('Storeemlaksifaris');

Route::get("editemlak/{id}",[AdminController::class,'editemlak']);

Route::post("/UEmlaksifaris",[AdminController::class,'uemlaksifaris'])->name('Updateemlaksifaris');

Route::get("deleteemlak/{id}",[AdminController::class,'deleteemlak']);

//Esas->haqqimizda

Route::get("/Haqqimizda",[AdminController::class,'haqqimizda'])->name('haqqimizda');

Route::post("/Haqqimizda",[AdminController::class,'Shaqqimizda'])->name('Storehaqqimizda');

Route::get("edithaqqimizda/{id}",[AdminController::class,'edithaqqimizda']);

Route::post("/UHaqqimizda",[AdminController::class,'uhaqqimizda'])->name('Updatehaqqimizda');

Route::get("deletehaqqimizda/{id}",[AdminController::class,'deletehaqqimizda']);

//comment
Route::get("/Reyler",[AdminController::class,'reyler'])->name('reyler');

Route::post("/Reyler",[AdminController::class,'Sreyler'])->name('Storereyler');

Route::get("editreyler/{id}",[AdminController::class,'editreyler']);

Route::post("/UReyler",[AdminController::class,'ureyler'])->name('Updatereyler');

Route::get("deletereyler/{id}",[AdminController::class,'deletereyler']);

//partnyorlar
Route::get("/Partnyorlar",[AdminController::class,'partnyorlar'])->name('partnyorlar');

Route::post("/Partnyorlar",[AdminController::class,'Spartnyorlar'])->name('Storepartnyorlar');

Route::get("editpartnyorlar/{id}",[AdminController::class,'editpartnyorlar']);

Route::post("/Upartnyorlar",[AdminController::class,'upartnyorlar'])->name('Updatepartnyorlar');

Route::get("deletepartnyorlar/{id}",[AdminController::class,'deletepartnyorlar']);

//Video
Route::get("/AdminHaqqimizda",[Haqqimizda::class,'about'])->name('adminhaqqimizda');

Route::post("/About",[Haqqimizda::class,'svideo'])->name('Svideo');

Route::get("editvideo/{id}",[Haqqimizda::class,'editvideo']);

Route::post("/Upvideo",[Haqqimizda::class,'uvideo'])->name('Updatevideo');

Route::get("deletevideo/{id}",[Haqqimizda::class,'deletevideo']);


//gosterici

Route::get("/Admingosterici",[Haqqimizda::class,'gosterici'])->name('gosterici');

Route::post("/Gosterici",[Haqqimizda::class,'sgosterici'])->name('Sgosterici');

Route::get("editgosterici/{id}",[Haqqimizda::class,'editgosterici']);

Route::post("/Upgosterici",[Haqqimizda::class,'ugosterici'])->name('Updategosterici');

Route::get("deletegosterici/{id}",[Haqqimizda::class,'deletegosterici']);

//gallery

Route::get("/Admingallery",[Haqqimizda::class,'gallery'])->name('gallery');

Route::post("/Gallery",[Haqqimizda::class,'sgallery'])->name('Sgallery');

Route::get("editgallery/{id}",[Haqqimizda::class,'editgallery']);

Route::post("/Upgallery",[Haqqimizda::class,'ugallery'])->name('Updategallery');

Route::get("deletegallery/{id}",[Haqqimizda::class,'deletegallery']);

//Haq-partnyorlar

Route::get("/HPartnyorlar",[Haqqimizda::class,'hpartnyorlar'])->name('Hpartnyorlar');

Route::post("/HPartnyorlar",[Haqqimizda::class,'Shpartnyorlar'])->name('Storehpartnyorlar');

Route::get("edithpartnyorlar/{id}",[Haqqimizda::class,'edithpartnyorlar']);

Route::post("/Uhpartnyorlar",[Haqqimizda::class,'uhpartnyorlar'])->name('Updatehpartnyorlar');

Route::get("deletehpartnyorlar/{id}",[Haqqimizda::class,'deletehpartnyorlar']);

//page-partnyorlar

Route::get("/PPartnyorlar",[Pagepartnyor::class,'ppartnyorlar'])->name('Ppartnyorlar');

Route::post("/PPartnyorlar",[Pagepartnyor::class,'Sppartnyorlar'])->name('Storeppartnyorlar');

Route::get("editppartnyorlar/{id}",[Pagepartnyor::class,'editppartnyorlar']);

Route::post("/Uppartnyorlar",[Pagepartnyor::class,'uppartnyorlar'])->name('Updateppartnyorlar');

Route::get("deleteppartnyorlar/{id}",[Pagepartnyor::class,'deleteppartnyorlar']);

//page-Sifarisler

Route::get("/Sifarisler",[Sifarisler::class,'sifarisler'])->name('sifarisler');

Route::post("/Sifarisler",[Sifarisler::class,'SSifarisler'])->name('StoreSifarisler');

Route::get("editSifarisler/{id}",[Sifarisler::class,'editSifarisler']);

Route::post("/USifarisler",[Sifarisler::class,'uSifarisler'])->name('UpdateSifarisler');

Route::get("deleteSifarisler/{id}",[Sifarisler::class,'deleteSifarisler']);

// page-Sifarisler comment

Route::get("/SifarislerComment",[Sifarisler::class,'sifarislercomment'])->name('sifarislercomment');

Route::post("/Sifarislercomment",[Sifarisler::class,'SSifarislercomment'])->name('StoreSifarislerComment');

Route::get("editSifarislercomment/{id}",[Sifarisler::class,'editSifarislercommnet']);

Route::post("/USifarislercomment",[Sifarisler::class,'uSifarislercomment'])->name('UpdateSifarislercomment');

Route::get("deleteSifarislercomment/{id}",[Sifarisler::class,'deleteSifarislercomment']);

//contact
Route::get("/Admincontact",[Contact_cont::class,'admincontact'])->name('admincontact');

Route::post("/Contact",[Contact_cont::class,'contact'])->name('Contact');


//adress

Route::get("/Address",[Contact_cont::class,'adress'])->name('adres');

Route::post("/StoreAddress",[Contact_cont::class,'Storeadress'])->name('storeadres');

Route::get("EditAddress/{id}",[Contact_cont::class,'editadress']);

Route::post("/Uadress",[Contact_cont::class,'uadress'])->name('Updateadress');

Route::get("deleteAddress/{id}",[Contact_cont::class,'deleteadress']);

//adress

Route::get("/Phone",[Contact_cont::class,'phone'])->name('phone');

Route::post("/Storephone",[Contact_cont::class,'Storephone'])->name('storephone');

Route::get("EditPhone/{id}",[Contact_cont::class,'editphone']);

Route::post("/Uphone",[Contact_cont::class,'uphone'])->name('Updatephone');

Route::get("deletePhone/{id}",[Contact_cont::class,'deletephone']);



//email

Route::get("/Email",[Contact_cont::class,'email'])->name('email');

Route::post("/Storeemail",[Contact_cont::class,'Storeemail'])->name('storeemail');

Route::get("EditEmail/{id}",[Contact_cont::class,'editemail']);

Route::post("/Uemail",[Contact_cont::class,'uemail'])->name('Updateemail');

Route::get("deleteemail/{id}",[Contact_cont::class,'deleteemail']);

//employe

Route::post("/Storemploye",[RESController::class,'employe'])->name('employe');

Route::get("/Employe",[RESController::class,'adminemploye'])->name('adminemploye');

//sosail-facebook

Route::get("/Facebook",[Sosial::class,'facebook'])->name('facebook');

Route::post("/Storefacebook",[Sosial::class,'Storefacebook'])->name('storefacebook');

Route::get("Editfacebook/{id}",[Sosial::class,'editfacebook']);

Route::post("/Ufacebook",[Sosial::class,'ufacebook'])->name('Updatefacebook');

Route::get("deletefacebook/{id}",[Sosial::class,'deletefacebook']);
















