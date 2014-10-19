<?php
/**
 * Created by PhpStorm.
 * User: manel
 * Date: 19/10/14
 * Time: 18:07
 */

namespace malotor\contacts;


/**
 * Class Contact
 *
 * @package malotor\contacts
 */
/**
 * Class Contact
 *
 * @package malotor\contacts
 */
class Contact {

  /**
   * @var
   */
  protected $id;
  /**
   * @var
   */
  protected $guid;
  /**
   * @var
   */
  protected $isActive;
  /**
   * @var
   */
  protected $balance;
  /**
   * @var
   */
  protected $picture;
  /**
   * @var
   */
  protected $age;
  /**
   * @var
   */
  protected $name;
  /**
   * @var
   */
  protected $gender;
  /**
   * @var
   */
  protected $company;
  /**
   * @var
   */
  protected $email;
  /**
   * @var
   */
  protected $phone;
  /**
   * @var
   */
  protected $address;
  /**
   * @var
   */
  protected $about;
  /**
   * @var
   */
  protected $registered;
  /**
   * @var
   */
  protected $latitude;
  /**
   * @var
   */
  protected $longitude;
  /**
   * @var
   */
  protected $tags;
  /**
   * @var
   */
  protected $friends;
  /**
   * @var
   */
  protected $randomArrayItem;

  /**
   * @param mixed $about
   */
  public function setAbout($about) {
    $this->about = $about;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getAbout() {
    return $this->about;
  }

  /**
   * @param mixed $address
   */
  public function setAddress($address) {
    $this->address = $address;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getAddress() {
    return $this->address;
  }

  /**
   * @param mixed $age
   */
  public function setAge($age) {
    $this->age = $age;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getAge() {
    return $this->age;
  }

  /**
   * @param mixed $balance
   */
  public function setBalance($balance) {
    $this->balance = $balance;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getBalance() {
    return $this->balance;
  }

  /**
   * @param mixed $company
   */
  public function setCompany($company) {
    $this->company = $company;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getCompany() {
    return $this->company;
  }

  /**
   * @param mixed $email
   */
  public function setEmail($email) {
    $this->email = $email;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * @param mixed $friends
   */
  public function setFriends($friends) {
    $this->friends = $friends;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getFriends() {
    return $this->friends;
  }

  /**
   * @param mixed $gender
   */
  public function setGender($gender) {
    $this->gender = $gender;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getGender() {
    return $this->gender;
  }

  /**
   * @param mixed $guid
   */
  public function setGuid($guid) {
    $this->guid = $guid;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getGuid() {
    return $this->guid;
  }

  /**
   * @param mixed $id
   */
  public function setId($id) {
    $this->id = $id;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @param mixed $isActive
   */
  public function setIsActive($isActive) {
    $this->isActive = $isActive;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getIsActive() {
    return $this->isActive;
  }

  /**
   * @param mixed $latitude
   */
  public function setLatitude($latitude) {
    $this->latitude = $latitude;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getLatitude() {
    return $this->latitude;
  }

  /**
   * @param mixed $longitude
   */
  public function setLongitude($longitude) {
    $this->longitude = $longitude;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getLongitude() {
    return $this->longitude;
  }

  /**
   * @param mixed $name
   */
  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param mixed $phone
   */
  public function setPhone($phone) {
    $this->phone = $phone;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getPhone() {
    return $this->phone;
  }

  /**
   * @param mixed $picture
   */
  public function setPicture($picture) {
    $this->picture = $picture;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getPicture() {
    return $this->picture;
  }

  /**
   * @param mixed $randomArrayItem
   */
  public function setRandomArrayItem($randomArrayItem) {
    $this->randomArrayItem = $randomArrayItem;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getRandomArrayItem() {
    return $this->randomArrayItem;
  }

  /**
   * @param mixed $registered
   */
  public function setRegistered($registered) {
    $this->registered = $registered;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getRegistered() {
    return $this->registered;
  }

  /**
   * @param mixed $tags
   */
  public function setTags($tags) {
    $this->tags = $tags;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getTags() {
    return $this->tags;
  }




} 