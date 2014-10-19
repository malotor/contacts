<?php

use malotor\contacts\FileReader;

class FileReaderTest extends TestCase {


	public function testReadAFile()
	{

    $file = base_path() . "/app/tests/test.txt";
    $fileReader = new FileReader($file);

    $content = $fileReader->getContent();


    $this->assertEquals( $content , "Lorem Ipsum");


	}



}
