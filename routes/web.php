<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studController;
use App\Http\Controllers\studentController;
Route::get('/',[studController::class,'show'])->name('student');
Route::get('/',[studController::class,'show_record'])->name('student');
Route::get('/whendata',[studController::class,'whendata'])->name('whendata');
Route::get('/add',function()
{
    return view('/addstudent');
});
Route::Post('/addstudent',[studController::class,'addstudent'])->name('addstudent');
Route::get('/student/{id}',[studController::class,'viewstudent'])->name('viewstudent');
Route::get('/delstudent/{id}',[studController::class,'delstudent'])->name('delstudent');
Route::get('/updatestudent/{id}',[studController::class,'updatestudent'])->name('updatestudent');
Route::POST('/update_stud/{id}',[studController::class,'update_stu'])->name('update_stu');


Route::get('/cities',[studentController::class,'show']);
Route::get('/newcity',[studentController::class,'newcity'])->name('newcity');

Route::get('/cities/{id}',[studentController::class,'singleuser'])->name('city');
Route::get('/deletecity/{id}',[studentController::class,'deletecity'])->name('citydel');
Route::get('/updatecity',[studentController::class,'updatecity'])->name('updatecity');
