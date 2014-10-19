<?php

use malotor\contacts\ContactDAO;


class ContactDAOTest extends TestCase {

  /**
   * A basic functional test example.
   *
   * @return void
   */
  public function testGetContact()
  {
    $guid = 'c029f59d-30ec-4c83-8245-eb085d77f134';

    $contactDAO = ContactDAO::getInstance();

    $contact = $contactDAO->getContact($guid);

    $this->assertEquals( $contact->getName(), "Levy Shepard");

  }
}