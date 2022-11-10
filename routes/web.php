<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;


Route::get('/home', function(){
    return view('home',[
        'admin' =>  'khosy',
        'role'  =>  'admin',
        'datawarga' => ['Budi','samsul','rabi','samsul','rabi','samsul','rabi','samsul','rabi','samsul','rabi']
    ]);
});

Route::get('/warga',[WargaController::class,'index']);


//memanggil tanpa controller tapi dari view
// Route::get('/datawarga',function(){
//     return view('datawarga');
// });


//belajar routes
// Route::get('/', function () {
//     return view('welcome');
// });
// //route prefix untuk membuat grup dalam route
// Route::prefix('master')->group(function () {
//     Route::get('/master', function () {
        
//     });
// });
// Route::get('/siswa', function(){
//     return view('siswa',['name'=>'khosy']);
// });

// //Route::view('/siswa', 'siswa', ['name'=>'khosy']);
// Route::get('/siswa2', function(){
//     return view('siswa2',['maintance'=>'siswa 1 lagi maintance bang']);
// });

// Route::redirect('/siswa','/siswa2');
// //Route::redirect('/siswa2','error');

// Route::get('guru/detail/{id}', function($id){
//     return view('guru.detail',['id'=>$id]);
// });