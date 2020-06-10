<?php

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


use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('flash');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin.index');
//routes for destinations
Route::view('/destinations', 'destinations.index')->name('destinations.index');
Route::view('/historic_sites', 'destinations.historicSites.index');
Route::view('/nationalParks', 'destinations.nationalparks.index');
Route::view('/marineParks', 'destinations.marineParks.index');
Route::view('/conservancy', 'destinations.conservancy.index');
Route::view('/wildlife', 'destinations.wildlife.index');


//routes for things to do
Route::view('/things_to_do', 'things_to_do.index');
Route::view('/camping', 'things_to_do.camping.index');
Route::view('/safaris', 'things_to_do.safaris.index');
Route::view('/golf', 'things_to_do.golf.index');
Route::view('/culture', 'things_to_do.culture.index');
Route::view('/festivals', 'things_to_do.festivals.index');
Route::view('/watersports', 'things_to_do.watersports.index');
Route::view('/bikeriding', 'things_to_do.safaris.bikeriding');
Route::view('/hiking', 'things_to_do.safaris.hikingTrekking');
Route::view('/dhowsafari', 'things_to_do.safaris.dhowsafari');
//golf
Route::view('/golf/karengolf', 'things_to_do.golf.karengolfcourse');
Route::view('/golf/leisurelodge', 'things_to_do.golf.leisurelodgebeachgolfresort');
Route::view('/golf/limurugolf', 'things_to_do.golf.limurugolfclub');
Route::view('/golf/muthaigagolf', 'things_to_do.golf.muthaigagolfcourse');
Route::view('/golf/nyaligolf', 'things_to_do.golf.nyaligolfcountryclub');
Route::view('/golf/royalnairobigolf', 'things_to_do.golf.royalnairobigolfclub');
Route::view('/golf/sigonagolf', 'things_to_do.golf.sigonagolfclub');
Route::view('/golf/vipingogolf', 'things_to_do.golf.vipingogolfcourse');
Route::view('/golf/windsorgolf', 'things_to_do.golf.windsorgolfcourse');


// routes of national parks
Route::view('/nationalParks/amboseli', 'destinations.nationalparks.amboseliNationalPark');
Route::view('/nationalParks/nairobiNationalPark', 'destinations.nationalparks.nairobiNationalPark');
Route::view('/lnakurupark', 'destinations.nationalparks.lakeNakuruNationalPark');
Route::view('/lturkanapark', 'destinations.nationalparks.lakeTurkanaNationalPark');


Route::view('/accomodation', 'accomodation.accomodation');




