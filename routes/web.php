<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/run-migrations', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return '<h1>Database migrated successfully!</h1>';
    } catch (\Exception $e) {
        return '<h1>Migration Failed!</h1><pre>' . $e->getMessage() . '</pre>';
    }
});




// <?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/run-migrations', function () {
//     \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
//     return '<pre>' . \Illuminate\Support\Facades\Artisan::output() . '</pre>';
// });
