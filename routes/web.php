<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['prefix' => 'admin'],function(){
    //////////////////////////login/////////////////////////////

    Route::get('login','Controllernews@login') -> name('login');

    Route::POST('checklogin','Controllernews@CreateLogin') -> name('checklogin');

    Route::get('exit','Controllernews@funExit') -> name('exit');


//////////////////////////////////////Begin route doctor and home ////////////////////////done
    Route::get('home','Controllerdoctor@home') -> name('admin.home');
    Route::get('create','Controllerdoctor@create') -> name('admin.create');
    Route::POST('storedoctor','Controllerdoctor@store') -> name('admin.store');
    Route::get('edit/{doctorr_id}','Controllerdoctor@edit') -> name('admin.edit');
    Route::POST('updatedoctor/{doctorr_id}','Controllerdoctor@updatedoctor') -> name('admin.update');
    Route::get('view','Controllerdoctor@getalldata') -> name('admin.view');
    Route::get('delete/{doctor_id}','Controllerdoctor@delete') -> name('doctor.delete');
///////////////////////////////End route admin ////////////////////////////////////////////////done
    Route::get('binfitview','Controllerdoctor@viewbinfit') -> name('binfit.view');
    Route::get('binfitdelete/{binfit_id}','Controllerdoctor@binfitdelete') -> name('binfit.delete');
//////////////////show Binfit table /////////////////////////////////////////////////////
    Route::get('newscreate','Controllernews@addnews') -> name('news.create');
    Route::POST('storenews','Controllernews@storenews') -> name('news.store');

    Route::get('shownews','Controllernews@shownews') -> name('news.show');

    Route::get('show-report','Controllernews@ShowReports') -> name('news.report');

  ///////////////////////////////////////End news Route////////////////done news.report
      Route::get('milkcreate','Controllercontent@createmillk') -> name('milk.create');
      Route::POST('storemilk','Controllercontent@storemilk') -> name('milk.store');
      Route::get('milkview','Controllercontent@viewmilk') -> name('milk.view');
      Route::get('milkedit/{milk_id}','Controllercontent@editmilk') -> name('milk.edit');
      Route::POST('updatemilk/{milk_id}','Controllercontent@updatemilk') -> name('milk.update');
////////////////////////////////////End milk content routes/////////////
        Route::get('animalcreate','Controllercontent@animalcreate') ->name('animal.create');
        Route::post('animal/store','Controllercontent@animalStore') ->name('animal.store');
        Route::get('animaledit/{behaviour_id}','Controllercontent@animaledit') ->name('animal.edit');
        Route::get('animalview','Controllercontent@animalview') ->name('animal.view');
        Route::POST('animalupdate/{contentId}','Controllercontent@updateAnimalBehavior') ->name('animal.update');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
          Route::get('login','Controllernews@login') ->name('login');





});


