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

Route::middleware(['guest'])->group(function ()
{
  Route::view('/', 'welcomee')->name('welcome');
  Route::view('passwordRecovery', 'passwordRecovery')->name('passwordRecovery');
});

Auth::routes();
Route::middleware(['auth'])->group(function ()
{
  Route::middleware(['access'])->group(function ()
  {
    Route::prefix('admin')->group(function () {
        Route::view('dashboard', 'admin.dashboard')->name('adminDashboardIndex');
        Route::get('manageStudent', 'ManageStudentController@index')->name('adminManageStudentIndex');
        Route::get('manageStudentAjax', 'ManageStudentController@getDataTable')->name('getDataTable');
        Route::prefix('manageStudent')->group(function () {
          Route::view('createRecord', 'admin.createStudent.createStudentIdRecord')->name('adminCreateRecordIndex');
          Route::post('createRecord', 'CreateRecordController@store2')->name('adminCreateRecordStore');
          Route::post('students', 'CreateStudentProfileController@store')->name('adminStoreStudentProfile');
          Route::prefix('students')->group(function ()
          {
            Route::view('create', 'admin.createStudent.createStudentProfile')->name('adminCreateStudentProfile');
            Route::prefix('{id}')->group(function ()
            {
              Route::get('personalData/create', 'PersonalDataController@create')->name('adminCreateStudentPersonalData');
              Route::post('personalData', 'PersonalDataController@store')->name('adminStoreStudentPersonalData');

              Route::get('familyBackground/create', 'FamilyBackgroundController@create')->name('adminCreateStudentFamilyBackground');
                Route::post('familyBackground', 'FamilyBackgroundController@store')->name('adminStoreStudentFamilyBackground');

                Route::get('sibling', 'SiblingsController@index')->name('adminIndexSibling');
                Route::post('sibling', 'SiblingsController@store')->name('adminStoreSibling');
                Route::prefix('sibling')->group(function ()
                {
                    Route::get('create', 'SiblingsController@create')->name('adminCreateSibling');
                    Route::get('{siblingId}/edit', 'SiblingsController@edit')->name('adminEditSibling');
                    Route::put('{siblingId}', 'SiblingsController@update')->name('adminUpdateSibling');
                    Route::delete('{siblingId}', 'SiblingsController@destroy')->name('adminDeleteSibling');
                });

                Route::get('educationalBackground/create', 'EducationalBackgroundController@create')->name('adminCreateStudentEducationalBackground');
                Route::post('educationalBackground', 'EducationalBackgroundController@store')->name('adminStoreStudentEducationalBackground');

                Route::get('structuredInterview/create', 'StructuredInterviewController@create')->name('adminCreateStudentStructuredInterview');

            });
          });
          Route::get('{id}/edit', 'EditStudentController@show')->name('adminEditRecordIndex');
          Route::put('edit/{id}', 'EditStudentController@update')->name('adminEditRecordPut');
          Route::post('{id}', 'ManageStudentController@destroy')->name('adminDeleteRecord');
        });
    });
  });

  Route::middleware(['userAccess'])->group(function ()
  {
    Route::prefix('user/{id}')->group(function () 
      {
        Route::get('profile', 'UserProfilePageController@show')->name('userProfileShow');
        Route::get('interview', 'InterviewPageController@show')->name('userInterviewShow');
        Route::prefix('interview')->group(function ()
        {
          Route::middleware(['exitInterviewChecker'])->group(function ()
          {
            Route::get('exitInterview', 'ExitInterviewPageController@show')->name('exitInterviewIndex');
            Route::post('exitInterview', 'ExitInterviewPageController@store')->name('exitInterviewCreate');
          });
        });
        Route::middleware(['access'])->group(function ()
        {
          Route::get('counseling', 'CounselingPageController@show')->name('counselingIndex');
          Route::post('counseling', 'CounselingPageController@store')->name('counselingCreate');
          Route::prefix('counseling')->group(function () {
            Route::put('update', 'CounselingPageController@update')->name('counselingUpdate');
            Route::delete('delete', 'CounselingPageController@destroy')->name('counselingDestroy');
          });
          Route::get('violation', 'ViolationPageController@show')->name('violationIndex');
          Route::post('violation', 'ViolationPageController@store')->name('violationCreate');
          Route::prefix('violation')->group(function () {
            Route::put('update', 'ViolationPageController@update')->name('violationUpdate');
            Route::delete('delete', 'ViolationPageController@destroy')->name('violationDestroy');
          });
        });
    });
  });
});
