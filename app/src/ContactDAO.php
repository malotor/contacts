<?php
/**
 * Created by PhpStorm.
 * User: manel
 * Date: 19/10/14
 * Time: 19:54
 */

namespace malotor\contacts;


class ContactDAO extends Singleton {
  protected $contacts;

  protected function __construct()
  {

    $file = base_path() . "/app/data/contactos.json";

    $JsonfileReader = new JsonFileReader($file);

    $contactsObject = $JsonfileReader->getContent();

    foreach($contactsObject as $contactObject) {

      $this->contacts[] = $this->createContact($contactObject);
    }

  }

  private function createContact($contactObject) {
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
      if ($contact->getGuid() == $guid) {
        return $contact;
      }
    }
  }

}