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
    return view('welcome');
});

Route::get('create/job','JobController@showCreateForm')->name('showCreateJobForm');
Route::resource('jobs','JobController');
Route::resource('addresses','AddressController');
Route::post('company/create','CompanyController@createCompany')->name('company_create');
Route::get('companies/applicants','CompanyController@applicants')->name('applicants');
Route::get('companies/subscribers','CompanyController@subscribers')->name('subscribers');
Route::resource('companies','CompanyController');
Route::resource('documents','DocumentController');
Route::resource('groups','GroupController');
Route::resource('roles','RoleController');
Route::get('groups/create','GroupController@create')->name('new_group');
Route::resource('subgroups','SubGroupController');
Route::get('subgroups/create','SubGroupController@create')
->name('new_sub_group');
Route::resource('applications','ApplicationController');
Route::get('companies/create','CompanyController@create')->name('showCreateCompanyForm');

Route::get('userHasApplied/{id}','JobController@userHasApplied');


Auth::routes();
Route::get('group/list','GroupController@groupList')->name('group-list');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/apply/job/{job}', 'JobController@apply')->name('apply');
Route::get('applications', 'JobController@applications')->name('apply');
Route::get('subscriptions','UserController@subscriptions');
Route::get('uers/create','UserController@create')->name('make_user');
Route::get('uers/profile','UserController@profile')->name('profile_user');
Route::resource('users','UserController');
Route::get('subscribe/{company}','UserController@subscribe')->name('subscribe');
Route::get('skills/list','SkillController@skills');
Route::post('skills/add','UserController@addSkills');
Route::resource('skills','SkillController');


