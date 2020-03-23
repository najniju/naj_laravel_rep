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

Route::get('/', function () {
    return view('welcome');
});

Route::view('adreginsert','admin.adreginsert');
Route::post('Adminreg','Con_school@Adminreg');
Route::get('Sess1','Con_school@Sess1');
Route::view('adminlogin','admin.adminlogin');
Route::post('Adminlog','Con_school@Adminlog');
Route::post('AdminLogout','Con_school@AdminLogout');
//change user name
Route::get('Changeun/{id}','Con_school@Changeun');
Route::post('UserUpd/{id}','Con_school@UserUpd');
//change password
Route::get('Changepw/{id}','Con_school@Changepw');
Route::post('PwUpd/{id}','Con_school@PwUpd');
//add department
Route::view('deptinsert','admin.deptinsert');
Route::post('DeptAdd','Con_school@DeptAdd');
//back to home page
Route::post('BackHome','Con_school@BackHome');
Route::post('Changepw/BackHome2','Con_school@BackHome2');
Route::post('Changeun/BackHome3','Con_school@BackHome3');

//staff registration
// Route::view('staffreg','staff.staffreg');
// dept selectionbox
Route::get('Deptsel','Con_school@Deptsel');
//staff data insert
Route::post('Staffinsert','Con_school@Staffinsert');
//staff home

//existing staff login
Route::view('stafflogin','staff.stafflogin');
Route::post('Stafflog','Con_school@Stafflog');
Route::get('Sess2','Con_school@Sess2');
//staff logout
Route::post('StaffLogout','Con_school@StaffLogout');
// student insert
Route::post('Studentinsert/{staff_id}','Con_school@Studentinsert');










