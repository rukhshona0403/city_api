<?php

use App\Http\Controllers\Api\DeskController;
use Illuminate\Routing\Route;


Route::apiResources([
    'desks'=>DeskController::class,
]);

Route::get('/test', function() {
    return 'ok';
});