<?php

use malotor\contacts\JsonFileReader;

class JsonFileReaderTest extends TestCase {


  public function testReadAJsonFile()
  {

    $file = base_path() . "/app/tests/contacts.json";
    $JsonfileReader = new JsonFileReader($file);
    $contactList = $JsonfileReader->getContent();
    $contact = $contactList[0];
    $this->assertEquals( $contact->name , "Levy Shepard");
  }



}
