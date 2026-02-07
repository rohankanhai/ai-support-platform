<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

Route::post('/ask', [QueryController::class, 'ask']);
