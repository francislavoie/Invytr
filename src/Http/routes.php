<?php

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
|
| Routes for Invytr
|
|
*/

Route::get('password/set/{token}', 'GlaivePro\Invytr\Http\Controller@showSetForm')
     ->name('password.set')
     ->middleware(['web', 'guest']);
