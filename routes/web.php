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
      Route::prefix('user/{id}')->group(function ()
      {
          Route::get('profile', 'UserProfilePageController@show')->name('userProfileShow');

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
                Route::post('structuredInterview', 'StructuredInterviewController@store')->name('adminStoreStudentStructuredInterview');

                Route::get('exitInterview/create', 'ExitInterviewController@create')->name('adminCreateStudentExitInterview');
                Route::post('exitInterview', 'ExitInterviewController@store')->name('adminStoreStudentExitInterview');

            });
          });
            Route::prefix('user')->group(function ()
            {
                Route::get('{id}/edit', 'ProfileController@edit')->name('adminEditProfile');
                Route::put('{id}', 'ProfileController@update')->name('adminUpdateProfile');
                Route::prefix('{id}')->group(function ()
                {
                    Route::get('personalData/{personalDataId}/edit', 'PersonalDataController@edit')->name('adminEditPersonalData');
                    Route::put('personalData/{personalDataId}', 'PersonalDataController@update')->name('adminUpdatePersonalData');

                    Route::get('familyBackground/{familyBackgroundId}/edit', 'FamilyBackgroundController@edit')->name('adminEditFamilyBackground');
                });
            });
          Route::put('edit/{id}', 'EditStudentController@update')->name('adminEditRecordPut');
          Route::post('{id}', 'ManageStudentController@destroy')->name('adminDeleteRecord');
        });
    });
  });

  Route::middleware(['userAccess'])->group(function ()
  {

  });
});
