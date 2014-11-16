<?php
class test2 extends TestCase {
public function testGetvideo()
{
    $response = $this->call('GET', '/video');

    $this->assertResponseok();
}

public function testPostvideo(){
	 $response = $this->call('GET', '/video');

    $this->assertEquals($response->getContent(),$response->getContent());
}
}