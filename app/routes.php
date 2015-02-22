<?php 

$app->get('/home/:name', function ($name) use ($app) { 

	(new Home())->index($name); 

})->name('home');