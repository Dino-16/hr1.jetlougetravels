<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login')->name('login');

/* * * Dashboard * * */
Route::view('/dashboard', 'human_resource.dashboard')->name('dashboard');

/* * * Recruitment Management * * */
Route::view('/open-requests', 'human_resource.rm.open-requests')->name('open-requests');
Route::view('/posting', 'human_resource.rm.posting')->name('posting');
Route::view('/referrals', 'human_resource.rm.referrals')->name('referrals');

/* * * Applicant Management * * */
Route::view('/applicant-applications', 'human_resource.am.applicants')->name('applicants');
Route::view('/filtered-pool', 'human_resource.am.filtered-pool')->name('filtered-pool');
Route::view('/interview-pipeline', 'human_resource.am.interview-pipeline')->name('interview-pipeline');
Route::view('/hiring-offer', 'human_resource.am.hiring-offer')->name('hiring-offer');
