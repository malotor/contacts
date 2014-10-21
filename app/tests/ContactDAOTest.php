<?php

use malotor\contacts\ContactDAO;


class ContactDAOTest extends TestCase {

  public function testGetContact()
  {
    $guid = 'c029f59d-30ec-4c83-8245-eb085d77f134';

    $contactDAO = ContactDAO::getInstance();

    $contact = $contactDAO->getContact($guid);

    $this->assertEquals( $contact->name, "Levy Shepard");

  }

  public function testGetAllContact()
  {

    $contactDAO = ContactDAO::getInstance();

    $contacts = $contactDAO->getAllContacts();

    $this->assertEquals( $contacts[0]->name, "Levy Shepard");
    $this->assertEquals( $contacts[1]->name, "Antonia Ferguson");
  }


  public function testGetSearchContactByName()
  {

    $contactDAO = ContactDAO::getInstance();

    $contacts = $contactDAO->searchByName("Levy Shepard");

    $this->assertEquals( $contacts[0]->name, "Levy Shepard");

  }

  public function testGetSearchContactByGender()
  {

    $contactDAO = ContactDAO::getInstance();

    $contacts = $contactDAO->searchByGender("male");

    $this->assertEquals( $contacts[0]->name, "Levy Shepard");
    $this->assertEquals( $contacts[1]->name, "Randall Blevins");


  }
}