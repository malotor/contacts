<?php

use malotor\contacts\contact;

class ContactTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testCreateContact()
	{

    $id=0;
    $guid= "c029f59d-30ec-4c83-8245-eb085d77f134";
    $isActive= false;
    $balance= "$1,900.00";
    $picture= "http://placehold.it/32x32";
    $age= 29;
    $name= "Levy Shepard";
    $gender= "male";
    $company= "Myopium";
    $email= "levyshepard@myopium.com";
    $phone= "+1 (933) 565-3370";
    $address= "739 Fanchon Place, Knowlton, Tennessee, 1034";
    $about= "Duis nostrud sint voluptate culpa aliquip cillum pariatur dolor occaecat. Aliqua reprehenderit Lorem ipsum aute deserunt duis eiusmod consequat laborum nulla minim est. Commodo sint est et pariatur officia qui. Veniam consectetur enim duis veniam proident minim id. Qui irure labore occaecat sit in sint.\r\n";
    $registered= "1990-04-06T10:24:14 -02:00";
    $latitude= -64.633227;
    $longitude= 41.036127;

		$contact = new Contact();
    $contact->setId($id)
      ->setGuid($guid)
      ->setIsActive($isActive)
      ->setBalance($balance)
      ->setPicture($picture)
      ->setAge($age)
      ->setName($name)
      ->setGender($gender)
      ->setCompany($company)
      ->setEmail($email)
      ->setPhone($phone)
      ->setAddress($address)
      ->setAbout($about)
      ->setRegistered($registered)
      ->setLatitude($latitude)
      ->setLongitude($longitude);


    $this->assertEquals($contact->getId() , $id);
		$this->assertEquals($contact->getGuid() , $guid);
    $this->assertEquals($contact->getIsActive() , $isActive);
    $this->assertEquals($contact->getBalance() , $balance);
    $this->assertEquals($contact->getPicture() , $picture);
    $this->assertEquals($contact->getName(), $name);
    $this->assertEquals($contact->getGender() , $gender);
    $this->assertEquals($contact->getCompany() , $company);
    $this->assertEquals($contact->getEmail() , $email);
    $this->assertEquals($contact->getPhone() , $phone);
    $this->assertEquals($contact->getAddress() , $address);
    $this->assertEquals($contact->getAbout() , $about);
    $this->assertEquals($contact->getRegistered() , $registered);
    $this->assertEquals($contact->getLatitude() , $latitude);
    $this->assertEquals($contact->getLongitude() , $longitude);


	}

}
