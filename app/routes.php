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

  //Todo if guid null musth thow exception
  $contact = $contactDAO->getContact($guid);

  return View::make('contact_detail',  array('contact' => $contact));

});


Route::post('search_name', function()
{

  $name = Input::get('name');
  $contacts = array();

  if ($name) {
    $contactDAO = ContactDAO::getInstance();
    //Todo if guid null musth thow exception
    $contacts = $contactDAO->searchByName($name);
  }

  return (array) $contacts;

});

Route::post('search_gender', function()
{

  $gender = Input::get('gender');
  $contacts = array();

  if ($gender) {
    $contactDAO = ContactDAO::getInstance();
    $contacts = $contactDAO->searchByGender($gender);
  }

  return (array) $contacts;

});