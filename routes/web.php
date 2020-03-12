<?php


Route::get('/', function () {
    return view('custom_login');
});

// Route::get('dashboard','Admin\DashboardController@dashboard')->name('admin.dashboard');

//user route
Route::get('create-user','Admin\EmployeeController@createUser')->name('admin.create.user');
Route::get('user-info','Admin\EmployeeController@userInfo')->name('admin.info.user');
Route::get('resign-user','Admin\EmployeeController@resignUser')->name('admin.resign.user');
Route::get('terminate-user','Admin\EmployeeController@terminateUser')->name('admin.terminate.user');

//attendance route
Route::get('create-attendance','Admin\AttendenceController@createAttendance')->name('admin.create.attendance');
Route::get('attendance-info','Admin\AttendenceController@attendanceInfo')->name('admin.info.attendance');

//user-group route
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

//overtime route
Route::get('create-overtime','Admin\OvertimeController@createOvertime')->name('admin.create.overtime');
Route::get('overtime-info','Admin\OvertimeController@overtimeInfo')->name('admin.info.overtime');

//salary route
Route::get('create-salary','Admin\SalaryController@createSalary')->name('admin.create.salary');
Route::get('salary-info','Admin\SalaryController@salaryInfo')->name('admin.info.salary');

//salary route
Route::get('create-announcement','Admin\AnnouncementController@createAnnouncement')->name('admin.create.announcement');
Route::get('announcement-info','Admin\AnnouncementController@announcementInfo')->name('admin.info.announcement');

//role route
Route::get('create-role','Admin\RoleController@createRole')->name('admin.create.role');

//provident route
Route::get('provident_info','Admin\ProvidentFundController@providentInfo')->name('admin.info.provident');





// Auth::routes();
Auth::routes(['register' => false]);
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');

