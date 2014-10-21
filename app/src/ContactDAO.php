<?php

namespace malotor\contacts;

abstract class Validation {

  abstract public function validate();
}

abstract class ValidationDecorator extends Validation {
  public function __construct($contactValidation, $value) {
    $this->contactValidation = $contactValidation;
    $this->value = $value;
  }
}

class ContactValidation extends Validation {

  public $contact;

  public function __construct($contact) {
    $this->contact = $contact;
  }
  public function validate() {
    return true;
  }
}

class ContactNameValidation extends ValidationDecorator {

  public function validate() {

    $validation = preg_match('/' . $this->value . '/', $this->contactValidation->contact->name);
    
    return $this->contactValidation->validate() &&  $validation ;
  }
}

class ContactGenderValidation extends ValidationDecorator {

  public function validate() {

    $validation = ($this->contactValidation->contact->gender == $this->value);

    return $this->contactValidation->validate() &&  $validation ;
  }
}

class ContactDAO extends Singleton {
  protected $contacts;

  protected function __construct()
  {
    //TODO decoupling file and FileReader. Service container
    $file = base_path() . "/app/data/contactos.json";
    $reader = new JsonFileReader($file);
    $this->contacts = $reader->getContent();

  }

  public function getContact($guid) {
    foreach($this->contacts as $contact) {
      if ($contact->guid == $guid) {
        return $contact;
      }
    }
  }

  public function getAllContacts() {
    return $this->contacts;
  }

  //Refactor
  public function searchContacts($search_params) {
    $result = array();
    foreach($this->contacts as $contact) {

      $contactValidation = new ContactValidation($contact);
      if (isset($search_params['name'])) $contactValidation = new ContactNameValidation($contactValidation, $search_params['name']);
      if (isset($search_params['gender'])) $contactValidation = new ContactGenderValidation($contactValidation, $search_params['gender']);

      var_dump($contact);
      var_dump($contactValidation->validate());

      if ($contactValidation->validate()) $result[] = $contact;
    }

    return $result;
  }
}