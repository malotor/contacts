<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

use malotor\contacts\ContactDAO;

Route::get('/', function()
{

  $contactDAO = ContactDAO::getInstance();

  $contacts = $contactDAO->getAllContacts();

  return View::make('frontpage',  array('contacts' => $contacts));

});
