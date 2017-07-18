<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*
-------------------------
----- suppliers API -----
-------------------------
*/

$app->get('/api/supplier', 'SupplierController@getSuppliers');

$app->get('/api/supplier/{supplier_id}', 'SupplierController@getSuppliersByCategory');

$app->post('/api/supplier', 'SupplierController@postSupplier');


/*
----------------------------
----- testimonials API -----
----------------------------
*/

$app->get('/api/testimonials', 'TestimonialsController@getTestimonials');
$app->get('/api/testimonials/{supplier_id}', 'TestimonialsController@getTestimonialsBySupplier');
