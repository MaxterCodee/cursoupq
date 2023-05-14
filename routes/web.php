<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentOperation;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');


Route::prefix('admin')->middleware('theme:dashboard')->name('admin.')->group(function(){



        Route::middleware(['auth:admin'])->group(function(){

            Route::get('/dashboard',[AdminController::class,'index']);
            Route::get('/exam_category',[AdminController::class,'exam_category']);
            Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
            Route::get('/edit_category/{id}',[AdminController::class,'edit_category']);
            Route::get('/category_status/{id}',[AdminController::class,'category_status']);
            Route::get('/manage_exam',[AdminController::class,'manage_exam']);
            Route::get('/exam_status/{id}',[AdminController::class,'exam_status']);
            Route::get('/delete_exam/{id}',[AdminController::class,'delete_exam']);
            Route::get('/edit_exam/{id}',[AdminController::class,'edit_exam']);
            Route::get('/manage_students',[AdminController::class,'manage_students']);
            Route::get('/student_status/{id}',[AdminController::class,'student_status']);
            Route::get('/delete_students/{id}',[AdminController::class,'delete_students']);
            Route::get('/add_questions/{id}',[AdminController::class,'add_questions']);
            Route::get('/question_status/{id}',[AdminController::class,'question_status']);
            Route::get('/delete_question/{id}',[AdminController::class,'delete_question']);
            Route::get('/update_question/{id}',[AdminController::class,'update_question']);
            Route::get('/registered_students',[AdminController::class,'registered_students']);
            Route::get('/delete_registered_students/{id}',[AdminController::class,'delete_registered_students']);
            Route::get('/apply_exam/{id}',[AdminController::class,'apply_exam']);
            Route::get('/admin_view_result/{id}',[AdminController::class,'admin_view_result']);

            Route::post('/edit_question_inner',[AdminController::class,'edit_question_inner']);
            Route::post('/add_new_question',[AdminController::class,'add_new_question']);
            Route::post('/edit_students_final',[AdminController::class,'edit_students_final']);
            Route::post('/add_new_exam',[AdminController::class,'add_new_exam']);
            Route::post('/add_new_category',[AdminController::class,'add_new_category']);
            Route::post('/edit_new_category',[AdminController::class,'edit_new_category']);
            Route::post('/edit_exam_sub',[AdminController::class,'edit_exam_sub']);
            Route::post('/add_new_students',[AdminController::class,'add_new_students']);

        });



});



/* Student section routes */
Route::prefix('student')->middleware('theme:dashboard')->name('student.')->group(function(){


    Route::middleware(['auth:web'])->group(function(){
        Route::get('/dash',[StudentOperation::class,'dash']);

        Route::get('/exam',[StudentOperation::class,'exam']);
        Route::get('/join_exam/{id}',[StudentOperation::class,'join_exam']);
        Route::post('/submit_questions',[StudentOperation::class,'submit_questions']);
        Route::get('/show_result/{id}',[StudentOperation::class,'show_result']);
        Route::get('/apply_exam/{id}',[StudentOperation::class,'apply_exam']);
        Route::get('/view_result/{id}',[StudentOperation::class,'view_result']);
        Route::get('/view_answer/{id}',[StudentOperation::class,'view_answer']);
        Route::get('/diploma/{id}',[StudentOperation::class,'diploma']);
        Route::get('/descargar-pdf', 'StudentOperation@generatePDF')->name('descargar-pdf');




        // Route::get('/diploma/4', function () {
        //     $pdf = PDF::loadView('student/diploma/4');
        //     return $pdf->download('pruebapdf.pdf');
        //   });


        Route::get('/cursos',[StudentOperation::class,'cursos']);
        Route::get('/cursos1',[StudentOperation::class,'cursos1']);
        Route::get('/cursos2',[StudentOperation::class,'cursos2']);
        Route::get('/cursos3',[StudentOperation::class,'cursos3']);
        Route::get('/cursos4',[StudentOperation::class,'cursos4']);
        Route::get('/cursos5',[StudentOperation::class,'cursos5']);
        Route::get('/cursos6',[StudentOperation::class,'cursos6']);
        Route::get('/cursos7',[StudentOperation::class,'cursos7']);
        Route::get('/cursos8',[StudentOperation::class,'cursos8']);
        Route::get('/cursos9',[StudentOperation::class,'cursos9']);
        Route::get('/cursos10',[StudentOperation::class,'cursos10']);
        Route::get('/cursos11',[StudentOperation::class,'cursos11']);
        Route::get('/cursos12',[StudentOperation::class,'cursos12']);
        Route::get('/cursos13',[StudentOperation::class,'cursos13']);
        Route::get('/cursos14',[StudentOperation::class,'cursos14']);
        Route::get('/cursos15',[StudentOperation::class,'cursos15']);
        Route::get('/cursos16',[StudentOperation::class,'cursos16']);
        Route::get('/cursos17',[StudentOperation::class,'cursos17']);
        Route::get('/cursos18',[StudentOperation::class,'cursos18']);
        Route::get('/cursos19',[StudentOperation::class,'cursos19']);
        Route::get('/cursos20',[StudentOperation::class,'cursos20']);
        Route::get('/cursos21',[StudentOperation::class,'cursos21']);
        Route::get('/cursos22',[StudentOperation::class,'cursos22']);
        Route::get('/cursos23',[StudentOperation::class,'cursos23']);
        Route::get('/cursos24',[StudentOperation::class,'cursos24']);
        Route::get('/cursos25',[StudentOperation::class,'cursos25']);
        Route::get('/cursos26',[StudentOperation::class,'cursos26']);
        Route::get('/cursos27',[StudentOperation::class,'cursos27']);
        Route::get('/cursos28',[StudentOperation::class,'cursos28']);
        Route::get('/cursos29',[StudentOperation::class,'cursos29']);
        Route::get('/cursos30',[StudentOperation::class,'cursos30']);


        Route::get('/dashboard',[StudentOperation::class,'dashboard']);
        Route::get('/diploma',[StudentOperation::class,'diploma']);



        Route::get('/logout',[AuthenticatedSessionController::class,'destroy']);

    });


});



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
