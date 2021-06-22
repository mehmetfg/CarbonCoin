<?php

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




/*Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('customer.transfer');
})->name('dashboard');*/

Route::middleware('auth')->group(function (){


Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('messages', App\Http\Controllers\MessageController::class);

Route::resource('tokens', App\Http\Controllers\TokenController::class);

Route::resource('vallets', App\Http\Controllers\ValletController::class);

Route::resource('powerStations', App\Http\Controllers\PowerStationController::class);

Route::resource('knowYourCustomers', App\Http\Controllers\KnowYourCustomerController::class);

Route::resource('transactions', App\Http\Controllers\TransactionController::class);
Route::get('/private-sale-page', [App\Http\Controllers\Customer\ValletTransactionController::class, 'create'])->name("transaction.customer");
Route::get('/transactions/customer/getUser', [App\Http\Controllers\Customer\ValletTransactionController::class, 'getUser'])->name("transaction.getUser");


Route::get('customer-vallets', [App\Http\Controllers\Customer\ValletTransactionController::class, 'index'])->name("customer-vallets.index");
    Route::get('customer-public-key-update', [App\Http\Controllers\CustomerController::class, 'updatePublicKey'])->name("customer.publickey.update");


Route::resource('dealers', App\Http\Controllers\DealerController::class);

Route::resource('partners', App\Http\Controllers\PartnerController::class);

Route::resource('annoncements', App\Http\Controllers\AnnoncementController::class);

Route::resource('powerStations', App\Http\Controllers\PowerStationController::class);

Route::resource('customers', App\Http\Controllers\CustomerController::class);


    Route::post("/impersonate-login", [App\Http\Controllers\UserController::class, 'impersonateLogin'])->name("impersonate.login");
    Route::get("/impersonate-leave", [App\Http\Controllers\UserController::class, 'impersonateLeave'])->name("impersonate.leave");
    Route::get("/partner/vallet-list", [App\Http\Controllers\Partner\ValletPowerStationController::class, 'index'])->name("partner.vallets.index");

    Route::get('transfer/{any}', function () {
        return view('customer.transfer');
    })->where('any', '.*');


});
Route::get("other/login", [App\Http\Controllers\LoginController::class, 'index'])->name("other.login");
Route::post("other/login", [App\Http\Controllers\LoginController::class, 'authenticate'])->name("other.login");

Route::get('/', function () {
    return view('customer.transfer');
})->where('any', '.*');
Route::post('transactions/customer/store', [App\Http\Controllers\TransactionController::class, 'storeJson'])->name("transaction.customer.store");
