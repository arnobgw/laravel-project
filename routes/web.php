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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/company', 'CompanyController@setupCompany')->name('company');
Route::post('/company', 'CompanyController@setupCompanyStore')->name('company.store');

Route::get('/section', 'SectionController@setupSection')->name('section');
Route::post('/section', 'SectionController@setupSectionStore')->name('section.store');

Route::get('/wdaysholidays', 'WorkingDaysHolidaysController@setupWorkingDaysHolidays')->name('wdaysholidays');
Route::post('/wdaysholidays', 'WorkingDaysHolidaysController@setupWorkingDaysHolidaysStore')->name('wdaysholidays.store');

Route::get('/designation', 'DesignationController@setupDesignation')->name('designation');
Route::post('/designation', 'DesignationController@setupDesignationStore')->name('designation.store');

Route::get('/department', 'DepartmentController@setupDepartment')->name('department');
Route::post('/department', 'DepartmentController@setupDepartmentStore')->name('department.store');

Route::get('/sdepartment', 'SubDepartmentController@setupSubDepartment')->name('sdepartment');
Route::post('/sdepartment', 'SubDepartmentController@setupSubDepartmentStore')->name('sdepartment.store');

Route::get('/otstatus', 'OTStatusController@setupOTStatus')->name('otstatus');
Route::post('/otstatus', 'OTStatusController@setupOTStatusStore')->name('otstatus.store');

Route::get('/pscale', 'PayScaleController@setupPayScale')->name('pscale');
Route::post('/pscale', 'PayScaleController@setupPayScaleStore')->name('pscale.store');

Route::get('/empcatagory', 'EmployeeCatagoryController@setupEmployeeCatagory')->name('empcatagory');
Route::post('/empcatagory', 'EmployeeCatagoryController@setupEmployeeCatagoryStore')->name('empcatagory.store');

Route::get('/religion', 'ReligionController@setupReligion')->name('religion');
Route::post('/religion', 'ReligionController@setupReligionStore')->name('religion.store');

Route::get('/educatagory', 'EducationCatagoryController@setupEducationCatagory')->name('educatagory');
Route::post('/educatagory', 'EducationCatagoryController@setupEducationCatagoryStore')->name('educatagory.store');

Route::get('/wexperience', 'WorkingExperienceController@setupWorkingExperience')->name('wexperience');
Route::post('/wexperience', 'WorkingExperienceController@setupWorkingExperienceStore')->name('wexperience.store');

Route::get('/sex', 'SexController@setupSex')->name('sex');
Route::post('/sex', 'SexController@setupSexStore')->name('sex.store');

Route::get('/employee', 'PagesController@setupEmployee')->name('employee');
