<?php
/**
 * Created by PhpStorm.
 * User: manel
 * Date: 19/10/14
 * Time: 19:49
 */

namespace malotor\contacts;


class FileReader {
  protected $file;
  public function __construct($file) {
    $this->file = $file;
  }
  public function getContent() {
    return file_get_contents($this->file);
  }
} 