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

Route::get('/', function () {
    return view('beranda');
})->name('home');

Route::get('dashboardhome', 'DashboardController@dashboardHome')->name('dashboardHome');

// Route::get('/idebisnis', function(){
//   return view('dashboard/idebisnis');
// });
Route::get('/idebisnis', 'IdeController@ideBisnis')->name('ideBisnis');

Route::post('/tambahidebisnis', 'IdeController@tambahIdeBisnis')->name('tambahIdeBisnis');

Route::post('/editidebisnis/{id}', 'IdeController@editIdeBisnis')->name('editIdeBisnis');

// Route::get('/daftarmentor', function(){
//   return view('dashboard/daftarmentor');
// });

Route::get('/listmentor', 'DosenController@listMentor');

Route::get('/statistik', function(){
  return view('dashboard/statistik');
});

Route::get('/profil', function(){
  return view('dashboard/profil');
});

Route::get('/setting', function(){
  return view('dashboard/setting');
});

// Route::get('/kotakmasuk', function(){
//   return view('dashboard/kotakmasuk');
// });

Route::get('/kotakmasuk', 'MessageController@inbox')->name('inbox');

// Route::get('/detailide', function(){
//   return view('dashboard/detailide');
// });

Route::get('/detailide/{id}', 'IdeController@detailIde')->name('detailIde');

Route::get('/hapuspesan/{id}', 'MessageController@deleteMessage');

// Route::get('/detailmentor', function(){
//   return view('dashboard/detailmentor');
// });

Route::get('/detailmentor/{id}', 'DosenController@detailMentor');


// Login
//Route::post('/login', 'UserController@login')->name('user.login');

// Register

// Route::post('/register', 'UserController@registerUser')->name('user.register');

Route::post('/registeruser', 'UserController@registerUser')->name('user.register');

Route::post('/biodata', 'DosenController@setBiodata')->name('biodata.set');

Route::post('/buatKelompok', 'KelompokController@buatKelompok')->name('buatKelompok');

Route::post('/tambahkanAnggotaKelompok', 'KelompokController@tambahkanAnggotaKelompok')->name('tambahkanAnggotaKelompok');

Route::get('/masukKelompok/{id}', 'KelompokController@masukKelompok');
Route::get('/abaikanKelompok/{id}', 'KelompokController@abaikanKelompok');
// Route::get('/detaildatakelompok', function(){
//   return view('dashboard/detaildatakelompok');
// });
Route::get('/detaildatakelompok', 'KelompokController@detailDataKelompok')->name('detailDataKelompok');

Route::get('/daftarbimbingan', function(){
  return view('dashboard/daftarbimbingan');
});

// Route::get('/datakelompok', function(){
//   return view('dashboard/datakelompok');
// });
//Route::get('/datakelompok', 'KelompokController@dataKelompok');

Route::get('/register', function(){
  return view('auth/register');
});

// Login
//Route::post('/login', 'UserController@login')->name('user.login');

// Register
Route::post('/register', 'UserController@registerUser')->name('user.register');

// Route::post('/biodata', 'BiodataController@setBiodata')->name('biodata.set');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/pilihmentortim/{id}', 'KelompokController@pilihMentorTim');

// Form Mentoring
Route::post('/setmentoring', 'MentoringController@setMentoring')->name('setmentoring');

Route::get('/getmentoring', 'MentoringController@getMentoring')->name('getmentoring');

// Get mentoring team
Route::get('/getlistteam', 'KelompokController@getTimMentor')->name('listteam');

Route::post('/kirimpesan', 'MessageController@kirimPesan')->name('kirimPesan');
