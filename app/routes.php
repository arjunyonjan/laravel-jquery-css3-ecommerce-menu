<?php


Route::get('/', function()
{

	$categories = Category::all();
	return View::make('index', compact('categories'));
});
