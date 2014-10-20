<?php

namespace malotor\contacts;

class ContactDAO extends Singleton {
  protected $contacts;

  protected function __construct()
  {
    //TODO decoupling file and FileReader. Service container
    $file = base_path() . "/app/data/contactos.json";

    $JsonfileReader = new JsonFileReader($file);

    $this->contacts = $JsonfileReader->getContent();

  }

  private function createContactFromObject($contactObject) {
    $contact = new Contact();

    $contact->setId($contactObject->id)
      ->setGuid($contactObject->guid)
      ->setIsActive($contactObject->isActive)
      ->setBalance($contactObject->balance)
      ->setPicture($contactObject->picture)
      ->setAge($contactObject->age)
      ->setName($contactObject->name)
      ->setGender($contactObject->gender)
      ->setCompany($contactObject->company)
      ->setEmail($contactObject->email)
      ->setPhone($contactObject->phone)
      ->setAddress($contactObject->address)
      ->setAbout($contactObject->about)
      ->setRegistered($contactObject->registered)
      ->setLatitude($contactObject->latitude)
      ->setLongitude($contactObject->longitude);

    return $contact;
  }

  public function getContact($guid) {
    foreach($this->contacts as $contact) {
      if ($contact->guid == $guid) {
        return $this->createContactFromObject($contact);
      }
    }
  }

  public function getAllContacts() {
    $result = array();
    foreach($this->contacts as $contact) {
      $result[] = $this->createContactFromObject($contact);
    }
    return $result;
  }

  //TODO Single responsibility. Search must be in another "repository" class
  //TODO duplicate code refactor
  public function searchByName($name) {
    $result = array();
    foreach($this->contacts as $contact) {
      if (preg_match('/'.$name.'/',$contact->name)) {

        $result[] = $this->createContactFromObject($contact);
      }
    }
    return $result;
  }

  public function searchByGender($gender) {
    $result = array();
    foreach($this->contacts as $contact) {
      if ($contact->gender == $gender ) {
        $result[] = $this->createContactFromObject($contact);
      }
    }
    return $result;
  }

}