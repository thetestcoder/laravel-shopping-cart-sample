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
