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

Route::get('contact_detail/{guid}', function($guid = null)
{

  $contactDAO = ContactDAO::getInstance();

  $contact = $contactDAO->getContact($guid);

  return View::make('contact_detail',  array('contact' => $contact));

});


Route::post('search', function()
{
  $search_params = array();

  if ( Input::get('name') !='' ) $search_params['name'] =  Input::get('name');
  if ( Input::get('gender') !='' ) $search_params['gender'] =  Input::get('gender');

  $contactDAO = ContactDAO::getInstance();

  $contacts = $contactDAO->searchContacts($search_params);


  return (array) $contacts;

});
