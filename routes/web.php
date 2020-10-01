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

Route::get('/', 'HomepageController@index');
Route::get('/home', 'HomepageController@index');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/index', 'HomepageController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/editHome', 'HomepageController@editHome');
Route::post('/intro/store', 'HomepageController@store');
Route::post('/details/store', 'admincontroller@store');
Route::get('/details/show', 'admincontroller@show');


//routes for destinations
Route::get('/destinations', 'DestinationsController@index');
Route::view('/historic_sites', 'destinations.historicSites.index');
Route::view('/nationalParks', 'destinations.nationalparks.index');
Route::view('/marineParks', 'destinations.marineParks.index');
Route::view('/conservancy', 'destinations.conservancy.index');
Route::view('/wildlife', 'destinations.wildlife.index');
Route::view('/forests', 'destinations.forests.index');


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

//watersport

Route::view('/watersports/watersport', 'things_to_do.watersports.whiteWaterSport');
Route::view('/watersports/diving', 'things_to_do.watersports.Diving');
Route::view('/watersports/kitesurfing', 'things_to_do.watersports.kiteSurfing');


// routes of national parks
Route::view('/nationalParks/amboseli', 'destinations.nationalparks.amboseliNationalPark');
Route::view('/nationalParks/nairobiNationalPark', 'destinations.nationalparks.nairobiNationalPark');
Route::view('/lnakurupark', 'destinations.nationalparks.lakeNakuruNationalPark');
Route::view('/lturkanapark', 'destinations.nationalparks.lakeTurkanaNationalPark');





Route::view('/accomodation', 'accomodation.accomodation');




