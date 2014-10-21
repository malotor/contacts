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

    //330
    $contacts = $contactDAO->getAllContacts();

    $this->assertEquals( $contacts[0]->name, "Levy Shepard");
    $this->assertEquals( $contacts[1]->name, "Antonia Ferguson");
  }

  function testFindContact() {

    $contactDAO = ContactDAO::getInstance();

    $params = array(
      'name' => "Levy Shepard",
    );

    $contacts = $contactDAO->searchContacts($params);

    $this->assertEquals( $contacts[0]->name, "Levy Shepard");

    $params = array(
      'gender' => "male",
    );

    $contacts = $contactDAO->searchContacts($params);

    $this->assertEquals( $contacts[0]->name, "Levy Shepard");
    $this->assertEquals( $contacts[1]->name, "Randall Blevins");

    $params = array(
      'name' => "Levy Shepard",
      'gender' => "male",
    );

    $contacts = $contactDAO->searchContacts($params);

    $this->assertEquals( $contacts[0]->name, "Levy Shepard");
    $this->assertEquals( count($contacts), 1 );


    $params = array();

    $contacts = $contactDAO->searchContacts($params);

    $this->assertEquals( $contacts[0]->name, "Levy Shepard");
    $this->assertEquals( $contacts[329]->name, "Teresa Hayden");
    $this->assertEquals( count($contacts), 330 );


    $params = array(
      'name' => "Antonia Ferguson",
      'gender' => "male",
    );
    $contacts = $contactDAO->searchContacts($params);

    $this->assertEquals( count($contacts), 0);
  }
}