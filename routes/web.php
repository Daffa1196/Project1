<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

route::get('/', [HomeController::class, 'index']);