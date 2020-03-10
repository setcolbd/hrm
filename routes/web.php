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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('backend.admin.dashboard');
});

Route::get('dashboard','Admin\DashboardController@dashboard')->name('admin.dashboard');

//employee route
Route::get('create-employee','Admin\EmployeeController@createEmployee')->name('admin.create.employee');
Route::get('employee-info','Admin\EmployeeController@employeeInfo')->name('admin.info.employee');
Route::get('employee-resign','Admin\EmployeeController@resignEmployee')->name('admin.resign.employee');
Route::get('employee-terminate','Admin\EmployeeController@terminateEmployee')->name('admin.terminate.employee');

//attendance route
Route::get('create-attendance','Admin\AttendenceController@createAttendance')->name('admin.create.attendance');
Route::get('attendance-info','Admin\AttendenceController@attendanceInfo')->name('admin.info.attendance');

//user route
Route::get('user-group','Admin\UserController@userGroup')->name('admin.group.user');

//task route
Route::get('create-task','Admin\TaskAssignController@createTask')->name('admin.create.task');
Route::get('task-info','Admin\TaskAssignController@taskInfo')->name('admin.info.task');

//loan route
Route::get('create-loan-period','Admin\LoanController@loanPeriod')->name('admin.create.loanperiod');
Route::get('create-loan','Admin\LoanController@createLoan')->name('admin.create.loan');
Route::get('loan-info','Admin\LoanController@loanInfo')->name('admin.info.loan');

//job route
Route::get('create-candidate','Admin\JobController@createCandidate')->name('admin.create.candidate');
Route::get('candidate-info','Admin\JobController@candidateInfo')->name('admin.info.candidate');

//message route
Route::get('create-messagae','Admin\MessageController@createMessage')->name('admin.create.message');

//Leave route
Route::get('create-leave','Admin\LeaveController@createLeave')->name('admin.create.leave');
Route::get('leave-info','Admin\LeaveController@leaveInfo')->name('admin.info.leave');

//salary route
Route::get('create-salary','Admin\SalaryController@createSalary')->name('admin.create.salary');
Route::get('salary-info','Admin\SalaryController@salaryInfo')->name('admin.info.salary');


