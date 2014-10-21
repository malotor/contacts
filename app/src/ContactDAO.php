<?php

namespace malotor\contacts;


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
      $allChecksPass = true;
      foreach($search_params as $param_key => $param_value) {

        if ($contact->{$param_key} != $param_value ) {
          $allChecksPass = false;
        }
      }
      if ($allChecksPass) $result[] = $contact;

    }
    return $result;
  }
}