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
    return view('index');
});

Route::get('/index.html', function () {
    File::put(public_path() . '/static/index.html', view('index')->render());
    return view('index');
});

Route::get('/partners.html', function () {
    File::put(public_path() . '/static/partners.html', view('partners')->render());
    return view('partners');
});

Route::get('/service.html', function () {
    File::put(public_path() . '/static/service.html', view('service')->render());
    return view('service');
});

Route::get('/contacts.html', function () {
    File::put(public_path() . '/static/contacts.html', view('contacts')->render());
    return view('contacts');
});

Route::get('/ops.html', function () {
    File::put(public_path() . '/static/ops.html', view('ops')->render());
    return view('ops');
});

Route::get('/video.html', function () {
    File::put(public_path() . '/static/video.html', view('video')->render());
    return view('video');
});

Route::get('/skud.html', function () {
    File::put(public_path() . '/static/skud.html', view('skud')->render());
    return view('skud');
});

Route::get('/audit.html', function () {
    File::put(public_path() . '/static/audit.html', view('audit')->render());
    return view('audit');
});

Route::get('/to.html', function () {
    File::put(public_path() . '/static/to.html', view('to')->render());
    return view('to');
});

Route::get('/elektrowork.html', function () {
    File::put(public_path() . '/static/elektrowork.html', view('elektrowork')->render());
    return view('elektrowork');
});

Route::get('/aupt.html', function () {
    File::put(public_path() . '/static/aupt.html', view('aupt')->render());
    return view('aupt');
});

Route::get('/heatcount.html', function () {
    File::put(public_path() . '/static/heatcount.html', view('heatcount')->render());
    return view('heatcount');
});

Route::get('/conditioner.html', function () {
    File::put(public_path() . '/static/conditioner.html', view('conditioner')->render());
    return view('conditioner');
});

