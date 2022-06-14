<?php

use App\Solid\AreaCalculator;
use App\Solid\Circle;
use App\Solid\PaymentService;
use App\Solid\PaypalPaymentMethod;
use App\Solid\Rectangle;
use App\Solid\StripePaymentMethod;
use App\Solid\Triangle;
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

    // return (new AreaCalculator())->totalArea(
    //     new Rectangle(10, 20),
    //     new Rectangle(20, 20),
    //     new Circle(10),
    //     new Triangle(20, 30),
    // );


    // return (new PaymentService())->pay(new StripePaymentMethod());
    return (new PaymentService())->pay(new PaypalPaymentMethod());
});
