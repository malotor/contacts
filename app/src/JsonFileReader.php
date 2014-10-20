<?php
/**
 * Created by PhpStorm.
 * User: manel
 * Date: 19/10/14
 * Time: 20:02
 */

namespace malotor\contacts;

//Todo rename. Better JsonParser.
class JsonFileReader extends FileReader {

  public function getContent() {
    $rawContent = parent::getContent();
    return json_decode($rawContent);
  }

} 