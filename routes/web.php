<?php

/*
 * Routes  --done
 * Model   -- done
 * Migration -- done
 * Controller -- done
 */

/*
 * Routes
 *
 *  1. Products
 *  2. cart
 *  3. add to cart
 *  4. remove from cart
 *
 */

Route::get('/', 'ProductController@index')->name('products');
Route::get('/cart', 'ProductController@cart')->name('cart');
Route::get('/add-to-cart/{product}', 'ProductController@addToCart')->name('add-cart');
Route::get('/remove/{id}', 'ProductController@removeFromCart')->name('remove');

Route::get('/change-qty/{product}', "ProductController@changeQty")->name('change_qty');

Route::post('/pay', 'PaymentController@pay')->name('pay');

Route::post('/indipay/response/success', 'PaymentController@response')->name('pay.response');
Route::post('/indipay/response/failure', 'PaymentController@response')->name('pay.response');


Route::get('payment-success', "PaymentController@paymentSuccess")->name("success.pay");
