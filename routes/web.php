<?php

/*
RULES BY ALDO HARDIANSYAH
Detail => Open Detail Data Page

Add => Open Create Data Page
Insert => Insert Data to Database

Update => Open Edit Data Page
Edit => Update Data on Database

Drop => Open Delete Data Page
Delete => Delete Data from Database
*/


// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home','BerandaController@index')->name('home');

// Route::get('/admin/login','BerandaController@index')->name('home');




//MAIN ROUTES//
Route::get('/', 'BerandaController@index')->name('beranda');

Route::get('/informasi', 'InfoController@index')->name('informasi');
    Route::get('/informasi/detail/{id}', 'InfoController@detail')->name('informasi_detail');
    Route::post('/informasi/search', 'InfoController@search')->name('informasi_search');

Route::get('/jadwal', 'JadwalController@index')->name('jadwal');
    Route::get('/jadwal/detail/{id}', 'JadwalController@jadwal_detail')->name('jadwal_detail');
    Route::post('/jadwal/search', 'JadwalController@search')->name('jadwal_search');

Route::get('/peraturan', 'PeraturanController@index')->name('peraturan');

Route::get('/laboratorium', 'LaboratoriumController@index')->name('laboratorium');

Route::get('/pendaftaran', 'PendaftaranController@index')->name('pendaftaran');
     Route::post('/pendaftaran', 'PendaftaranController@insert')->name('pendaftaran.insert');




//ADMIN ROUTES//
Route::group(['middleware' => 'admin'], function(){

Route::get('/admin', 'Admin\AdminDashboardController@index')->name('admin_dashboard');

Route::get('/admin/asisten', 'Admin\AdminAsistenController@index')->name('admin_asisten');
    Route::get('/admin/asisten/{id}', 'Admin\AdminAsistenController@detail')->name('admin_asisten.detail');
    Route::get('/admin/asistenresign/{id}', 'Admin\AdminAsistenController@detail_resign')->name('admin_asisten.detail_resign');
    Route::post('/admin/asisten/edit', 'Admin\AdminAsistenController@edit')->name('admin_asisten.edit');
    Route::post('/admin/asisten/delete', 'Admin\AdminAsistenController@delete')->name('admin_asisten.delete');
    Route::get('/admin/asisten/downloadcv/{npm}', 'Admin\AdminAsistenController@getDownloadcv')->name('admin_asisten.cv');
    Route::get('/admin/asisten/downloadsurat/{npm}', 'Admin\AdminAsistenController@getDownloadsurat')->name('admin_asisten.surat');
    Route::get('/admin/asisten/downloadnilai/{npm}', 'Admin\AdminAsistenController@getDownloadnilai')->name('admin_asisten.nilai');
    Route::get('/admin/asistenresign', 'Admin\AdminAsistenController@resign')->name('admin_asisten.resign');
    Route::post('/admin/asisten/accept', 'Admin\AdminAsistenController@revoke')->name('admin_asisten.revoke');

Route::get('/admin/semester', 'Admin\AdminSemesterController@index')->name('admin_semester');
    Route::post('/admin/semester/insert', 'Admin\AdminSemesterController@insert')->name('admin_semester.insert');
    Route::post('/admin/semester/edit', 'Admin\AdminSemesterController@edit')->name('admin_semester.edit');
    Route::post('/admin/semester/delete', 'Admin\AdminSemesterController@delete')->name('admin_semester.delete');

Route::get('/admin/kelas', 'Admin\AdminKelasController@index')->name('admin_kelas');
    Route::get('/admin/kelas/add', 'Admin\AdminKelasController@add')->name('admin_kelas.add');
    Route::post('/admin/kelas/add', 'Admin\AdminKelasController@insert')->name('admin_kelas.insert');
    Route::post('/admin/kelas/edit', 'Admin\AdminKelasController@edit')->name('admin_kelas.edit');
    Route::post('/admin/kelas/delete', 'Admin\AdminKelasController@delete')->name('admin_kelas.delete');
    Route::post('/admin/kelas/jurusan/add', 'Admin\AdminKelasController@addJurusan')->name('admin_jurusan.add');
    Route::post('/admin/kelas/jurusan/edit', 'Admin\AdminKelasController@editJurusan')->name('admin_jurusan.edit');
    Route::post('/admin/kelas/jurusan/delete', 'Admin\AdminKelasController@deleteJurusan')->name('admin_jurusan.delete');

Route::get('/admin/praktikum', 'Admin\AdminPraktikumController@index')->name('admin_praktikum');
    Route::get('/admin/praktikum/add', 'Admin\AdminPraktikumController@add')->name('admin_praktikum.add');
    Route::get('/admin/praktikum/detail/{id}', 'Admin\AdminPraktikumController@detail')->name('admin_praktikum.detail');
    Route::post('/admin/praktikum/insert', 'Admin\AdminPraktikumController@insert')->name('admin_praktikum.insert');
    Route::get('/admin/praktikum/update/{id}', 'Admin\AdminPraktikumController@update')->name('admin_praktikum.update');
    Route::post('/admin/praktikum/edit', 'Admin\AdminPraktikumController@edit')->name('admin_praktikum.edit');
    Route::post('/admin/praktikum/delete', 'Admin\AdminPraktikumController@delete')->name('admin_praktikum.delete');

Route::get('/admin/laboratorium', 'Admin\AdminLaboratoriumController@index')->name('admin_laboratorium');
    Route::post('/admin/laboratorium/insert', 'Admin\AdminLaboratoriumController@insert')->name('admin_laboratorium.insert');
    Route::post('/admin/laboratorium/edit', 'Admin\AdminLaboratoriumController@edit')->name('admin_laboratorium.edit');
    Route::post('/admin/laboratorium/delete', 'Admin\AdminLaboratoriumController@delete')->name('admin_laboratorium.delete');

Route::get('/admin/jadwalpraktikum', 'Admin\AdminJadwalPraktikumController@index')->name('admin_jadwalpraktikum');
    Route::get('/admin/jadwalpraktikum/add', 'Admin\AdminJadwalPraktikumController@add')->name('admin_jadwalpraktikum.add');
    Route::post('/admin/jadwalpraktikum/insert', 'Admin\AdminJadwalPraktikumController@insert')->name('admin_jadwalpraktikum.insert');
    Route::post('/admin/jadwalpraktikum/delete', 'Admin\AdminJadwalPraktikumController@delete')->name('admin_jadwalpraktikum.delete');

Route::get('/admin/jadwalasisten', 'Admin\AdminJadwalAsistenController@index')->name('admin_jadwalasisten');
    Route::get('/admin/jadwalasisten/add', 'Admin\AdminJadwalAsistenController@add')->name('admin_jadwalasisten.add');
    Route::get('/admin/jadwalasisten/add_detail1/{id}', 'Admin\AdminJadwalAsistenController@add_detail1')->name('admin_jadwalasisten.add_detail1');
    Route::get('/admin/jadwalasisten/add_detail2/{id}', 'Admin\AdminJadwalAsistenController@add_detail2')->name('admin_jadwalasisten.add_detail2');
    Route::post('/admin/jadwalasisten/insert_1', 'Admin\AdminJadwalAsistenController@insert_1')->name('admin_jadwalasisten.insert1');
    Route::post('/admin/jadwalasisten/insert_2', 'Admin\AdminJadwalAsistenController@insert_2')->name('admin_jadwalasisten.insert2');
    Route::post('/admin/jadwalasisten/delete', 'Admin\AdminJadwalAsistenController@delete')->name('admin_jadwalasisten.delete');

Route::get('/admin/informasi', 'Admin\AdminInformasiController@index')->name('admin_informasi');
    Route::post('/admin/informasi/insert', 'Admin\AdminInformasiController@insert')->name('admin_informasi.insert');
    Route::get('/admin/informasi/detail/{id}', 'Admin\AdminInformasiController@detail')->name('admin_informasi.detail');
    Route::post('/admin/informasi/delete', 'Admin\AdminInformasiController@delete')->name('admin_informasi.delete');

Route::get('/admin/pendaftaran', 'Admin\AdminPendaftaranController@index')->name('admin_pendaftaran');
    Route::get('/admin/pendaftaran/{id}', 'Admin\AdminPendaftaranController@detail')->name('admin_pendaftaran.detail');
    Route::get('/admin/pendaftaran/ceck/{id}', 'Admin\AdminPendaftaranController@detail2')->name('admin_pendaftaran.detail2');
    Route::get('/admin/pendaftaran/accept/{id}', 'Admin\AdminPendaftaranController@accept')->name('admin_pendaftaran.accept');
    Route::get('/admin/pendaftaran/reject/{id}', 'Admin\AdminPendaftaranController@reject')->name('admin_pendaftaran.reject');
    Route::get('/admin/pendaftaran/downloadcv/{npm}', 'Admin\AdminPendaftaranController@getDownloadcv')->name('admin_pendaftaran.cv');
    Route::get('/admin/pendaftaran/downloadsurat/{npm}', 'Admin\AdminPendaftaranController@getDownloadsurat')->name('admin_pendaftaran.surat');
    Route::get('/admin/pendaftaran/downloadnilai/{npm}', 'Admin\AdminPendaftaranController@getDownloadnilai')->name('admin_pendaftaran.nilai');

Route::get('/admin/menu', 'Admin\AdminMenuController@index')->name('admin_menu');
    Route::get('/admin/menu/aktif/{id}', 'Admin\AdminMenuController@aktivasi')->name('admin_menu.aktivasi');
    Route::get('/admin/menu/nonaktif/{id}', 'Admin\AdminMenuController@nonaktif')->name('admin_menu.nonaktif');

});




//ASISTEN ROUTES//
Route::group(['middleware' => 'asisten'], function(){

Route::get('/asisten', 'Asisten\AsistenDashboardController@index')->name('asisten_dashboard');
    Route::get('/asisten/isianjadwal', 'Asisten\AsistenDashboardController@isianjadwal')->name('asisten_isianjadwal');
    Route::post('/asisten/isianjadwal/insert', 'Asisten\AsistenDashboardController@isianjadwalinsert')->name('asisten_isianjadwal.insert');
    Route::get('/asisten/jadwal/detail/{id}', 'Asisten\AsistenDashboardController@jadwal_detail')->name('asisten_jadwaldetail');

Route::get('/asisten/profil', 'Asisten\AsistenProfileController@index')->name('asisten_profile');
    Route::get('/asisten/editprofil', 'Asisten\AsistenProfileController@edit')->name('asisten_profile_edit');
    Route::get('/asisten/downloadcv/{npm}', 'Asisten\AsistenProfileController@getDownloadcv')->name('asisten_cv');
    Route::get('/asisten/downloadsurat/{npm}', 'Asisten\AsistenProfileController@getDownloadsurat')->name('asisten_surat');
    Route::get('/asisten/downloadnilai/{npm}', 'Asisten\AsistenProfileController@getDownloadnilai')->name('asisten_nilai');

Route::get('/asisten/catatan', 'Asisten\AsistenCatatanController@index')->name('asisten_catatan');
    Route::post('/asisten/catatan/delete', 'Asisten\AsistenCatatanController@delete')->name('asisten_catatan.delete');
    Route::post('/asisten/catatan/insert', 'Asisten\AsistenCatatanController@insert')->name('asisten_catatan.insert');
});



//Buat Ambil Image
Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/public/uploads/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
